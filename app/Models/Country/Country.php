<?php

namespace App\Models\Country;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'capital',
        'phone_code',
        'flag'
    ];

    public function notifications(){
        return $this->hasOne('App\Models\Notification\Notification');
    }
}
