<?php

namespace App\Http\Controllers\Notification;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Models\Product\Product;
use App\Models\Course\ReportVideo;
use Illuminate\Http\Request;

class NotificationUserController extends Controller
{
    //
    public function addUser()
    {
        $users = User::whereNull('deleted_at')->where('email_validate','=','1')->latest(
            'id'
        )->paginate(10);
        $count = 0;
        return view('notification.user', compact('users', 'count'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    //
    // public function getNotitificationCount()
    // {
    //     $count = User::whereNull('deleted_at')->where('email_validate','=','1')->count();
    //     // $countProduct = Product::whereNull('deleted_at')->count();
    //     // $countReport = ReportVideo::whereNull('')->count();
    //     // $count = $countUser + $countProduct + $countReport ;
    //     return response()->json([
    //         'status' => 200,
    //         'count' => $count,
    //         'data' => $count,
    //     ]);
    // }

    public function getNotitificationCount()
    {
        $count = User::whereNull('deleted_at')->where('email_validate','=','1')->count();

        return response()->json([
            'status' => 200,
            'count' => $count,
            'data' => $count,
        ]);
    }

    //
    public function userAcceptance($id)
    {
        $user = User::where('id', '=', $id)->first();
        $user->deleted_at = 0;
        $user->update();
        return redirect()->back();
    }

    //
    public function userRefused($id)
    {
        $user = User::where('id', '=', $id)->first();
        $user->deleted_at = 1;
        $user->update();
        return redirect()->back();
    }
}
