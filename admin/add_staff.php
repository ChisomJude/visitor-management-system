<?php
$pagename= "Users";
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
      <h1>Add Employee</h1>
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
      
      
      
    <!-- Main content -->
<section class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Add Employee Records </h3>
        </div>

        <div class="card-body">
          <div class="callout with-border">
            
            <div class="box-body no-padding">
            <div class="col-md-10 offset-1">
                  <div class="card">
                    
                    <div class="card-header p-4">
                    <?php 
                      if(!isset($_POST['btn_add'])){
                        echo '<p class="text-danger">
                        <i>Enter New User Details <sub>*</sub></i></p>';
                            }else{
                                    // echo "working";
                                  $ip_address= get_userip();// calling ip address function
                                  //user ip address for local host ipv4
                                  if($ip_address=='::1'){
                                    $ip= "127.0.0.1"; 
                                  }else{
                                  $ip=$ip_address;
                                  }

                                  $name= mysqli_escape_string($con,$_POST['name']);
                                  $email= mysqli_escape_string($con,$_POST['email']);
                                  $email=strtolower($email);
                                  $phone = mysqli_escape_string($con,$_POST['phone']);
                                  $rank= mysqli_escape_string($con,$_POST['position']);
                                  $dept=mysqli_escape_string($con,$_POST['dept']);
                                    
                                    //check if email already exists
                                  $Q= mysqli_query($con,"SELECT * FROM  staff  WHERE email = '$email' OR phone= '$phone'" );
                                      if(mysqli_num_rows($Q) >= 1){
                                        echo '<h4 class=" text-danger"><i class="fa fa-times"></i> Sorry,User email or Phone already exist!</h4>';
                                      }else{

                                        $p= "INSERT INTO `staff` (`id`, `name`, `email`, `phone`, `postion`, `department`)VALUES (NULL, '$name', '$email', '$phone', '$rank', '$dept');";
                                        $p= mysqli_query($con,$p); 
                                            
                                        if(mysqli_affected_rows($con)){
                                            echo '<h4 class=" text-success"><i class="fa fa-check"></i> User Added Successful</h4>';

                                          }else{
                                            echo '<h4 class=" text-danger"><i class="fa fa-times"></i>Sorry,process Failed!</h4>';

                                    }
                                  }
                              }?>
                              
                              <form class="form-horizontal" method="post" action="">
                              <div class="row">
                                <div class="col-sm-12">
                                  <!-- text input -->
                                  <div class="form-group">
                                    <label> Name</label>
                                    <input type="text" name="name" required class="form-control" placeholder="Visitor's Fulname ">
                                  </div>
                                </div>
                              </div>

                            <div class="row">
                              <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                  <label> Email</label>
                                  <input type="email" style="text-transform: lowercase;" name="email" required class="form-control" placeholder="Enter Staff Email address ">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label> Phone</label>
                                  <input type="text" name="phone" required class="form-control" placeholder="Staff Phone Number">
                                </div>
                              </div>
                            </div>
                            
                            <div class="row">
                              <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                  <label> Position</label>
                                  <input type="text" name="position" required class="form-control" placeholder="Staff Position">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label> Department</label>
                                  <input type="text" name="dept" required class="form-control" placeholder="Staff Department">
                                </div>
                              </div>
                            </div>

                            </div>
                            
                            
                            <div class="form-group row">
                              <div class="offset-sm-3 col-sm-6">
                                <button type="submit" name="btn_add" class="btn btn-block bg-orange">Add Staff</button>
                              </div>
                            </div>
                          </form>

                    </div>
                  </div>
                </div>


            </div>
            
        
          </div>
        </div>
        <!-- /.callout and card-body -->
        <div class="card-footer">
          Buttons 
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


