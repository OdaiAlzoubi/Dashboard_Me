<?php

namespace App\Http\Controllers\Statistic;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Models\Course\Course;
use App\Models\Course\Enroll;
use App\Models\Product\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StatisticControllers extends Controller
{
    //
    public function userCount()
    {

        $date = date('Y-m-d', strtotime("-28 days"));
        // Statistics User
        $userCountDate = User::where('deleted_at', '=', '0')->where('create_date', '>', $date)->count();
        $joinCoursesCountDate = Enroll::where('enroll_date', '>', $date)->count();

        // Statistics Product
        $productCount = Product::where('deleted_at', '=', '0')->count();
        $productCountDate = Product::where('deleted_at', '=', '0')->where('product_date', '>', $date)->count();
        $userRandom = User::where('deleted_at', '=', '0')->inRandomOrder('id')->limit(5)->get();
        //
        $products = Product::inRandomOrder('id')->limit(5)->get();
        // dd($userCountDate);


        // Graphical
        $userData = User::select(DB::raw("COUNT(*) as count"))
            ->whereYear('create_date', date('Y'))
            ->groupBy(DB::raw("Month(create_date)"))
            ->pluck('count');



        return view('dashboard', compact(
            'userCountDate', 'productCountDate','joinCoursesCountDate' ,
            'products', 'userRandom',
            'userData'
        ));
    }


    protected function getUser()
    {
        $userRandom = User::where('deleted_at', '=', '0')->inRandomOrder('id')->limit(5)->get();
        return $userRandom;
    }
}
