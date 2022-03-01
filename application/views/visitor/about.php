<html lang="en">
<head>
<title>About Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../user_guide/_static/css/style.css">
    <link rel="stylesheet" href="../../../user_guide/_static/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <?php if(!empty($this->session->userdata('verify'))){
    redirect('home');
    } ?>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></i></button>  

    <div class="parallax">
      <div class="topnav">
        <div class="topnav-logo"><a href="/"><img src="../../../user_guide/_images/Logo.png" width='250' height='40'></a></div>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="services">Services</a></li>
          <li><a href="contact">Contact</a></li>
          <li><a href="faqs">FAQs</a></li>
          <li><a class="current" href="about">About Us</a></li>
          <li><a href="signin">Sign in</a></li>
          <li><a href="signup">Register</a></li>
        </ul>
    </div>
  </div>

  <div class="intro">
    <h1>About Us</h1>
    <div class="container-intro">
      <div class="row">
        <div class="col-sm">
          <h3>Our Vision</h3>
          <p>To inspire and empower people to have a long, healthy and sustainable life through traditional holistic wellness</p>
        </div>

        <div class="col-sm">
          <h3>Our Purpose</h3>
          <p>To provide a life-changing world-class services with evidence inspired holistic wellness interventions.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="content-about">
    <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>

  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg">
            <div class="card">
              <img src="../../../user_guide/_images/doc.jpg" alt="Avatar" style="width:100%">
                <div class="container-carousel">
                  <h4><b>Dr. Henry Cardinez N.D</b></h4> 
                  <p>Doctor of Naturopathic</p> 
                </div>
            </div>
          </div>  

          <div class="col-sm">
            <div class="card">
              <img src="../../../user_guide/_images/brian.jpg" alt="Avatar" style="width:100%">
                <div class="container-carousel">
                  <h4><b>Brian Cardinez</b></h4> 
                  <p>Managing Partner</p> 
                </div>
            </div>
          </div>  

          <div class="col-sm">
            <div class="card">
              <img src="../../../user_guide/_images/dra.jpg" alt="Avatar" style="width:100%">
              <div class="container-carousel">
                <h4><b>Dra. Susana Balingit M.D</b></h4> 
                <p>Doctor of Medicine</p> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <div class="card">
              <img src="../../../user_guide/_images/armand.jpg" alt="Avatar" style="width:100%">
                <div class="container-carousel">
                  <h4><b>Armando Bensorto R.N</b></h4> 
                  <p>Head Nurse</p> 
                </div>
            </div>
          </div>  

          <div class="col-sm">
            <div class="card">
              <img src="../../../user_guide/_images/princess.jpg" alt="Avatar" style="width:100%">
                <div class="container-carousel">
                  <h4><b>Princess Apsay</b></h4> 
                  <p>Administrative Assistant</p> 
                </div>
            </div>
          </div>  

          <div class="col-sm">
            <div class="card">
              <img src="../../../user_guide/_images/joy.jpg" alt="Avatar" style="width:100%">
              <div class="container-carousel">
                <h4><b>Joy Lasquite</b></h4> 
                <p>Colonic Therapist</p> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

  </div>
  
  <?php $this->load->view('partials/footer_home'); ?>
  
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>