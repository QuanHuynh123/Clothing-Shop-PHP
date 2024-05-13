<link rel="stylesheet"  href="./assets/css/sweetalert2.min.css">
<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

        <div id="content-1" style="width: 100%; margin-top: 50px;">
            <canvas id="revenueChart"></canvas>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Dữ liệu doanh thu (giả định)
            var revenueData = [0, 9, 2, 4];

            // Thực hiện tạo biểu đồ
            var ctx = document.getElementById('revenueChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4'],
                    datasets: [{
                        label: 'Tăng giảm doanh thu',
                        data: revenueData,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderWidth: 1,
                        fill: true
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100
                        }
                    }
                }
            });
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>