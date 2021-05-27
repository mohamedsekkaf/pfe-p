@extends('header')
@section('content')
<div class="container">
    <br>
    <div class="card">
        <div>
        <img class="chikaya" src="{{asset('image/chikaya.png')}}" alt="chikaya">
        </div>
        <div class="card-body">
            <div class="card cardbox" >
                <div>
                    <h4 style="color:green;">Les Informations</h4>
                </div>
                <div class="card-body">
                <label class="modephone">Votre Nom</label>
                    <table>
                        <tr>
                            <td class="modedesktop" style="text-align:left;width:50%;">Votre Nom : </td>
                            <td class="widthtop" style="text-align:left;width:50%;"><label style="width:100%;text-align:center; " class="lab">{{$nom}}</label></td>
                        </tr>
                    </table>
                    <br>
                    <label class="modephone">Votre Prénom</label>
                    <table>
                        <tr>
                            <td class="modedesktop" style="text-align:left;width:50%;">Votre Prénom : </td>
                            <td class="widthtop" style="text-align:left;width:50%;"><label style="width:100%;text-align:center; "  class="lab">{{$prenom}}</label></td>
                        </tr>
                    </table>
                    <br>
                    <label class="modephone">Votre CIN</label>
                    <table>
                        <tr>
                            <td class="modedesktop" style="text-align:left;width:50%;"> Votre CIN : </td>
                            <td class="widthtop" style="text-align:left;width:50%;"><label style="width:100%;text-align:center; "  class="lab">{{$cin}}</label></td>
                        </tr>
                    </table>
                </div>
            </div>
            <br>
            <div class="card cardbox">
                <div>
                    <h3 style="color:green;">Etat De Votre Reclamation </h3>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td class="td1" style="color:green;font-size:20px;">Etat</td>
                            <td class="td2"><label class="lab">
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
                <h3 style="color:green;">Les Reponses</h3>
                <div class="card-body">
                    <table>
                        <?php
                            $var = 1;
                            $var1 = 0;
                            foreach($reponse as $r){
                                $var1++;
                                ?>
                        <tr>
                            <td style="width:20%;"><?php echo 'Reponse '.$var1; ?></td>
                            <td style="width:80%"><label class="lab"><?php echo $r->reponse; ?></label></td>
                        </tr>
                        <tr>
                            <td><br> </td>
                        </tr>
                        <?php
                                
                            }
                            if($var1 === 0){
                                echo 'Aucune Reponse';
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection('content')