<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <nav>
    <strong>Hello In Mailbox</strong>
    </nav>
    <h1 style="text-align:center;">Bienvenue {{$name}} {{$prenom}}</h1>
    <h2 style="text-align:center;color:green;">Votre Reclamation a été Enregistrer</h2>
    <h4 style="text-align:center;">Ceci est votre mot de passe pour suivez votre réclamation : <strong style="color:red;">{{$password}}</strong> </h4>
    <h4 style="text-align:center;">vérifier ce lien pour télécharger  votre réclamation : {{$link}}</h4>
</body>
</html>