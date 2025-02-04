<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    // SEO Get Data
    public function page(Request $request)
    {
        return view('Contact');
    }

    // Contact Form Post Data
    public function contactRequest(Request $request)
    {

        return DB::table('contact')->$request->input();
    }
}
