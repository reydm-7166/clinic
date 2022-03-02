<html lang="en">
<head>
<title>Clinic Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../user_guide/_static/css/style.css">
    <link rel="stylesheet" href="../../../user_guide/_static/css/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
            <li><a href="home" class="current">Home</a></li>
            <li><a href="service">Services</a></li>
            <li><a href="faq">FAQs</a></li>
            <li><a href="book">Book Schedule</a></li>
            <li><a href="logout" class="text-warning border text-warning rounded">Logout</a></li>
        </ul>
        </div>
    </div>
  
  </div>

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/benefits.jpg" alt="Avatar" style="width:100%">
              <div class="container">
                <a href="https://nexwellness.com/benefits-of-naturopathy/">Benefits of Naturopathy</a> 
                 
              </div>
          </div>
        </div>  

        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/six.jpg" alt="Avatar" style="width:100%">
              <div class="container">
                <a href="https://www.lifestylephysicians.com/six-incredible-benefits-of-naturopathic-medicine/">Six Incredible Benefits of Naturopathic Medicine</a>  
              </div>
          </div>
        </div> 
        
        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/healthline.jpg" alt="Avatar" style="width:100%">
              <div class="container">
                <a href="https://www.healthline.com/health/what-is-an-osteopath#md-or-do">What Is a Naturopathic Doctor?</a>   
              </div>
          </div>
        </div>

      </div>
    </div><br>

    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/holisticmed.jpg" alt="Avatar" style="width:100%">
              <div class="container">
                <a href="https://aanmc.org/holistic-medicine-benefits-risks/">Holistic Medicine: Its Benefits and Dangers</a> 
                 
              </div>
          </div>
        </div>  

        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/takingcharge.jpg" alt="Avatar" style="width:100%">
              <div class="container">
                <a href="https://www.takingcharge.csh.umn.edu/naturopathy">All About Naturopathy</a> 
              </div>
          </div>
        </div> 
        
        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/mednews.jpg" alt="Avatar" style="width:100%">
              <div class="container">
                <a href="https://www.medicalnewstoday.com/articles/naturopathy#what-is-it">What is naturopathy?</a> 
              </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/bloodsugar.jpeg" alt="Avatar" style="width:100%">
              <div class="container">
                <a href="https://www.naturalmedicinejournal.com/journal/2021-12/blood-sugar-stabilization-addressing-prediabetes-clinical-practice ">Blood Sugar Stabilization: Addressing Prediabetes in Clinical Practice</a> 
              </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/ProbioticsinDiet.jpg" alt="Avatar" style="width:100%">
              <div class="container">
                <a href="https://www.newchapter.com/wellness-blog/nutrition/what-are-probiotics/">What are Probiotics? Health Benefits and How to Pick the Right One</a>    
              </div>
          </div>
        </div>
        
      </div>
    </div><br>

    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/cancer.jpg" alt="Avatar" style="width:100%">
              <div class="container">
                <a href="https://askdrjj.com/the-role-of-a-naturopathic-doctor-in-cancer-care/">The Role Of A Naturopathic Doctor In Cancer Care</a> 
                 
              </div>
          </div>
        </div>  

        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/Iv.jpeg" alt="Avatar" style="width:100%">
              <div class="container">
                <a href="https://www.digitaljournal.com/pr/vitamin-a-deficiency-highlighted-as-concern-for-iv-therapy-patients-in-toronto">Vitamin A Deficiency Highlighted As Concern For IV Therapy Patients In Toronto</a>


              
              </div>
          </div>
        </div>
        
        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/detox.jpg" alt="Avatar" style="width:100%">
              <div class="container">
                <a href="https://www.nirvananaturopathy.com/blog/how-is-detoxification-done-by-naturopaths#:~:text=Naturopaths%20do%20detoxification%20in%20the,reduce%20the%20level%20of%20toxins.">How Is Detoxification Done by Naturopaths?</a> 
              
              </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/phil.jpg" alt="Avatar" style="width:100%">
              <div class="container">
                <a href="https://pitahc.gov.ph/naturopathy/">All About Naturopathy in the Philippines</a> 
              
              </div>
          </div>
        </div>
        
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