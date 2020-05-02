<?php

namespace App\Http\Controllers;

use App\Saler;
use Illuminate\Http\Request;

class SalerController extends Controller
{
    public function index(){
        $salers = Saler::orderBy("created_at", "desc")->paginate(10);
        return view('admin.salers.index',compact("salers"));
    }
}
