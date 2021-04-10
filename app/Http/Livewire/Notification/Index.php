<?php

namespace App\Http\Livewire\Notification;

use Livewire\Component;
use App\Models\Notification\Notification;
use App\Traits\WhatsappNotificationsTrait;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
	use WhatsappNotificationsTrait;

    public function render()
    {
     	$notifications = Notification::with('countries')
                        ->orderBy('created_at', 'ASC')
                        ->paginate(10);
        return view('livewire.notification.index',compact('notifications'));
    }

    public function send($id)
    {
        $notification = Notification::with('countries')->findOrfail($id);
    	$phone_number = substr($notification->countries->phone_code, 1) . $notification->phone_number;
        $notif = array(
            'img'      => 'https://d1hdtc0tbqeghx.cloudfront.net/wp-content/uploads/2020/07/27141257/laravel-livewire.jpg',
            'filename' => 'laravel-livewire.jpg',
            'phone'    => $phone_number,
            'caption'  => $notification->text_body
        );
        $this->WhatsappNotifications($notif);
        $notification->update(['status' => 1]);
    }
}
