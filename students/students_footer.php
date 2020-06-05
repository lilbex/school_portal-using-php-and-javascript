</div>
<footer>
					<p>&copy 2018 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a> and Develop By lilbex.com</p>
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
					<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
					<li id=""><a href="#"><i class="fa fa-file-text-o"></i> <span>2020/2021</span> <span class="fa fa-angle-right" style="float: right">			</span></a>
						<ul id="menu-academico-sub">
							<li id=""><a href="result2.php?studentid=<?php echo $st_id; ?>">First term</a></li>
							<li id=""><a href="second_term.php?studentid=<?php echo $st_id; ?>">second term</a></li>
							<li id=""><a href="#">Third term</a></li>
							
						</ul>
						<li id=""><a href="#"><i class="fa fa-file-text-o"></i> <span>2019/2020</span> <span class="fa fa-angle-right" style="float: right">			</span></a>
						<ul id="menu-academico-sub">
							<li id=""><a href="#">First term</a></li>
							<li id=""><a href="#?>">second term</a></li>
							<li id=""><a href="#">Third term</a></li>
							
						</ul>
					</li>
					<li id=""><a href="#"><i class="fa fa-file-text-o"></i> <span>HCBT</span> <span class="fa fa-angle-right" style="float: right">			</span></a>
						<ul id="menu-academico-sub">
							<?php 
								
								
								
								$conN = mysqli_connect('localhost', 'root', '', 'quizing');
								$qry2=mysqli_query($conN,"SELECT * FROM cbttestsubmit where st_id='$st_id'");
								$numrows2=mysqli_num_rows($qry2);
								if ($numrows2==3) {
									echo "<li id=''><a href='online_exam_ss2/attemptComplete.php?classid=$class_id'>2nd term</a></li>";
									
								} else {
										echo "<li id=''><a href='online_exam_ss2/index.php?classid=$class_id'>2nd term</a></li>";
								}
								
								
								
								 ?>
						
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
       /*function printDiv() { 
            var divContents = document.getElementById("printR").innerHTML; 
            var a = window.open(); 
            //a.document.write('<html>'); 
          
           a.document.write(divContents); 
            //a.document.write('</body></html>'); 
            //a.document.close(); 
            a.print(); 
        } 
    </script>  

    <script type="text/javascript">
       /*function printDiv() {
            var divContents = document.getElementById("printR").innerHTML;
            var printWindow = window.open();
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }
    </script>   

    <script type="text/javascript">
				
function printDiv(){
var print_div = document.getElementById("printR");
var print_area = window.open();
print_area.document.write(print_div.innerHTML);
print_area.document.close();
print_area.focus();
print_area.print();
print_area.close();
		}

	</script>

	<script>
/*function printDiv(printR){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(printR).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>