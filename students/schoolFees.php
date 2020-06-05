<?php 
include "../setting/config.php";
include_once'dbh.php';
 session_start();
if(!$_SESSION['st_user'])
{
	
	header("location:../index.html");
}
else
{
    $st_username = $_SESSION['st_user'];
   
	$st_password = $_SESSION['st_password'];
	$st_name = $ravi->student_info_select($st_username);
	
	$student_name_display = $st_name->fetch_assoc();
}


?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Student's portal</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/amcharts.js"></script>
	<script src="js/serial.js"></script>
	<script src="js/light.js"></script>
	<script src="js/radar.js"></script>
	<link href="css/barChart.css" rel='stylesheet' type='text/css' />
	<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
	<!--clock init-->
	<script src="js/css3clock.js"></script>
	<!--Easy Pie Chart-->
	<!--skycons-icons-->
	<script src="js/skycons.js"></script>

	<script src="js/jquery.easydropdown.js"></script>

	<!--//skycons-icons-->
</head>

<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="inner-content">
				<!-- header-starts -->
				<div class="header-section">

					<div class="clearfix"></div>
				</div>
				<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        <div class="main-search">
											<form >
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value=""/>
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							
								
																		
										
								
				<!-- //header-ends -->
				<div class="outter-wp">
					<!--/tabs-->
					<div class="tab-main">
						<!--/tabs-inner-->
						<div class="tab-inner">
							<div id="tabs" class="tabs">
								<h2 class="inner-tittle">School Fees detail for
									<?php echo ucfirst($student_name_display['st_fullname']); ?> </h2>
								<div class="graph">
					<?php
				
                    $class_id=$student_name_display['class_id'];
                    $sql = "SELECT * FROM schoolfees WHERE class_id='$class_id'";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
                 


            
              if ($resultCheck > 0){
                  while ($rowss = mysqli_fetch_assoc($result)) {
                 $t= $rowss['Tuition_Fee'];
                 $p= $rowss['Practical_Fee'];
                 $e= $rowss['Enrolment_Fee'];
                 $i= $rowss['ICT_fee'];
                 $ta= $rowss['Talent_week'];
                 $total = $t+$p+$e+$i+$ta;
           
                ?>
                <table class="table table-stried table-bordered" >
                    <tr>
                        <th style="color:black;">Item</th>
                        <th style="color:black;">Amount</th>
                    </tr>
                    <tr>
                        <td style="color:black;">Tuition Fee</td>
                        <td style="color:black;"><?php echo $t ?></td>
                    </tr>
                    <tr>
                        <td  style="color:black;">Practical Fee</td>
                        <td style="color:black;"><?php echo $p ?></td>
                    <tr>
                         <tr>
                        <td style="color:black;">Enrolment Fee</td>
                        <td style="color:black;"><?php echo $e ?></td>
                    </tr>
                    <tr>
                        <td style="color:black;">ICT fee</td>
                        <td style="color:black;"><?php echo $i ?></td>
                    <tr>
                    <tr>
                        <td>Talent Week</td>
                        <td><?php echo $ta ?></td>
                    </tr>
                    <tr>
                        <td>TOTAL</td>
                        <td><?php echo $total ?></td>
                    </tr>
                </table>
               
           <form>
               <button name='pay'>Pay here</button>
               
           </form>
              <?php
            } {echo "Please pay up";}
                                    }
        
        ?>
                            
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>


						</div>
						<!--/charts-inner-->
					</div>
					<!--//outer-wp-->
				</div>
				<!--footer section start-->
				<footer>
					<p>&copy 2018 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a> and Develop By Ravi Khadka</p>
				</footer>
				<!--footer section end-->
			</div>
		</div>
		<!--//content-inner-->
		<!--/sidebar-menu-->
		<div class="sidebar-menu">
			<header class="logo">
				<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>min/max</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a>
			</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
			<div class="down">
				<a href="#"><?php echo "<img src='{$student_name_display['st_image']}' height='100px' width='100px'/>"; ?></a>
				<span class=" name-caret"><?php echo $student_name_display['st_fullname']; ?></span>
				<p>Student</p>
				<ul>
					<li><a class="tooltips" href="#"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
					<li><a class="tooltips" href="index.php"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
					<li><a class="tooltips" href="logouts.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
				</ul>
			</div>
			<!--//down-->
			<div class="menu">
				<ul id="menu">
					<li><a href="home.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
					<li id=""><a href="#"><i class="fa fa-file-text-o"></i> <span>Results</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id=""><a href="resultpage.php">2019</a></li>
							<li id=""><a href="validation.html">2020</a></li>
							<li id=""><a href="table.html">2021</a></li>
							<li id=""><a href="buttons.html">2022</a></li>
						</ul>
					</li>
					<li id=""><a href="schoolFees.php"><i class="fa fa-file-text-o"></i> <span>School Fees</span> <span class="fa fa-angle-right" style="float: right"></span></a>
				
					
						</ul>
					</li>
				</ul>

			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script>
		var toggle = true;

		$(".sidebar-icon").click(function() {
			if (toggle) {
				$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
				$("#menu span").css({
					"position": "absolute"
				});
			} else {
				$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
				setTimeout(function() {
					$("#menu span").css({
						"position": "relative"
					});
				}, 400);
			}

			toggle = !toggle;
		});
	</script>
	<!--js -->
	<link rel="stylesheet" href="css/vroom.css">
	<script type="text/javascript" src="js/vroom.js"></script>
	<script type="text/javascript" src="js/TweenLite.min.js"></script>
	<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>