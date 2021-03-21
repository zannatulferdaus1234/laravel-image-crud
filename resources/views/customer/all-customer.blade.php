@extends('customer.layout')

@section('content')
<div class="d-flex justify-content-between">
    <h2 > All Customer</h2>
    <h2 class="mb-4"><a href="/customer/create"> Add Customer</a></h2>

</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
        <th scope="col">Phone</th>
      </tr>
    </thead>
    <tbody>
        @forelse($customers as $customer)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{ $customer->name}}</td>
        <td>{{ $customer->email}}</td>
        <td style="height:40px; width:40px;">
        <img src="{{ asset('/storage/'.$customer->avatar)}}" style="height:60px; width:80px;">
        </td>

        <td>
            <a href="{{route('edit-customer',$customer->id)}}" class="mr-3">Edit</a>
            <a href="{{route('delete-customer',$customer->id)}}">Delete</a>
        </td>

        <td>
            <a href="{{route('show-customerNo',$customer->id)}}" class="btn btn-primary">See Phone</a>
            <a href="{{route('create-customerNo',$customer->id)}}" class="btn btn-primary">Add Phone</a>
        </td>
      </tr>

      @empty
        <p>No Customers yet !!!<?p>
      @endforelse

    </tbody>
  </table>
@endsection
