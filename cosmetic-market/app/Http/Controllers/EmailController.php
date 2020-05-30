<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Redirect;
use \App\Mail\SendMail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        $random = str_random(6);
        $user = User::find(Auth::user()->id);
        $details = [
            'title' => 'Wanna become saler? Just one more step to join us!!!',
            'token' => $random,
        ];
        $user->remember_token = $random;
        $user->save();
        \Mail::to($user->email)->send(new SendMail($details));
        return redirect('/verify');
    }
}
