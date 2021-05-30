<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .nav{
        height: 80px;
        width:100%;
        background-color: red;
    }        
    </style>
</head>
<body>
    <nav class="nav">
    <strong>Hello In Mailbox</strong>
    </nav>
    <h1 >Hi {{$nom}} {{$prenom}}</h1>
    <h4><strong style="color:red;"> Sujet de Réclamation :</strong> {{$sujet_reclamation}}</h4>
    <strong style="color:red;">Réponse</strong><br>
    <p>{{$sendmail}}</p>
</body>
</html>