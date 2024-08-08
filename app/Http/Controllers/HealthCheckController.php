<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HealthCheckController extends BaseController
{
    public function check()
    {
        return response()->json(['status' => 'ok'], 200);
    }
}
