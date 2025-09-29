<div class="container mt-5">
    <h3 class="text-center">Thống kê doanh thu theo nhân viên</h3>
    <canvas id="revenueChart"></canvas>
</div>

<!-- ChartJS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('revenueChart').getContext('2d');

    // Labels and data from PHP
    const labels = [
        <?php foreach ($revenues as $row) {
            echo "'" . $row['ten_nhanvien'] . "',";
        } ?>
    ];

    const dataValues = [
        <?php foreach ($revenues as $row) {
            echo $row['doanhthu'] . ",";
        } ?>
    ];

    // Color palettes (will cycle if there are more bars than colors)
    const paletteBg = [
        'rgba(255, 99, 132, 0.6)',   // red
        'rgba(54, 162, 235, 0.6)',   // blue
        'rgba(255, 206, 86, 0.6)',   // yellow
        'rgba(75, 192, 192, 0.6)',   // green
        'rgba(153, 102, 255, 0.6)',  // purple
        'rgba(255, 159, 64, 0.6)'    // orange
    ];
    const paletteBorder = [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
    ];

    const backgroundColors = labels.map((_, i) => paletteBg[i % paletteBg.length]);
    const borderColors = labels.map((_, i) => paletteBorder[i % paletteBorder.length]);

    const revenueChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Doanh thu (VND)',
                data: dataValues,
                backgroundColor: backgroundColors,
                borderColor: borderColors,
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top'
                },
                title: {
                    display: true,
                    text: 'Doanh thu theo nhân viên'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>