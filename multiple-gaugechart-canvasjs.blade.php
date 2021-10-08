<!DOCTYPE HTML>
<html>

<head>
    


    <script>
        window.onload = function () {
            @foreach ($insla as $row)
            // gauge
            var gauge = {
                title: {
                    text: "Dispenser Failure"
                },
                data: {
                    y: {{$row->DispenserFailure}}
                },
                maximum: 10000
            };
            // gauge1
            var gauge1 = {
                title: {
                    text: "Cash Out"
                },
                data: {
                    y: {{$row->CashOut}}
                },
                maximum: 1000
            };
            // gauge2
            var gauge2 = {
                title: {
                    text: "Cash Full"
                },
                data: {
                    y: {{$row->CashFull}}
                },
                maximum: 1000
            };
            // gauge3
            var gauge3 = {
                title: {
                    text: "Receipt Low/Out"
                },
                data: {
                    y: {{$row->ReceiptLowOut}}
                },
                maximum: 10000
            };
            // gauge4
            var gauge4 = {
                title: {
                    text: "Replace Part"
                },
                data: {
                    y: {{$row->ReplacePart}}
                },
                maximum: 1000
            };
            // gauge5
            var gauge5 = {
                title: {
                    text: "Check/Clean"
                },
                data: {
                    y: {{$row->CheckClean}}
                },
                maximum: 1000
            };
            @endforeach

            @foreach ($outsla as $row)
            // gauge6
            var gauge6 = {
                title: {
                    text: "Dispenser Failure"
                },
                data: {
                    y: {{$row->DispenserFailure}}
                },
                maximum: 1000
            };
            // gauge7
            var gauge7 = {
                title: {
                    text: "Cash Out"
                },
                data: {
                    y: {{$row->CashOut}}
                },
                maximum: 1000
            };
            // gauge8
            var gauge8 = {
                title: {
                    text: "Cash Full"
                },
                data: {
                    y: {{$row->CashFull}}
                },
                maximum: 1000
            };
            // gauge9
            var gauge9 = {
                title: {
                    text: "Receipt Low/Out"
                },
                data: {
                    y: {{$row->ReceiptLowOut}}
                },
                maximum: 1000
            };
            // gauge10
            var gauge10 = {
                title: {
                    text: "Replace Part"
                },
                data: {
                    y: {{$row->ReplacePart}}
                },
                maximum: 1000
            };
            // gauge11
            var gauge11 = {
                title: {
                    text: "Check/Clean"
                },
                data: {
                    y: {{$row->CheckClean}}
                },
                maximum: 1000
            };
            @endforeach


            var chart = new CanvasJS.Chart("chartContainer");
            var chart1 = new CanvasJS.Chart("chartContainer1");
            var chart2 = new CanvasJS.Chart("chartContainer2");
            var chart3 = new CanvasJS.Chart("chartContainer3");
            var chart4 = new CanvasJS.Chart("chartContainer4");
            var chart5 = new CanvasJS.Chart("chartContainer5");
            var chart6 = new CanvasJS.Chart("chartContainer6");
            var chart7 = new CanvasJS.Chart("chartContainer7");
            var chart8 = new CanvasJS.Chart("chartContainer8");
            var chart9 = new CanvasJS.Chart("chartContainer9");
            var chart10 = new CanvasJS.Chart("chartContainer10");
            var chart11 = new CanvasJS.Chart("chartContainer11");
            createGauge(chart, chart1, chart2, chart3, chart4, chart5, chart6, chart7, chart8, chart9, chart10, chart11);

            //Function for gauge
            function createGauge(chart, chart1, chart2, chart3, chart4, chart5, chart6, chart7, chart8, chart9, chart10, chart11) {
                //Caluculation of remaining parameters to render gauge with the help of doughnut
                // gauge 
                gauge.unoccupied = {
                    y: gauge.maximum - gauge.data.y,
                    color: "#DEDEDE",
                    toolTipContent: null,
                    highlightEnabled: false,
                    click: function () {
                        gauge.unoccupied.exploded = true;
                    }
                }
                // gauge1
                gauge1.unoccupied = {
                    y: gauge1.maximum - gauge1.data.y,
                    color: "#DEDEDE",
                    toolTipContent: null,
                    highlightEnabled: false,
                    click: function () {
                        gauge1.unoccupied.exploded = true;
                    }
                }
                // gauge2
                gauge2.unoccupied = {
                    y: gauge2.maximum - gauge2.data.y,
                    color: "#DEDEDE",
                    toolTipContent: null,
                    highlightEnabled: false,
                    click: function () {
                        gauge2.unoccupied.exploded = true;
                    }
                }
                // gauge3
                gauge3.unoccupied = {
                    y: gauge3.maximum - gauge3.data.y,
                    color: "#DEDEDE",
                    toolTipContent: null,
                    highlightEnabled: false,
                    click: function () {
                        gauge3.unoccupied.exploded = true;
                    }
                }
                // gauge4
                gauge4.unoccupied = {
                    y: gauge4.maximum - gauge4.data.y,
                    color: "#DEDEDE",
                    toolTipContent: null,
                    highlightEnabled: false,
                    click: function () {
                        gauge4.unoccupied.exploded = true;
                    }
                }
                // gauge5
                gauge5.unoccupied = {
                    y: gauge5.maximum - gauge5.data.y,
                    color: "#DEDEDE",
                    toolTipContent: null,
                    highlightEnabled: false,
                    click: function () {
                        gauge5.unoccupied.exploded = true;
                    }
                }
                // gauge6
                gauge6.unoccupied = {
                    y: gauge6.maximum - gauge6.data.y,
                    color: "#DEDEDE",
                    toolTipContent: null,
                    highlightEnabled: false,
                    click: function () {
                        gauge6.unoccupied.exploded = true;
                    }
                }
                // gauge7
                gauge7.unoccupied = {
                    y: gauge7.maximum - gauge7.data.y,
                    color: "#DEDEDE",
                    toolTipContent: null,
                    highlightEnabled: false,
                    click: function () {
                        gauge7.unoccupied.exploded = true;
                    }
                }
                // gauge8
                gauge8.unoccupied = {
                    y: gauge8.maximum - gauge8.data.y,
                    color: "#DEDEDE",
                    toolTipContent: null,
                    highlightEnabled: false,
                    click: function () {
                        gauge8.unoccupied.exploded = true;
                    }
                }
                // gauge9
                gauge9.unoccupied = {
                    y: gauge9.maximum - gauge9.data.y,
                    color: "#DEDEDE",
                    toolTipContent: null,
                    highlightEnabled: false,
                    click: function () {
                        gauge9.unoccupied.exploded = true;
                    }
                }
                // gauge10
                gauge10.unoccupied = {
                    y: gauge10.maximum - gauge10.data.y,
                    color: "#DEDEDE",
                    toolTipContent: null,
                    highlightEnabled: false,
                    click: function () {
                        gauge10.unoccupied.exploded = true;
                    }
                }
                // gauge11
                gauge11.unoccupied = {
                    y: gauge11.maximum - gauge11.data.y,
                    color: "#DEDEDE",
                    toolTipContent: null,
                    highlightEnabled: false,
                    click: function () {
                        gauge11.unoccupied.exploded = true;
                    }
                }
                // gauge
                gauge.data.click = function () {
                    gauge.data.exploded = true;
                };
                // gauge1
                gauge1.data.click = function () {
                    gauge1.data.exploded = true;
                };
                // gauge2
                gauge2.data.click = function () {
                    gauge2.data.exploded = true;
                };
                // gauge3
                gauge3.data.click = function () {
                    gauge3.data.exploded = true;
                };
                // gauge4
                gauge4.data.click = function () {
                    gauge4.data.exploded = true;
                };
                // gauge5
                gauge5.data.click = function () {
                    gauge5.data.exploded = true;
                };
                // gauge6
                gauge6.data.click = function () {
                    gauge6.data.exploded = true;
                };
                // gauge7
                gauge7.data.click = function () {
                    gauge7.data.exploded = true;
                };
                // gauge8
                gauge8.data.click = function () {
                    gauge8.data.exploded = true;
                };
                // gauge9
                gauge9.data.click = function () {
                    gauge9.data.exploded = true;
                };
                // gauge10
                gauge10.data.click = function () {
                    gauge10.data.exploded = true;
                };
                // gauge11
                gauge11.data.click = function () {
                    gauge11.data.exploded = true;
                };
                // gauge
                if (!gauge.data.color)
                    gauge.data.color = "#7EC8E3";
                gauge.valueText = {
                    text: gauge.data.y.toString(),
                    verticalAlign: "center"
                };
                // gauge1
                if (!gauge1.data.color)
                    gauge1.data.color = "#FF4500";
                gauge1.valueText = {
                    text: gauge1.data.y.toString(),
                    verticalAlign: "center"
                };
                // gauge2
                if (!gauge2.data.color)
                    gauge2.data.color = "#D10000";
                gauge2.valueText = {
                    text: gauge2.data.y.toString(),
                    verticalAlign: "center"
                };
                // gauge3
                if (!gauge3.data.color)
                    gauge3.data.color = "#0E86D4";
                gauge3.valueText = {
                    text: gauge3.data.y.toString(),
                    verticalAlign: "center"
                };
                // gauge4
                if (!gauge4.data.color)
                    gauge4.data.color = "#BF40BF";
                gauge4.valueText = {
                    text: gauge4.data.y.toString(),
                    verticalAlign: "center"
                };
                // gauge5
                if (!gauge5.data.color)
                    gauge5.data.color = "#332A99";
                gauge5.valueText = {
                    text: gauge5.data.y.toString(),
                    verticalAlign: "center"
                };
                // gauge6
                if (!gauge6.data.color)
                    gauge6.data.color = "#FEDE00";
                gauge6.valueText = {
                    text: gauge6.data.y.toString(),
                    verticalAlign: "center"
                };
                // gauge7
                if (!gauge7.data.color)
                    gauge7.data.color = "#FEDE00";
                gauge7.valueText = {
                    text: gauge7.data.y.toString(),
                    verticalAlign: "center"
                };
                // gauge8
                if (!gauge8.data.color)
                    gauge8.data.color = "#FEDE00";
                gauge8.valueText = {
                    text: gauge8.data.y.toString(),
                    verticalAlign: "center"
                };
                // gauge9
                if (!gauge9.data.color)
                    gauge9.data.color = "#FEDE00";
                gauge9.valueText = {
                    text: gauge9.data.y.toString(),
                    verticalAlign: "center"
                };
                // gauge10
                if (!gauge10.data.color)
                    gauge10.data.color = "#FEDE00";
                gauge10.valueText = {
                    text: gauge10.data.y.toString(),
                    verticalAlign: "center"
                };
                // gauge11
                if (!gauge11.data.color)
                    gauge11.data.color = "#FEDE00";
                gauge11.valueText = {
                    text: gauge11.data.y.toString(),
                    verticalAlign: "center"
                };
                // gauge&data
                var data = {
                    type: "doughnut",
                    dataPoints: [{
                            y: gauge.maximum,
                            color: "transparent",
                            toolTipContent: null
                        },
                        gauge.data,
                        gauge.unoccupied
                    ],
                };
                // gauge1&data1
                var data1 = {
                    type: "doughnut",
                    dataPoints: [{
                            y: gauge1.maximum,
                            color: "transparent",
                            toolTipContent: null
                        },
                        gauge1.data,
                        gauge1.unoccupied
                    ],
                };
                // gauge2&data2
                var data2 = {
                    type: "doughnut",
                    dataPoints: [{
                            y: gauge2.maximum,
                            color: "transparent",
                            toolTipContent: null
                        },
                        gauge2.data,
                        gauge2.unoccupied
                    ],
                };
                // gauge3&data3
                var data3 = {
                    type: "doughnut",
                    dataPoints: [{
                            y: gauge3.maximum,
                            color: "transparent",
                            toolTipContent: null
                        },
                        gauge3.data,
                        gauge3.unoccupied
                    ],
                };
                // gauge4&data4
                var data4 = {
                    type: "doughnut",
                    dataPoints: [{
                            y: gauge4.maximum,
                            color: "transparent",
                            toolTipContent: null
                        },
                        gauge4.data,
                        gauge4.unoccupied
                    ],
                };
                // gauge5&data5
                var data5 = {
                    type: "doughnut",
                    dataPoints: [{
                            y: gauge5.maximum,
                            color: "transparent",
                            toolTipContent: null
                        },
                        gauge5.data,
                        gauge5.unoccupied
                    ],
                };
                // gauge6&data6
                var data6 = {
                    type: "doughnut",
                    dataPoints: [{
                            y: gauge6.maximum,
                            color: "transparent",
                            toolTipContent: null
                        },
                        gauge6.data,
                        gauge6.unoccupied
                    ],
                };
                // gauge7&data7
                var data7 = {
                    type: "doughnut",
                    dataPoints: [{
                            y: gauge7.maximum,
                            color: "transparent",
                            toolTipContent: null
                        },
                        gauge7.data,
                        gauge7.unoccupied
                    ],
                };
                // gauge8&data8
                var data8 = {
                    type: "doughnut",
                    dataPoints: [{
                            y: gauge8.maximum,
                            color: "transparent",
                            toolTipContent: null
                        },
                        gauge8.data,
                        gauge8.unoccupied
                    ],
                };
                // gauge9&data9
                var data9 = {
                    type: "doughnut",
                    dataPoints: [{
                            y: gauge9.maximum,
                            color: "transparent",
                            toolTipContent: null
                        },
                        gauge9.data,
                        gauge9.unoccupied
                    ],
                };
                // gauge10&data10
                var data10 = {
                    type: "doughnut",
                    dataPoints: [{
                            y: gauge10.maximum,
                            color: "transparent",
                            toolTipContent: null
                        },
                        gauge10.data,
                        gauge10.unoccupied
                    ],
                };
                // gauge11&data11
                var data11 = {
                    type: "doughnut",
                    dataPoints: [{
                            y: gauge11.maximum,
                            color: "transparent",
                            toolTipContent: null
                        },
                        gauge11.data,
                        gauge11.unoccupied
                    ],
                };
                // chart&push(data)
                if (!chart.options.data)
                    chart.options.data = [];
                chart.options.data.push(data);
                // chart1&push(data1)
                if (!chart1.options.data)
                    chart1.options.data = [];
                chart1.options.data.push(data1);
                // chart2&push(data2)
                if (!chart2.options.data)
                    chart2.options.data = [];
                chart2.options.data.push(data2);
                // chart3&push(data3)
                if (!chart3.options.data)
                    chart3.options.data = [];
                chart3.options.data.push(data3);
                // chart4&push(data4)
                if (!chart4.options.data)
                    chart4.options.data = [];
                chart4.options.data.push(data4);
                // chart5&push(data5)
                if (!chart5.options.data)
                    chart5.options.data = [];
                chart5.options.data.push(data5);
                // chart6&push(data6)
                if (!chart6.options.data)
                    chart6.options.data = [];
                chart6.options.data.push(data6);
                // chart7&push(data7)
                if (!chart7.options.data)
                    chart7.options.data = [];
                chart7.options.data.push(data7);
                // chart8&push(data8)
                if (!chart8.options.data)
                    chart8.options.data = [];
                chart8.options.data.push(data8);
                // chart9&push(data9)
                if (!chart9.options.data)
                    chart9.options.data = [];
                chart9.options.data.push(data9);
                // chart10&push(data10)
                if (!chart10.options.data)
                    chart10.options.data = [];
                chart10.options.data.push(data10);
                // chart11&push(data11)
                if (!chart11.options.data)
                    chart11.options.data = [];
                chart11.options.data.push(data11);
                // chart&gauge
                if (gauge.title) {
                    chart.options.title = gauge.title;
                }
                // chart1&gauge1
                if (gauge1.title) {
                    chart1.options.title = gauge1.title;
                }
                // chart2&gauge2
                if (gauge2.title) {
                    chart2.options.title = gauge2.title;
                }
                // chart3&gauge3
                if (gauge3.title) {
                    chart3.options.title = gauge3.title;
                }
                // chart4&gauge4
                if (gauge4.title) {
                    chart4.options.title = gauge4.title;
                }
                // chart5&gauge5
                if (gauge5.title) {
                    chart5.options.title = gauge5.title;
                }
                // chart6&gauge6
                if (gauge6.title) {
                    chart6.options.title = gauge6.title;
                }
                // chart7&gauge7
                if (gauge7.title) {
                    chart7.options.title = gauge7.title;
                }
                // chart8&gauge8
                if (gauge8.title) {
                    chart8.options.title = gauge8.title;
                }
                // chart9&gauge9
                if (gauge9.title) {
                    chart9.options.title = gauge9.title;
                }
                // chart10&gauge10
                if (gauge10.title) {
                    chart10.options.title = gauge10.title;
                }
                // chart11&gauge11
                if (gauge11.title) {
                    chart11.options.title = gauge11.title;
                }

                //For showing value chart&gauge
                if (!chart.options.subtitles)
                    chart.options.subtitles = [];
                chart.options.subtitles.push(gauge.valueText);

                chart.render();

                //For showing value chart1&gauge1
                if (!chart1.options.subtitles)
                    chart1.options.subtitles = [];
                chart1.options.subtitles.push(gauge1.valueText);

                chart1.render();

                //For showing value chart2&gauge2
                if (!chart2.options.subtitles)
                    chart2.options.subtitles = [];
                chart2.options.subtitles.push(gauge2.valueText);

                chart2.render();

                //For showing value chart3&gauge3
                if (!chart3.options.subtitles)
                    chart3.options.subtitles = [];
                chart3.options.subtitles.push(gauge3.valueText);

                chart3.render();

                //For showing value chart4&gauge4
                if (!chart4.options.subtitles)
                    chart4.options.subtitles = [];
                chart4.options.subtitles.push(gauge4.valueText);

                chart4.render();

                //For showing value chart5&gauge5
                if (!chart5.options.subtitles)
                    chart5.options.subtitles = [];
                chart5.options.subtitles.push(gauge5.valueText);

                chart5.render();

                //For showing value chart6&gauge6
                if (!chart6.options.subtitles)
                    chart6.options.subtitles = [];
                chart6.options.subtitles.push(gauge6.valueText);

                chart6.render();

                //For showing value chart7&gauge7
                if (!chart7.options.subtitles)
                    chart7.options.subtitles = [];
                chart7.options.subtitles.push(gauge7.valueText);

                chart7.render();

                //For showing value chart8&gauge8
                if (!chart8.options.subtitles)
                    chart8.options.subtitles = [];
                chart8.options.subtitles.push(gauge8.valueText);

                chart8.render();

                //For showing value chart9&gauge9
                if (!chart9.options.subtitles)
                    chart9.options.subtitles = [];
                chart9.options.subtitles.push(gauge9.valueText);

                chart9.render();

                //For showing value chart10&gauge10
                if (!chart10.options.subtitles)
                    chart10.options.subtitles = [];
                chart10.options.subtitles.push(gauge10.valueText);

                chart10.render();

                //For showing value chart11&gauge11
                if (!chart11.options.subtitles)
                    chart11.options.subtitles = [];
                chart11.options.subtitles.push(gauge11.valueText);

                chart11.render();
            }

        }
    </script>

</head>

<body>
    @foreach ($insla as $row)
    <h4 style="margin-right: 40%; font-weight: bold; color: #454545; text-align: center;  line-height: 0px;">{{$row->sla}}</h4>
    @endforeach
    @foreach ($outsla as $row)
    <h4 style="margin-left: 60%; font-weight: bold; color: #454545; text-align: center;  line-height: 0px;">{{$row->sla}}</h4>
    @endforeach
    <div id="chartContainer" style="height: 100px;  width: 8.2%; float:left; "></div>
    <div id="chartContainer1" style="height: 100px; width: 8.2%; float:left; "></div>
    <div id="chartContainer2" style="height: 100px; width: 8.2%; float:left; "></div>
    <div id="chartContainer3" style="height: 100px; width: 8.2%; float:left; "></div>
    <div id="chartContainer4" style="height: 100px; width: 8.2%; float:left; "></div>
    <div id="chartContainer5" style="height: 100px; width: 8.2%; float:left; margin-right:10px "></div>
    <div id="chartContainer6" style="height: 100px; width: 8.2%; float:left; "></div>
    <div id="chartContainer7" style="height: 100px; width: 8.2%; float:left; "></div>
    <div id="chartContainer8" style="height: 100px; width: 8.2%; float:left; "></div>
    <div id="chartContainer9" style="height: 100px; width: 8.2%; float:left; "></div>
    <div id="chartContainer10" style="height: 100px; width: 8.2%; float:left; "></div>
    <div id="chartContainer11" style="height: 100px; width: 8.2%; float:left; "></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>

</html>
