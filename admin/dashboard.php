
<?php
$pagename= "Dashboard";
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
            <h1>Admin Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <a href="#">Home</a></li>
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
            
            
        <section class="content">
          <div class="row">
            
              <div class="col-lg-6 col-xs-6">
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>
                      <?php 
                          $q= mysqli_query($con,"SELECT COUNT(id) AS id FROM visitors WHERE sign_out_date != '0'" );
                          $q= mysqli_fetch_array($q);
                          echo $q['id'];
                      ?>
                    </h3>
                    <p>Signin Visitors that Signed out</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person"></i>
                  </div>
                  <a href="visitors.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>

              <div class="col-lg-6 col-xs-6">
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>
                    <?php 
                          $q= mysqli_query($con,"SELECT COUNT(id) AS id FROM visitors WHERE sign_out_date = '0'" );
                          $q= mysqli_fetch_array($q);
                          echo $q['id'];
                      ?>
                    </h3>
                    <p>Visitors that have not signed out</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person"></i>
                  </div>
                  <a href="visitors.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>

			      </div>

			    <div class="row">
            <div class="col-lg-6 col-xs-6 box">
              <div class="callout callout-success with-border">
                  <div class="box-header with-border">
                    <h5 class="box-title">Today's Visitors Signin<i class="text-success text-bold"><small> &nbsp; Present Visitors - Not sign out</small></i></h5>
                      <hr>
                  </div>
                  <div class="box-body no-padding">
                    <ul class="users-list clearfix">
                        <?php
                          $date= date('Y-m-d');
                          $p= "SELECT `id`,`name`, `sign_in_date`,`sign_in_time` FROM visitors WHERE `sign_out_date` = 0 and `sign_in_date`= '$date' ORDER BY `sign_in_time` DESC Limit 4";
                          $p= mysqli_query($con,$p);
                          if(mysqli_num_rows($p)==0){
                            echo '<br><h5 class="text-danger text-center">Presently, there are no Visitor Signin  Today</h5><br>';
                          }else{
                          while($pr = mysqli_fetch_array($p)){
                        ?>
                      <li>
                        <a class="users-list-name" href="#" onClick='signbage("<?php echo $pr['id']; ?>")'><?php echo $pr['name']; ?></a>
                        <span class="users-list-date"><?php echo $pr['sign_in_date']." ".$pr['sign_in_time']; ?></span>
                      </li>                 
                            <?php } }?>
                                     
                      </ul>
                  </div>
                  <div class="box-footer text-center">
                    <a href="visitors.php" class="uppercase">View All Visitors</a>
                  </div>
                </div>
            </div>

             <div class="col-lg-6 col-xs-6 box">
                <div class="callout callout-danger">
                  <div class="box-header with-border">
                    <h5 class="box-title">Pending Visitors Signed Out
                    <i class="text-success text-bold"><small>Past Visitors - Not signed out</small></i><h5><hr>
                </div>
                  <div class="box-body no-padding">
                    <ul class="users-list clearfix">
                    <?php
                          $date= date('Y-m-d');
                          $p= "SELECT `id`,`name`, `sign_in_date`,`sign_in_time` FROM visitors WHERE `sign_out_date` = 0 and `sign_in_date`<> '$date' ORDER BY `sign_in_date` ASC Limit 4";
                          $p= mysqli_query($con,$p);
                          if(mysqli_num_rows($p)==0){
                            echo '<br><h6 class="text-danger text-center">There are no past visitor who hasnt Signed  out</h6><br>';
                          }else{
                          while($pr = mysqli_fetch_array($p)){
                        ?> 
                      
                      <li>
                        <a class="users-list-name" href="#" onClick='signbage("<?php echo $pr['id']; ?>")'><?php echo $pr['name']; ?></a>
                        <span class="users-list-date"><?php echo $pr['sign_in_date']." ".$pr['sign_in_time']; ?></span>
                      </li>                 
                        <?php } }?>
                                     


                    </ul>
                  </div>
                  <div class="box-footer text-center">
                    <a href="visitors.php" class="uppercase">View All Visitors</a>
                  </div>
                </div>
              </div>
            </div>
          </div>			
        </section>


          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  
    </div>
  <?php require "includes/footer.php"; ?>