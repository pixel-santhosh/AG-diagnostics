<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Banners;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banners::get();
        return response()->json(['banner'=>$banner]);
    }
}
