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
                    <label class="labphone">Nom <strong style="color:red;">*</strong></label>
                    <table>
                        <tr>
                            <td class="td1"><label for="">Nom <strong style="color:red;">*</strong></label></td>
                            <td class="td2"><input id="id" type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Name"></td>
                        </tr>
                    </table>
                    <br>
                    <label class="labphone">Prénom <strong style="color:red;">*</strong></label>
                    <table>
                        <tr>
                            <td class="td1"><label for="">Prénom <strong style="color:red;">*</strong></label></td>
                            <td class="td2"><input id="id" type="text" name="firstname" class="form-control"
                                  value="{{old('firstname')}}"  placeholder="Prénom" ></td>
                        </tr>
                    </table>
                    <br>
                    <label class="labphone">CIN <strong style="color:red;">*</strong></label>
                    <table>
                        <tr>
                            <td class="td1"><label for="">CIN <strong style="color:red;">*</strong></label></td>
                            <td class="td2"><input id="id" type="text" name="cin" class="form-control" value="{{old('cin')}}" placeholder="CIN"></td>
                        </tr>
                    </table>
                    <br>
                    <label class="labphone">Email <strong style="color:red;">*</strong></label>
                    <table>
                        <tr>
                            <td class="td1"><label for="">Email <strong style="color:red;">*</strong></label></td>
                            <td class="td2"><input id="id" type="text" name="email" class="form-control" value="{{old('email')}}" placeholder="Email">
                            </td>
                        </tr>
                    </table>
                    <br>
                    <strong>Contenu</strong>
                    <br><br>
                    <label class="labphone"v>Sujet Principal <strong style="color:red;">*</strong></label>
                    <table>
                        <tr>
                            <td class="td1"><label for="">Sujet principal <strong style="color:red;">*</strong></label></td>
                            <td class="td2"><input id="id" type="text" class="form-control" name="sujet_principal"
                            value="{{old('sujet_principal')}}" placeholder="Sujet principal"></td>
                        </tr>
                    </table>
                    <br>
                    <label class="labphone">Objet <strong style="color:red;">*</strong></label>
                    <table>
                        <tr>
                            <td class="td1"><label for="">Objet <strong style="color:red;">*</strong></label></td>
                            <td class="td2"><input id="id" type="text" name="objet" class="form-control" value="{{old('objet')}}"  placeholder="Objet">
                            </td>
                        </tr>
                    </table>
                    <br>
                    <label class="labphone">Message <strong style="color:red;">*</strong></label>
                    <table>
                        <tr>
                            <td class="td1"><label class="labweb">Message <strong style="color:red;">*</strong></label></td>
                            <td class="td2"><textarea id="id" placeholder="Message" name="message" value="{{('message')}}" class="form-control" rows="5"></textarea></td>
                        </tr>
                    </table>
                    <div>
                    <strong style="color:red;">*</strong> Obligatoire
                    </div>
                    <br>
                    <input class="save" type="submit" value="Enregistrer">
                </div>
                @foreach($errors->all() as $err)
                <div class="alert alert-danger mt-5">
                    {{$err}}
                </div>
                @endforeach
            </form>
        </div>
        <br><br><br><br>
    </div>
</div>
@endsection('ontent')