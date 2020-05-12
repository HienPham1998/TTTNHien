<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Crypt;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile()
    {
        $user = User::find(Auth::user()->id);
        return view('layouts.profile', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $user = User::find(Auth::user()->id);
        dd(Crypt::decrypt($user->password));
        if ($user->password == bcrypt($request->currentPassword)) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        session()->flash("success", "Update Successfully");
        return back();
    }

}
