@extends('admin.layout.master')
@section('content')
<!-- Sale & Revenue Start -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Đàn classic', 11],
            ['Đàn guitar điện', 2],
            ['Đàn guitar bass', 2],
            ['Resonator guitar', 2],
            ['Torees guitar', 7]
        ]);
        var options = {
            title: 'Biểu đồ sản phẩm',
            pieHole: 0.4,
        };

        var data2 = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            ['Nam', 11],
            ['Nữ', 2]
        ]);
        var options2 = {
            title: 'Biểu đồ giới tính khách hàng',
            pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
        var chart = new google.visualization.PieChart(document.getElementById('donutchartsex'));
        chart.draw(data2, options2);
    }
</script>
<div class="container-fluid pt-4 px-4">
    <div id="donutchart" style="width: 900px; height: 500px;"></div>

    <div id="donutchartsex" style="width: 900px; height: 500px;"></div>
</div>
<!-- Sales Chart End -->
@endsection
