<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="../../../user_guide/_static/css/"> -->
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
            border: 1px solid black;
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
            border: 1px solid black;
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
            border: 1px solid black;
            vertical-align: top;
            right: 3.5rem;
            top: 15.7rem;
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
            <div class="revenue bg-success bg-gradient-succ shadow rounded border">
                    Total revenue
            </div>

            <div class="appointments bg-info bg-gradient-info shadow rounded border">
                    Total appointments
            </div>

            <div id="chartContainer" style="width: 35%; height: 565px;display: inline-block;">
                    Total revenue
            </div>
            
            <div class="users bg-light shadow bg-gradient-light rounded border">
                    Total users
            </div>
            
            <div class="offers bg-light shadow bg-gradient-light rounded border">
                    Total offers
            </div>
                
            </section>

            
        </nav>
    </main>
    <script>
        window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title:{
                text: "Top Oil Reserves"
            },
            axisY: {
                title: "Reserves(MMbbl)"
            },
            data: [{        
                type: "column",  
                showInLegend: true, 
                legendMarkerColor: "grey",
                legendText: "MMbbl = one million barrels",
                dataPoints: [      
                    { y: 300878, label: "Venezuela" },
                    { y: 266455,  label: "Saudi" },
                    { y: 169709,  label: "Canada" },
                    { y: 158400,  label: "Iran" },
                    { y: 142503,  label: "Iraq" },
                    { y: 101500, label: "Kuwait" },
                    { y: 97800,  label: "UAE" },
                    { y: 80000,  label: "Russia" }
                ]
            }]
        });
        chart.render();

        }
</script>
</body>
</html>