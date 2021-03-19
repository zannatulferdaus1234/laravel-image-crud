@extends('customer.layout')

@section('content')
    <div class="d-flex justify-content-between">
        <h2 class="mb-4">Edit Customer Info</h2>
        <h2><a href="{{route('all-customer')}}"> All Customer</a></h2>
    </div>

    <form method="POST" action = "{{ route('update-customer',$id->id)}}" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="name">Customer Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="name" name="name" value="{{$id['name']}}">
            </div>
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror

        <div class="form-group">
            <label for="email">Email address<span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" name="email" value="{{$id['email']}}">
        </div>
        @error('email')
            <p class="text-danger">{{$message}}</p>
        @enderror

        <div class="form-group">
            <label for="avatar">Update Customer Image<span class="text-danger">*</span></label>
            <input type="file" class="form-control" id="avatar" name="avatar" >
            Old Image: <img src="{{URL::to('/storage/'.$id->avatar)}}" style="height:60px; width:80px;">
        <input type="hidden" name="old_avatar" value="{{'storage/'.$id->avatar}}">
        </div>
        @error('avatar')
            <p class="text-danger">{{$message}}</p>
        @enderror


        <button type="submit" class="mt-5 btn btn-primary">Submit</button>
        </form>
@endsection
