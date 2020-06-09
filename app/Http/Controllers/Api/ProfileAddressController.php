<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UserAdressRequest;
use App\Services\ProfileAddresses\ProfileAddressService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ProfileAddressController extends Controller
{


    /**
     * @var ProfileAddressService
     *
     */
    private $profileAddressService;

    public function __construct(ProfileAddressService $profileAddressService)
    {
        $this->profileAddressService = $profileAddressService;

    }

    public function store(UserAdressRequest $request)
    {

        return response()->json([
            'result' => $this->profileAddressService->store($request->all()),
            'msg' => 'Address has been created'
        ]);
    }

    public function getAllById($userProfileId )
    {
        $profileAddresses = $this->profileAddressService->getAllById($userProfileId);

        return new JsonResponse([
            'result' => 'ok',
            'html' => view('user-address.partials.address-list',
                ['profile_addresses' => $this->profileAddressService->setSymbolsToAddress($profileAddresses)])
                ->render()
        ]);
    }

    public function destroy(int $profileAddressId)
    {

        $this->profileAddressService->destroy($profileAddressId);

        return new JsonResponse([
                'result' => 'ok',
                'msg' => 'Address removed']);
    }

}
