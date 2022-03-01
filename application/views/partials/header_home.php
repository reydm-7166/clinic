<?php if(empty($this->session->userdata('verify'))){
            redirect('signin');
        } ?>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></i></button>  

        <div class="topnav">
        <div class="topnav-logo"><a href="home"><img src="../../../user_guide/_images/Logo.png" width='250' height='40'></a></div>
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="service">Services</a></li>
            <li><a href="faq">FAQs</a></li>
            <li><a href="book" class="current">Book Schedule</a></li>
            <li><a href="logout" class="text-warning border text-danger rounded">Logout</a></li>
        </ul>
        </div>
    </div>
