<html lang="en">
<head>
<title>Contact</title>
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
          <li><a href="contact" class="current">Contact</a></li>
          <li><a href="faqs">FAQs</a></li>
          <li><a href="about">About Us</a></li>
          <li><a href="signin">Sign in</a></li>
          <li><a href="signup">Register</a></li>
        </ul>
        </div>
    </div>
  
  </div>

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 col-md-5">
          <h2>CONTACT US!</h2>
            <h3>Better yet, see us in person!</h3>
            <p>We love our customers, so feel free to visit during normal business hours.</p><br>
            
            <h3>Wellness First Holistic Health Care</h3>
            <p>Unit 521 One Oasis Hub B, Ortigas Ave. Ext. Pasig City, Philippines</p>
            <p>Front Desk <a href="tel: +63 995 714 3195">+63 995 714 3195</a></p>
            <p>Consultant <a href="tel: +63 936 951 5888">+63 936 951 5888</a></p><br>
        </div>
        <div class="col-sm-5 col-md-4">
          <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2204.2087757059885!2d121.09370418054586!3d14.589320898315727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c798f7875d87%3A0x5bc4ea3e5baa765d!2sWellness%20First!5e0!3m2!1sen!2sph!4v1639053397387!5m2!1sen!2sph" width="700" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="content-contact">
    <div class="container-contact">
      <div class="row">
        <h1>Contact Us!</h1>
        <form action="" method="POST">

          <p class="name">
            <input name="name" type="text" class="feedback-input" placeholder="Name" id="name" />
          </p>

          <p class="email">
            <input name="email" type="text" class="feedback-input" id="email" placeholder="Email" />
          </p>

          <p class="text">
            <textarea name="message" class="feedback-input" id="message" placeholder="Message"></textarea>
          </p>


          <div class="submit">
            <input type="submit" value="SEND!" id="button-blue" />
          </div>
        </form>
      </div>
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


</body>
</html>