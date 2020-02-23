

<?php
$pagename= "Delete User";
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
            <h1>Delete User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
            <?php 
               $v= $_GET['cid'];
               $query= mysqli_query($con, "SELECT * FROM users WHERE `id` = $v");
               $qq= mysqli_fetch_array($query);

            if(!isset($_POST['btn_del'])){?>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-danger">
                <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;Are you sure you want to delete <?php echo $qq['name']?>'s Account?
                </h3>
              </div>

              <div class="card-body">
                <div class="callout callout-danger with-border">
                 <form method="post" action="">
                    <div class="box-body no-padding">
                      <h5> Name: <?php  echo $qq['name']; ?> </h5>
                      <h5>Email : <?php  echo  $qq['email']?> </h5>
                      <h5>User Rights:<?php  echo  $qq['status']?> Right</h5>

                    </div>
                    <div class="box-footer text-center">
                      <button class="btn btn-outline-danger btn-sm" name="btn_del">Yes,Delete</button> &nbsp; &nbsp;
                      <a href="users.php" class="btn btn-outline-success" title="Back to Visitors list">Cancel</a>
                    </div>
                 </form>

                </div>
              </div>
              <!-- /.callout and card-body -->
              <div class="card-footer">
                <span class="text-danger"> Note: All information about this user will be cleared permanently </span>
              </div>
              <!-- /.card-footer-->
            </div>
            <?php }else{
                //$v= $_GET['cid'];
                $q= mysqli_query($con,"DELETE FROM users WHERE `id`='$v'");
                if(mysqli_affected_rows($con)){
                   
                     echo'  <div class="card">
                            <div class="card-body"><h4> <div class="alert alert-success">
                              <span class="fa fa-check"></span> Success!</h4> 
                              <p>User has been deleted!</p>
                              <a href="users.php" class="btn btn-outline-success" title="Back to Users list">Back To List</a>
                            </div>
                            </div>
                            </div>';
                }else{
                  //delete failed
                  echo' <div class="card">
                  <div class="card-body"><h4> <div class="alert alert-danger">
                  <span class="fa fa-times"></span> Failed!</h4> 
                  <p> Delete Process Failed !</p>
                  <a href="users.php" class="btn btn-outline-success" title="Back to users list">Back To List</a>

                </div>
                </div>
                </div>';
                }
              
            } ?>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  
    </div>
  <?php require "includes/footer.php"; ?>



