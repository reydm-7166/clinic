<html lang="en">
<head>
<title>Frequently Asked Questions</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../user_guide/_static/css/style.css">
    <link rel="stylesheet" href="../../../user_guide/_static/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../../../user_guide/_images/doctor.ico"/>

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
        <li><a class="current" href="faqs">FAQs</a></li>
        <li><a href="about">About Us</a></li>
        <li><a href="signin">Sign in</a></li>
        <li><a href="signup">Register</a></li>
      </ul>
    </div>
  
    
  </div>
  
  <div class="content">
    <h1>Frequently Asked Questions</h1>

    <div class="accordion">
      <input id="toggle1" type="radio" class="accordion-toggle" name="toggle" />
      <label for="toggle1">What is Naturopathic Medicine?</label>
      <section>
        <p>
          Naturopathy is a distinct healing method based on a philosophical perspective that recognizes all living beings' inherent ability to self-regulate and self-heal. Naturopathic health care supports and enhances the body's natural ability to heal itself by using natural remedies. Therapy, herbs, massage, acupuncture, exercise, and nutritional counseling are all used in this modality.
        </p>
      </section>
    </div>
    
    <div class="accordion">
      <input id="toggle2" type="radio" class="accordion-toggle" name="toggle" />
      <label for="toggle2">What are the benefits of Naturopathic Medicine?</label>
      <section>
        <p>
          Regain a healthy lifestyle<br>
          Restore nutritional balance, combat overweight<br>
          Release physical and emotional tensions<br>
          Support physical activity<br>
          Promote prevention and increase the potential for self-healing<br>
          Stimulate immune system functions and activate the lymphatic system and Eliminate accumulated toxins<br>
          Optimize your sporting performance<br>
          Learn to become autonomous and listen to your body<br>
          Accompany the person so that he or she can regain harmony with himself or herself, his or her environment and others<br>
          Keep the person healthy by natural and preventive means</p>
      </section>
    </div>
    
    <div class="accordion">
      <input id="toggle3" type="radio" class="accordion-toggle" name="toggle" />
      <label for="toggle3">Why choose Wellness First Naturopathic Medicine?</label>
      <section>
        <p>
          Because we have:<br>
          Expert Caring Team<br>
          Scientifically Proven Modalities<br>
          Safe and Effective Protocols<br>
          Well Sanitized Center<br>
          Relaxing Facilities<br>
          Non-Toxic Drug Medication<br>
          Non-Surgical Systems<br>
          Proprietary Equipments<br>
          Natural Supplements</p>
      </section>
    </div>
    
  </div>
  
  <div class="footer">
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-1 col-md-6">
            <h6>Get in Touch</h6>
          </div>

          <div class="col-sm-1 col-md-5">
            <h6>Quick Links</h6>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-1 col-md-1">
            <i class="fa fa-envelope-o"></i><br><br>
            <i class="fa fa-phone"></i><br><br>
            <i class="fa fa-map-marker"></i><br>
          </div>

          <div class="col-xs-5 col-md-5">
            <p> wellnessfirst@gmail.com</p><br>
            <p>Front Desk <a href="tel: +63 995 714 3195">+63 995 714 3195</a></p>
				    <p>Consultant <a href="tel: +63 936 951 5888">+63 936 951 5888</a></p>
            
            <p>Unit 521 One Oasis Hub B, Ortigas Ave. Ext. Pasig City, Philippines</p>

            </div>
          <div class="col-xs-6 col-md-3">
            <ul class="footer-links">
              <li><a href="/">Home</a></li>
              <li><a href="services">Services</a></li>
              <li><a href="contact">Contact Us</a></li>
              <li><a href="faqs">FAQs</a></li>
              <li><a href="about">About Us</a></li>
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
          
          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="https://www.facebook.com/wellnessfirstphilippines/"><i class="fa fa-facebook mt-2"></i></a></li>
              <li><a class="google" href="info.wellnessfirst@gmail.com"><i class="fa fa-google mt-2"></i></a></li> 
            </ul>
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

    <script>
      
    </script>
</body>
</html>