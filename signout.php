<?php require "header.php" ?>
 <style>
        .long-input > input, select {
    	border: 1px solid #ddd;
    	color: #1b222a;
    	float: left;
    	height: 38px;
    	line-height: 38px;
    	margin-bottom: 15px;
    	margin-right: 15px;
    	padding: 0 15px;
    	text-transform: capitalize;
    	width: 100%;
    	-webkit-appearance: none;
    	-moz-appearance: none;
}
    </style>

    <div class="contact-page-wrapper">
		
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="comment-form-wrapper contact-from clearfix">
						<div class="widget-title ">
							<h4>Visitor's Signout</h4>
                  <i style="color:#ff0000">Signout is only available for today's visitors</i>
						</div>

						<div class="contact-message">
							<form action="" method="post">
                  <?php
                  if(isset($_POST['btn_signout'])){ 

                      $ip_address= get_userip();// calling ip address function
                      //user ip address for local host ipv4
                      if($ip_address=='::1'){
                         $ip= "127.0.0.1"; 
                      }else{
                       $ip=$ip_address;
                      }
                      
                      $date = date('Y-m-d'); //current date
                      date_default_timezone_set("Africa/Lagos");// change timezone from php default
                       $time = date("h:i:s A"); //current time
                       $v = mysqli_escape_string($con,$_POST['vname']);
                       $comments = mysqli_escape_string($con,$_POST['signout_comment']);
                        $q= "update visitors set sign_out_date= '$date', sign_out_time='$time', signout_ip='$ip', signout_comment='$comments' WHERE id='$v'";
                        $q= mysqli_query($con,$q);
                       if(mysqli_affected_rows($con)){
                        echo "<div><h4 style='color:green'>You are signed out. Thank you for visiting Guaranty Trust Bank. <a href='index.php' title='Go to Home page'>Home </a> </h4><br></div>";
                      }else{
                        echo '<div class="alert alert-success"><h3 style="color:#ff0000">Sorry, we couldnt proccess your request, please try again</h3><br></div>';
                      }
                    }
                  ?>

			    			<div class="long-input  field">
									<select name="vname" class="form_control" required>
										<option>-- Select your name (Company)--</option>
                    <?php
                       echo $date= date('Y-m-d');                         
                      $sql = mysqli_query($con,"SELECT `id` ,`name`,`company` FROM visitors WHERE sign_out_date='0' AND sign_out_time = '0' and sign_in_date ='$date' ");

                      while($row=mysqli_fetch_array($sql))
                            {
                      echo '<option value="'.$row['id'].'"> '.$row['name'].' ('.$row['company'].') </option>';
                             } ?>
																																																							
									 </select>
								 </div>
								
								
								
								<div class="single-input field">
									<textarea name="signout_comment" class="form_control" placeholder="How was your vist, You can drop a comment for us (Optional)"></textarea>
								</div>
								
								<div class="send-button field">
									<button type="submit" class="btn btn-big btn-solid" name="btn_signout"><i class="fa fa-paper-plane"></i><span>Signout</span></button>
								</div>



							</form>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>

  <?php require "footer.php" ?>