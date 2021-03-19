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
      </tr>
    </thead>
    <tbody>
        @foreach($customers as $customer)
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
      </tr>
      @endforeach

    </tbody>
  </table>
@endsection
