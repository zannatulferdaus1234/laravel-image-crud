@extends('customer.layout')

@section('content')
    <h2 class="mb-4"> Add Customer</h2>
    <form method="POST" action ="{{ route('store-customer')}} " enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Customer Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Enter Customer Name">
            </div>
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror

        <div class="form-group">
            <label for="email">Email address <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Enter email">
        </div>
        @error('email')
            <p class="text-danger">{{$message}}</p>
        @enderror

        <div class="form-group">
            <label for="avatar">Customer Image<span class="text-danger">*</span></label>
            <input type="file" class="form-control" id="avatar" name="avatar" >
        </div>
        @error('avatar')
            <p class="text-danger">{{$message}}</p>
        @enderror


        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
@endsection
