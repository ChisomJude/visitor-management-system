

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
            <h1>Delete Visitor</h1>
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
               $query= mysqli_query($con, "SELECT * FROM visitors WHERE `id` = $v");
               $qq= mysqli_fetch_array($query);

            if(!isset($_POST['btn_del'])){?>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-danger">
                <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;Are you sure you want to delete this visitor's information?
                </h3>
              </div>

              <div class="card-body">
                <div class="callout callout-danger with-border">
                 <form method="post" action="">
                    <div class="box-body no-padding">
                      <h5>Visitor Name: <?php  echo $qq['name']." (". $qq['company'].")"; ?> </h5>
                      <h5>Visit : <?php  echo  $qq['reason']?> </h5>
                      <h5>Signed Status: <span class="badge badge-info">
                        <?php if( $qq['sign_out_date']== 0){
                          echo "Not Signout Yet ";
                        }else{
                          echo "Signed Out - ". $qq['Sign_out_date'];
                        } ?></span></h5>

                    </div>
                    <div class="box-footer text-center">
                      <button class="btn btn-outline-danger btn-sm" name="btn_del">Yes,Delete</button> &nbsp; &nbsp;
                      <a href="visitors.php" class="btn btn-outline-success" title="Back to Visitors list">Cancel</a>
                    </div>
                 </form>

                </div>
              </div>
              <!-- /.callout and card-body -->
              <div class="card-footer">
                <span class="text-danger"> Note: All information about this vistors will be cleared </span>
              </div>
              <!-- /.card-footer-->
            </div>
            <?php }else{
                //$v= $_GET['cid'];
                $q= mysqli_query($con,"DELETE FROM visitors WHERE `id`='$v'");
                if(mysqli_affected_rows($con)){
                     echo'  <div class="card">
                            <div class="card-body"><h4> <div class="alert alert-success">
                              <span class="fa fa-check"></span> Success!</h4> 
                              <p>Visitor has been deleted!</p>
                              <a href="visitors.php" class="btn btn-outline-success" title="Back to Visitors list">Back To List</a>
                            </div>
                            </div>
                            </div>';
                }else{
                  //delete failed
                  echo' <div class="card">
                  <div class="card-body"><h4> <div class="alert alert-danger">
                  <span class="fa fa-times"></span> Failed!</h4> 
                  <p> Delete Process Failed !</p>
                  <a href="visitors.php" class="btn btn-outline-success" title="Back to Visitors list">Back To List</a>

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



