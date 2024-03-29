@extends('header')
@section('content')


<div class="container">
    @foreach($chikaya as $ch)
    <div class="card">
        <div>
            <img class="chikaya1 chikaya" src="{{asset('image/chikaya.png')}}" alt="">
        </div>
        <div class="card-body">
            <br>
            <div class="card cardbox">
                <div class="card-body">
                    <br>
                    <label class="labphone" style="color:green;">Nom</label>
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Nom</td>
                            <td class="td2"><label class="lab">{{$ch->nom}}</label></td>
                        </tr>
                    </table>
                    <br><!--  -->
                    <label class="labphone" style="color:green;">Prénom</label>
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Prénom</td>
                            <td class="td2"><label class="lab">{{$ch->prenom}}</label></td>
                        </tr>
                    </table>
                    <br><!--  -->
                    <label class="labphone" style="color:green;">CIN</label>
                    <table>
                        <tr>
                            <td class="td1 tdstyle">CIN</td>
                            <td class="td2"><label class="lab">{{$ch->cin}}</label></td>
                        </tr>
                    </table>
                    <br><!--  -->
                    <label class="labphone" style="color:green;">Telephone</label>
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Telephone</td>
                            <td class="td2"><label class="lab">{{$ch->telephone}}</label></td>
                        </tr>
                    </table>
                    <br><!--  -->
                    <label class="labphone" style="color:green;">Email</label>
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Email</td>
                            <td class="td2"><label class="lab">{{$ch->email}}</label></td>
                        </tr>
                    </table>
                    <br><!--  -->
                    <label class="labphone" style="color:green;">Addresse</label>
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Addresse</td>
                            <td class="td2"><label class="lab">{{$ch->addresse}}</label></td>
                        </tr>
                    </table>
                </div>

            </div>
            <br>
            <div class="card cardbox">
                <div class="card-body">
                    <br><!--  -->
                    <label class="labphone" style="color:green;">Region</label>
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Region</td>
                            <td class="td2"><label class="lab">{{$ch->region}}</label></td>
                        </tr>
                    </table>
                    <br><!--  -->
                    <label class="labphone" style="color:green;">Province</label>
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Province</td>
                            <td class="td2"><label class="lab">{{$ch->province}}</label></td>
                        </tr>
                    </table>
                    <br><!--  -->
                    <label class="labphone" style="color:green;">Departement</label>
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Departement</td>
                            <td class="td2"><label class="lab">{{$ch->nom_departement}}</label></td>
                        </tr>
                    </table>
                </div>
            </div>
            <br>
            <div class="card cardbox">
                <div class="card-body">
                    <br><!--  -->
                    <label class="labphone" style="color:green;">Sujet De Réclamation</label>
                    <table>
                        <tr>
                            <td class="td1 tdstyle">Sujet De Réclamation</td>
                            <td class="td2"><label class="lab">{{$ch->reclamation}}</label></td>
                        </tr>
                    </table>
                    <br><!--  -->
                    <label class="labphone" style="color:green;">Texte De Réclamation</label>
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
    <div class="card ">
        <div class="card-body">

            <div class="card cardbox">
                <div>
                    <h3><strong style="color:red;"> Traitement</strong></h3>
                </div>
                <div class="card-body">
                    <form action="{{url('/traitementetat')}}" method="POST" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <label class="labphone" style="color:green;">État D'avancement de Réclamation</label>
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
                        <label class="labphone" style="color:green;">Les Reponses</label>
                        <table>
                            <tr>
                                <td class="td1 tdstyle1">Les Reponses</td>
                                <td class="td2 tdstyle"><textarea placeholder="Entrez Un Réponse" class="form-control"
                                        name="reponse" id="input1" cols="10" rows="6" required></textarea></td>
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
                    <br><br>
                    <form action="{{url('/sendmail')}}" method="POST" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <label class="labphone tdstyle1">Email Text</label>
                        <table>
                            <tr>
                                <td class="td1 tdstyle1">Email Text</td>
                                <td class="td2 tdstyle1"><textarea name="sendmail" class="form-control" id="input1"
                                        placeholder="Entrez Votre Contenue De Mail" cols="10" rows="6" required></textarea></td>
                            </tr>
                        </table>
                        <br>
                        <input type="submit" id="submit" value="Envoyer Mail">
                        <?php
                            foreach($chikaya as $ch){
                                $id = $ch->id;
                                $nom = $ch->nom;
                                $prenom = $ch->prenom;
                                $email = $ch->email;
                                $sujet_reclamation =$ch->reclamation;
                            }
                            echo '<input type="hidden" name="id" value="'.$id.'" id="idhide">';
                            echo '<input type="hidden" name="nom" value="'.$nom.'" id="idhide">';
                            echo '<input type="hidden" name="prenom" value="'.$prenom.'" id="idhide">';
                            echo '<input type="hidden" name="email" value="'.$email.'" id="idhide">';
                            echo '<input type="hidden" name="sujet_reclamation" value="'.$sujet_reclamation.'" id="idhide">';
                        ?>
                    </form>
                </div>
            </div>

            <br><br>
            <div class="card cardbox">
                <div>
                    <h3><strong style="color:red;">État Actuel De La Réclamation</strong></h3>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td><label class="lab">
                                    @foreach($etat as $e)
                                    {{$e->etat}}
                                    @endforeach
                                </label></td>
                        </tr>
                    </table>

                </div>
            </div>
            <br><br>
            <div class="card cardbox">
                <div>
                    <h3><strong style="color:red;"> Les Réponses Déjà Envoyé</strong></h3>
                </div>
                <div class="card-body">
                    @foreach($reponse as $r)
                    <table>
                        <tr>
                            <form action="{{url('/delete')}}" method="POST" enctype="multipart/form-data">
                                @method('post')
                                @csrf
                                <input type="hidden" name="id" value="{{$r->id}}">
                                <input type="hidden" name="id_chikaya" value="{{$r->id_chikaya}}">
                                <td style="width:90%;"><label class="lab">{{$r->reponse}}</label></td>
                                <td style="width:10%;">
                                    <input type="image" src="{{asset('image/delete.png')}}" width="30" alt="delete"
                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')">
                                </td>
                            </form>
                        </tr>
                    </table>
                    <br>
                    @endforeach
                </div>
            </div>
            <br><br>
            <div class="card cardbox">
                <div class="card-body">
                    <h3 class="card-title"><strong style="color:red;"> Supprimer Réclamation</strong></h3>
                    <br><br>
                    <form action="{{url('/deletereclamation')}}" method="POST" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        @foreach($chikaya as $ch)
                        <input type="hidden" name="id" value="{{$ch->id}}">
                        @endforeach
                        <button id="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')">Supprimer Cette Réclamation</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection('content')