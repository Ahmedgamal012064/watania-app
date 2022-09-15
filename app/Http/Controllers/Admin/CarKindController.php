<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarKind;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CarKindController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $cars = CarKind::get();
        return view('admin.cars-kinds.index',compact('cars'));
    }

    public function create()
    {
        return view('admin.cars-kinds.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
            'price_company'          => 'required',
            'prica_calculate'            => 'required',
        ]);

        if ($validator->fails()) {
            flasher('حدث خطا حاول مرة اخري','error');
            return redirect( route('admin.cars.kinds.create'))
                        ->withErrors($validator)
                        ->withInput();
        }

        CarKind::create([
            'name'          => $request->name,
            'price_company'          => $request->price_company,
            'price_calculate'            =>  $request->prica_calculate,
        ]);

        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.cars.kinds')->with(["success","Success"]);
    }


    public function edit($id)
    {
        $car = CarKind::find($id);
        return view('admin.cars-kinds.edit',compact('car'));
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
            'price_company'          => 'required',
            'prica_calculate'            => 'required',
        ]);

        if ($validator->fails()) {
            flasher('حدث خطا حاول مرة اخري','error');
            return redirect( route('admin.cars.kinds.edit',$id))
                        ->withErrors($validator)
                        ->withInput();
        }


        CarKind::where('id', $id)->update([
            'name'          => $request->name,
            'price_company'          => $request->price_company,
            'price_calculate'            =>  $request->prica_calculate,
        ]);

        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.cars.kinds')->with(["success","Success"]);
    }

    public function destroy($id)
    {
        $cat = CarKind::find($id);
        $cat->update([
            'status'   => 0
        ]);
        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.cars.kinds')->with(["success","Success"]);
    }
}
