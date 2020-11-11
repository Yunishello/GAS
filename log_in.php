<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <!-- Title -->
 <title>GAS|HOME</title>
  <!-- Favicon -->
  <link rel="icon" href="images/gas.jpg">
  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/overwrite.css">
</head>

<body>
  <!-- Preloader -->
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
  </div>

  <!-- ##### Header Area Start ##### -->
  <header class="header-area">
    <!-- Navbar Area -->
    <div class="famie-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="famieNav">
            <!-- Nav Brand -->
            <a href="index.php" class="nav-brand"><img class="brand" src="images/gas.jpg"></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Navbar Start -->
              <div class="classynav">
                <ul>
                  <li class="active"><a href="index.php">HOME</a></li>
                  <li><a href="#contact">Contact</a></li>
                   <li><a href="register.php"><button class="btn famie-btn">Sign up</button></a></li>
                  <li><a href="log_in.php"><button class="btn famie-btn">Log in</button></a></li>
                </ul>
              </div>
              <!-- Navbar End -->
            </div>
          </nav>

          <!-- Search Form -->
          <div class="search-form">
            <form action="#" method="get">
              <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
              <button type="submit" class="d-none"></button>
            </form>
            <!-- Close Icon -->
            <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ##### Header Area End ##### -->


        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
  
        <div id="login-page">
            <div class="container  jumbotron">
              <div class="row">
                <div class="col-6 col-md-6 col-sm-12" style="background-image: url(images/bg-img/3.jpg);"></div>
                <div class="col-6 col-md-6 col-sm-12">
                  
                  <form class="form-login" action="php/login.php" method="post">
                  <h2 class="form-login-heading">sign in now</h2>
                  <div class="login-wrap">
                      <input type="text" class="form-control" name="user" required placeholder="User ID" autofocus>
                      <br>
                      <input type="password" class="form-control" name="pass" required placeholder="Password">
                      <label class="checkbox">
                          <span class="pull-right">
                              <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
          
                          </span>
                      </label>
                      <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
                      <hr>
                      
                      <div class="login-social-link centered">
                      <p>or you can sign in via your social network</p>
                          <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
                          <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
                      </div>
                      <div class="registration">
                          Don't have an account yet?<br/>
                          <a class="" href="php/log_in.php">
                              Create an account
                          </a>
                      </div>
          
                  </div>
          
                    <!-- Modal -->
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Forgot Password ?</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Enter your e-mail address below to reset your password.</p>
                                    <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
          
                                </div>
                                <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                    <button class="btn btn-theme" type="button">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal -->
          
                </form>     
                </div>
              </div>
                
            
            </div>
        </div>

       <!-- ##### Footer Area Start ##### -->
 <footer class="footer-area">
    <!-- Main Footer Area -->
    <div class="main-footer bg-img bg-overlay section-padding-80-0" style="background-image: url(images/bg-img/4.jpg);">
      <div class="container">
        <div class="row">

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="footer-widget mb-80">
              <a href="index.php" class="nav-brand"><img src="images/gas.jpg"></a><br><br><br>
               <div class="contact-info">
                <p><i class="fa fa-map-pin" aria-hidden="true"></i><span>Suite 1005, Anbee Plaza, Zone 5, Wuse, Abuja.</span></p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i><span>info@viablex.com</span></p>
                <p><i class="fa fa-phone" aria-hidden="true"></i><span>+2348064806168, +2349068681808.</span></p>
              </div>
            </div>
          </div>

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="footer-widget mb-80">
              <h5 class="widget-title">QUICK LINK</h5>
              <!-- Footer Widget Nav -->
              <nav class="footer-widget-nav">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <li><a href="register.php">SIGN IN</a></li>
                    <li><a href="log_in.php">SIGN UP</a></li>
                </ul>
              </nav>
            </div>
          </div>

          

          <!-- Single Footer Widget Area -->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="footer-widget mb-80">
              <h5 class="widget-title">STAY CONNECTED</h5>
              <!-- Footer Social Info -->
              <div class="footer-social-info">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                  <span>Facebook</span>
                </a>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                  <span>Twitter</span>
                </a>
              </div>
            </div>
          </div>
      

        </div>
      </div>
      <div class="col-12">
      <p class="copy"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by pacifylabs
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
      </div>
    </div>


      </div>
    </div>
  </footer>
  <!-- ##### Footer Area End ##### -->
  
      <!-- js placed at the end of the document so the pages load faster -->
      <script src="assets/js/jquery.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
  
      <!--BACKSTRETCH-->
      <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
      <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
      <script>
          $.backstretch("assets/img/login-bg.jpg", {speed: 500});
      </script>
  
  <!-- ##### All Javascript Files ##### -->
  <!-- jquery 2.2.4  -->
  <script src="js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Owl Carousel js -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Classynav -->
  <script src="js/classynav.js"></script>
  <!-- Wow js -->
  <script src="js/wow.min.js"></script>
  <!-- Sticky js -->
  <script src="js/jquery.sticky.js"></script>
  <!-- Magnific Popup js -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- Scrollup js -->
  <script src="js/jquery.scrollup.min.js"></script>
  <!-- Jarallax js -->
  <script src="js/jarallax.min.js"></script>
  <!-- Jarallax Video js -->
  <script src="js/jarallax-video.min.js"></script>
  <!-- Active js -->
  <script src="js/active.js"></script>
    </body>
  </html>
  