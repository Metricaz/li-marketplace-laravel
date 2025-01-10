<?php

namespace App\Helpers;

use Illuminate\Http\Request;

class RequestUserBrandHelper
{
    public function getUserBrand($request)
    {
        $userBrand = $request->get('brand');
        $filterBrands = [
            'levis',
            'sawary',
            'biotipo',
            'hering',
        ];

        if ($userBrand) {
            foreach ($filterBrands as $key => $value) {
                if (($arrayKey = array_search($value, $userBrand)) !== false) {
                    unset($userBrand[$arrayKey]);
                }
            }
        }

        return collect($userBrand)->first();
    }
}