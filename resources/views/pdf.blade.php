<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <style>
        nav {
            overflow: auto;
            width: 100%;
            height: 80px;
            background-color: #1AE7FF;
            color: rgb(255, 255, 255);
            border-radius: 10px;
        }

        .logo {
            float: left;
            line-height: 80px;
            margin: 0px 40px;
            color: white;
            font-family: sans-serif;
            font-size: 40px;
            text-decoration: none;
        }

        .card {
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 2px solid rgba(102, 102, 102, 0.125);
            border-radius: .40rem;
        }

        .container {
            display: flex;
            flex-wrap: inherit;
            align-items: center;
            justify-content: space-between
        }

        .navbar-brand {
            padding-top: .3125rem;
            padding-bottom: .3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            text-decoration: none;
            white-space: nowrap
        }
        .badg{
            float: right;
            line-height: 80px;
            margin-right: 40px;
            color: white;
            font-family: sans-serif;
            font-size: 40px;
            text-decoration: none;
        }
        </style>
    </head>

    <body>
        @foreach($var as $v)
        <nav>
            <label class="logo">CHIKAYA</label>
            <label class="badg">{{$v->id}}</label>
        </nav>
        <br><br><br>


        <table style="width:100%;">
            <tr>
                <td style="width:20%;">Votre Nom</td>
                <td style="width:80%;"><input style="width:100%;text-align:center;border-radius:10px;" type="text" name="" value="{{$v->nom}}"></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td style="width:20%;">Votre Prenom</td>
                <td style="width:80%;"><input style="width:100%;text-align:center;border-radius:10px;" type="text" name="" value="{{$v->prenom}}"></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td style="width:20%;">Votre CIN</td>
                <td style="width:80%;"><input style="width:100%;text-align:center;border-radius:10px;" type="text" name="" value="{{$v->cin}}"></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td style="width:20%;">Votre Telephone</td>
                <td style="width:80%;"><input style="width:100%;text-align:center;border-radius:10px;" type="text" name="" value="{{$v->telephone}}"></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td style="width:20%;">Votre Email</td>
                <td style="width:80%;"><input style="width:100%;text-align:center;border-radius:10px;" type="text" name="" value="{{$v->email}}"></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td style="width:20%;">Votre Addresse</td>
                <td style="width:80%;"><input style="width:100%;text-align:center;border-radius:10px;" type="text" name="" value="{{$v->addresse}}"></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td style="width:20%;">Region</td>
                <td style="width:80%;"><input style="width:100%;text-align:center;border-radius:10px;" type="text" name="" value="{{$v->region}}"></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td style="width:20%;">Province</td>
                <td style="width:80%;"><input style="width:100%;text-align:center;border-radius:10px;" type="text" name="" value="{{$v->province}}"></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td style="width:20%;">Département</td>
                <td style="width:80%;"><input style="width:100%;text-align:center;border-radius:10px;" type="text" name="" value="{{$v->nom_departement}}"></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td style="width:20%;">Votre Sujet de Réclamation</td>
                <td style="width:80%;"><input style="width:100%;text-align:center;border-radius:10px;" type="text" name="" value="{{$v->reclamation}}"></td>
            </tr>
            <tr><td><br></td></tr>
            <tr>
                <td style="width:20%;">Votre Texte de Réclamation</td>
                <td style="width:80%;"><input style="width:100%;text-align:center;border-radius:10px;" type="text" name="" value="{{$v->texte_reclamation}}"></td>
            </tr>
            <tr><td><br><br></td></tr>
            <tr>
                <td style="width:20%;">Date De Création</td>
                <td style="width:80%;"><input style="width:100%;text-align:center;border-radius:10px;" type="text" name="" value="{{$v->created_at}}"></td>
            </tr>
        </table>
        @endforeach
    </body>

</html>