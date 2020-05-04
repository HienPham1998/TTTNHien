<?php

namespace App\Http\Controllers;

use App\Saler;

class SalerController extends Controller
{
    public function index()
    {
        $salers = Saler::orderBy("created_at", "desc")->paginate(10);
        return view('admin.salers.index', compact("salers"));
    }

    public function update($request, $id)
    {
        dd($id);
        $salers = Saler::find($id);
        $salers->firstname = $request->firstname;
        $salers->lastname = $request->lastname;
        $salers->email = $request->email;
        $salers->phone = $request->phone;
        $salers->save();
        session()->flash("success", "Update Successfully");
        return back();
    }

    public function destroy($id, Request $request)
    {
        $salers = Saler::find($id);
        $salers->delete();
        session()->flash("success", "Delete successfully");
        return back();
    }
}
