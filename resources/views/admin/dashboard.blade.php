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
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        //Pie chart
        function PieChart() {
            var y = [],
                i = 1;
            y[0] = ['Quarter', 'total'];
            <?php
            foreach ($results as $d) {
            ?>
                y[i] = ['<?php echo $d['category_name'] ?>'].concat([<?php echo $d['total_quantity'] ?>]);
                i++;
            <?php
            } ?>;
            var data = google.visualization.arrayToDataTable(y);

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
                selectedValue = document.getElementById('timePeriod').value,
                sizeColumn;

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
                    sizeColumn = '50%';
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
                        sizeColumn = '15%';
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
                        groupWidth: sizeColumn
                    }
                };
                var chart = new google.charts.Bar(document.getElementById('columnChart'));
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
            var chart = new google.charts.Bar(document.getElementById('columnChart'));
            // Convert the Classic options to Material options.
            chart.draw(dataRequestGGChart, google.charts.Bar.convertOptions(options));
        }



        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Category', 'Sales', 'Profit'],
                ['Category A', 100, 20],
                ['Category B', 150, 30],
                ['Category C', 200, 40],
                // Thêm dữ liệu tương tự cho các category khác nếu cần
            ]);

            var options = {
                title: 'Column and Line Chart',
                seriesType: 'bars',
                width: 800,
                height: 600
            };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>

<body onload="getDataChartMonth(),PieChart()">
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
    <div id="columnChart" class="chartColumn" style="margin:10px 50px ; width: 800px; height: 600px;"></div>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <div id="chart_div"></div>

    <?php
    print_r($resultsStacked);
    ?>
</body>
@endsection
