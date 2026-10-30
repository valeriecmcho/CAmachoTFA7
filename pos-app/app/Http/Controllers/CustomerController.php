<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display the Customer Accounts page using Eloquent.
     */
    public function index()
    {
        $customers = Customer::all();

        return view('customers', compact('customers'));
    }
}

