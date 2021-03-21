@extends('customer.layout')

@section('content')

    <h3>{{$customer->name}}'s Phone Numbers</h3>

    <ol class="font-weight-bold my-5">

        @forelse($customer->phone as $phoneNo)
        <li>{{$phoneNo->phone}}</li>

        @empty
            <p class="my-5">No Numbers Found </p>
        @endforelse

    </ol>

    <a href="{{route('all-customer')}}" class="btn btn-primary">Back</a>

@endsection
