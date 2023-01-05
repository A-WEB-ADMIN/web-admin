<?php

namespace App\Http\Controllers\Push;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PushController extends Controller
{

    /*=====================================================
    =
    = 1.
    =
    ======================================================*/
    public function get_notifications()
    {
        $notifications = auth()->user()->unreadNotifications;

        return response()->json([
            "notifications" => $notifications
        ]);
    }
    /*=====================================================
    =
    = 2.
    =
    ======================================================*/
    public function mark_all_reading($user_id)
    {
        $user = User::find($user_id);

        $user->unreadNotifications->markAsRead();

        return response()->json([
            "result" => "OK"
        ]);
    }

}
