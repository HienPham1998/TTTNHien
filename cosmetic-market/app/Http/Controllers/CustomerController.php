<?php

namespace App\Http\Controllers;

use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy("created_at", "desc")->paginate(10);
        return view('admin.customers.index', compact("customers"));
    }
}
