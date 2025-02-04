<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    // SEO Get Data
    public function page(Request $request)
    {

        return view('Home');
    }
    // Here Section Get Data
    public function hereData(Request $request)
    {
        return DB::table('heroproperties')->get();
    }
    // About Section Get Data
    public function aboutData(Request $request) {}
    // Social Links Get Data
    public function socialData(Request $request) {}
}
