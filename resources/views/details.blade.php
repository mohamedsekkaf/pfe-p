@extends('header')
@section('content')
<div class="">
    <div class="left">
        <br>
        <button class="btn1"><a href="{{url('/')}}" style="text-decoration:none; color:black;">Accueil</a></button>
        <br><br>
        <button class="btn1"> <a href="{{url('/details/Département économique')}}" style="text-decoration:none; color:black;">Département économique</a> </button>
        <br><br>
        <button class="btn1"><a href="{{url('/details/Département de l environnement')}}" style="text-decoration:none; color:black;">Département de l'environnement</button>
        <br><br>
        <button class="btn1"><a href="{{url('/details/département de santé')}}" style="text-decoration:none; color:black;">département de santé</button>
        <br><br>
        <button class="btn1"><a href="{{url('/details/Département des sports')}}" style="text-decoration:none; color:black;">Département des sports</button>
        <br><br>
        <button class="btn1"><a href="{{url('/details/Département de la police administrative')}}" style="text-decoration:none; color:black;">Département de la police administrative</button>
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
                                    <td > <i style="color:green;">Nom et Prénom</i>  : {{$ch->nom}} {{$ch->prenom}}</td>
                                    <td><i style="color:green;">CIN</i> : {{$ch->cin}}</td>
                                </tr>
                                <tr>
                                    <td><i style="color:green;">Province : </i>{{$ch->province}}</td>
                                    <td><i style="color:green;">Département : </i>{{$ch->nom_departement}}</td>
                                </tr>
                                <tr>
                                    <td><i style="color:green;">Date : </i> {{$ch->created_at}}</td>
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

