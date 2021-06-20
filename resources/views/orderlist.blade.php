@extends('master')
@section('content')
<div class="container cartlist mt-5">
    <h3 class="text-center">My Orders List</h3>
    <div class="row justify-content-center align-items-center">    
            @foreach ($products as $item)
            <div class="col-md-4">
                <div class="card my-3 shadow">
                    <a href="/detail/{{$item->id}}">
                        <img class="card-img-top" src="{{ url('assets/images')}}/{{$item->gallery}}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    <h3 class="card-title">Name: {{$item->name}}</h3>
                    <p class="card-text">Delivery Status: {{$item->status}}</p>
                    <p class="card-title">Address: {{$item->address}}</p>
                    <p class="card-title">Payment Method :{{$item->payment_method}}</p>
                    <p class="card-title">Payment Status: {{$item->payment_status}}</p>
                </div>
            </div>
            
           @endforeach
    </div>
</div>
@endsection