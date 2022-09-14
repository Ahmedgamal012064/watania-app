<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CarTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $cars = CarType::get();
        return view('admin.cars-types.index',compact('cars'));
    }

    public function create()
    {
        return view('admin.cars-types.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
        ]);

        if ($validator->fails()) {
            flasher('حدث خطا حاول مرة اخري','error');
            return redirect( route('admin.cars.types.create'))
                        ->withErrors($validator)
                        ->withInput();
        }

        CarType::create($request->all());

        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.cars.types')->with(["success",'تم الاضافة بنجاح']);
    }


    public function edit($id)
    {
        $car = CarType::find($id);
        return view('admin.cars-types.edit',compact('car'));
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
        ]);

        if ($validator->fails()) {
            flasher('حدث خطا حاول مرة اخري','error');
            return redirect( route('admin.cars.types.edit',$id))
                        ->withErrors($validator)
                        ->withInput();
        }

        CarType::where('id', $id)->update($request->all());

        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.cars.types');
    }

    public function destroy($id)
    {
        $cat = CarType::find($id);
        $cat->update([
            'status'   => 0
        ]);
        toastr()->success('Success');
        return redirect()->route('admin.services')->with(["success","Success"]);
    }
}
