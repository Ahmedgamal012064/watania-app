<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Driver;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class DriverController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $drivers = Driver::get();
        return view('admin.drivers.index',compact('drivers'));
    }

    public function withoutcar()
    {
        $drivers = Driver::where('car_id',0)->get();
        return view('admin.drivers.withoutcar',compact('drivers'));
    }


    public function withcar()
    {
        $drivers = Driver::where('car_id','!=',0)->get();
        return view('admin.drivers.withcar',compact('drivers'));
    }

    public function create()
    {
        return view('admin.drivers.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'       => 'required|unique:drivers,name',
            'phone'      => 'required|unique:drivers,phone',
            'front_licence_photo'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'back_licence_photo'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'front_id_photo'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'back_id_photo'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'personal_photo'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'day_price' => 'required',
            'country_set' => 'required',
        ]);

        if ($validator->fails()) {
            flasher('حدث خطا حاول مرة اخري','error');
            return redirect( route('admin.drivers.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $file1 = '';
        $file2 = '';
        $file3 = '';
        $file4 = '';
        $file5 = '';

        if ($request->has('front_licence_photo') || $request->has('back_licence_photo')
        || $request->has('front_id_photo') || $request->has('back_id_photo')
        || $request->has('personal_photo')) {
            $file1 = uploadImage('drivers/licence/front', $request->front_licence_photo);
            $file2 = uploadImage('drivers/licence/back', $request->back_licence_photo);
            $file3 = uploadImage('drivers/ids/front', $request->front_id_photo);
            $file4 = uploadImage('drivers/ids/back', $request->back_id_photo);
            $file5 = uploadImage('drivers/personal', $request->personal_photo);
        }
        Driver::create([
            'name'                  => $request->name,
            'phone'                 => $request->phone,
            'front_licence_photo'   => $file1,
            'back_licence_photo'    => $file2,
            'front_id_photo'        => $file3,
            'back_id_photo'         => $file4,
            'personal_photo'        => $file5,
            'car_id'                => $request->car_id ? $request->car_id : 0,
            'attend'                =>  $request->attend,
            'goes'                  => $request->goes,
            'another_phone'         =>  $request->another_phone,
            'day_price'             => $request->day_price,
            'country_set'           => $request->country_set,
        ]);

        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.drivers')->with(["success","success"]);
    }

    public function edit($id)
    {
        $driver = Driver::find($id);
        return view('admin.drivers.edit',compact('driver'));
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [

            'name'       => 'required|unique:drivers,name,'.$id,
            'phone'      => 'required|unique:drivers,phone,'.$id,
            'front_licence_photo'      => 'required_without:id|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'back_licence_photo'      => 'required_without:id|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'front_id_photo'      => 'required_without:id|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'back_id_photo'      => 'required_without:id|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'personal_photo'      => 'required_without:id|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'day_price' => 'required',
            'country_set' => 'required',
        ]);

        if ($validator->fails()) {
            flasher('حدث خطا حاول مرة اخري','error');
            return redirect( route('admin.drivers.edit',$id))
                        ->withErrors($validator)
                        ->withInput();
        }

        if ($request->has('front_licence_photo') || $request->has('back_licence_photo')
        || $request->has('front_id_photo') || $request->has('back_id_photo')
        || $request->has('personal_photo')) {
            $file1 = uploadImage('drivers/licence/front', $request->front_licence_photo);
            $file2 = uploadImage('drivers/licence/back', $request->back_licence_photo);
            $file3 = uploadImage('drivers/ids/front', $request->front_id_photo);
            $file4 = uploadImage('drivers/ids/back', $request->back_id_photo);
            $file5 = uploadImage('drivers/personal', $request->personal_photo);

            Driver::where('id', $id)->update([
                'front_licence_photo'  =>  $file1,
                'back_licence_photo'   =>  $file2,
                'front_id_photo'       =>  $file3,
                'back_id_photo'        =>  $file4,
                'personal_photo'       =>  $file5,
            ]);
        }

        Driver::where('id', $id)->update([
            'name'                  => $request->name,
            'phone'                 => $request->phone,
            'car_id'                => $request->car_id ? $request->car_id : 0,
            'attend'                =>  $request->attend,
            'goes'                  => $request->goes,
            'another_phone'         =>  $request->another_phone,
            'day_price'             => $request->day_price,
            'country_set'           => $request->country_set,
        ]);

        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.drivers')->with(["success","success"]);
    }
}
