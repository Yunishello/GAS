<?php 
    // include('upl.php')
 ?>
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
              
                  <p class="centered"><a href="profile.php"><img src="../uploads/<?php echo $row["Image"] ?>" class="img-circle" width="60"></a></p>
                  <h5 class="centered" style="text-transform: uppercase;"><?php echo $row['FirstName'] ." ". $row['LastName']  ?></h5>
                    
                  <li class="mt">
                      <a href="Dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>DASHBOARD</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a  class="active" href="responsive_table.php" >
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
            <div class="row mt">
              <div class="col-md-12">
                  <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> ORDERS NOW</h4>
                      <form class="form-horizontal" action="order.php" method="post">
                        
                        <!-- First Action -->
                      <div class="desc"  style="display: inline-block;" >
                        <div class="form-group">
                              <div class="col-sm-12">
                                  <input type="text" class="form-control round-form"name="deliver" placeholder="Delivery Address">
                              </div>
                          </div>
                      </div>
                      <!-- Second Action -->
                     
                     <div class="desc" style="display: inline-block;" >
                        <div class="form-group">
                              <div class="col-sm-12">
                                  <input type="text" class="form-control round-form" name="amount" placeholder="Amount of Litre">
                              </div>
                          </div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc" style="display: inline-block;" >
                        <div class="form-group">
                              <div class="col-sm-12">
                                <select class="form-control  round-form" name="payment">
                                  <option class="has-success"></option>
                                  <option class="has-success" name="payment">POS On Delivery</option>
                                  <option class="has-success" name="payment">Wallet</option>
                                  <option class="has-successs" name="payment">PayStack(Credit/Card)</option>
                                </select>
                              </div>
                          </div>
                      </div>
                      <!-- four Action -->
                      <div class="desc" style="display: inline-block;" >
                        <div class="form-group">
                              <div class="col-sm-12 top-menu">
                                <input class="form-control round-form nav" type="submit" value="ORDER" style="text-align: center;">
                              </div>
                          </div>
                      </div>

                      </form>        
                      </div>
                  </div><!-- /col-lg-12 -->
            </div><!-- /row -->
          </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->



      <section id="main-content">
          <section class="wrapper">
    		  	<div class="row mt">
              <div class="col-md-12">
                  <div class="content-panel">
                      <table class="table table-striped table-advance table-hover">
                      <h4><i class="fa fa-angle-right"></i> MY ORDERS</h4>
                      <thead class="cf">
                        <tr>
                          <th>S/N</th>
                          <th>ADDRESS</th>
                          <th class="numeric">Gate</th>
                          <th class="numeric">Litre (N)</th>
                          <th class="numeric">DATE</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $sql = "SELECT * FROM `users` JOIN `orders` ON `users`.`id` = `orders`.`user_id`";
                          $query = mysqli_query($connect, $sql);
                          $i = 1;
                            while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                          <td data-title="Code"><?php echo $i++ ?></td>
                          <td data-title="Price"><?php echo $row['Address']; ?></td>
                          <td class="numeric" data-title="Change"><span class="label label-info label-mini"><?php echo $row['GateWay']; ?></span></td>
                          <td class="numeric" data-title="Change"><?php echo $row['Price']; ?></td>
                          <td class="numeric" data-title="Change %"><?php echo $row['Time']; ?></td>
                        </tr>
                          <?php
                            }
                          ?>
                        </tbody>
                        </table>
                      </div>
                  </div><!-- /col-lg-12 -->
            </div><!-- /row -->
          </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
        <?php 
        include('footer.php')
       ?>