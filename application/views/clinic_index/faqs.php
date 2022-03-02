<html lang="en">
<head>
<title>FAQs</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../user_guide/_static/css/style.css">
    <link rel="stylesheet" href="../../../user_guide/_static/css/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <li><a href="service">Services</a></li>
            <li><a href="faq" class="current">FAQs</a></li>
            <li><a href="book">Book Schedule</a></li>
            <li><a href="logout" class="text-warning border text-warning rounded">Logout</a></li>
        </ul>
        </div>
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

    <script>
      
    </script>
</body>
</html>