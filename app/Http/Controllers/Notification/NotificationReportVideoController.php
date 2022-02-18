<?php

namespace App\Http\Controllers\Notification;

use App\Http\Controllers\Controller;
use App\Models\Course\ReportVideo;
use App\Models\Course\Video;
use App\Models\User\User;
use Illuminate\Http\Request;

class NotificationReportVideoController extends Controller
{
    public function report()
    {


        $reportVideo = ReportVideo::where('deleted_at', '=', 1)->latest(
            'id_user',
            'id_video',
            'message'
        )->paginate(10);

        $count = 0;
        return view('notification.reportVideo', compact('reportVideo', 'count'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function red(Request $request)
    {
        $reportVideo = ReportVideo::where('id_user', '=', $request->user_id)->where('id_video', '=', $request->video_id)->first();
        $reportVideo->deleted_at = 0;
        $reportVideo->save();
        return redirect()->back();
    }
}
