<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    // Show Login Page 
    public function userLoginPage()
    {
        return view('pages.login-page');
    }
    // User Create
    public function userRegistration(Request $request)
    {
        try {
            $data = User::updateOrCreate(
                ['email' => $request->email],
                [
                    'name' => $request->name,
                    'roll' => $request->roll,
                    'password' => Hash::make($request->password),
                ]
            );
            // dd("data: ",$data);
            return redirect()->with('success', 'User Create Successfully!');
        } catch (\Exception $e) {
            // dd($e->getMessage());
            return redirect()->with('error', 'Some Thing Went Wrong!');
        }
    }

    public function userLoginCheck(Request $request)
    {
        // dd($request);
        $user_email = $request->email;
        $user_password = $request->password;

        $userData = User::where('email', $user_email)->first();
        if (Hash::check($user_password, $userData->password)) {
            return redirect()->route('admin.dashboard')->with('success', 'User Successfully Login');
        } else {
            return redirect()->back()->with('error', 'Some thing wrong! Try Again');
        }
    }
}
