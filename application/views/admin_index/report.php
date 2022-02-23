<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <!-- line 10 import chart js-->

    <style>
        #container {
            display: inline-block;
            vertical-align: top;
            width: 79.5%;
            min-height: 90vh;
            margin-top: 1rem;
            text-align: center;
            outline: black 1px solid;
            text-overflow: scroll;
            
        }
        #chartContainer {
            height: 40vh;
            width: 55%;
            padding: 0;
            outline: dotted black 1px;
            margin: 3rem 1rem 0;
        }
        div {
            margin-bottom: 5rem;
            
        }
        form {
            margin: 1rem 1rem 2rem 1rem;
            width: 18%;
            height: 20.5vh;
            padding-top: 1rem;
        }
        form label {
            margin-top: .3rem;
        }

    </style>
    <title>Chart</title>
</head>
<body>
<?php  if(empty($this->session->userdata('admin'))) { redirect('login'); } ?>  <!-- CHECKS IF ADMIN IS LOGGED IN -- IF NOT SEND BACK TO LOGIN PAGE CODE BELOW IS FOR HEADER -->
   
    <?php $this->load->view('/admin_index/admin_headers'); ?>
    
    <main id="container">
        <h1 class="mt-0">Clinic Activity Reports</h1>
        <?php $this->load->view('/admin_index/date_form_partials'); ?>
        
        <div id="chartContainer5" style="width: 45%; height: 300px;display: inline-block;"></div> 
        <div id="chartContainer2" style="width: 45%; height: 300px;display: inline-block;"></div><br/>
        <div id="chartContainer1" style="width: 45%; height: 300px;display: inline-block;"></div> 
        <div id="chartContainer3" style="width: 45%; height: 300px;display: inline-block;"></div><br/>  
        <div id="chartContainer4" style="width: 45%; height: 300px;display: inline-block;"></div>
         
    </main>
        <?php $chart_data = $this->session->userdata('chart');
                // for($i = 0; $i < count($chart_data['user_count']); $i++){
                    foreach($chart_data['user_count'] as $data){

                        $users_chart[] = array('y' => intval($data['appointment_count']),
                                                'legendText' => "Visits:" . $data['appointment_count'],
                                                'indexLabel' => $data['Name']);
                    }
                

                
            echo "<pre>";
                print_r($users_chart);
            echo "<pre>";

            echo json_encode($users_chart);
            // echo json_encode($chart_data['age_chart']);
            // echo json_encode($chart_data['treatments_chart']);

        
        ?>
    <script>
            //     var chart = new CanvasJS.Chart("chartContainer1",
            // {
            //     animationEnabled: true,
            //     title: {
            //         text: "Spline Area Chart"
            //     },
            //     axisX: {
            //         interval: 10,
            //     },
            //     data: [
            //     {
            //         type: "splineArea",
            //         color: "rgba(255,12,32,.3)",
            //         dataPoints: [
            //             { x: new Date(1992, 0), y: 2506000 },
            //             { x: new Date(1993, 0), y: 2798000 },
            //             { x: new Date(1994, 0), y: 3386000 },
            //             { x: new Date(1995, 0), y: 6944000 },
            //             { x: new Date(1996, 0), y: 6026000 },
            //             { x: new Date(1997, 0), y: 2394000 },
            //             { x: new Date(1998, 0), y: 1872000 },
            //             { x: new Date(1999, 0), y: 2140000 },
            //             { x: new Date(2000, 0), y: 7289000 },
            //             { x: new Date(2001, 0), y: 4830000 },
            //             { x: new Date(2002, 0), y: 2009000 },
            //             { x: new Date(2003, 0), y: 2840000 },
            //             { x: new Date(2004, 0), y: 2396000 },
            //             { x: new Date(2005, 0), y: 1613000 },
            //             { x: new Date(2006, 0), y: 2821000 }
            //         ]
            //     },
            //     ]
            // });
            // chart.render();

            var chart = new CanvasJS.Chart("chartContainer2",
            {
                animationEnabled: true,
                title:{
                    text: "Appointments for the month of",
                    horizontalAlign: "center"
                },
                data: [
                {
                    type: "doughnut",
                    startAngle: 60,
                    innerRadius: 40,
                    toolTipContent: "<b>Visits:</b> {y} (#percent%)",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($users_chart); ?>
                },
                ]
            });
            chart.render();

            var chart = new CanvasJS.Chart("chartContainer5",
            {
                animationEnabled: true,
                title:{
                    text: "Treatments",
                    horizontalAlign: "left"
                },
                data: [
                {
                    type: "doughnut",
                    startAngle: 60,
                    //innerRadius: 60,
                    indexLabel: "{label} - #percent%",
                    toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                    showInLegend: true,
                    dataPoints: [
                        { y: 4181563, legendText: "PS 3", indexLabel: "PlayStation 3" },
                        { y: 2175498, legendText: "Wii", indexLabel: "Wii" },
                        { y: 3125844, legendText: "360", indexLabel: "Xbox 360" },
                        { y: 1176121, legendText: "DS", indexLabel: "Nintendo DS" },
                        { y: 1727161, legendText: "PSP", indexLabel: "PSP" },
                        { y: 4303364, legendText: "3DS", indexLabel: "Nintendo 3DS" },
                        { y: 1717786, legendText: "Vita", indexLabel: "PS Vita" }
                    ]
                },
                ]
            });
            chart.render();

            // var chart = new CanvasJS.Chart("chartContainer3",
            // {
            //     animationEnabled: true,
            //     title: {
            //         text: "Line Chart"
            //     },
            //     axisX: {
            //         valueFormatString: "MMM",
            //         interval: 1,
            //         intervalType: "month"
            //     },
            //     axisY: {
            //         includeZero: false
            //     },
            //     data: [
            //     {
            //         type: "line",
            //         dataPoints: [
            //             { x: new Date(2012, 00, 1), y: 450 },
            //             { x: new Date(2012, 01, 1), y: 414 },
            //             { x: new Date(2012, 02, 1), y: 520, indexLabel: "highest", markerColor: "red", markerType: "triangle" },
            //             { x: new Date(2012, 03, 1), y: 460 },
            //             { x: new Date(2012, 04, 1), y: 450 },
            //             { x: new Date(2012, 05, 1), y: 500 },
            //             { x: new Date(2012, 06, 1), y: 480 },
            //             { x: new Date(2012, 07, 1), y: 480 },
            //             { x: new Date(2012, 08, 1), y: 410, indexLabel: "lowest", markerColor: "DarkSlateGrey", markerType: "cross" },
            //             { x: new Date(2012, 09, 1), y: 500 },
            //             { x: new Date(2012, 10, 1), y: 480 },
            //             { x: new Date(2012, 11, 1), y: 510 }
            //         ]
            //     }
            //     ]
            // });
            // chart.render();

            // var chart = new CanvasJS.Chart("chartContainer4",
            // {
            //     animationEnabled: true,
            //     title: {
            //         text: "Column Chart"
            //     },
            //     axisX: {
            //         interval: 10,
            //     },
            //     data: [
            //     {
            //         type: "column",
            //         legendMarkerType: "triangle",
            //         legendMarkerColor: "green",
            //         color: "rgba(255,12,32,.3)",
            //         showInLegend: true,
            //         legendText: "Country wise population",
            //         dataPoints: [
            //             { x: 10, y: 297571, label: "India" },
            //             { x: 20, y: 267017, label: "Saudi" },
            //             { x: 30, y: 175200, label: "Canada" },
            //             { x: 40, y: 154580, label: "Iran" },
            //             { x: 50, y: 116000, label: "Russia" },
            //             { x: 60, y: 97800, label: "UAE" },
            //             { x: 70, y: 20682, label: "US" },
            //             { x: 80, y: 20350, label: "China" }
            //         ]
            //     },
            //     ]
            // });
            // chart.render();
        </script>

</body>
</html>



