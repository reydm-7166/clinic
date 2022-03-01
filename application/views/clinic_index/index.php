<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naturophatic Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../user_guide/_static/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../user_guide/_static/css/home.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans:wght@600&family=Poppins:wght@600&family=Source+Sans+Pro:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet"><body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
       li {
            font-size: 20px;
        } 
    </style>
</head>
<body>
<?php if(empty($this->session->userdata('verify'))){
            redirect('signin');
        } ?>
    <div class="parallax">
        <div class="topnav">
        <div class="topnav-logo"><a href="home"><img src="../../../user_guide/_images/Logo.png" width='250' height='40'></a></div>
        <ul>
            <li><a href="home" class="current">Home</a></li>
            <li><a href="service">Services</a></li>
            <li><a href="faq">FAQs</a></li>
            <li><a href="book">Book Schedule</a></li>
            <li><a href="logout" class="text-warning">Logout</a></li>
        </ul>
        </div>
    </div>

    <?php if(empty($this->session->userdata('verify'))){
            redirect('signin');
        }
            $user = $this->session->userdata('verify'); ?>

<section class="intro">
        <div class="note">
          <i class="fa-5x fa fa-check" aria-hidden="true"></i>
          <h2>NO-SURGERY</h2>
        </div>

        <div class="note">
          <i class="fa-5x fa fa-check" aria-hidden="true"></i>
          <h2>NO-CHEMOTHERAPY</h2>
        </div>
        
        <div class="note">
          <i class="fa-5x fa fa-check" aria-hidden="true"></i>
          <h2>NO-TRANSPLANT</h2>
        </div>
  </section>
  
  <nav>
        <div class="about-you">
          <h2>IT'S ALL ABOUT YOU</h2>
        </div>

        <div class="row-3">
          <h2 class="care">
            Caring For Your Health
          </h2>
          <p>We understand that you are not living your best life unless your mind and body are completely healthy. 
            That's why we take a holistic approach to preventing and reversing disease.
          </p>
        </div>
        <div class="row-3">
          <h2 class="care">
            Caring For Your Health
          </h2>
          <p>Our goal is to provide alternative medical care that will reverse and prevent disease using the fundamental 
            healing principles of mind-body medicine. Our results prove the best way to heal the body is naturally.
          </p>
        </div>
        <div class="row-3">
          <h2 class="care">
            Caring For Your Health
          </h2>
          <p>We care about your overall well being and will provide you with the guidance, knowledge, and tools needed 
            to be healthy. Let us help you achieve optimal wellness!
          </p>
        </div>
  </nav>

  <main>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-50" src="../../../user_guide/_images/treatments2.png">
            <h2>Kidney Failure Recovery</h2>
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="../../../user_guide/_images/bg.png">
            <h2>Cancer Recovery Program</h2>
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="../../../user_guide/_images/Logo.png">
            <h2>Diabetes Recovery Program</h2>
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="../../../user_guide/_images/Logo.png">
            <h2>Heart Attack/Stroke Prevention</h2>
        </div>
      </div>
      <a id="next" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a id="next" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <script>
      $('.carousel').carousel({
        interval: 4000
      })
    </script>
  </main>


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