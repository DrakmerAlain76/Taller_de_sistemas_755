<!DOCTYPE html>
<html>
<head>
<title>torta</title>
<!-- <link rel="stylesheet" type="text/css" href="../style/style.css"> -->
<style type="text/css">
BODY {
    width: 550px;
}

/* #chart-container {
    width: 100%;
    height: auto;
    text-align:center;
} */
#chart-container {
    width: 100%;
    height: auto;
    text-align: center;
    padding: 15%;
    padding-left: 75%;
}
h1{
    font-family:arial ;
    color: #6384FF;
}
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>


</head>
<body>
    <center>

        <div id="chart-container">
            <center><h1>GRÁFICOS EN BARRA</h1></center>
            <canvas id="graphCanvas"></canvas>
        </div>
    </center>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                    
                    var name = [];
                    var reservas = [];
                    // var_dump name;
                    // console.log(name);
                    // die();
                    for (var i in data) {
                        name.push(data[i].nombre_curso);
                        reservas.push(data[i].reservas);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Cursos Reservados',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: reservas
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>

</body>
</html>