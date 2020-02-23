<?php
$pagename= "Staff";
$page= 1;
require "includes/header.php";
$cid=$_GET['cid'];
$user= mysqli_query($con,"SELECT * FROM staff WHERE id = '$cid'");
$q= mysqli_fetch_array($user);
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Staff Record</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item">
              <a href="staff.php"> <?php if($pagename){echo $pagename;} ?> </a>
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
              <h3 class="card-title">Edit Staff records for - <?php echo $q['name']?> </h3>
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
                            
                        ?>
                        <form class="form-horizontal" method="post" action="">
                        <div class="form-group row">
                                  <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" value="<?php echo $q['name']?>" required name="name" placeholder="Fullname" >
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                  <div class="col-sm-10">
                                    <input type="email" value="<?php echo $q['email']?>" class="form-control" required name="email" placeholder="Email">
                                  </div>
                                </div>
                                
                                <div class="form-group row">
                                  <label for="inputName2" class="col-sm-2 col-form-label"> Department</label>
                                  <div class="col-sm-10">
                                  <input type="text" value="<?php echo $q['department']?>" class="form-control" required name="dept" placeholder="Staff department">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputName2" class="col-sm-2 col-form-label"> Position</label>
                                  <div class="col-sm-10">
                                  <input type="text" value="<?php echo $q['postion']?>" class="form-control" required name="position" placeholder="Staff Position">
                                  </div>
                                </div>    
                                
                                </div>
                                
                                
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-6">
                                    <button type="submit" name="btn_add" class="btn btn-block bg-orange">Update Staff Records</button>
                                  </div>
                                </div>
                              </form>
                                <?php
                                }else{
                                      
                                      $name= mysqli_escape_string($con,$_POST['name']);
                                      $email= mysqli_escape_string($con,$_POST['email']);
                                      $position = mysqli_escape_string($con,$_POST['position']);
                                      $dept= mysqli_escape_string($con,$_POST['dept']);
                                        
                                        
                                            $s = "UPDATE staff SET `name`= '$name', `email`='$email', `postion`='$position', `department` = '$dept' WHERE `id` = '$cid'"; 
                                            $s= mysqli_query($con,$s);
                                            if(mysqli_affected_rows($con)){
                                              echo '<h4 class=" text-success"><i class="fa fa-check"></i> Staff Record Updated Successful</h4><a href="staff.php">Back to Staff List</a>';

                                            }else{
                                              echo '<h4 class=" text-danger"><i class="fa fa-check"></i> Staff record update failed</h4><a href="staff.php">Back to Staff List</a>';
                                            }
                                         
                                      }
                                  ?>
                                  
                                  
                                

                        </div>
                      </div>
                    </div>


                </div>
                
            
              </div>
            </div>
            <!-- /.callout and card-body -->
            
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content -->

  </div>
<?php require "includes/footer.php"; ?>


