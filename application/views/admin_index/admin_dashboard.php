<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://kit.fontawesome.com/14990fae2a.js" crossorigin="anonymous"></script>
    <style>
        #container {
            display: inline-block;
            vertical-align: top;
            width: 79.5%;
            height: 90vh;
            margin-top: 1rem;
            text-align: center;
        }
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
        #date {
            position: absolute;
            right: 5rem;
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
        nav {
            height: 77vh;
            width: 100%;
            text-align: left;
        }
        nav div {
            width: 45%;
            height: 25vh;
            display: inline-block;
            margin: 1.5rem 1rem;
            vertical-align: top;
        }
        section {
            margin-top: 4rem;

            width: 50%;
        }
        .bg-gradient-succ {
            background: linear-gradient(45deg, #29965a 0, #7af5b1 100%);
        }

        .bg-gradient-info {
            background: linear-gradient(45deg, #4f8fc4 0, #aed5f5 100%);
        }
        .bg-gradient-light {
            background: linear-gradient(45deg, #5cfaea 0, #dcf5f2 100%);
        }
        #chartContainer {
            position: absolute;
            border: 2px solid #E3B99F;
            vertical-align: top;
            right: 3.5rem;
            top: 11.5rem;
        }
        h2 {
            position: relative;
            bottom: 4rem;
            left: 7rem;
            text-decoration: underline;
            font-style: italic;
            color: #0072B5;
            cursor: pointer;
        }
        #appointment{
            left: 11rem;
        }
        #user {
            bottom: 3.5rem;
            left: 11rem;
            text-decoration: none;
        }
        #offer {
            bottom: 3.4rem;
            left: 10.5rem;
            text-decoration: none;
        }
    </style>
    <title>Dashboard</title>
</head>
<body>
<?php  if(empty($this->session->userdata('admin'))) { redirect('login'); } ?>  <!-- CHECKS IF ADMIN IS LOGGED IN -- IF NOT SEND BACK TO LOGIN PAGE CODE BELOW IS FOR HEADER -->
   
    <?php $this->load->view('/partials/admin_headers'); ?>

    <main id="container">
        <?php $this->load->view('/partials/dashboard_date_form_partials'); ?>
        <h1 class="mt-0">Dashboard</h1>
        
        <nav class="ml-3">
            <section>
            <?php if(!empty($this->session->userdata('dashboard'))) { $stats = $this->session->userdata('dashboard'); 
                    
            ?>
            <div class="revenue bg-success bg-gradient-succ shadow rounded border pt-5 pl-5">
                    <i class="fa-7x d-inline text-dark fa-solid fa-peso-sign"></i>
                    <h4 class="d-inline align-top ml-3">Revenue</h4>
                    <h2 id="revenue"><?= $stats[2]['total_revenue'] ?></h2>
            </div>

            <div class="appointments bg-info bg-gradient-info shadow rounded border pt-5 pl-4">
                    <i class="fa-7x d-inline text-dark fa-solid fa-calendar-check"></i>
                    <h4 class="d-inline align-top ml-4">Appointments</h4>
                    <h2 id="appointment"><?= $stats[1]['total_appointment'] ?></h2>
            </div>

            <div id="chartContainer" class="shadow-sm border-top-0 border-right-0" style="width: 35%; height: 565px;display: inline-block;">
                    
            </div>
            
            <div class="users bg-light shadow bg-gradient-light rounded border pt-5 pl-4">
                    <i class="fa-6x d-inline text-dark fa-solid fa-users"></i>
                    <h4 class="d-inline ml-2 align-top">Total Users</h4>
                    <h2 id="user"><?= $stats[0]['user_count'] ?></h2>
            </div>
            
            <div class="offers bg-light shadow bg-gradient-light rounded border border pt-5 pl-4">
                    <i class="fa-6x d-inline text-dark fa-solid fa-stethoscope"></i>
                    <h4 class="d-inline ml-2 align-top">Total offers</h4>
                    <h2 id="offer"><?= $stats[3]['offer_count'] ?></h2>
            </div>
            <?php } ?>
            </section>
        
            
        </nav>
    </main>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light3",
            animationDuration: 500,
            animationEnabled: true,
            height: 460,
            width: 650,
            title:{
                text: "Patient Satisfactory Rate"
            },
            legend:{
                cursor: "pointer",
               
            },
            data: [{
                type: "doughnut",
                radius:  "70%",
                innerRadius: 85,
                showInLegend: true,
                toolTipContent: "<b>{name}</b>: {y} (#percent%)",
                indexLabel: "{name} - #percent%",
                dataPoints: [
                    { y: 46, name: "Excellent" },
                    { y: 10, name: "Very Good" },
                    { y: 16, name: "Acceptable" },
                    { y: 0, name: "Less Acceptable" },
                    { y: 0, name: "Poor Management" },
                ]
            }]
        });
        chart.render();
        }
    </script>
</body>
</html>