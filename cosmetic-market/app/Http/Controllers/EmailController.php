<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;
use Redirect; 

class EmailController extends Controller
{
    public function sendEmail(){
        

        $details = [
            'title' => 'Title: Mail from Real Programmer',
            'body' => 'Body: This is for testing email'
        ];

        \Mail::to('hienktpm1@gmail.com')->send(new SendMail($details));
        // $categories = Category::all();
        // return view('layouts.index',compact('categories'));
        return redirect('/');
    } 
}
