<!DOCTYPE html>
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
    <script>
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

</html>
