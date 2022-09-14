<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $services = Cat::get();
        return view('admin.services.index',compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name_en'          => 'required',
            'name_fr'          => 'required',
            'photo'            => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            toastr()->error('some thing wrong try again');
            return redirect( route('admin.services.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $filePath = '';
        if ($request->has('photo')) {
            $filePath = uploadImage('cats', $request->photo);
        }

        Cat::create([
            'name_en'          => $request->name_en,
            'name_fr'          => $request->name_fr,
            'photo'            => $filePath ,
        ]);

        toastr()->success('Success');
        return redirect()->route('admin.services')->with(["success","Success"]);
    }


    public function edit($id)
    {
        $service = Cat::find($id);
        return view('admin.services.edit',compact('service'));
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'name_en'          => 'required',
            'name_fr'          => 'required',
            'photo'            => 'required_without:id|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            toastr()->error('some thing wrong try again');
            return redirect( route('admin.services.edit',$id))
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->has('photo')) {
            $filePath = uploadImage('cats', $request->photo);
            Cat::where('id', $id)->update([
                'photo'   =>  $filePath
            ]);

        }

        Cat::where('id', $id)->update([
            'name_en'          => $request->name_en,
            'name_fr'          => $request->name_fr,
        ]);

        toastr()->success('Success');
        return redirect()->route('admin.services')->with(["success","Success"]);
    }

    public function destroy($id)
    {
        $cat = Cat::find($id);
        $cat->update([
            'status'   => 0
        ]);
        toastr()->success('Success');
        return redirect()->route('admin.services')->with(["success","Success"]);
    }
}
