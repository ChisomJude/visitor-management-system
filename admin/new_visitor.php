<?php
    $pagename = "Dashboard";
    $page = 1;
    require "includes/header.php";

    ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1>Add a New Visitor</h1>
    </div>
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item">
    <a href="#"> Add Visitor </a>
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
    <h3 class="card-title">Sign In New Vistor </h3>
    </div>

    <div class="card-body">
    <div class="callout callout-orange with-border">

    <div class="box-body no-padding">

    <form role="form" method="post" action="">
    <?php  
    if(!isset($_POST['btn_reg'])){?>
      <div class="row">
      <div class="col-sm-4">
        <!-- text input -->
        <div class="form-group">
          <label> Name</label>
          <input type="text" name="name" placeholder="Enter Visitors name" required class="form-control" >
        </div>
      </div>
      <div class="col-sm-4">
        <!-- text input -->
        <div class="form-group">
          <label> Email</label>
          <input type="email" name="email" style="text-transform: lowercase;" placeholder="Enter Visitors Email" required class="form-control" >
        </div>
      </div>
      <div class="col-sm-4">
        <!-- text input -->
        <div class="form-group">
          <label>Phone</label>
          <input type="text" name="phone" required class="form-control" placeholder="Visitors Phone Contact">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4">
        <!-- text input -->
        <div class="form-group">
          <label> Company</label>
          <input type="text" name="company" placeholder="Vistors Company or Address" required class="form-control" placeholder="Visitor's Company">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label> Visiting Staff</label>
          <select name="visiting" class="form-control" required>
            <option>-- Select Employee (Department)--</option>
            <?php

            $sql = mysqli_query($con, "SELECT `name`,`department` FROM staff");
            while ($row = mysqli_fetch_array($sql)) {
              echo '<option value="' . $row['name'] . ' (' . $row['department'] . '"> ' . $row['name'] . ' (' . $row['department'] . ') </option>';
            } ?>
          </select>
        </div>
      </div>
      <div class="col-sm-4">
        <!-- text input -->
        <div class="form-group">
          <label>Reason</label>
          <select name="reason" class="form-control" required>
            <option>Select Reason</option>
            <option value="Personal">Personal</option>
            <option value="Official">Official</option>
          </select>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <!-- textarea -->
        <div class="form-group">
          <label>Comment</label>
          <textarea name="comments" class="form-control" rows="3" required placeholder="Tell us more about this visit"></textarea>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-6 offset-3">
        <input type="submit" name="btn_reg" class="btn btn-block bg-orange" value="Register Visitor ">
      </div>
    </div>
    <?php }else{
      // form processing
      
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
          $username = mysqli_escape_string($con, $_POST['name']);
          
          $email =mysqli_escape_string($con, $_POST['email']);
          $email=strtolower($email);
          $phone= mysqli_escape_string($con, $_POST['phone']);
          $company=mysqli_escape_string($con, $_POST['company']);
            $staff_visting = mysqli_escape_string($con, $_POST['visiting']);
            //spliting the staff name and dept 
            $staff_visting = explode('(',$staff_visting,2);
            $staff= $staff_visting[0];
            $dept =$staff_visting[1];
          $reason= mysqli_escape_string($con, $_POST['reason']);
          $comments= mysqli_escape_string($con, $_POST['comments']);

          //insert to database
          $q= "INSERT INTO `visitors` (`id`, `name`, `phone`, `email`, `ip_address`, `visiting_staff`, `reason`, `sign_in_date`, `sign_in_time`, `sign_out_date`, `sign_out_time`, `comment`, `visiting_dept`,`company`,`signout_ip`) VALUES (NULL, '$username', '$phone', '$email', '$ip', '$staff', '$reason', '$date', '$time', '0', '0', '$comments', '$dept','$company','');";
          $q= mysqli_query($con, $q);
          if(mysqli_affected_rows($con)){
            echo "<div><h4 style='color:green'> Visiting Details has been submited successfully </h4><a href='new_visitor.php'>Create New Visitors</a><br></div>";
          }else{
            echo '<div class="alert alert-success"><h3 style="color:#ff0000">Sorry, we couldnt proccess your request, please try again</h3><br></div>'.mysqli_error($con);
          }
        
    }
      ?>
      
    </form>


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