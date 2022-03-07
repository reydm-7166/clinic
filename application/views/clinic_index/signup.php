<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sign Up</title>
    <style>
        .gradient-custom-3 {
        /* fallback for old browsers */
        background: #84fab0;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
        }
        .gradient-custom-4 {
        /* fallback for old browsers */
        background: #84fab0;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
        }
        .notif {
            position: absolute;
            height: 20vh;
            width: 25%;
            right: 32rem;
            top: 4rem;
            z-index: 2;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

    </style>
    <link rel="shortcut icon" href="../../../user_guide/_images/doctor.ico"/>
</head>
<body>
                                                                            <!-- notif class just for notification if success (line 15)   
                                                                                if user is logged in he will be redirected back to index  (line 21)  
                                                                                Shows authentication error (line 29)    --> 
        <div class="notif">
            <?php if(isset($_SESSION['notification'])){ ?>
                    <h1 class="rounded bg-success text-white p-1 m-2"><?= $_SESSION['notification'] ?></h1>
            <?php } unset($_SESSION['notification']);?>
        </div>
        <?php if(!empty($this->session->userdata('verify'))){
                redirect('/');
        } ?>

        <div class="notif">
        <?php $this->load->library('form_validation');
            echo validation_errors("<div class='text-center lh-1 rounded bg-danger text-white p-0 m-1'>","</div>" ); ?>
        </div>

        <?php $this->load->view('partials/signup_partials') ?>
</body>
</html>