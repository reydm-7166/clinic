<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../user_guide/_static/css/index.css">
    <link rel="stylesheet" href="../../../user_guide/_static/css/style.css">
</head>
<body>
    <div class="parallax">
        <div class="topnav">
        <div class="topnav-logo"><a href="home"><img src="../../../user_guide/_images/Logo.png" width='250' height='40'></a></div>
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="service">Services</a></li>
            <li><a href="faq">FAQs</a></li>
            <li><a href="home/book">Book Schedule</a></li>
        </ul>
        </div>
    </div>

    <?php if(empty($this->session->userdata('verify'))){
            redirect('signin');
        }
            $user = $this->session->userdata('verify'); ?>
</body>
</html>