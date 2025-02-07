<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    // SEO Get Data
    public function page(Request $request)
    {

        $contactsFormData = DB::table('contacts')->get();
        return view('Contact', compact('contactsFormData'));
    }

    // Contact Form Post Data
    public function contactRequest(Request $request)
    {
        // dd($request->all());
        // return DB::table('contacts')->insert($request->input());
        //  DB::table('contacts')->insert($request->input());

        //  return redirect()->back(); // return same page


        $name = $request->fullName;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;

        DB::table('contacts')->insert([
            'fullName' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message
        ]);




        return redirect()->route('home');

        // return DB::table('contacts')->$request->input();

    }


    public function deleteContactData(Request $request)
    {
        // return DB::table('contacts')->get();

        // dd($request->id);

        DB::table('contacts')->where('id', $request->id)->delete();

        return redirect()->back()->with('success', 'Delete Successfully');
    }

    public function getContactOneData(Request $request)
    {


        // $oneUserData = DB::table('contacts')->where('id', $request->id)->get();
        $oneUserData = DB::table('contacts')->where('id', $request->id)->first();

        // dd($oneUserData);

        return view('ContactUpdate', compact('oneUserData'));
    }


    public function putContactDataUpdate(Request $request)
    {
        // dd($request);

        DB::table('contacts')->where('id', $request->id)->update([
            'fullName'=> $request->fullName,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'message'=> $request->message,
        ]);

        return redirect()->route('contact')->with('update', 'successfully update data');
    }
}
