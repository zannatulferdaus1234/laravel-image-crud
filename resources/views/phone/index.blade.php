@extends('customer.layout')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
      </tr>
    </thead>
    <tbody>
        @foreach($phone as $id)
        <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{ $id->customer->name}}</td>
          <td>{{ $id->phone}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>


@endsection
