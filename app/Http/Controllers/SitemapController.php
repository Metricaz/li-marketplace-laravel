<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class SitemapController extends BaseController
{
    public function index(Request $request)
    {
        $xml = File::get(storage_path('app/public'.$request->getRequestUri()));

        return response($xml, 200)
            ->header('Content-Type', 'application/xml');
    }
}