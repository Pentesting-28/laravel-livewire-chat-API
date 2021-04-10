<?php

namespace App\Models\Notification;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
    	'country_id',
    	'phone_number',
    	'text_body',
    	'status'
    ];

    public function countries() {
        return $this->belongsTo('App\Models\Country\Country','country_id');
    }
}
