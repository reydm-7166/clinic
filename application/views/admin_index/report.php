<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://kit.fontawesome.com/14990fae2a.js" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="../../../user_guide/_images/doctor.ico"/>

    <!-- line 10 import chart js-->

    <style>
        #container {
            display: inline-block;
            vertical-align: top;
            width: 79.5%;
            height: 98vh;
            margin-top: 1rem;
            text-align: center;
        }
        #container h1 {
            margin-bottom: 9rem;
        }
        div {
            margin: 0rem 0 2rem 0;
        }
        #chartContainer5, #chartContainer2, #chartContainer1, 
         {
            height: 40vh;
            width: 55%;
            display: inline-block;
        }
        #date {
            position: absolute;
            right: 5rem;
            top: 1rem;
            margin: 1rem;
            width: 20%;
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
</head>
<body>
<?php  if(empty($this->session->userdata('admin'))) { redirect('login'); } ?>  <!-- CHECKS IF ADMIN IS LOGGED IN -- IF NOT SEND BACK TO LOGIN PAGE CODE BELOW IS FOR HEADER -->
   
    <?php $this->load->view('/partials/admin_headers'); ?>
    
    <main id="container">
        <h1 class="mt-0">Clinic Activity Reports</h1>
        <?php $this->load->view('/partials/date_form_partials'); ?>
        
        <div id="chartContainer5" style="width: 45%; height: 300px;display: inline-block;"></div> 
        <div id="chartContainer2" style="width: 45%; height: 300px;display: inline-block;"></div><br/>
        <div id="chartContainer1" style="width: 45%; height: 300px;display: inline-block;"></div> 
        <div id="chartContainer3" style="width: 45%; height: 300px;display: inline-block;"></div><br/>  
         
    </main>
        <?php $chart_data = $this->session->userdata('chart');
                
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

                    foreach($chart_data['services_chart'] as $data){
                        $services_chart[] = array('y' => intval($data['count']),
                                                'label' => $data['treatment_name']);
                        }?>

    <script type="text/javascript">
        window.onload = function () {
            <?php if (!empty($treatments_chart)) { ?>
            var chart = new CanvasJS.Chart("chartContainer1", {
                animationEnabled: true,
                animationDuration: 500,
                
                title:{
                    text:"Treatments"
                },
                axisX:{
                    interval: 1
                },
                axisY2:{
                    interlacedColor: "rgba(1,77,101,.2)",
                    gridColor: "rgba(1,77,101,.1)",
                    title: "Number of Treatments Performed",
                },
                toolTip:{
                    content:"<b>({label})</b> Count: {y}" ,
                },
                data: [{
                    type: "bar",
                    name: "treatments",
                    axisYType: "secondary",
                    color: "#014D65",
                    dataPoints: <?php echo json_encode($treatments_chart);  ?>
                }]
            });
            chart.render();

            <?php }  // ?>
            
            <?php if (!empty($users_chart)) { ?>
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
            <?php }  // ?>

            <?php if (!empty($ages_chart)) { ?>
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
                    toolTipContent: "<b>{indexLabel}</b> (#percent%)",
                    showInLegend: true,
                    dataPoints: <?php echo json_encode($ages_chart); ?>
                },
                ]
            });
            chart.render();
            <?php } // ?>

            <?php if (!empty($services_chart)) { ?>
                var chart = new CanvasJS.Chart("chartContainer3", {
                animationEnabled: true,
                animationDuration: 500,
                
                title:{
                    text:"Services"
                },
                axisX:{
                    interval: 1
                },
                axisY2:{
                    interlacedColor: "rgba(1,77,101,.2)",
                    gridColor: "rgba(1,77,101,.1)",
                    title: "Number of Services Performed",
                },
                toolTip:{
                    content:"<b>({label})</b> Count: {y}" ,
                },
                data: [{
                    type: "bar",
                    name: "services",
                    axisYType: "secondary",
                    color: "#014D65",
                    dataPoints: <?php echo json_encode($services_chart);  ?>
                }]
            });
            chart.render();
            <?php }  // ?>
        }
        </script>

</body>
</html>



