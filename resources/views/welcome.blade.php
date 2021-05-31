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
                    <div class="card ">
                        <div class="card-body">
                            <h4 class="card-title">Données personnelles</h4>
                            <br><br>
                            <label class="labphone">Nom</label>
                            <table>
                                <tr>
                                    <td class="td1 ">Nom</td>
                                    <td class="td2"><input placeholder="Nom" name="nom" value="{{old('nom')}}"
                                            id="input1" type="text" class="form-control" required>
                                        <p style="color:red;text-align:center;">{{ $errors->first('nom') }}</p>
                                    </td>
                                </tr>

                            </table>
                            <br>
                            <label class="labphone">Prénom</label>
                            <table>
                                <tr>
                                    <td class="td1">Prénom</td>
                                    <td class="td2"><input placeholder="Prénom" name="prenom" id="input2"
                                            value="{{old('prenom')}}" type="text" class="form-control" required>
                                        <p style="color:red;text-align:center;">{{ $errors->first('prenom') }}</p>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <label class="labphone">CIN</label>
                            <table>
                                <tr>
                                    <td class="td1">CIN</td>
                                    <td class="td2"><input placeholder="CIN" name="cin" id="input3"
                                            value="{{old('cin')}}" type="text" class="form-control" required>
                                        <p style="color:red;text-align:center;">{{ $errors->first('cin') }}</p>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <label class="labphone">Telephone</label>
                            <table>
                                <tr>
                                    <td class="td1">Telephone</td>
                                    <td class="td2"><input placeholder="Telephone" value="{{old('telephone')}}"
                                            name="telephone" id="input4" type="number" class="form-control" required>
                                        <p style="color:red;text-align:center;">{{ $errors->first('telephone') }}</p>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <label class="labphone">Email</label>
                            <table>
                                <tr>
                                    <td class="td1">Email</td>
                                    <td class="td2"><input placeholder="Entrez Un Correcte Email" name="email"
                                            value="{{old('email')}}" id="input5" type="email" class="form-control"
                                            required>
                                        <p style="color:red;text-align:center;">{{ $errors->first('email') }}</p>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <label class="labphone">Addresse</label>
                            <table>
                                <tr>
                                    <td class="td1">Addresse</td>
                                    <td class="td2"><input placeholder="Addresse" value="{{old('addresse')}}"
                                            name="addresse" id="input6" type="text" class="form-control" required>
                                        <p style="color:red;text-align:center;">{{ $errors->first('addresse') }}</p>
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
                                    <td class="td2"><select name="region" id="input7" class="form-control" name="" id=""
                                    required>
                                            <option>Casablanca-Settat</option>
                                        </select>
                                        <p style="color:red;text-align:center;">{{ $errors->first('region') }}</p>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <label class="labphone">Province</label>
                            <table>
                                <tr>
                                    <td class="td1">Province</td>
                                    <td class="td2"><select name="province" id="input8" class="form-control" name=""
                                            id="" required>
                                            <option>El jadida</option>
                                        </select>
                                        <p style="color:red;text-align:center;">{{ $errors->first('province') }}</p>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <label class="labphone">Nom du département</label>
                            <table>
                                <tr>
                                    <td class="td1">Nom du département</td>
                                    <td class="td2">
                                        <select name="nom_departement" value="{{old('nom_departement')}}" id="input9"
                                            class="form-control" name="" id="" required>
                                            <option>Département économique</option>
                                            <option>Département de l environnement</option>
                                            <option>département de santé</option>
                                            <option>Département des sports</option>
                                            <option>Département de la police administrative</option>
                                        </select>
                                        <p style="color:red;text-align:center;">{{ $errors->first('nom_departement') }}</p>
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
                            <label for="labphone">Sujet de Réclamation</label>
                            <table>
                                <tr>
                                    <td class="td1">Réclamation </td>
                                    <td class="td2"><textarea value="" name="reclamation" id="input10"
                                            class="form-control" name="" id="" placeholder="Réclamation" cols="10"
                                            rows="3" required>{{old('reclamation')}}</textarea>
                                        <p style="color:red;text-align:center;">{{ $errors->first('reclamation') }}</p>
                                    </td>
                                </tr>
                            </table>
                            <br><label class="labphone">Texte de la Réclamation</label>
                            <table>
                                <tr>
                                    <td class="td1">Texte de la Réclamation</td>
                                    <td><textarea placeholder="Texte de la Réclamation" name="texte_reclamation"
                                            id="input11" class="form-control"   cols="10" rows="7"
                                            required >{{ old('texte_reclamation') }}</textarea>
                                        <p style="color:red;text-align:center;">{{ $errors->first('texte_reclamation') }}</p>
                                    </td>
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
                                <li><img src="{{asset('image/check.png')}}" alt="" width="20"> tout les données entrez
                                    est correcte</li>
                                <li> <img src="{{asset('image/check.png')}}" alt="" width="20"> condition 2</li>
                                <li> <img src="{{asset('image/check.png')}}" alt="" width="20"> condition 3</li>
                                </ul>
                                <br>
                                <input type="checkbox" name="check" id="check-acc" required><i for="check">Accepté</i>
                                <p style="color:red;text-align:center;">{{ $errors->first('check') }}</p>
                        </div>
                    </div>
                    <br><!-- Suivez la reclamation -->
                    <!-- <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Suivez la reclamation</h4>
                            <br><br>
                            <label class="labphone">Entrez Mot de Pass</label>
                            <table>
                                <tr>
                                    <td class="td1">Entrez Mot de pass </td>
                                    <td class="td2"><input type="password" name="password" id="input1"
                                            class="form-control"></td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td style="width:100%;">
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                            {{ $error }}
                                            @endforeach
                                        </div>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div> -->
                </div>
                <div>
                    <input type="submit" id="submit" value="Enregistrer">
                    <br><br>
                </div>
            </form>
            <!-- <button onclick="verifier()">Verifier</button> -->
        </div>
        <br><br><br><br>
    </div>
</div>

@endsection('ontent')