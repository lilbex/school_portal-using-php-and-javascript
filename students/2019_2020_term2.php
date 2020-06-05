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
	$st_id=$student_name_display['st_id'];
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
							
								
									<script> 
								        function printDiv() { 
								            var divContents = document.getElementById("GFG").innerHTML; 
								            var a = window.open('', '', 'height=500, width=500'); 
								            a.document.write('<html>'); 
								            a.document.write('<body > <h1>Div contents are <br>'); 
								            a.document.write(divContents); 
								            a.document.write('</body></html>'); 
								            a.document.close(); 
								            a.print(); 
								        } 
								    </script> 								
										
								
				<!-- //header-ends -->
				<div class="outter-wp">
					<!--/tabs-->
					<div class="tab-main">
						<!--/tabs-inner-->
						<div class="tab-inner">
							<div id="tabs" class="tabs">
								<h2 class="inner-tittle">Result for <?php echo ucfirst($student_name_display['st_fullname']); ?> </h2>
					             <div class="graph">
					
<?php
$sql = "SELECT * FROM 2019_2020_term1_kg3 WHERE  st_id='$st_id'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck === 1){
    while ($rows = mysqli_fetch_assoc($result)) {

        ?>
        <p>Welcome to Result Area</p>
      <table>
          <tr>
            <td> <href="#" data-toggle="modal" data-target="#mykg3" class="btn btn-secondary px-4 py-3">View</a></td>
              
              <td> <href="#" data-toggle="modal" data-target="#mykg3" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
          <button class="btn btn-secondary px-4 py-3" onclick="printJS('printJS-form', 'html')"> PDF </button>
      </table>
      
  
       

     

        <?php
    } 
}
if ($resultCheck === 0) {
     $sqlP = "SELECT * FROM 2019_2020_term1_basic1 WHERE st_id= '$st_id'";
    $resultP = mysqli_query($conn, $sqlP);
    $resultCheckP = mysqli_num_rows($resultP);
   
    if ($resultCheckP > 0) {
        while ($rows = mysqli_fetch_assoc($resultP)) {
            ?>
            <p>Welcome to Result Area</p>
           <table>
          <tr>
              <td> <href="#" data-toggle="modal" data-target="#mybasic1" class="btn btn-secondary px-4 py-3">view</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic1" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic1" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>
     
           

            <?php
        }
    }
    if ($resultCheckP===0) {
        $sqlJ = "SELECT * FROM 2019_2020_term1_basic4 WHERE st_id= '$st_id'";
        $resultJ = mysqli_query($conn, $sqlJ);
        $resultCheckJ = mysqli_num_rows($resultJ);
        if ($resultCheckJ ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ)) {
                ?>
                <p>Welcome to Result Area</p>
                  <table>
          <tr>
             <td> <href="#" data-toggle="modal" data-target="#mybasic4" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic4" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic4" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>
     

                <?php
            }
        }
        if ($resultCheckJ === 0) {
           $sqlN = "SELECT * FROM 2019_2020_term1_kg1 WHERE st_id= '$st_id'";
           $resultN = mysqli_query($conn, $sqlN);
           $resultCheckN = mysqli_num_rows($resultN);
           if ($resultCheckN === 1) {
               while ($rows = mysqli_fetch_assoc($resultN)) {
                   ?>

             <p>Welcome to Result Area</p>  
      <table>
          <tr>
            <td> <href="#" data-toggle="modal" data-target="#mykg1" class="btn btn-secondary px-4 py-3">View Result</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mykg1" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mykg1" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>
           


                   <?php
               }
           }
if($resultCheckN ===0) {
$sqlj2="SELECT * FROM 2019_2020_term1_basic5 WHERE st_id= '$st_id'";
$resultj2=mysqli_query($conn, $sqlj2);
$resultCheckj2 = mysqli_num_rows($resultj2);
if($resultCheckj2===1){
while ($rows=mysqli_fetch_assoc($resultj2)){
?>
<p>Welcome to Result Area</p>
 <table>
          <tr>

             <td> <href="#" data-toggle="modal" data-target="#mybasic5" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic5" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic5" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>



<?php
}
}
if ($resultCheckj2===0) {
   $sqlprekg="SELECT * FROM 2019_2020_term1_prekg WHERE st_id= '$st_id'";
$resultprekg=mysqli_query($conn, $sqlprekg);
$resultCheckprekg = mysqli_num_rows($resultprekg);
if($resultCheckprekg===1){
    while ( $rows=mysqli_fetch_assoc($resultprekg)) {
       ?>
       <p>Welcome to Result Area</p>
        <table>
          <tr>
             <td> <href="#" data-toggle="modal" data-target="#myprekg" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myprekg" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myprekg" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>

      
       <?php
    }
}
if ($resultCheckprekg===0) {
   $sqlpry2="SELECT * FROM 2019_2020_term1_basic2 WHERE st_id= '$st_id'";
    $resultpry2=mysqli_query($conn, $sqlpry2);
    $resultCheckpry2 = mysqli_num_rows($resultpry2);
    if($resultCheckpry2===1){
        while ($rows=mysqli_fetch_assoc($resultpry2)) {
            ?>
            <p>Welcome to Result Area</p>
             <table>
          <tr>
             <td> <href="#" data-toggle="modal" data-target="#mybasic2" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic2" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic2" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>


            <?php
        }
    }
    if ($resultCheckpry2===0) {
        $sqlnur2="SELECT * FROM 2019_2020_term1_kg2 WHERE st_id= '$st_id'";
    $resultnur2=mysqli_query($conn, $sqlnur2);
    $resultChecknur2 = mysqli_num_rows($resultnur2);
    if($resultChecknur2===1){
        while ($rows=mysqli_fetch_assoc($resultnur2)) {
           ?>
      <p>Welcome to Result Area</p>
            <br>
      <table>
          <tr>
             <td> <href="#" data-toggle="modal" data-target="#mykg2" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mykg2" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mykg2" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
     
           <?php
        }
    }
    if ($resultChecknur2===0) {
       $sqlpry3="SELECT * FROM 2019_2020_term1_basic3 WHERE st_id= '$st_id'";
    $resultpry3=mysqli_query($conn, $sqlpry3);
    $resultCheckpry3 = mysqli_num_rows($resultpry3);
    if($resultCheckpry3===1){
        while ($rows=mysqli_fetch_assoc($resultpry3)) {
            ?>
            <p>Welcome to Result Area</p>
             <table>
          <tr>
              <td> <href="#" data-toggle="modal" data-target="#mybasic3" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic3" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#mybasic3" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>

            
            <?php
        }
    }
       if ($resultCheckpry3===0) {
        $sqlJ1 = "SELECT * FROM 2019_2020_term1_jss1 WHERE st_id= '$st_id'";
        $resultJ1 = mysqli_query($conn, $sqlJ1);
        $resultCheckJ1 = mysqli_num_rows($resultJ1);
        if ($resultCheckJ1 ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ1)) {
                ?>
                <p>Welcome to Result Area</p>
                <table>
          <tr>
            <td> <href="#" data-toggle="modal" data-target="#myjss1" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myjss1" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myjss1" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>  
      
    <?php
    }
}

       if ($resultCheckJ1===0) {
        $sqlJ2 = "SELECT * FROM 2019_2020_term1_jss2 WHERE st_id= '$st_id'";
        $resultJ2 = mysqli_query($conn, $sqlJ2);
        $resultCheckJ2 = mysqli_num_rows($resultJ2);
        if ($resultCheckJ2 ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ2)) {
                ?>
                 <p>Welcome to Result Area</p>
       <table>
          <tr>
            <td> <href="#" data-toggle="modal" data-target="#myjss2" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myjss2" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myjss2" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>
         

      <?php
  }
}
if ($resultCheckJ2===0) {
        $sqlJ3 = "SELECT * FROM 2019_2020_term1_jss3 WHERE st_id= '$st_id'";
        $resultJ3 = mysqli_query($conn, $sqlJ3);
        $resultCheckJ3 = mysqli_num_rows($resultJ3);
        if ($resultCheckJ3 ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ3)) {
                ?>
                 <p>Welcome to Result Area</p>
       <table>
          <tr>
               <td> <href="#" data-toggle="modal" data-target="#myjss3" class="btn btn-secondary px-4 py-3">View</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myjss3" class="btn btn-secondary px-4 py-3">PDF</a></td>
              <td> <href="#" data-toggle="modal" data-target="#myjss3" class="btn btn-secondary px-4 py-3">Print</a></td>
          </tr>
      </table>
          
<?php
}
    }
    if ($resultCheckJ3===0) {
        $sql_ss1 = "SELECT * FROM 2019_2020_term1_ss1 WHERE st_id= '$st_id'";
        $result_ss1 = mysqli_query($conn, $sql_ss1);
        $resultCheck_ss1 = mysqli_num_rows($result_ss1);
        if ($resultCheck_ss1 >0) {
            while ($rows = mysqli_fetch_assoc($result_ss1)) {
                ?>
      <br>

      <p>   Welcome to Result Area</p>
      <table>
          <tr>
              <td> <href="#" data-toggle="modal" data-target="#myss1" class="btn btn-secondary px-4 py-3">View </a></td>
             
              <td> <href="#" data-toggle="modal" data-target="#myss1" class="btn btn-secondary px-4 py-3">Print Result</a></td>
          </tr>
          
      </table>


                <?php
    }
}

    if ($resultCheck_ss1===0) {
        $sql_ss2 = "SELECT * FROM 2019_2020_term1_ss2 WHERE st_id= '$st_id'";
        $result_ss2 = mysqli_query($conn, $sql_ss2);
        $resultCheck_ss2 = mysqli_num_rows($result_ss2);
        if ($resultCheck_ss2 ===1) {
            while ($rows = mysqli_fetch_assoc($result_ss2)) {
                ?>
                <p>Welcome to Result Area</p>
        
               

      <?php
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}


?>
					




<!--modal view-->
<!--each class detail included from separate files-->

 
<?php

 

$sql = "SELECT * FROM 2019_2020_term1_kg3 WHERE  st_id= '$st_id'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck === 1){
    while ($rows = mysqli_fetch_assoc($result)) {
        ?>
<?php include_once'2019_2020_session_term2/2019_2020_term1_kg3.php'; ?>
     

        <?php
    } 
}
if ($resultCheck === 0) {
     $sqlP = "SELECT * FROM 2019_2020_term1_basic1 WHERE st_id= '$st_id'";
    $resultP = mysqli_query($conn, $sqlP);
    $resultCheckP = mysqli_num_rows($resultP);
   
    if ($resultCheckP > 0) {
        while ($rows = mysqli_fetch_assoc($resultP)) {
            ?>
<?php include_once'2019_2020_session_term2/2019_2020_term1_basic1.php' ?>

            <?php
        }
    }
    if ($resultCheckP===0) {
        $sqlJ = "SELECT * FROM 2019_2020_term1_basic4 WHERE st_id= '$st_id'";
        $resultJ = mysqli_query($conn, $sqlJ);
        $resultCheckJ = mysqli_num_rows($resultJ);
        if ($resultCheckJ ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ)) {
                ?>
                 
      
      <?php include_once'2019_2020_session_term2/2019_2020_term1_basic4.php' ?>

                <?php
            }
        }
        if ($resultCheckJ === 0) {
           $sqlN = "SELECT * FROM 2019_2020_term1_kg1 WHERE st_id= '$st_id'";
           $resultN = mysqli_query($conn, $sqlN);
           $resultCheckN = mysqli_num_rows($resultN);
           if ($resultCheckN === 1) {
               while ($rows = mysqli_fetch_assoc($resultN)) {
                   ?>

               
  <?php include_once'2019_2020_session/2019_2020_term1_kg1.php' ?>


                   <?php
               }
           }
if($resultCheckN ===0) {
$sqlj2="SELECT * FROM 2019_2020_term1_basic5 WHERE st_id= '$st_id'";
$resultj2=mysqli_query($conn, $sqlj2);
$resultCheckj2 = mysqli_num_rows($resultj2);
if($resultCheckj2===1){
while ($rows=mysqli_fetch_assoc($resultj2)){
?>
<?php include_once'2019_2020_session_term2/2019_2020_term1_kg1.php' ?>



<?php
}
}
if ($resultCheckj2===0) {
   $sqlprekg="SELECT * FROM 2019_2020_term1_prekg WHERE st_id= '$st_id'";
$resultprekg=mysqli_query($conn, $sqlprekg);
$resultCheckprekg = mysqli_num_rows($resultprekg);
if($resultCheckprekg===1){
    while ( $rows=mysqli_fetch_assoc($resultprekg)) {
       ?>
<?php include_once'2019_2020_session_term2/2019_2020_term1_prekg.php' ?>    
       <?php
    }
}
if ($resultCheckprekg===0) {
   $sqlpry2="SELECT * FROM 2019_2020_term1_basic2 WHERE st_id= '$st_id'";
    $resultpry2=mysqli_query($conn, $sqlpry2);
    $resultCheckpry2 = mysqli_num_rows($resultpry2);
    if($resultCheckpry2===1){
        while ($rows=mysqli_fetch_assoc($resultpry2)) {
            ?>

<?php include_once'2019_2020_session/2019_2020_term1_basic2.php' ?>
            <?php
        }
    }
    if ($resultCheckpry2===0) {
        $sqlnur2="SELECT * FROM 2019_2020_term1_kg2 WHERE st_id= '$st_id'";
    $resultnur2=mysqli_query($conn, $sqlnur2);
    $resultChecknur2 = mysqli_num_rows($resultnur2);
    if($resultChecknur2===1){
        while ($rows=mysqli_fetch_assoc($resultnur2)) {
           ?>
<?php include_once'2019_2020_session_term2/2019_2020_term1_kg2.php' ?>
           <?php
        }
    }
    if ($resultChecknur2===0) {
       $sqlpry3="SELECT * FROM 2019_2020_term1_basic3 WHERE st_id= '$st_id'";
    $resultpry3=mysqli_query($conn, $sqlpry3);
    $resultCheckpry3 = mysqli_num_rows($resultpry3);
    if($resultCheckpry3===1){
        while ($rows=mysqli_fetch_assoc($resultpry3)) {
            ?>
<?php include_once'2019_2020_session_term2/2019_2020_term1_basic3.php' ?>
        
            <?php
        }
    }
       if ($resultCheckpry3===0) {
        $sqlJ1 = "SELECT * FROM 2019_2020_term1_jss1 WHERE st_id= '$st_id'";
        $resultJ1 = mysqli_query($conn, $sqlJ1);
        $resultCheckJ1 = mysqli_num_rows($resultJ1);
        if ($resultCheckJ1 ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ1)) {
                ?>
                 
      
<?php include_once'2019_2020_session_term2/2019_2020_term1_jss1.php' ?>
    <?php
    }
}

       if ($resultCheckJ1===0) {
        $sqlJ2 = "SELECT * FROM 2019_2020_term1_jss2 WHERE st_id= '$st_id'";
        $resultJ2 = mysqli_query($conn, $sqlJ2);
        $resultCheckJ2 = mysqli_num_rows($resultJ2);
        if ($resultCheckJ2 ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ2)) {
                ?>
                 
   <?php include_once'2019_2020_session_term2/2019_2020_term1_jss2.php' ?>

      <?php
  }
}
if ($resultCheckJ2===0) {
        $sqlJ3 = "SELECT * FROM 2019_2020_term1_jss3 WHERE st_id= '$st_id'";
        $resultJ3 = mysqli_query($conn, $sqlJ3);
        $resultCheckJ3 = mysqli_num_rows($resultJ3);
        if ($resultCheckJ3 ===1) {
            while ($rows = mysqli_fetch_assoc($resultJ3)) {
                ?>
<?php include_once'2019_2020_session_term2/2019_2020_term1_jss3.php' ?>
<?php
}
    }
    if ($resultCheckJ3===0) {
        $sql_ss1 = "SELECT * FROM 2019_2020_term1_ss1 WHERE st_id= '$st_id'";
        $result_ss1 = mysqli_query($conn, $sql_ss1);
        $resultCheck_ss1 = mysqli_num_rows($result_ss1);
        if ($resultCheck_ss1 >0) {
            while ($rows = mysqli_fetch_assoc($result_ss1)) {
                ?>
      <?php include_once'2019_2020_session_term2/2019_2020_term1_ss1.php'; ?>

                <?php
    }
}

    if ($resultCheck_ss1===0) {
        $sql_ss2 = "SELECT * FROM 2019_2020_term1_ss2 WHERE st_id= '$st_id'";
        $result_ss2 = mysqli_query($conn, $sql_ss2);
        $resultCheck_ss2 = mysqli_num_rows($result_ss2);
        if ($resultCheck_ss2 ===1) {
            while ($rows = mysqli_fetch_assoc($result_ss2)) {
                ?>
                 <?php include_once'2019_2020_session_term2/2019_2020_term1_ss2.php' ?>
      </div>

      <?php
}
}
}
}
}
}
}
}
}
}
}
}
}
}
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
					<li id=""><a href="#"><i class="fa fa-file-text-o"></i> <span>2020</span> <span class="fa fa-angle-right" style="float: right"></span></a>
						<ul id="menu-academico-sub">
							<li id=""><a href="result2.php">First term</a></li>
							<li id=""><a href="#">second term</a></li>
							<li id=""><a href="#">Third term</a></li>
							
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
	<script type="text/javascript"> 
        function printDiv() { 
            var divContents = document.getElementById("printR").innerHTML; 
            var a = window.open(); 
            a.document.write('<html>'); 
            a.document.write('<body > <h1>Div contents are <br>'); 
            a.document.write(divContents); 
            a.document.write('</body></html>'); 
            a.document.close(); 
            a.print(); 
        } 
    </script> 								
										

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>