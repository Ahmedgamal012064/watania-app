<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function editprofile()
    {
        return view('editprofile');

    }

    public function updateprofile($id , Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:users,name,'.$request -> id,
            'email' => 'required|email|unique:users,email,'.$request -> id,
        ]);

        if ($validator->fails()) {
            return redirect(route('admin.editprofile'))
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->has('password')) {
            $password = $request->password;
        }

        User::where('id',$id)->update([
            "name"      => $request->name ,
            "email"     => $request->email,
            "password"  => isset($password) ? bcrypt($password)  : Auth::user()->password ,
        ]);
        toastr()->success('Success');
        return redirect()->route('admin.editprofile');
    }

}
