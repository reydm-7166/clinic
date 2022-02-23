<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- <link rel="stylesheet" href="../../../user_guide/_static/css/"> -->
    <style>
        #container {
            display: inline-block;
            vertical-align: top;
            width: 79.5%;
            min-height: 90vh;
            margin-top: 1rem;
            text-align: center;
            outline: black 1px solid;
        }
        #chartContainer {
            height: 40vh;
            width: 55%;
            padding: 0;
            outline: dotted black 1px;
            margin: 3rem 1rem 0;
        }
    </style>
    <title>Chart</title>
</head>
<body>
<?php  if(empty($this->session->userdata('admin'))) { redirect('login'); } ?>  <!-- CHECKS IF ADMIN IS LOGGED IN -- IF NOT SEND BACK TO LOGIN PAGE CODE BELOW IS FOR HEADER -->
   
    <?php $this->load->view('/admin_index/admin_headers'); ?>

    <main id="container">
        <h1 class="mt-0">Clinic Activity Reports</h1>
        <div class="charts">
            <div id="chartContainer"></div>
            <div id="chartContainer1"></div>
        </div>
        
    </main>

    <script>
        window.onload = function () {

        var options = {
            animationEnabled: false,
            title: {
                text: "Treatments Performed"
            },
            data: [{
                type: "doughnut",
                innerRadius: "40%",
                showInLegend: true,
                legendText: "{label}",
                indexLabel: "{label}: #percent%",
                dataPoints: [
                    { label: "Heart Attack/Stroke Prevention", y: 6492917 },
                    { label: "Kidney Failure Recovery", y: 7380554 },
                    { label: "Cancer Recovery Program", y: 1610846 },
                    { label: "Diabetes Recovery Program", y: 950875 },
                ]
            }]
        };
        $("#chartContainer").CanvasJSChart(options);
        }
        </script>
        <script>
        window.onload = function () {

        var options1 = {
            animationEnabled: false,
            title: {
                text: "Treatments Performed"
            },
            data: [{
                type: "doughnut",
                innerRadius: "40%",
                showInLegend: true,
                legendText: "{label}",
                indexLabel: "{label}: #percent%",
                dataPoints: [
                    { label: "Heart Attack/Stroke Prevention", y: 6492917 },
                    { label: "Kidney Failure Recovery", y: 7380554 },
                    { label: "Cancer Recovery Program", y: 1610846 },
                    { label: "Diabetes Recovery Program", y: 950875 },
                ]
            }]
        };
        $("#chartContainer1").CanvasJSChart(options1);
        }
        </script>

<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>



