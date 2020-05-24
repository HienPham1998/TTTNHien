<?php

namespace App\Http\Controllers;

use App\Saler;
use App\User;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile()
    {
        $user = User::find(Auth::user()->id);
        if ($user->role_id == 3) {
            $saler = Saler::all()->where("user_id", Auth::user()->id)->first();
            return view('layouts.profile', compact('user', 'saler'));
        }
        return view('layouts.profile', compact('user'));
    }

    public function updatePassword(Request $request)
    {

        $user = User::find(Auth::user()->id);
        if (\Hash::check($request->currentPassword, $user->password)) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        session()->flash("success", "Update Successfully");
        return back();
    }

}
