<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br /><!-- Just so that JSFiddle's Result label doesn't overlap the Chart -->
    <div id="pageContent">
        <div id="chartContainer" style="height: 360px; width: 100%;"></div>
    </div>
    <button id="exportAsDoc">
        Export As Doc
    </button>

    <script src="<?php echo base_url() . 'assets/plugins/jquery/jquery.min.js' ?>"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript" src="https://markswindoll.github.io/js/FileSaver.js"></script>
    <script type="text/javascript" src="https://markswindoll.github.io/jquery-word-export/jquery.wordexport.js"></script>

    <script>
        var chart_data = JSON.parse('<?php echo $chart_data ?>');
        // var dps1 = [{
        //     label: ["Pertanyaan 1", "Pertanyaan 2", "Pertanyaan 3", "Pertanyaan 4", "Pertanyaan 5", "Pertanyaan 6", "Pertanyaan 7", "Pertanyaan 8", "Pertanyaan 9", "Pertanyaan 10", "Pertanyaan 11", "Pertanyaan 12", "Pertanyaan 13", "Pertanyaan 14", "Pertanyaan 15", "Pertanyaan 16", "Pertanyaan 17", "Pertanyaan 18", "Pertanyaan 19", "Pertanyaan 20"],
        //     y: chart_data.Total2,
        // }];
        // var dps2 = [{
        //     label: ["Pertanyaan 1", "Pertanyaan 2", "Pertanyaan 3", "Pertanyaan 4", "Pertanyaan 5", "Pertanyaan 6", "Pertanyaan 7", "Pertanyaan 8", "Pertanyaan 9", "Pertanyaan 10", "Pertanyaan 11", "Pertanyaan 12", "Pertanyaan 13", "Pertanyaan 14", "Pertanyaan 15", "Pertanyaan 16", "Pertanyaan 17", "Pertanyaan 18", "Pertanyaan 19", "Pertanyaan 20"],
        //     y: chart_data.Total,
        // }];
        var label = ["Pertanyaan 1", "Pertanyaan 2", "Pertanyaan 3", "Pertanyaan 4", "Pertanyaan 5", "Pertanyaan 6", "Pertanyaan 7", "Pertanyaan 8", "Pertanyaan 9", "Pertanyaan 10", "Pertanyaan 11", "Pertanyaan 12", "Pertanyaan 13", "Pertanyaan 14", "Pertanyaan 15", "Pertanyaan 16", "Pertanyaan 17", "Pertanyaan 18", "Pertanyaan 19", "Pertanyaan 20"];
        var total1 = chart_data.Total;
        var total2 = chart_data.Total2;
        var dps1 = [];
        var dps2 = [];
        console.log(total1);
        console.log(total2);
        console.log(label);


        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,

            title: {
                text: "Fortune 500 Companies by Country"
            },
            axisX: {
                interval: 1
            },
            axisY2: {
                interlacedColor: "rgba(1,77,101,.2)",
                gridColor: "rgba(1,77,101,.1)",
                title: "Number of Companies"
            },
            data: [{
                type: "bar",
                name: "companies",
                axisYType: "secondary",
                color: "#014D65",
                indexLabel: "{y}",
                indexLabelPlacement: "outside",
                indexLabelOrientation: "horizontal",
                name: "Kualitas pelayanan",
                color: "gold",
                datapoints: dps1,
                // dataPoints: [{
                //         y: chart_data.testsum,
                //         label: "Pertanyaan 1"
                //     },
                //     {
                //         y: 0,
                //         label: "China"
                //     },
                //     {
                //         y: 0,
                //         label: "France"
                //     },
                //     {
                //         y: 0,
                //         label: "Great Britain"
                //     },
                //     {
                //         y: 0,
                //         label: "Germany"
                //     },
                //     {
                //         y: 0,
                //         label: "Russia"
                //     },
                //     {
                //         y: 0,
                //         label: "USA"
                //     }
                // ],
            }, ]
        });

        function parseDataPoints() {
            for (var i = dps1.length; i < total1.length; i++)
                dps1.push({
                    y: total1[i],
                    x: label[i],
                    // x: "0",

                });
        };

        function parseDataPoints2() {
            for (var i = dps2.length; i < total2.length; i++)
                dps2.push({
                    y: total2[i],
                    x: label[i]
                });
        };

        function addDataPoints() {
            parseDataPoints();
            chart.options.data[0].dataPoints = dps1;
            // parseDataPoints2();
            // chart.options.data[1].dataPoints = dps2;
            chart.render();
        }

        // function addDataPoints2() {
        //     parseDataPoints2();
        //     chart.options.data[0].dataPoints = dps2;
        //     chart.render();
        // }

        // chart.render();
        addDataPoints();
        // addDataPoints2();

        console.log(dps1);
        console.log(dps2);


        var canvas = $("#chartContainer .canvasjs-chart-canvas").get(0);

        $("#exportAsDoc").click(function(event) {
            var dataURL = canvas.toDataURL();
            var image = "<div id='export'><img class='hide' src='" + dataURL + "'/></div>";
            $("#pageContent").append(image);
            $("#export").wordExport("Laporan");
            $("#export").remove();
        });
    </script>

</body>

</html>