@extends('customer.layout')

@section('content')

<a href="{{route('customerNo')}}" > See all Phone numbers</a>


    <h2 class="mb-4"> Add Customer's Phone no.</h2>

    <form method="POST" action ="{{ route('store-customerNo',$id->id)}} " >
        @csrf

        <input type="text" readonly class="form-control" name="customer_id" value="{{$id->id}}" >

        <div class="form-group mt-4">
            <label for="phone">Phone No.<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}" placeholder="Enter phone no,">
        </div>
        @error('phone')
            <p class="text-danger">{{$message}}</p>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
