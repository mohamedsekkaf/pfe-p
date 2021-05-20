@extends('header')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="panel panel-default">
                <div class="panel-heading">Statistique</div>
                <div class="panel-body">
                    <canvas id="canvas" height="280" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>    
    
    var year = <?php echo $year; ?>;
    var chikaya = <?php echo $chikaya; ?>;
    var dd1 = <?php echo $dd1; ?>;
    var dd2 = <?php echo $dd2; ?>;
    var dd3 = <?php echo $dd3; ?>;
    var dd4 = <?php echo $dd4; ?>;
    var dd5 = <?php echo $dd5; ?>;

    var barChartData = {
        labels: year,
        datasets: [{
            label: 'Mombre totale de reclamation ',
            backgroundColor: "pink",
            data: chikaya
        },{
            label: 'Département économique',
            backgroundColor: "red",
            data: dd1
        },{
            label: 'Département de l environnement',
            backgroundColor: "green",
            data: dd2
        },{
            label: 'département de santé',
            backgroundColor: "blue",
            data: dd3
        },{
            label: 'Département des sports',
            backgroundColor: "yellow",
            data: dd4
        },{
            label: 'Département de la police administrative',
            backgroundColor: "orange",
            data: dd5
        }]
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                elements: {
                    rectangle: {
                        borderWidth: 2,
                        borderColor: '',
                        borderSkipped: 'bottom'
                    }
                },
                responsive: true,
                title: {
                    display: true,
                    text: 'Yearly Chikaya Joined'
                }
            }
        });
    };
</script>
@endsection('content')