<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\Customer;


class PhoneController extends Controller
{

    public function index()
    {
        $phone = Phone::get();
        return view('phone.index',compact('phone'));
    }

    public function create(Customer $id)
    {
        return view('phone.create',compact('id'));
    }

    public function store(Phone $phone)
    {
        $phone::create(request()->validate([
            'customer_id' => 'required',
            'phone' => 'required|regex:/^[0][1][3-9][0-9]{8}$/'
        ]));
        return redirect(route('all-customer'));
    }
}
