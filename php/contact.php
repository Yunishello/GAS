
<?php 
    include('header.php')
 ?>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
     
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="../uploads/<?php echo $row["Image"] ?>" class="img-circle" width="60"></a></p>
                 <h5 class="centered" style="text-transform: uppercase;"><?php echo $row['FirstName'] ." ". $row['LastName']  ?></h5>
                    
                  <li class="mt">
                      <a href="Dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>DASHBOARD</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="responsive_table.php" >
                          <i class="fa fa-desktop"></i>
                          <span>MY ORDER</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="profile.php" >
                          <i class="fa fa-tasks"></i>
                          <span>MY ACCOUNT</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="contact.php" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>CONTACT US</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="logout.php" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>LOG OUT</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  	<div class="row mt">
              <div class="col-md-12">
                      <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Our Contact</h4>
                        <div class="row mt">
                          <div class="col-md-6">
                            <form class="" role="form" action="https://www.google.com/cgi-bin/FormMail.pl" accept-charset="ISO-8859-1" onsubmit="var   originalCharset = document.charset; document.charset = 'ISO-8859-1';
                            window.onbeforeunload = function (){document.charset=originalCharset;};">
                                  <div class="form-inline">
                                      <div class="form-group">
                                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Firstname">
                                      </div>
                                      <div class="form-group">
                                          <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Lastname">
                                      </div>
                                  </div><br>
                                  <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                  </div>
                                  <div class="form-group">
                                    <textarea type="text" class="form-control" placeholder="Message"></textarea>
                                  </div>
                                  <div class="form-group">
                                    <div class="top-menu">
                                      <ul class="nav top-menu">
                                          <li><a class="logout" href="dashboard.php">SEND</a></li>
                                      </ul>
                                    </div>
                                    <input type="hidden" name="recipient" value="yunishello@gmail.com" />
                                    <input type="hidden" name="subject" value="Subject" />
                                    <input type="hidden" name="redirect"  value="https://www.example.com/thanks.html" />
                                    <input type="hidden" name="missing_fields_redirect"  value="https://www.example.com/error.html" />
                                    <input type="hidden" name="required" value="realname,email,Message" />
                                  </div>
                            </form>
                          </div>
                          <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.0669912668386!2d4.553195037334108!3d8.492867708403564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1036528424149c85%3A0xb1bccddb2951ac45!2sBalogun%20Fulani%20Rd%2C%20Ilorin!5e0!3m2!1sen!2sng!4v1583314317431!5m2!1sen!2sng" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                          </div>
                        </div>
                    </div><!-- /form-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->


		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <?php 
        include('footer.php')
       ?>
    

  </body>
</html>
