<?php require "header.php" ?>
<!-- Banner -->
<div class="page-banner">
		<div class="container">
			<div class="parallax-mask"></div>
			<div class="section-name">
				<h2>Visit Us</h2>
				<div class="short-text">
					<h5>Home<i class="fa fa-angle-double-right"></i>Visit Us</h5>
				</div>
			</div>
		</div>
	</div>




	<!-- contact wrapper -->
	<div class="contact-page-wrapper">

<!-- Registration-->
<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="comment-form-wrapper contact-from clearfix">
						<div class="widget-title ">
							<h4>Visitor's Registration</h4>
						</div>

						<div class="contact-message">
							<form action="" method="post">
                  <?php 
                  
                  if(isset($_POST['btn_visitors'])){
                     $ip_address= get_userip();// calling ip address function
                      //user ip address for local host ipv4
                      if($ip_address=='::1'){
                         $ip= "127.0.0.1"; 
                      }else{
                       $ip=$ip_address;
                      }
                      
                      
                      $date = date('Y-m-d'); //current date
                      
                      date_default_timezone_set("Africa/Lagos");// change timezone
                       $time = date("h:i:s A"); //current time
                      $username = mysqli_escape_string($con, $_POST['visitor_name']);
                      
											$email =mysqli_escape_string($con, $_POST['email']);
											$email=strtolower($email);
                      $phone= mysqli_escape_string($con, $_POST['phone_number']);
                      $company=mysqli_escape_string($con, $_POST['company_name']);
                       $staff_visting = mysqli_escape_string($con, $_POST['visiting']);
                       //spliting the staff name and dept 
                       $staff_visting = explode('(',$staff_visting,2);
                       $staff= $staff_visting[0];
                       $dept =$staff_visting[1];
                      $reason= mysqli_escape_string($con, $_POST['reason']);
                      $comments= mysqli_escape_string($con, $_POST['comment']);

                      //insert to database
                      $q= "INSERT INTO `visitors` (`id`, `name`, `phone`, `email`, `ip_address`, `visiting_staff`, `reason`, `sign_in_date`, `sign_in_time`, `sign_out_date`, `sign_out_time`, `comment`, `visiting_dept`,`company`,`signout_ip`) VALUES (NULL, '$username', '$phone', '$email', '$ip', '$staff', '$reason', '$date', '$time', '0', '0', '$comments', '$dept','$company','');";
                      $q= mysqli_query($con, $q);
                      if(mysqli_affected_rows($con)){
                        echo "<div><h4 style='color:green'> Welcome to GTB. Your Visiting Details has been submited, Please remember to sign out</h4><br></div>";
                      }else{
                        echo '<div class="alert alert-success"><h3 style="color:#ff0000">Sorry, we couldnt proccess your request, please try again</h3><br></div>'.mysqli_error($con);
                      }
                    }
                  
                  ?>
								<div class="single-input field">
									<input name="visitor_name" type="text" placeholder="Full Name" required>
								</div>
								<div class="single-input  field">
									<input name="email" style="text-transform: lowercase;" type="email" placeholder="E-mail" required>
								</div>

								<div class="single-input  field">
									<input name="phone_number" type="text" placeholder="phone" required>
								</div>
								<div class="single-input  field">
									<input name="company_name" type="text" placeholder="Company or Address" required>
								</div>
								<div class="single-input  field">
									<select name="visiting" class="form_control" required>
										<option>-- Select Employee (Department)--</option>
										<?php
                                                
                      $sql = mysqli_query($con,"SELECT `name`,`department` FROM staff");
                      while($row=mysqli_fetch_array($sql))
                            {
                      echo '<option value="'.$row['name'].' ('.$row['department'].'"> '.$row['name'].' ('.$row['department'].') </option>';
                             } ?>
										</select>
									</div>
								
								<div class="single-input  field">
									<select name="reason" class="form_control" required>
										<option>Select Reason</option>
										<option value="Personal">Personal</option>
										<option value="Official">Official</option>
									</select>
								</div>
								
								<div class="single-input field">
									<textarea name="comment" class="form_control" placeholder="Tell us more about this visit" required></textarea>
								</div>
								
								<div class="send-button field">
									<button type="submit" name="btn_visitors" class="btn btn-big btn-solid"><i class="fa fa-paper-plane"></i><span>Submit</span></button>
									<button type="button" onclick="window.location='signout.php'" class="btn btn-big btn-solid"><i class="fa fa-paper-plane"></i><span>Signout</span></button>
								</div>



							</form>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>

<?php require "footer.php" ?>