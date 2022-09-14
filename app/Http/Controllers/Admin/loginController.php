<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class loginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;
        $password= $request->input('password');

        if (Auth::guard('admin')->attempt(['email' => $request->input('email') , 'password'=> $password] , $remember_me)) {
            toastr()->success('Success');
            // return redirect(RouteServiceProvider::ADMIN);
            return redirect()->route('admin.dashboard');
        }
        toastr()->error('Data Wrong');
        return redirect()->route('admin.login')->with(['error' => 'Data Wrong']);
    }
}
