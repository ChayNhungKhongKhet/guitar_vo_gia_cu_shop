@extends('admin.layout.master')
@section('content')

<head>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawStuff);

        function drawStuff() {
            var data = new google.visualization.arrayToDataTable([
                ['Month', 'Total'],
                <?php
                foreach ($datamonth as $d) {
                ?>['<?php echo $d[0] ?>', <?php echo $d[1] ?>],
                <?php
                } ?>
            ]);

            var options = {
                width: 1100,
                legend: {
                    position: 'none'
                },
                chart: {
                    title: 'Biểu đồ số đơn hàng ',
                },
                axes: {
                    x: {
                        0: {
                            // side: 'top',

                        } // Top x-axis.
                    }
                },
                bar: {
                    groupWidth: "90%"
                }
            };

            var chart = new google.charts.Bar(document.getElementById('top_x_div'));
            // Convert the Classic options to Material options.
            chart.draw(data, google.charts.Bar.convertOptions(options));
        };
    </script>
</head>

<body>
    <div id="top_x_div" style="margin:50px ; width: 800px; height: 600px;"></div>
</body>
@endsection
