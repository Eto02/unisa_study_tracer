<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <canvas id="chart_kelamin" class="" width="400" height="400"></canvas>
    <script>
        
        
        const config_kelamin = {
        type: 'pie',
        data: {
            labels: ['Perempuan', 'Laki-Laki', 'Tidak Tersedia', ],
            datasets: [
                {
                data: [30,78,15],
                backgroundColor: ["#d93bcc","#3b82d9",'#04090f'],
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Chart.js Bar Chart'
            }
            }
        },
        };
        var chrt_klm = document.getElementById('chart_kelamin').getContext('2d');
        chrt_klm.canvas.height = 100;
        chrt_klm.canvas.height = 100;
        const myChart_kelamin = new Chart(chrt_klm, config_kelamin);
    </script>
</body>
</html>