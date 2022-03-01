<html lang="en">
<head>
<title>Clinic Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../user_guide/_static/css/style.css">
    <link rel="stylesheet" href="../../../user_guide/_static/css/home.css">
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
            <img src="../../../user_guide/_images/doc.jpg" alt="Avatar" style="width:100%">
              <div class="container-carousel">
                <a href="">Doctor of Naturopathic</a> 
              </div>
          </div>
        </div>  

        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/brian.jpg" alt="Avatar" style="width:100%">
              <div class="container-carousel">
                <h4><b>Brian Cardinez</b></h4> 
                <li><a>Managing Partner</a></li> 
              </div>
          </div>
        </div> 
        
        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/brian.jpg" alt="Avatar" style="width:100%">
              <div class="container-carousel">
                <h4><b>Brian Cardinez</b></h4> 
                <li><a>Managing Partner</a></li> 
              </div>
          </div>
        </div>

      </div>
    </div><br>

    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/doc.jpg" alt="Avatar" style="width:100%">
              <div class="container-carousel">
                <a href="">Doctor of Naturopathic</a> 
              </div>
          </div>
        </div>  

        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/brian.jpg" alt="Avatar" style="width:100%">
              <div class="container-carousel">
                <h4><b>Brian Cardinez</b></h4> 
                <li><a>Managing Partner</a></li> 
              </div>
          </div>
        </div> 
        
        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/brian.jpg" alt="Avatar" style="width:100%">
              <div class="container-carousel">
                <h4><b>Brian Cardinez</b></h4> 
                <li><a>Managing Partner</a></li> 
              </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/brian.jpg" alt="Avatar" style="width:100%">
              <div class="container-carousel">
                <h4><b>Brian Cardinez</b></h4> 
                <li><a>Managing Partner</a></li> 
              </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/brian.jpg" alt="Avatar" style="width:100%">
              <div class="container-carousel">
                <h4><b>Brian Cardinez</b></h4> 
                <li><a>Managing Partner</a></li> 
              </div>
          </div>
        </div>
        
      </div>
    </div><br>

    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/doc.jpg" alt="Avatar" style="width:100%">
              <div class="container-carousel">
                <a href="">Doctor of Naturopathic</a> 
              </div>
          </div>
        </div>  

        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/brian.jpg" alt="Avatar" style="width:100%">
              <div class="container-carousel">
                <h4><b>Brian Cardinez</b></h4> 
                <li><a>Managing Partner</a></li> 
              </div>
          </div>
        </div>
        
        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/brian.jpg" alt="Avatar" style="width:100%">
              <div class="container-carousel">
                <h4><b>Brian Cardinez</b></h4> 
                <li><a>Managing Partner</a></li> 
              </div>
          </div>
        </div>

        <div class="col-sm">
          <div class="card-index">
            <img src="../../../user_guide/_images/brian.jpg" alt="Avatar" style="width:100%">
              <div class="container-carousel">
                <h4><b>Brian Cardinez</b></h4> 
                <li><a>Managing Partner</a></li> 
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