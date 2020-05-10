<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Customer;
use App\Saler;
use App\User;
use Crypt;

class ProfileController extends Controller
{
      public function getProfile(){
        $customer = Customer::find(Auth::user()->id);
        $saler = Saler::find(Auth::user()->id);
        return view('layouts.profile',compact('customer','saler'));
    }

        public function updatePassword(Request $request){
        $user = User::find(Auth::user()->id);
        dd(Crypt::decrypt($user->password));
        if( $user->password == bcrypt($request->currentPassword)){
            $user->password = bcrypt($request->password);
        }
        $user->save();
        session()->flash("success", "Update Successfully");
         return back();
    }

}
