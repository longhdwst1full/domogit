<h3>Biểu đồ thống kê</h3>
<div id="piechart_3d" style="width: 900px; height: 500px;"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Loại', 'Số Lượng'],
            <?php
            foreach ($items as $item) {
                echo "['$item[name]', $item[so_luong]],";
            }
            ?>
        ]);
        var options = {
            title: 'THỐNG KÊ HÀNG HÓA ',
            is3D: true
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }
</script>