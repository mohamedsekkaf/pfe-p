@extends('header')
@section('content')


<div class="container">
    @foreach($chikaya as $ch)
    <div class="card">
        <div>
            <img class="chikaya1" src="{{asset('image/chikaya.png')}}" alt="">
        </div>
        <div class="card-body">
            <br>
            <div class="card">
                <div class="card-body">
                    <br>
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Nom</td>
                            <td class="td2"><label class="lab">{{$ch->nom}}</label></td>
                        </tr>
                    </table>
                    <br><!--  -->
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Prénom</td>
                            <td class="td2"><label class="lab">{{$ch->prenom}}</label></td>
                        </tr>
                    </table>
                    <br><!--  -->
                    <table>
                        <tr>
                            <td class="td1 tdstyle">CIN</td>
                            <td class="td2"><label class="lab">{{$ch->cin}}</label></td>
                        </tr>
                    </table>
                    <br><!--  -->
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Telephone</td>
                            <td class="td2"><label class="lab">{{$ch->telephone}}</label></td>
                        </tr>
                    </table>
                    <br><!--  -->
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Email</td>
                            <td class="td2"><label class="lab">{{$ch->email}}</label></td>
                        </tr>
                    </table>
                    <br><!--  -->
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Addresse</td>
                            <td class="td2"><label class="lab">{{$ch->addresse}}</label></td>
                        </tr>
                    </table>
                </div>

            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <br><!--  -->
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Region</td>
                            <td class="td2"><label class="lab">{{$ch->region}}</label></td>
                        </tr>
                    </table>
                    <br><!--  -->
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Province</td>
                            <td class="td2"><label class="lab">{{$ch->province}}</label></td>
                        </tr>
                    </table>
                    <br><!--  -->
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Departement</td>
                            <td class="td2"><label class="lab">{{$ch->nom_departement}}</label></td>
                        </tr>
                    </table>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body">
                    <br><!--  -->
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Sujet De Réclamation</td>
                            <td class="td2"><label class="lab">{{$ch->reclamation}}</label></td>
                        </tr>
                    </table>
                    <br><!--  -->
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Texte De Réclamation</td>
                            <td class="td2"><label class="lab">{{$ch->texte_reclamation}}</label></td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
    @endforeach
    <br><br>
    <div class="card">
        <div class="card-body">

            <div class="card">
                <div>
                    <h3><strong style="color:red;"> Traitement</strong></h3>
                </div>
                <div class="card-body">
                    <form action="{{url('/traitementetat')}}" method="POST" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <table>
                            <tr>
                                <td class="td1 tdstyle1">État D'avancement de Réclamation</td>
                                <td class="td2">
                                    <select class="form-control " name="etat" id="input1">
                                        <option value="Le traitement n a pas commencé">défaut - Le traitement n'a pas
                                            commencé
                                        </option>
                                        <option value="le traitement est encore">le traitement est encore</option>
                                        <option value="Le traitement est terminé">Le traitement est terminé</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <input id="submit" type="submit" value="Envoyer">
                        <?php
                        foreach($chikaya as $c){
                            $var1 = $c->id;
                        }
                        echo '<input type="hidden" name="id" value="'.$var1.'" id="idhide">';
                        ?>
                    </form>
                    <br><br>
                    <form action="{{url('/traitementreponse')}}" method="POST" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <table>
                            <tr>
                                <td class="td1 tdstyle1">Les Reponses</td>
                                <td class="td2 tdstyle"><textarea class="form-control" name="reponse" value="skfoek"
                                        id="input1" cols="10" rows="6"></textarea></td>
                            </tr>
                        </table>
                        <br>
                        <?php
                        foreach($chikaya as $c){
                            $var1 = $c->id;
                        }
                        echo '<input type="hidden" name="id" value="'.$var1.'" id="idhide">';
                        ?>
                        <input type="submit" value="Envoyer" id="submit">
                    </form>
                </div>
            </div>

            <br><br>
            <div class="card">
                <div>
                    <h3><strong style="color:red;"> E</strong></h3>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td class="td1">État D'avancement de Réclamation</td>
                            <td class="td2"><label class="lab">
                                    @foreach($etat as $e)
                                    {{$e->etat}}rr
                                    @endforeach
                                </label></td>
                        </tr>
                    </table>

                </div>
            </div>
            <br><br>
            <div class="card">
                <div>
                    <h3><strong style="color:red;"> R</strong></h3>
                </div>
                <div class="card-body">
                    @foreach($reponse as $r)
                    <table>
                        <tr>
                            <td class="td2"><label class="lab">{{$r->reponse}}</label></td>
                        </tr>
                    </table>
                    <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>


@endsection('content')