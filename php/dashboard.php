<?php 
    // include('uplo.php')
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
              
              	  <p class="centered"><a href="profile.html"><img src="../uploads/<?php echo $row['Image']  ?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered" style="text-transform: uppercase;"><?php echo $row['FirstName'] ." " . $row['LastName']  ;?></h5>
              	  	
                  <li class="mt">
                      <a class="active" href="Dashboard.php">
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

              <div class="row">
                  <div class="col-lg-9 main-chart">
                         
                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn donut-chart">
                      			<div class="white-header">
						  			<h5>SERVER LOAD</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										<p><i class="fa fa-database"></i> 70%</p>
									</div>
	                      		</div>
								<canvas id="serverstatus01" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: 70,
												color:"#68dff0"
											},
											{
												value : 30,
												color : "#fdfdfd"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
								</script>
	                      	</div><! --/grey-panel -->
                      	</div><!-- /col-md-4-->
                      	

                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn">
                      			<div class="white-header">
						  			<h5>MY ACCOUNT</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										<p><i class="fa fa-heart"></i> 122</p>
									</div>
									<div class="col-sm-6 col-xs-6"></div>
	                      		</div>
	                      		<div class="centered">
                              <a href="responsive_table.php">
                                <img src="../assets/img/product.png" width="120">
                              </a>
	                      		</div>
                      		</div>
                      	</div><!-- /col-md-4 -->
                      	
						<div class="col-md-4 mb">
							<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5>MY PROFILE</h5>
								</div>
								<p>
                  <a href="profile.php">
<!-- <?php echo "<img src='../uploads/'".$row['Image'] . ">" ?> -->
                   <img src="../uploads/<?php echo $row["Image"] ?>" class="img-circle" width="80">
                  </a>
                </p>
								<p style="text-transform: uppercase;"><b><?php echo $row['UserName'] ?></b></p>
								<div class="row">
									<div class="col-md-6">
										<p class="small mt"><a href="profile.php">PERSONNAL INFO</a></p>
										<p><?php echo $row['DateCreated']; ?></p>
									</div>
									<div class="col-md-6">
										<p class="small mt">MOBILE NUMBER</p>
										<p><?php echo $row['Mobile']  ?></p>
									</div>
								</div>
							</div>
						</div><!-- /col-md-4 -->
                      	

                    </div><!-- /row -->
                    
                    				
					<div class="row">
						<!-- TWITTER PANEL -->
						<div class="col-md-4 mb">
                      		<div class="darkblue-panel pn">
                      			<div class="darkblue-header">
						  			<h5>DROPBOX STATICS</h5>
                      			</div>
								<canvas id="serverstatus02" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: 60,
												color:"#68dff0"
											},
											{
												value : 40,
												color : "#444c57"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
								</script>
								<p>April 17, 2014</p>
								<footer>
									<div class="pull-left">
										<h5><i class="fa fa-hdd-o"></i> 17 GB</h5>
									</div>
									<div class="pull-right">
										<h5>60% Used</h5>
									</div>
								</footer>
                      		</div><! -- /darkblue panel -->
						</div><!-- /col-md-4 -->
						
						
						<div class="col-md-4 mb">
							<!-- INSTAGRAM PANEL -->
							<div class="instagram-panel pn">
								<i class="fa fa-instagram fa-4x"></i>
								<p>@THISISYOU<br/>
									5 min. ago
								</p>
								<p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
							</div>
						</div><!-- /col-md-4 -->
						
						<div class="col-md-4 col-sm-4 mb">
							<!-- REVENUE PANEL -->
							<div class="darkblue-panel pn">
								<div class="darkblue-header">
									<h5>REVENUE</h5>
								</div>
								<div class="chart mt">
									<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
								</div>
								<p class="mt"><b>$ 17,980</b><br/>Month Income</p>
							</div>
						</div><!-- /col-md-4 -->
						
					</div><!-- /row -->
					
        </div>
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
                      <h3>ORDER NOW</h3>
                     <form class="form-horizontal" action="order.php" method="post">
                        
                        <!-- First Action -->
                      <div class="desc">
                        <div class="form-group">
                              <div class="col-sm-12">
                                  <input type="text" class="form-control round-form" name="deliver" placeholder="Delivery Address">
                              </div>
                          </div>
                      </div>
                      <!-- Second Action -->
                     
                     <div class="desc">
                        <div class="form-group">
                              <div class="col-sm-12">
                                  <input type="text" class="form-control round-form" name="amount" placeholder="Amount of Litre">
                              </div>
                          </div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
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
                      <!-- Five Action -->
                      <div class="desc">
                        <div class="form-group">
                              <div class="col-sm-12 top-menu">
                                <input class="form-control round-form nav" type="submit" value="ORDER" style="text-align: center;">
                              </div>
                          </div>
                      </div>

                      </form>                
                      
                  </div><!-- /col-lg-3 -->

              </div><! --/row -->

          </section>
      </section>

      <!--main content end-->
        <?php 
        include('footer.php')
       ?>
    
    <script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="../assets/js/sparkline-chart.js"></script>    
	<script src="../assets/js/zabuto_calendar.js"></script>	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
