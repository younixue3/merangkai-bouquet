<?php

namespace App\Http\Controllers\Notification;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\Request;
use Mockery\Matcher\Not;

class DataNotificationController extends Controller
{
    public function get_data()
    {
        if (auth()->user()->role == 'user') {
            $notification = Notification::where('reciever_id', auth()->user()->id)->paginate(20);
        } else {
            $notification = Notification::where('reciever_id', null)->paginate(20);
        }
        $compact = compact('notification');
        return $compact;
    }

    public function store_data($request)
    {
        $notification = Notification::create([
            'sender_id' => $request->sender_id,
            'reciever_id' => $request->reciever_id,
            'message' => $request->message,
        ]);

        return $notification;
    }

    public function show_data($id)
    {
        $notification = Notification::findOrFail($id);
        $compact = compact('notification');

        return $compact;
    }

    public function update_data($request, $id)
    {
        $notification = Notification::findOrFail($id);

        $notification->update([
            'status' => 2
        ]);

        return $notification;
    }

    public function destroy_data($id)
    {
        $notification = Notification::findOrFail($id)->delete();
        $compact = compact('notification');

        return $compact;
    }
}
