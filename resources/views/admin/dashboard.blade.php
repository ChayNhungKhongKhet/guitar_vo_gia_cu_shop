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
        google.charts.setOnLoadCallback(drawChart);
        //Pie chart
        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Work', 11],
                ['Eat', 2],
                ['Commute', 2],
                ['Watch TV', 2],
                ['Sleep', 7]
            ]);

            var options = {
                title: 'My Daily Activities'
            };
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }

        //column chart
        // Funtion select chart month, quarter or year
        function selectChart() {
            var period = 'Month',
                dataPeriod,
                x = [],
                i = 1,
                dataRequestGGChart,
                selectedValue = document.getElementById('timePeriod').value;

            //Only select value 2 or 3
            if (selectedValue == '2' || selectedValue == '3') {

                if (selectedValue == '2') {
                    x[0] = ['Quarter', 'total'];
                    i = 1;
                    <?php
                    foreach ($dataquarter as $d) {
                    ?>
                        x[i] = ['<?php echo $d[0] ?>'].concat([<?php echo $d[1] ?>]);
                        i++;
                    <?php
                    } ?>;
                    dataRequestGGChart = new google.visualization.arrayToDataTable(x);
                } else {
                    if (selectedValue == '3') {
                        x[0] = ['Year', 'total'];
                        i = 1;
                        <?php
                        foreach ($datayear as $d) {
                        ?>
                            x[i] = ['<?php echo $d[0] ?>'].concat([<?php echo $d[1] ?>]);
                            i++;
                        <?php
                        } ?>;
                        dataRequestGGChart = new google.visualization.arrayToDataTable(x);
                    }

                }
                var options = {
                    width: 1100,
                    legend: {
                        position: 'none'
                    },
                    chart: {},
                    axes: {
                        x: {
                            0: {
                                // side: 'top',
                            } // Top x-axis.
                        }
                    },
                    bar: {
                        groupWidth: "50%"
                    }
                };
                var chart = new google.charts.Bar(document.getElementById('top_x_div'));
                // Convert the Classic options to Material options.
                chart.draw(dataRequestGGChart, google.charts.Bar.convertOptions(options));
            } else {
                if (selectedValue == '1') {
                    getDataChartMonth();
                }

            }
        }

        //Funtion get data for chart month
        function getDataChartMonth() {
            var period = 'Month',
                dataPeriod,
                x = [],
                i = 1,
                dataRequestGGChart;
            x[0] = ['Month', 'total'];
            <?php
            foreach ($datamonth as $d) {
            ?>
                x[i] = ['<?php echo $d[0] ?>'].concat([<?php echo $d[1] ?>]);
                i++;
            <?php
            } ?>;
            dataRequestGGChart = new google.visualization.arrayToDataTable(x);
            var options = {
                width: 1100,
                legend: {
                    position: 'none'
                },
                chart: {},
                axes: {
                    x: {
                        0: {
                            // side: 'top',
                        } // Top x-axis.
                    }
                },
                bar: {
                    groupWidth: "50%"
                }
            };
            var chart = new google.charts.Bar(document.getElementById('top_x_div'));
            // Convert the Classic options to Material options.
            chart.draw(dataRequestGGChart, google.charts.Bar.convertOptions(options));
        }
    </script>
</head>

<body onload="getDataChartMonth(),drawChart()">
    <div>
        Biểu đồ tổng số đơn hàng theo
        <select id='timePeriod' onchange="selectChart()">
            <option value="1">Month</option>
            <option value="2">Quarter</option>
            <option value="3">Year</option>
        </select>
    </div>
    <?php
    ?>
    <div id="top_x_div" class="chartColumn" style="margin:10px 50px ; width: 800px; height: 600px;"></div>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
@endsection
