<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.index');
    }

    //Login Check
    public function login(Request $request)
    {
        $this->validate($request,[
            'user' => 'required|exists:users,user',
            'password' => 'required'
        ]);

        if(Auth::attempt(['user' => $request->user, 'password' => $request->password, 'role' => 1]))
        {
            return redirect()->route('adminDashboard');
        }
        return redirect()->back()->with('error','Wrong Credentials');
    }
}
