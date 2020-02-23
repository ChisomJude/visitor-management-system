
<?php
$pagename= "Profile";
$page= 1;
require "includes/header.php";


?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>My profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item">
                <a href="#"> <?php if($pagename){echo $pagename;} ?> </a>
              </li>
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
      <?php 
        $q= mysqli_query($con, "SELECT * FROM users WHERE id ='$id'");
        $qr= mysqli_fetch_array($q);

      ?>
      
      
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Welcome <?php echo $qr['name'] ?> </h3>
              </div>

              <div class="card-body">
                <!-- Main content -->
                <section class="content">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-4">

                        <!-- Profile Image -->
                        <div class="card card-orange card-outline">
                          <div class="card-body box-profile">
                            <div class="text-center">
                              <img class="profile-user-img img-fluid img-circle"
                                  src="dist/img/avatar_profile.png"
                                  alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?php echo $qr['name']?></h3>

                            <p class="text-muted text-center"><?php echo $qr['status']?></p>

                            <ul class="list-group list-group-unbordered mb-3">
                              <li class="list-group-item">
                                <b>Email</b> <a class="float-right"><?php echo $qr['email']?></a>
                              </li>
                              <li class="list-group-item">
                                <b>ip address</b> <a class="float-right"><?php echo $qr['ip']?></a>
                              </li>
                              <li class="list-group-item">
                                <b>Last Login</b> <a class="float-right"><?php echo $qr['last_login']?></a>
                              </li>
                            </ul>

                            
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->
                      
                      <div class="col-md-8">
                        <div class="card">
                          <div class="card-header p-2">
                          <form class="form-horizontal"  method="post" action="">
                                  <?php
                                  if(!isset($_POST['btn_update'])){
                                    echo '<p class="text-danger"><i>Edit your profile details to change records<sub>*</sub></i></p>';
                                    }else{
                                        $name= mysqli_escape_string($con,$_POST['name']);
                                        $email= mysqli_escape_string($con,$_POST['email']);
                                        $password = mysqli_escape_string($con,$_POST['password']);
                                        $pass= sha1($password);

                                          if(!empty($password)){
                                            $p= "UPDATE users SET `name`='$name', `email`='$email', `password` ='$pass' WHERE id= '$id'";
                                            $p= mysqli_query($con,$p);
                                              if(mysqli_affected_rows($con)){
                                                echo '<h4 class="text-success"><i class="fa fa-check"></i> Update Successful with Password Change</h4>';

                                                }else{
                                                echo '<h4 class="text-danger"><i class="fa fa-times"></i>Sorry, Update Failed!</h4>';
                                                }
                                                
                                                //password was changed too
                                            }else{
                                              $p= "UPDATE users SET `name`='$name', `email`='$email' WHERE id= '$id'";
                                              $p= mysqli_query($con,$p);
                                                if(mysqli_affected_rows($con)){
                                                  echo '<h4 class=" text-success"><i class="fa fa-check"></i> Update Successful! No password Changed</h4>';
  
                                                }else{
                                                  echo '<h4 class=" text-danger"><i class="fa fa-times"></i>Sorry, Update Failed!</h4>';
  
                                                }
                                            }
                                    }?>
                                    
                                    
                                    <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" required name="name" placeholder="Fullname" value="<?php echo $qr['name']?>">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                      <input type="email" class="form-control" required name="email" placeholder="Email" value="<?php echo $qr['email']?>">
                                    </div>
                                  </div>
                                  <i class="text-danger">Leave password blank if you not want to change your password</i>

                                  <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Change Password</label>
                                    <div class="col-sm-10">
                                      <input type="password" onkeyup="check();" class="form-control" name="password" id="mainpass" placeholder="Enter a new password">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                    <input type="password" id="pass2" onkeyup="check();" class="form-control" name="password2" placeholder="Re-enter password">
                                    <span id="message"> </span>  
                                  </div>
                                  <script type="text/javascript">
                                        var check = function(){
                                          if (document.getElementById('mainpass').value ==
                                          document.getElementById('pass2').value) {
                                            document.getElementById('message').style.color = 'green';
                                            document.getElementById('message').innerHTML = '<i>Good Password Match!</i>';
                                          } else {
                                            document.getElementById('message').style.color = 'red';
                                            document.getElementById('message').innerHTML = '<i>Sorry, password do not match</i>';
                                          }
                                        }
                                    </script>
                                  </div>
                                  
                                  
                                  <div class="form-group row">
                                    <div class="offset-sm-3 col-sm-6">
                                      <button type="submit" name="btn_update" class="btn btn-block bg-orange">Submit</button>
                                    </div>
                                  </div>
                                </form>

                          </div>
                        </div>
                      </div>
                          </div>
                          <!-- /. card-body -->
                          <div class="card-footer">
                            
                          </div>
                          <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                      </div>
                    </div>
                  </div>
                </section>
               <!-- /.content -->
  
    </div>
  <?php require "includes/footer.php"; ?>


