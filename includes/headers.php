  <!-- Topbar Start -->
  <div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
      <div class="row gx-0">
          <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
              <div class="d-inline-flex align-items-center">
                  <a class="text-body py-2 pe-3 border-end" href=""><small>FAQs</small></a>
                  <a class="text-body py-2 px-3 border-end" href=""><small>Support</small></a>
                  <a class="text-body py-2 ps-3" href=""><small>Career</small></a>
              </div>
          </div>
          <div class="col-md-6 text-center text-lg-end">
              <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                  <div class="me-3 pe-3 border-end py-2">
                      <p class="m-0"><i class="fa fa-envelope-open me-2"></i>info@marytechenock.com</p>
                  </div>
                  <div class="py-2">
                      <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+263 788 684 321</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Topbar End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">

  


      <a href="index.php">
          <?php
            $file = file_exists('img/Image1.jpeg') ? 'img/Image1.jpeg' : '../img/Image1.jpeg';

            echo "<img class='logo w-100' src='$file' alt='Image'>";

            ?>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0 me-n3">
          <?php 
            $indexUrl = $_SERVER['REQUEST_URI'] != '/site\/' ? '/site/index.php' : 'index.php'; 
            $aboutURL = $_SERVER['REQUEST_URI'] != '/site\/' ? '/site/about.php' : 'about.php';
            $serviceURL = $_SERVER['REQUEST_URI'] != '/site\/' ? '/site/service.php' : 'service.php';
            $contactURL = $_SERVER['REQUEST_URI'] != '/site\/' ? '/site/contact.php' : 'contact.php';
            // $contactURL = $_SERVER['REQUEST_URI'] != '/site\/' ? '/site/te.php' : 'contact.php';
          
          ?>
              <a href="<?php echo $indexUrl; ?>" class="nav-item nav-link active"><i class="fa-solid fa-house"></i>Home</a>
              
              <a href="<?php echo $serviceURL;  ?>" class="nav-item nav-link">Services</a>
             <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle techHover" id="techHover" data-bs-toggle="dropdown">Technology</a>
    
                  <div class="dropdown-menu m-0">
                      <a href="./html/Technology/odoo.php" class=" dropdown-item">Odoo ERP SYSTEM</a>
                      <a href="html/Technology/Sage Business Cloud X3.php" class=" dropdown-item">Sage Business Cloud X3</a>
                      <a href="html/Technology/Cin7.php" class=" dropdown-item">Cin7 Core (formerly known as DEAR)</a>
                  </div>
              </div>
              
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link hoverdropdown-toggle" id="techHover" data-bs-toggle="dropdown">Academic Courses</a>
                  <div class="dropdown-menu m-0">
                      <a href="./html/pages/blog.php" class="dropdown-item">Internet of things (IOT)</a>
                      <a href="html/pages/detail.php" class="dropdown-item">Cloud System Analyst</a>
                      <a href="html/pages/feature.php" class=" dropdown-item">Digital Marketing</a>
                      <a href="html/pages/quote.php" class=" dropdown-item">Certified Financial Markets</a>
                      <a href="html/pages/team.php" class=" dropdown-item">Certified Bookkeeper (Quickbooks) & (Excel)</a>
                      <a href="html/pages/testimonial.php" class=" dropdown-item">Cyber Security</a>
                      <a href="html/pages/testimonial.php" class=" dropdown-item">Artificial Intelligents Professional</a>
                      <a href="html/pages/testimonial.php" class=" dropdown-item">Certified Winning Pitch</a>
                      <a href="html/pages/testimonial.php" class=" dropdown-item">Certified Data Science</a>

                  </div>
              </div>
              <a href="<?php echo $aboutURL  ?>" class="nav-item nav-link">About</a>
              <a href="<?php echo $contactURL;?>" class="nav-item nav-link">Contact</a>
          </div>
      </div>
  </nav>
  <!-- Navbar End -->