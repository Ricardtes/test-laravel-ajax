<?php

namespace App\Services\ProfileAddresses;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use App\Models\ProfileAddress;

class ProfileAddressService
{

    public function getAllById($userProfileId)
    {

        return ProfileAddress::where('user_profile_id', $userProfileId)->orderby('name', 'ASC')->get();
    }

    public function store($data)
    {
        return ProfileAddress::create($data);

    }

    public function setSymbolsToAddress($profileAddresses)
    {
        $profileAddresses->map(function ($address){
            $arr = [$address->city->label , $address->area->label, $address->street, $address->house_number];
            $new_arr = array_diff($arr, array('', NULL));
            $address->profile_address = implode(', ', $new_arr);
        });

        return $profileAddresses;

    }

    public function destroy(int $profileAddressId)
    {
        ProfileAddress::find($profileAddressId)->delete();

    }

}
