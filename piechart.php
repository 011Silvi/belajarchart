<!DOCTYPE html>
<html>
<head>
    <title>Grafik Perbandingan Total Kasus 10 Negara</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart"></canvas>

    <script>
        // Data negara dan total kasus
        var countries = ["India", "Japan", "S.Korea", "Turkey", "Vietnam", "Taiwan", "Iran", "Indonesia", "Malaysia", "Israel"];
        var totalCases = [44986461, 33803572, 31548083, 17232066, 11602738, 10239998, 7611224, 6802090, 5088009, 4824551];

        // Membuat grafik
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: countries,
                datasets: [{
                    label: 'Total Kasus',
                    data: totalCases,
                    backgroundColor: [
                        'rgba(255, 105, 180, 0.2)',   // Pink
                        'rgba(255, 0, 0, 0.2)',       // Merah
                        'rgba(0, 255, 0, 0.2)',       // Hijau
                        'rgba(0, 0, 255, 0.2)',       // Biru
                        'rgba(153, 102, 255, 0.2)',   // Ungu
                        'rgba(255, 255, 0, 0.2)',     // Kuning
                        'rgba(255, 165, 0, 0.2)',     // Orange
                        'rgba(173, 216, 230, 0.2)',   // Baby Blue
                        'rgba(255, 192, 203, 0.2)',   // Baby Pink
                        'rgba(139, 69, 19, 0.2)'      // Coklat
                    ],
                    borderColor: [
                        'rgba(255, 105, 180, 1)',     // Pink
                        'rgba(255, 0, 0, 1)',         // Merah
                        'rgba(0, 255, 0, 1)',         // Hijau
                        'rgba(0, 0, 255, 1)',         // Biru
                        'rgba(153, 102, 255, 1)',     // Ungu
                        'rgba(255, 255, 0, 1)',       // Kuning
                        'rgba(255, 165, 0, 1)',       // Orange
                        'rgba(173, 216, 230, 1)',     // Baby Blue
                        'rgba(255, 192, 203, 1)',     // Baby Pink
                        'rgba(139, 69, 19, 1)'        // Coklat
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                var label = context.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                label += context.formattedValue;
                                return label;
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
