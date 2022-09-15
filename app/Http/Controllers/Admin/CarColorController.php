<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarColor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CarColorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $cars = CarColor::get();
        return view('admin.cars-color.index',compact('cars'));
    }

    public function create()
    {
        return view('admin.cars-color.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'color'          => 'required',
            'hex'          => 'required',
        ]);

        if ($validator->fails()) {
            flasher('حدث خطا حاول مرة اخري','error');
            return redirect( route('admin.cars.colors.create'))
                        ->withErrors($validator)
                        ->withInput();
        }

        CarColor::create([
            'color'          => $request->color,
            'hex'          => $request->hex,
        ]);

        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.cars.colors')->with(["success","Success"]);
    }


    public function edit($id)
    {
        $car = CarColor::find($id);
        return view('admin.cars-color.edit',compact('car'));
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'color'          => 'required',
            'hex'          => 'required',
        ]);

        if ($validator->fails()) {
            flasher('حدث خطا حاول مرة اخري','error');
            return redirect( route('admin.cars-colors.edit',$id))
                        ->withErrors($validator)
                        ->withInput();
        }

        CarColor::where('id', $id)->update([
            'color'          => $request->color,
            'hex'          => $request->hex,
        ]);

        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.cars-colors')->with(["success","Success"]);
    }

    public function destroy($id)
    {
        $cat = CarColor::find($id);
        $cat->update([
            'status'   => 0
        ]);
        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.cars-colors')->with(["success","Success"]);
    }
}
