
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
                      <a class="active" href="profile.php" >
                          <i class="fa fa-tasks"></i>
                          <span>MY ACCOUNT</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="contact.php" >
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
		  	
        <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>MY PROFILE</h4>
                      <form class="form-horizontal style-form" action="update.php" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">USERNAME</label>
                              <div class="col-sm-10">
                                  <input type="text" name="user" class="form-control round-form" value="<?php echo $row['UserName'] ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">FIRST NAME</label>
                              <div class="col-sm-10">
                                  <input type="text" name="firstname" class="form-control round-form" value="<?php echo $row ['FirstName'] ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">LAST NAME</label>
                              <div class="col-sm-10">
                                  <input type="text" name="lastname" class="form-control round-form" value="<?php echo $row ['LastName'] ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">EMAIL</label>
                              <div class="col-sm-10">
                                  <input class="form-control round-form" name="email" type="email" value="<?php echo $row ['Email'] ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">MOBILE NUMBER</label>
                              <div class="col-sm-10">
                                  <input class="form-control round-form" name="mobile" type="text" value="<?php echo $row ['Mobile'] ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">PASSWORD</label>
                              <div class="col-sm-10">
                                  <input type="text"  class="form-control round-form" name="pass" value="<?php $pass = base64_decode($row ['PassWord']); echo $pass  ?>">
                              </div>
                          </div>
                          <div class="form-group">
                                <div class="top-menu">
                                  <ul class="nav pull-right top-menu">
                                      <li><a class="logout" href="dashboard.php">OK</a></li>
                                  </ul>
                                </div>
                                <div class="top-menu">
                                  <ul class="nav pull-right top-menu">
                                      <li><input type="submit" class="logout" value="update"></li>
                                  </ul>
                                </div>
                              </div>
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <?php 
        include('footer.php')
       ?>
