<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complain;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ComplainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {
        $complains = Complain::get();
        return view('admin.complains.index',compact('complains'));
    }

    public function create()
    {
        return view('admin.complains.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required'
        ]);

        if ($validator->fails()) {
            flasher('حدث خطا حاول مرة اخري','error');
            return redirect( route('admin.complains.create'))
                        ->withErrors($validator)
                        ->withInput();
        }

        Complain::create([
            'name'          => $request->name,

        ]);

        flasher('تم الاضافة بنجاح','success');
        return redirect()->route('admin.complains')->with(["success","Success"]);
    }


    public function edit($id)
    {
        $complain = Complain::find($id);
        return view('admin.complains.edit',compact('complain'));
    }

    public function update(Request $request , $id)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
        ]);

        if ($validator->fails()) {
            flasher('حدث خطا حاول مرة اخري','error');
            return redirect( route('admin.complains.edit',$id))
                        ->withErrors($validator)
                        ->withInput();
        }

        Complain::where('id', $id)->update([
            'name'          => $request->name,
        ]);

        flasher('تم بنجاح','success');
        return redirect()->route('admin.complains');
    }

    public function destroy($id)
    {
        $cat = Complain::find($id);
        $cat->update([
            'status'   => 0
        ]);
        flasher('تم بنجاح','success');
        return redirect()->route('admin.complains')->with(["success","Success"]);
    }
}
