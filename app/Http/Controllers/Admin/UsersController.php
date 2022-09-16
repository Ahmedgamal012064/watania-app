<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $users = User::where('type','!=','admin')->where('id','!=',Auth::id())->get();
        return view('admin.users.index',compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'       => 'required',
            'email'      => 'required|email|unique:users,email',
            'password'      => 'required',
            'roles.*'      => 'required',
        ]);

        if ($validator->fails()) {
            flasher('حدث خطا حاول مرة اخري','error');
            return redirect( route('admin.users.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        User::create([
            'name'       => $request->name,
            'email'      => $request->email,
            "type"       => "user" ,
            "password" =>  Hash::make($request->password),
            'roles'    => implode(',',$request->roles)
        ]);

        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.users')->with(["success","success"]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit',compact('user'));
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'name'       => 'required',
            'email'      => 'required|email|unique:users,email,'.$id,
            'roles.*'      => 'required',
        ]);

        if ($validator->fails()) {
            flasher('حدث خطا حاول مرة اخري','error');
            return redirect( route('admin.users.edit',$id))
                        ->withErrors($validator)
                        ->withInput();
        }

        if($request->has('password')){
            User::where('id',$id)
                ->update([
                    'password' => Hash::make($request->password),
                ]);
        }

        User::where('id', $id)->update([
            'name'       => $request->name,
            'email'      => $request->email,
            'roles'    => implode(',',$request->roles)
        ]);

        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.users')->with(["success","success"]);
    }
}
