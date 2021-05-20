@extends('header')
@section('content')
<div class="container">
    <br>
    <div class="card">
        <div class="card-body">
            <div class="card">
                <div>
                    <h3 style="color:red">Etat De Votre Reclamation </h3>
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <td>{{$nom}}</td>
                            <td>{{$prenom}}</td>
                            <td>{{$cin}}</td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
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
            <div class="card">
                <h3 style="color:red;">Les Reponses</h3>
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