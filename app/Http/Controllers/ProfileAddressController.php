<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\City;
use Illuminate\Http\Request;

class ProfileAddressController extends Controller
{

    public function index()
    {
        $cities = City::all();
        $areas = Area::all();

        return view('user-address.index', compact('cities', 'areas'));
    }
}
