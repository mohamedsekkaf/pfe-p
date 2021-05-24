<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    </head>

    <body>
        <nav>
            
            <label translate="no"><a href="{{url('/')}}" class="logo">Chikaya</a> </label>
            <input type="checkbox" id="check">
            <label for="check" class="iconmenu">
                <i type="submit" class="fas fa-bars"></i>
            </label>
            <ul class="ul">
                @guest
                <li><a href="{{url('/suivez')}}">Suivez La Réclamation</a></li>
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Register</a></li>
                @else
                <li><a href="{{url('/statistique')}}">Statistique</a></li>
                <li><a href="{{url('/home')}}">{{auth::user()->name}}</a></li>
                <li><a href="{{route('logout')}}">Logout</a></li>

                <li></li>
                @endguest
            </ul>
        </nav>
        @yield('content')
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="{{asset('js/js.js')}}"></script>
    </body>

</html>