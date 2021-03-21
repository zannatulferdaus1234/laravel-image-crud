<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\Customer;


class PhoneController extends Controller
{

    public function create(Customer $customer)
    {
        return view('phone.create',compact('customer'));
    }

    public function store(Phone $phone)
    {
        $phone::create(request()->validate([
            'customer_id' => 'required',
            'phone' => 'required|regex:/^(01)[3-9][0-9]{8}$/',
        ]));
        return redirect(route('all-customer'));
    }

    public function show(Customer $customer)
    {
        return view('phone.show',compact('customer'));
    }
}
