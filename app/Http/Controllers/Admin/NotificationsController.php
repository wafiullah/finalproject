<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Notification;
use App\User;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
    }

    // public function notifications(Request $request)
    // {
    //     $user = auth()->user();

    //     $query = $user->unreadnotifications()->whereDate('created_at', '>=', date('Y-m-d', strtotime('-2 days')));

    //     // $limit = (int) $request->input('limit', 0);
    //     // if ($limit) {
    //     //     $query = $query->limit($limit);
    //     // }

    //     $notifications = $query->get()->each(function ($n) {
    //         $n->created = $n->created_at->toIso8601String();
    //     });
    //     $total = $user->unreadnotifications()->whereDate('created_at', '>=', date('Y-m-d', strtotime('-2 days')))->count();

    //     return compact('notifications', 'total');
    // }

    /**
     * Mark user's notification as read.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function markAsRead(Request $request, $id, $invoiceId)
    {
        $user = auth()->user();

        $notification = $user->unreadNotifications()
            ->where('id', $id)
            ->first();

        if (is_null($notification)) {
            return response()->json('Notification not found.', 404);
        }

        $notification->markAsRead();

        return redirect()->route('admin.orders.show', $invoiceId);
    }

    /**
     * Mark all user's notifications as read.
     *
     * @return \Illuminate\Http\Response
     */
    public function markAllRead(Request $request)
    {
        $user = auth()->user();
        $user->unreadNotifications()
            ->get()->each(function ($n) {
                $n->markAsRead();
            });
    }
}
