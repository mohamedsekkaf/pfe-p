@extends('header')
@section('content')
<div class="container">
    <br>
    <div class="col-12">
        <div class="card">
            <form action="{{ url('/add') }}" method="POST" enctype="multipart/form-data">
                @method('post')
                @csrf
                <div>
                    <img class="chikaya" src="{{asset('image/chikaya.png')}}" alt="chikaya">
                </div>
                <div class="card-body">
                    <!-- Données personnelles-->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Données personnelles</h4>
                            <br><br>
                            <label class="labphone">Nom</label>
                            <table>
                                <tr>
                                    <td class="td1">Nom</td>
                                    <td class="td2"><input placeholder="Nom" name="nom" id="input" type="text" class="form-control"></td>
                                </tr>
                            </table>
                            <br>
                            <label class="labphone">Prénom</label>
                            <table>
                                <tr>
                                    <td class="td1">Prénom</td>
                                    <td class="td2"><input placeholder="Prénom" name="prenom" id="input" type="text" class="form-control"></td>
                                </tr>
                            </table>
                            <br>
                            <label class="labphone">CIN</label>
                            <table>
                                <tr>
                                    <td class="td1">CIN</td>
                                    <td class="td2"><input placeholder="CIN" name="cin" id="input" type="text" class="form-control"></td>
                                </tr>
                            </table>
                            <br>
                            <label class="labphone">Telephone</label>
                            <table>
                                <tr>
                                    <td class="td1">Telephone</td>
                                    <td class="td2"><input placeholder="Telephone" name="telephone" id="input" type="text" class="form-control"></td>
                                </tr>
                            </table>
                            <br>
                            <label class="labphone">Email</label>
                            <table>
                                <tr>
                                    <td class="td1">Email</td>
                                    <td class="td2"><input placeholder="Email" name="email" id="input" type="text" class="form-control"></td>
                                </tr>
                            </table>
                            <br>
                            <label class="labphone">Addresse</label>
                            <table>
                                <tr>
                                    <td class="td1">Addresse</td>
                                    <td class="td2"><input placeholder="Addresse" name="addresse" id="input" type="text" class="form-control"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br> <!-- L'administration concernée -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">L'administration concernée</h4>
                            <br>
                            <label class="labphone">Région</label>
                            <table>
                                <tr>
                                    <td class="td1">Région</td>
                                    <td class="td2"><select  name="region" id="input" class="form-control" name="" id="">
                                        <option>Casablanca-Settat</option>
                                    </select></td>
                                </tr>
                            </table>
                            <br>
                            <label class="labphone">Province</label>
                            <table>
                                <tr>
                                    <td class="td1">Province</td>
                                    <td class="td2"><select name="province" id="input" class="form-control" name="" id="">
                                        <option>El jadida</option>
                                    </select></td>
                                </tr>
                            </table>
                            <br>
                            <label class="labphone">Nom du département</label>
                            <table>
                                <tr>
                                    <td class="td1">Nom du département</td>
                                    <td class="td2">
                                        <select name="nom_departement" id="input" class="form-control" name="" id="">
                                            <option>option1</option>
                                            <option>option2</option>
                                            <option>option3</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br><!-- Contenu de la reclamaton -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Contenu de la Réclamation</h4>
                            <br>
                            <label for="labphone">Réclamation</label>
                            <table>
                                <tr>
                                    <td class="td1">Réclamation </td>
                                    <td class="td2"><textarea name="reclamation" id="input" class="form-control" name="" id="" placeholder="Réclamation" cols="10" rows="3"></textarea></td>
                                </tr>
                            </table>
                            <br><label class="labphone">Texte de la Réclamation</label>
                            <table>
                                <tr>
                                    <td class="td1">Texte de la Réclamation</td>
                                    <td><textarea placeholder="Texte de la Réclamation" name="texte_reclamation" id="input" class="form-control" name="" id="" cols="10" rows="7"></textarea></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br><!-- Les Condition -->
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Les Condition</h4>
                            <br>
                            <ol style="float:left;text-align:left;">
                                <li><img src="{{asset('image/check.png')}}" alt="" width="20"> ewv</li>
                                <li> <img src="{{asset('image/check.png')}}" alt="" width="20">ewvgwef</li>
                                <li> <img src="{{asset('image/check.png')}}" alt="" width="20">wbwerfv</li>
                            </ul>
                            <br>
                            <input type="checkbox" name="check" id="check"><i for="check">Accepté</i>
                        </div>
                    </div>
                </div>
                <div>
                    <input type="submit"  value="Enregistrer">
                    <br><br>
                </div>
            </form>
        </div>
        <br><br><br><br>
    </div>
</div>
@endsection('ontent')