<html lang="en">
<head>
<title>Services</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../user_guide/_static/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../../../user_guide/_images/doctor.ico"/>

</head>
<body>
<?php if(empty($this->session->userdata('verify'))){
            redirect('signin');
        } ?>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></i></button>  

  <div class="parallax">
        <div class="topnav">
        <div class="topnav-logo"><a href="home"><img src="../../../user_guide/_images/Logo.png" width='250' height='40'></a></div>
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="service" class="current">Services</a></li>
            <li><a href="faq">FAQs</a></li>
            <li><a href="book">Book Schedule</a></li>
            <li><a href="logout" class="text-warning border text-warning rounded">Logout</a></li>
        </ul>
        </div>
    </div>
  
  </div>
  
  <div class="content-services">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-services-tab" data-bs-toggle="tab" data-bs-target="#nav-services" type="button" role="tab" aria-controls="nav-services" aria-selected="true">Services</button>
        <button class="nav-link" id="nav-treatments-tab" data-bs-toggle="tab" data-bs-target="#nav-treatments" type="button" role="tab" aria-controls="nav-treatments" aria-selected="false">Treatments</button>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-services" role="tabpanel" aria-labelledby="nav-services-tab">

        <?php foreach($this->session->userdata('user_services') as $services1) { ?>
        <div class="single-service">
          <div class="social">
            <i class="fa fa-stethoscope fa-5x"></i>
          </div>
          <span></span>
          <h3><?= $services1['treatment_name']?></h3>
          <p><?= $services1['treatment_details'] ?></p>
        </div>
        
        <?php } ?>
      </div>
    <!-- -askdjsa -->
      <div class="tab-pane fade" id="nav-treatments" role="tabpanel" aria-labelledby="nav-treatments-tab">
        <?php foreach($this->session->userdata('user_treatments') as $treatments1) { ?>
          <div class="single-service">
            <div class="social">
              <i class="fa fa-stethoscope fa-5x"></i>
            </div>
            <span></span>
            <h3><?= $treatments1['treatment_name']?></h3>
            <p><?= $treatments1['treatment_details'] ?></p>
          </div>
          
          <?php } ?>
      </div>
      <!-- ender -->
    </div>

  </div>

  <?php $this->load->view('partials/footer_home') ?>
  
  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>
</body>
</html>