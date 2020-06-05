<?php include'students_header.php'; ?>
																		
										
								
				<!-- //header-ends -->
				
					<!--/tabs-->
					<div class="tab-main">
						<!--/tabs-inner-->
						<div class="tab-inner">
							<div id="tabs" class="tabs">
								<h2 class="inner-tittle">Welcome,
									<?php echo ucfirst($student_name_display['st_fullname']); ?> </h2>
								<div class="graph">
									<nav>
										<ul>
											<li><a href="#section-1" class="icon-shop"><i class="lnr lnr-briefcase"></i> <span>Information</span></a></li>
											<li><a href="#section-2" class="icon-cup"><i class="lnr lnr-lighter"></i> <span>Change Password</span></a></li>
											<li><a href="#section-3" class="icon-food"><i class="fa fa-cutlery"></i> <span>Comments</span></a></li>
											<li><a href="#section-4" class="icon-lab"><i class="fa fa-flask"></i> <span>Assignments</span></a></li>
											<li><a href="#section-5" class="icon-truck"><i class="fa fa-truck"></i> <span>Results</span></a></li>
										</ul>
									</nav>
									<div class="content tab">
										<section id="section-1">
											<div class="mediabox">
												<strong>Personal Information</strong>
												
												<p><strong>Class: </strong>
													<?php echo ucfirst($student_name_display['st_grade']); ?>
												</p>
												<p><strong>Roll No: </strong>
													<?php echo ucfirst($student_name_display['roll_no']); ?>
												</p>
												<p><strong>Gender: </strong>
													<?php echo ucfirst($student_name_display['st_gender']); ?>
												</p>
												<p> <strong>Date of Birth:</strong>
													<?php echo ucfirst($student_name_display['st_dob']); ?>
												</p>
												<p> <strong>Class ID:</strong>
													<?php echo ucfirst($student_name_display['class_id']); ?>
												</p>
												<p> <strong>Your Unique ID is:</strong>
													<?php echo ucfirst($student_name_display['st_id']); ?>
												</p>

											</div>
											<div class="mediabox">
												<strong>Contact Details</strong>

												<p> <strong>Address:</strong>
													<?php echo ucfirst($student_name_display['st_address']); ?>
												</p>
												<p> <strong>District:</strong>
													<?php echo ucfirst($student_name_display['st_district']); ?>
												</p>
												<p> <strong>Username:</strong>
													<?php echo ucfirst($student_name_display['st_username']); ?>
												</p>
												<?php 
												$sn =1;
												$db = mysqli_connect('localhost', 'root', '', 'quizing');
													$qry2=mysqli_query($db,"SELECT st_score FROM cbttestsubmit where st_id='$st_id' AND st_id='$st_id'");
													$datastring = "";
													$numrows2=mysqli_num_rows($qry2);
													if ($numrows2>0) {
														while($fetch2=mysqli_fetch_assoc($qry2)){
														$scores=$fetch2['st_score'];
														$datastring = $scores;
														
														?>
														<p> <strong>Project Attempts <?php $sn++; ?>:</strong>
														<?php echo $datastring;  ?>
														</p>
														<?php

													    }
														
													
														} else {
																echo "<strong>You have not attempted holiday assignment</strong>";

													}
														
														
													
													
														 ?>
												
											</div>
											<div class="mediabox">
												<strong>Parents Detail</strong>
												<p><strong>Father Name: </strong>
													<?php echo ucfirst($student_name_display['st_father']); ?>
												</p>
												<p><strong>Mother Name: </strong>
													<?php echo ucfirst($student_name_display['st_mother']); ?>
												</p>
												<p><strong>Parents Contact: </strong>
													<?php echo ucfirst($student_name_display['st_parents_contact']); ?>
												</p>
											</div>

											
											
											<div class="col-md-12">
												<h4>Change your Password</h4>
												<?php 
												if(isset($_POST['change_password']))
												{
													
													$prev_password = $student_name_display['st_password'];
													$old_password = $_POST['old_password'];
													
													if($prev_password!=$old_password)
													{ 
														echo "<script>alert('Old Password Does not Matched');</script>";	
													}
													else
													{
														$st_username = $student_name_display['st_username'];
													$st_password_update = $_POST['new_password'];
														$update_success = $ravi->student_password_change($st_password_update,$st_username);
														print_r($update_success);
													
													if($update_success==true)
													{
													echo "<script>window.location = 'home.php?success';</script>";
													}
														else
														{
															echo "<script>alert('cant update password');</script>";
														}
													}
													
												}
										
												?>

												<form method="post">
												<div class="input-group input-icon">
													<span class="input-group-addon">
												<i class="fa fa-key"></i>	</span>
													<input type="password" class="form-control1 icon" name="old_password" placeholder="Old Password">
													
												</div>
												<div class="input-group input-icon">
													<span class="input-group-addon">
												<i class="fa fa-key"></i>	</span>
													<input type="password" class="form-control1 icon" placeholder="New Password" name="new_password">
													
												</div>	
										
													<input type="submit" name="change_password" class="a_demo_four" value="Change Password">
													</form>
											</div>
											
										</section>
										<section id="section-2">
										
											<p>	2019/2020, Third term Calender</p>
					<table class="table table-hover table-dark table-striped">
					<tr>
						<th scope="col">Activity</th>
						<th scope="col">Date</th>
					</tr>
					
					<tr>
						<td>STAFF RESUMPTION</td>
						<td>23RD APRIL, 2020</td>
					</tr>
					<tr>
						<td>RESUMPTION</td>
						<td>27TH APRIL 2020</td>
					</tr>
					<tr>
						<td>SUBMISSION OF HOLIDAY PROJECT /ASSIGNMENT</td>
						<td>27TH APRIL 2020</td>
					</tr>
					<!--<tr>
						<td>HOLIDAY ASSESSMENT TEST</td>
						<td>FRIDAY 20TH 2020</td>
					</tr>
					<tr>
						<td>ICT,SCIENCE AND HOME/ECONS WEEK</td>
						<td>10TH TO 14TH FEB 2020</td>
					</tr>
					<tr>
						<td>OPEN DAY(PRIMARY)</td>
						<td>20TH FEB,2020</td>
					</tr>
					<tr>
						<td>FIRST PHASE PRACTICE FOR TALENTS WEEK</td>
						<td>1ST FEB- FEB-30THFEB.</td>
					</tr>
					<tr>
						<td>FIRST TEST</td>
						<td>THUR 6TH  FEB- FEB-MON. 10THFEB.</td>
					</tr>
					<tr>
						<td>MID TERM</td>
						<td>FRID 21TH – MON 24TH OF FEB. </td>
					</tr>
					<tr>
						<td>SECOND TEST</td>
						<td>TUESDAY  3ND MARCH –THUR 5TH MARCH,2020</td>
					</tr>
					<tr>
						<td>TEACHING CONTN.</td>
						<td>4TH -18TH OF MARCH</td>
					</tr>
					<tr>
						<td>SECOND TERM EXAMAMINATION</td>
						<td>THUR 19TH  – FRID 27TH ,MARCH 2020.</td>
					</tr>
					
					<tr>
						<td>SECOND PHASE PRACTICE</td>
						<td>31TH FEB-25TH  OF MARCH </td>
					</tr>
					<tr>
						<td>MARKING AND COMPILATION OF RESULT</td>
						<td>23TH -27TH OF MARCH</td>
					</tr>
					<tr>
						<td>VACATION</td>
						<td>3RD OF APRIL</td>
					</tr>
					<tr>
						<td>TALENTS WEEK</td>
						<td>4TH OF APRIL</td>
					</tr>
					<tr>
						<td>WORLD BOOK DAY</td>
						<td>2ND MARCH</td>
					</tr>
					<tr>
						<td>GOOD FRIDAY</td>
						<td>10TH APRIL,2020</td>
					</tr>
					<tr>
						<td>EASTER </td>
						<td>12TH APRIL,2020</td>
					</tr>-->
				</table>
											
										</section>
										<section id="section-3">
												<div class="graph">
															<div class="tables">
															
																<table class="table table-hover"> 
																	<thead>
																		<tr> 
																			<th>#</th> 
																			<th>Photo</th> 
																			<th>Teacher Name</th> 
																			<th>Subject</th>
																			<th>Email</th> 
																			<th>Time</th>
																		</tr> 
																	</thead> 
																	<tbody>
															<?php 
															$st_grade = $student_name_display['st_grade'];
															$sn = 1;
															$teacher_info_in_student = $ravi->teacher_info_instudent($st_grade);
																while($t_info = $teacher_info_in_student->fetch_assoc())		{ 
																		?>
																		
																		<tr>
																			<th scope="row"><?php echo $sn; ?></th>
																			<td><?php echo "<img src='{$st_info['st_image']}'/>"; ?></td>
																			<td><?php echo ucwords($t_info['t_fullname']); ?></td> 
																			<td><?php echo ucwords($t_info['subject_name']); ?></td> 
																			<td><?php echo strtolower($t_info['t_email']); ?></td> 
																			<td><?php echo $t_info['time']; ?></td>
																		</tr> 
																		<?php $sn++; } ?>
																	</tbody> 
																</table>
															</div>
												
													</div>
											
										
										</section>
										<section id="section-4">
											<div class="media-box">
												
												
                                                <?php
					$dbcon = mysqli_connect('localhost', 'root', '', 'project2');
                    $class_id=$student_name_display['class_id'];
                    $sql = "SELECT * FROM assignment WHERE class_id='$class_id'";
                    $result = mysqli_query($dbcon, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    $s_sn = 1;


            
              if ($resultCheck > 0){
                  while ($rowss = mysqli_fetch_assoc($result)) {
                                
                ?>            
           
                <h3 align="center"><?php echo $rowss['class']; ?></h3>        
                <embed src="<?php echo $rowss['name']; ?>" type="application/pdf" toolbar ='0' width="100%" height ='600px'  />
            
              <?php
            } {echo "NOTE: Deadline for Submission is 17th of January 2020";}
                                    }
        
        ?>
        <p>20th of January 2020 is Holiday Project Test, Ensure to check the school calender for activities and dates</p>
											</div>
										</section>
										<section id="section-5">
										
                                       	
										</section>
									
									</div>
									<!-- /content -->
								</div>
								<!-- /tabs -->

							</div>
							<script src="js/cbpFWTabs.js"></script>
							<script>
								new CBPFWTabs(document.getElementById('tabs'));
							</script>
							<div class="clearfix"> </div>
						</div>
					</div>
					<!--//tabs-inner-->


					

					
						<!--/charts-inner-->
					</div>
					<!--//outer-wp-->
				
				<!--footer section start-->
 <?php include'students_footer.php'; ?>