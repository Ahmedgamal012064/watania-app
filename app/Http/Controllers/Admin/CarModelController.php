<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CarModelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $cars = CarModel::get();
        return view('admin.cars-models.index',compact('cars'));
    }

    public function create()
    {
        return view('admin.cars-models.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'model'          => 'required',
        ]);

        if ($validator->fails()) {
            flasher('حدث خطا حاول مرة اخري','error');
            return redirect( route('admin.cars.models.create'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $filePath = '';
        if ($request->has('photo')) {
            $filePath = uploadImage('cats', $request->photo);
        }

        CarModel::create([
            'model'          => $request->model,
        ]);

        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.cars.models')->with(["success","Success"]);
    }


    public function edit($id)
    {
        $car = CarModel::find($id);
        return view('admin.cars-models.edit',compact('car'));
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'model'          => 'required',
        ]);

        if ($validator->fails()) {
            flasher('حدث خطا حاول مرة اخري','error');
            return redirect( route('admin.cars.models.edit',$id))
                        ->withErrors($validator)
                        ->withInput();
        }

        CarModel::where('id', $id)->update([
            'model'          => $request->model,
        ]);

        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.cars.models')->with(["success","Success"]);
    }

    public function destroy($id)
    {
        $cat = CarModel::find($id);
        $cat->update([
            'status'   => 0
        ]);
        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.cars.models')->with(["success","Success"]);
    }
}
