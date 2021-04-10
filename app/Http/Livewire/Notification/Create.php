<?php

namespace App\Http\Livewire\Notification;

use Livewire\Component;
use App\Models\Country\Country;
use App\Models\Notification\Notification;

class Create extends Component
{

	public $countries, $country_id, $phone_number, $text_body;

    public function render()
    {
        return view('livewire.notification.create');
    }

    public function mount()
    {
        $this->countries = Country::orderBy('name','ASC')->get();
    }

    public function save()
    {
        $this->validate([
            'country_id'   => 'required|integer|exists:countries,id',
            'phone_number' => 'required|string|unique:notifications',
            'text_body'    => 'required|min:10',
        ]);
    	$notification = Notification::create([
    		'country_id'   => $this->country_id,
            'phone_number' => $this->phone_number,
            'text_body'    => $this->text_body
    	]);
    	return redirect()->route('notification.index');
    }
}
