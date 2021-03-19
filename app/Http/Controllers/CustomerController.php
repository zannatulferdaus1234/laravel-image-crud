<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::latest()->get();
       return view('customer.all-customer',compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }


    public function store()
    {
        $attributes = request()->validate([
            'name' =>   'required',
            'email' =>  'required|email',
            'avatar' => 'required|image'
        ]);

        $attributes['avatar'] = request('avatar')->store('avatars','public');
        Customer::create($attributes);

        return redirect(route('all-customer'));
    }

    public function edit(Customer $id)
    {
        return view('customer.edit',compact('id'));
    }

    public function update(Customer  $id)
    {
        $attributes = request()->validate([
            'name' =>   'required',
            'email' =>  'required|email',
            'avatar' => 'image'
        ]);

        if(request('avatar'))
        {
            $attributes['avatar'] = request('avatar')->store('avatars','public');
            unlink(request('old_avatar'));
        }

        $id->update($attributes);

        return redirect(route('all-customer'));
    }

    public function destroy(Customer $id)
    {
        unlink('storage/'.$id->avatar);

        $id->delete();

        return redirect(route('all-customer'));
    }
}
