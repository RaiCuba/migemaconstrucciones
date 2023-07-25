<!DOCTYPE html>
<html>

<head>
    <title>Laravel 9 Chart JS Example Tutorial - Pie Chart - Tutsmake.com</title>
    <!-- Latest CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body>
    <div class="card-header">
        <div class="chart-container">
            <div class="pie-chart-container">
                <canvas id="pie-chart"></canvas>
            </div>
        </div>
    </div>
    <!-- javascript -->

    <script>
        $(function() {
            //get the pie chart canvas
            var cData = JSON.parse(`<?php echo $chart_data; ?>`);
            var ctx = $("#pie-chart");

            //pie chart data
            var data = {
                labels: cData.label,
                datasets: [{
                    label: "Productos Disponibles",
                    data: cData.data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                    ],
                    borderWidth: 3
                }]
            };

            //options
            var options = {
                responsive: true,
                title: {
                    display: true,
                    position: "top",
                    text: "Last Week Registered Users -  Day Wise Count",
                    fontSize: 18,
                    fontColor: "#111"
                },
                legend: {
                    display: true,
                    position: "bottom",
                    labels: {
                        fontColor: "#333",
                        fontSize: 16
                    }
                }
            };

            //create Pie Chart class object
            // var chart1 = new Chart(ctx, {
            //     type: "bar",
            //     data: data,
            //     options: options
            // });

            const stackedBar = new Chart(ctx, {
                type: 'bar',
                data: data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                },
            });



        });
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>

</html>

{{-- <!DOCTYPE html>
<html>

<head>
    <title>Gráfico</title>
    <script src="{{ asset('js/chart.js') }}"></script>
</head>

<body>
    @foreach ($datos as $dat)
        <tr>
            <td>{{ $dat->nombre }}</td>
        </tr>
    @endforeach

    <div>
        <canvas id="myChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


    {{-- scrip para graficos --}}
{{-- <script>
    src = "https://code.highcharts.com/highcharts.js" >
</script>
<script>
    src = "https://code.highcharts.com/modules/exporting.js" >
</script>
<script>
    src = "https://code.highcharts.com/modules/export-data.js" >
</script>
<script>
    src = "https://code.highcharts.com/modules/accessibility.js" >
</script>
</body>

</html> --}}
