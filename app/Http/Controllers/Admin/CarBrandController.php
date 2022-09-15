<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarBrand;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CarBrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $cars = CarBrand::get();
        return view('admin.cars-brands.index',compact('cars'));
    }

    public function create()
    {
        return view('admin.cars-brands.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
        ]);

        if ($validator->fails()) {
            flasher('حدث خطا حاول مرة اخري','error');
            return redirect( route('admin.cars.brands.create'))
                        ->withErrors($validator)
                        ->withInput();
        }

        CarBrand::create([
            'name'          => $request->name,
        ]);

        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.cars.brands')->with(["success","Success"]);
    }


    public function edit($id)
    {
        $car = CarBrand::find($id);
        return view('admin.cars-brands.edit',compact('car'));
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
        ]);

        if ($validator->fails()) {
            flasher('حدث خطا حاول مرة اخري','error');
            return redirect( route('admin.cars.brands.edit',$id))
                        ->withErrors($validator)
                        ->withInput();
        }

        CarBrand::where('id', $id)->update([
            'name'          => $request->name,
        ]);

        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.cars.brands')->with(["success","Success"]);
    }

    public function destroy($id)
    {
        $cat = CarBrand::find($id);
        $cat->update([
            'status'   => 0
        ]);
        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.cars.brands')->with(["success","Success"]);
    }
}
