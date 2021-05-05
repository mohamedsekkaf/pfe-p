<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

    </head>
    <body>
    <nav>
        <label translate="no"><a href="{{url('/')}}" class="logo">Chikaya</a> </label>
        <ul>
            <li><a href="{{url('/suivez')}}">Suivez La Réclamation</a></li>
        </ul>
    </nav>
        @yield('content')
        <script src="{{asset('js/js.js')}}"></script>
    </body>

</html>