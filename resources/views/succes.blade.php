@extends('header')
@section('content')
<div class="container">
    <br>
    <div class="col-12">
        <div class="card cardbox">
            <div>
                <img src="{{asset('image/chikaya.png')}}" alt="" width="300">
            </div>
            <div class="card-body">
                <h4 class="succes">{{$succes}}</h4>
                <h3>{{$message}}</h3>
            </div>
        </div>
    </div>
</div>

@endsection('content')