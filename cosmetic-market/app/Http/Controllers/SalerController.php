<?php

namespace App\Http\Controllers;

use App\Saler;
use Auth;
use Illuminate\Http\Request;

class SalerController extends Controller
{
    public function index()
    {
        $salers = Saler::orderBy("created_at", "desc")->paginate(10);
        return view('admin.salers.index', compact("salers"));
    }

    public function update(Request $request, $id)
    {
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

    public function getProduct(Request $request)
    {
        $saler = Saler::all()->where('user_id', Auth::user()->id)->first();
        $product = $saler->product()->get();
        // dd($product);
        return view('salers.index', compact("product"));
    }
}
