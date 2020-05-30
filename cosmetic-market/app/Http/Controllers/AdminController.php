<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class AdminController extends Controller
{
    public function getAdmin(){
        return view('admin.app');
    }
    public function verifyProduct(){
        $products = Product::orderBy('created_at','desc')->paginate(6);
        return view("admin.verifyProduct",compact('products'));
    }
}
