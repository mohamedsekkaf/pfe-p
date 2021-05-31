<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="nav">
    <strong>Hello In Mailbox</strong>
    </nav>
    <h1 style="text-align:center;" >Bienvenue {{$nom}} {{$prenom}}</h1>
    <h3 style="text-align:center;"><strong style="color:green;"> Sujet de Réclamation :</strong> {{$sujet}}</h4>
    <h4 style="text-align:center;color:green;">Etat De Votre Réclamtion </h4>
    <p style="text-align:center;">{{$etat}}</p>
</body>
</html>