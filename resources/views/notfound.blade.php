@extends('header')
@section('content')
<div class="container">
<br><br>
    <div class="card cardbox">
    <br>
        <div>
            <img class="notfound" src="{{ asset('image/notfound.png')}}" alt="not found" srcset="">
        </div>
        <div class="card-body">
        <br><br>
            <h4 class="card-title">Aucune Résultat</h4>
        </div>
    </div>
</div>
@endsection('content')