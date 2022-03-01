<html lang="en">
<head>
<title>Services</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../user_guide/_static/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
<?php if(!empty($this->session->userdata('verify'))){
            redirect('home');
        } ?>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></i></button>  

  <div class="parallax">
        <div class="topnav">
        <div class="topnav-logo"><a href="home"><img src="../../../user_guide/_images/Logo.png" width='250' height='40'></a></div>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="services" class="current">Services</a></li>
          <li><a href="contact">Contact</a></li>
          <li><a href="faqs">FAQs</a></li>
          <li><a href="about">About Us</a></li>
          <li><a href="signin">Sign in</a></li>
          <li><a href="signup">Register</a></li>
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

        <?php foreach($this->session->userdata('services') as $services1) { ?>
        <div class="single-service">
          <div class="social">
            <i class="fa fa-stethoscope"></i>
          </div>
          <span></span>
          <h3><?= $services1['treatment_name']?></h3>
          <p><?= $services1['treatment_details'] ?></p>
        </div>
        
        <?php } ?>
      </div>
    <!-- -askdjsa -->
      <div class="tab-pane fade" id="nav-treatments" role="tabpanel" aria-labelledby="nav-treatments-tab">
        <?php foreach($this->session->userdata('treatments') as $treatments1) { ?>
          <div class="single-service">
            <div class="social">
              <i class="fa fa-stethoscope"></i>
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

  <div class="footer">
    <div class="footer">
      <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>Get in Touch</h6>
              </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Our Services</h6>
              <ul class="footer-links">
                <li><a href="services">Services</a></li>
                <li><a href="services">Treatments</a></li>
              </ul>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="index">Home</a></li>
                <li><a href="about">About Us</a></li>
                <li><a href="services">Services</a></li>
                <li><a href="contact">Contact Us</a></li>
                <li><a href="faqs">FAQs</a></li>
                <li><a href="faqs">Login/Register</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
           Wellness First Naturopathic</a>.
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  
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