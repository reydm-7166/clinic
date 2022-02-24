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
            height: 98vh;
            margin-top: 1rem;
            text-align: center;
            text-overflow: scroll; 
        }
        #container h1 {
            margin-bottom: 9rem;
        }
        div {
            height: 40vh;
            width: 55%;
            border: 1px solid black;
            display: inline-block;
            margin: 1rem 1rem;
            width: 44%; 
            height: 300px;
        }
        #date {
            position: absolute;
            right: 2rem;
            top: 1rem;
            margin: 1rem;
            width: 15%;
            height: 15vh;
        }
        #date input{
            margin-bottom: .5rem;
        }
        #date #submit {
            margin-top: -1rem;
        }


    </style>
    <title>Chart</title>
</head>
<body>
<?php  if(empty($this->session->userdata('admin'))) { redirect('login'); } ?>  <!-- CHECKS IF ADMIN IS LOGGED IN -- IF NOT SEND BACK TO LOGIN PAGE CODE BELOW IS FOR HEADER -->
   
    <?php $this->load->view('/partials/admin_headers'); ?>
    
    <main id="container">
        <h1 class="mt-0">Clinic Activity Reports</h1>
        <?php $this->load->view('/partials/date_form_partials'); ?>
        
        <div id="chartContainer5"></div> 
        <div id="chartContainer2"></div><br/>
        <div id="chartContainer1"></div> 
        <div id="chartContainer3"></div><br/>  
        <!-- <div id="chartContainer4"></div>  -->
         
    </main>
        <?php $chart_data = $this->session->userdata('chart');
                // for($i = 0; $i < count($chart_data['user_count']); $i++){
                    foreach($chart_data['user_count'] as $data){

                    $users_chart[] = array('y' => intval($data['appointment_count']),
                                            'legendText' => $data['Name'],
                                            'indexLabel' => " Visits: (". $data['appointment_count'] . ")");
                    }

                    foreach($chart_data['age_chart'] as $data){
                        
                    $ages_chart[] = array('y' => intval($data['patient_age']),
                                            'legendText' => "Ages:" . $data['ages'],
                                            'indexLabel' => "Ages (" . $data['ages'] . "): " . $data['patient_age'] );
                    }

                    foreach($chart_data['treatments_chart'] as $data){
                        $treatments_chart[] = array('y' => intval($data['count']),
                                                'label' => $data['treatment_name']);
                        }
                // echo json_encode($treatments_chart);
            // echo json_encode($chart_data['age_chart']);
            

        
        ?>
    <script>
            var chart = new CanvasJS.Chart("chartContainer1", {
                animationEnabled: true,
                
                title:{
                    text:"Treatments"
                },
                
                axisX:{
                    interval: 1
                },
                axisY2:{
                    interlacedColor: "rgba(1,77,101,.2)",
                    gridColor: "rgba(1,77,101,.1)",
                    title: "Number of Treatmens Performed",
                },
                data: [{
                    type: "bar",
                    name: "companies",
                    axisYType: "secondary",
                    color: "#014D65",
                    dataPoints: <?php echo json_encode($treatments_chart);  ?>
                }]
            });
            chart.render();

            var chart = new CanvasJS.Chart("chartContainer2",
            {
                animationEnabled: true,
                animationDuration: 500,
                title:{
                    text: "Appointments",
                    horizontalAlign: "center",

                },
                data: [
                {
                    type: "doughnut",
                    startAngle: 60,
                    innerRadius: 50,
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
                animationDuration: 500,
                title:{
                    text: "Patient Ages",
                    horizontalAlign: "center",
                },
                data: [
                {
                    type: "doughnut",
                    startAngle: 60,
                    innerRadius: 50,
                    toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($ages_chart); ?>
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
            //             { x: new Date(2012, 00, 1), y: 440 },
            //             { x: new Date(2012, 01, 1), y: 414 },
            //             { x: new Date(2012, 02, 1), y: 520, indexLabel: "highest", markerColor: "red", markerType: "triangle" },
            //             { x: new Date(2012, 03, 1), y: 460 },
            //             { x: new Date(2012, 04, 1), y: 440 },
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


        </script>

</body>
</html>



