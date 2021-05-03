@extends('header')
@section('content')
<div class="">
    <div class="left">
        <br>
        <button class="btn1">home</button>
        <br><br>
        <button class="btn1">option1</button>
        <br><br>
        <button class="btn1">option2</button>
        <br><br>
        <button class="btn1">option3</button>
        <br><br>
        <button class="btn1">option4</button>
        <br><br>
        <button class="btn1">option5</button>
    </div>
    <div class="main">
        <h1 class="title">Les Réclamation</h1>
        @foreach($chikaya as $ch)
        <br>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><i style="color:red">Sujet</i>  : {{$ch->reclamation}}</h4>
                <table>
                    <tr>
                        <td> <img class="chikaya1" src="{{asset('image/chikaya.png')}}" alt="chikaya"></td>
                        <td>
                            <table>
                                <tr>
                                    <td> <i style="color:green;">Nom et Prénom</i>  : {{$ch->nom}} {{$ch->prenom}}</td>
                                    <td><i style="color:green;">CIN</i> : {{$ch->cin}}</td>
                                </tr>
                                
                            </table>
                        </td>
                    </tr>
                </table>
                <button>Voir</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection('content')