@extends('admin.layout.master')
@section('content')

<head>
    <link rel="stylesheet" href="css/admin.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.load('current', {
            'packages': ['corechart', 'bar']
        });
        google.charts.setOnLoadCallback(drawStuff);
        google.charts.setOnLoadCallback(drawChart);

        //Pie chart
        function PieChart() {
            var y = [],
                i = 1;
            y[0] = ['Quarter', 'total'];
            <?php
            foreach ($dataPieChart as $d) {
            ?>
                y[i] = ['<?php echo $d['category_name'] ?>'].concat([<?php echo $d['total_quantity'] ?>]);
                i++;
            <?php
            } ?>;
            var data = google.visualization.arrayToDataTable(y);

            var options = {
                title: 'Biểu đồ thể hiện số lượng đàn theo loại'
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);

        }

        //column chart
        // Funtion select chart month or year
        function selectChart() {
            var period = 'Month',
                dataPeriod,
                x = [],
                i = 1,
                selectedValue = document.getElementById('timePeriod').value,
                sizeColumn;

            //Only select value 2 or 1
            if (selectedValue == '2') {
                x = [],
                    i = 1;
                x[0] = ['Quarter', 'total_amount', 'total_orders'];
                <?php
                foreach ($datayear as $d) {
                ?>
                    x[i] = ['<?php echo $d['order_month'] ?>'].concat([<?php echo $d['total_amount'] ?>]).concat([<?php echo $d['total_orders'] ?>]);
                    i++;
                <?php
                } ?>;


            } else {
                if (selectedValue == '1') {
                    var period = 'Month',
                        x = [],
                        i = 1;
                    x[0] = ['Month', 'total_amount', 'total_orders'];
                    <?php
                    foreach ($datamonth as $d) {
                    ?>
                        x[i] = ['<?php echo $d['order_month'] ?>'].concat([<?php echo $d['total_amount'] ?>]).concat([<?php echo $d['total_orders'] ?>]);
                        i++;
                    <?php
                    } ?>;
                }
            }
            data = new google.visualization.arrayToDataTable(x);
            var Options = {
                width: 1200,
                series: {
                    0: {
                        targetAxisIndex: 0
                    },
                    1: {
                        targetAxisIndex: 1
                    }
                },
                vAxes: {
                    0: {
                        title: 'Tổng tiền đơn hàng'
                    },
                    1: {
                        title: 'Tổng đơn hàng'
                    }
                },
            };
            var Chart = new google.charts.Bar(document.getElementById('columnChart'));
            Chart.draw(data, google.charts.Bar.convertOptions(Options));

        }
    </script>
</head>

<body onload="PieChart(),selectChart()">
    <div>
        Biểu đồ tổng số đơn hàng theo
        <select id='timePeriod' onchange="selectChart()">
            <option value="1">Month</option>
            <option value="2">Year</option>
        </select>
    </div>
    <?php
    ?>
    <div id="columnChart" class="chartColumn" style="margin:10px 50px ; width: 800px; height: 600px;"></div>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <div id="chart_div"></div>
    <div id="chart_di" style="width: 1200px; height: 500px;"></div>
</body>
@endsection
