<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileAddress extends Model
{
    protected $fillable = [
        'user_profile_id',
        'name',
        'city_id',
        'area_id',
        'street',
        'house_number',
        'additional_info'
    ];



    public function city()
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }

    public function area()
    {
        return $this->hasOne(Area::class, 'id', 'area_id');
    }
}
