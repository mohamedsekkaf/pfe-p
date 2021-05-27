@extends('header')
@section('content')
<div class="container">
    <div class="card cardbox">
        <div>
            <img class="chikaya" src="{{asset('image/chikaya.png')}}" alt="chikaya">
        </div>
        <br><br>
        <form action="{{ url('/check') }}" method="POST" enctype="multipart/form-data">
            @method('post')
            @csrf
            <div class="card-body">
                <label class="labphone">VOTRE CIN</label>
                <table>
                    <tr>
                        <td class="td1">VOTRE CIN </td>
                        <td class="td2"><input type="text" name="cin" placeholder="VOTRE CIN" class="form-control" id="input1" required></td>
                    </tr>
                </table>
                <br>
                <label class="labphone">VOTRE MOT DE PASS</label>
                <table>
                    <tr>
                        <td class="td1">VOTRE MOT DE PASS </td>
                        <td class="td2"><input type="text" name="password" placeholder="MOT DE PASS" class="form-control" id="input1" required></td>
                    </tr>
                </table>
                <br><br>
                <input type="submit" id="submit" value="Rechercher">
            </div>
        </form>
    </div>
</div>
@endsection('content')