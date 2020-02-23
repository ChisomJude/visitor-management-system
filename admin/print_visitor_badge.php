<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GTB | Visitor Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script type="text/javascript">
        function printpage() {
            //Get the print button and put it into a variable
            var printButton = document.getElementById("printpagebutton");
            var printButton2 = document.getElementById("printpagebutton2");
            //Set the print button visibility to 'hidden' 
            printButton.style.visibility = 'hidden';
            printButton2.style.visibility = 'hidden';
            //Print the page content
            window.print()
            //Set the print button to 'visible' again 
            //[Delete this line if you want it to stay hidden after printing]
            printButton.style.visibility = 'visible';
            printButton2.style.visibility = 'visible';
        }
    </script>

</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed accent-orange">
<!-- Site wrapper -->
<div class="wrapper">


<?php 
require_once"includes/dbcon.php";
  if(isset($_GET['cid'])){
      $v= $_GET['cid'];

      $qr= mysqli_query($con, "SELECT * FROM visitors  WHERE id ='$v'");
      $q= mysqli_fetch_array($qr);
  }
?>
<div class="row">
  <div class="col-md-6 col-offset-3">
    <!-- Widget: user widget style 2 -->
      <div class="card card-widget widget-user-2">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header bg-orange">
                    <div class="widget-user-image">
                      <img class="img-circle elevation-2" src="dist/img/avatar_profile.png" alt="User Avatar">
                    </div>
                    <!-- /.widget-user-image -->
                    <h3 class="widget-user-username"><?php echo $q['name'] ?></h3>
                    <h5 class="widget-user-desc"><?php echo $q['company'] ?></h5>
                  </div>
                  <div class="card-footer p-0">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          Contact <span class="float-right badge bg-navy">
                            <?php echo $q['email']. '&nbsp; &nbsp;  '. $q['phone']?></span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          Visiting Details <span class="float-right badge bg-navy">
                            <?php echo "Department: ". $q['visiting_dept']?></span>
                        </a>
                      <?php echo "<div class='container'><span> <b> Recieving Staff: </b>".$q['visiting_staff'].
                                        " &nbsp; &nbsp; <b> Reason: </b>" .$q['reason'].
                                        "<br><b> Comment: </b>" .$q['comment'] ."</span></div>"; 
                              ?>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          Signin Info<span class="float-right badge bg-navy">
                            <?php echo "Signedin : ". $q['sign_in_date']."  ".$q['sign_in_time'];?></span>
                        </a>
                      <?php
                        if($q['sign_out_date']==0 ){
                          $out= "<span class='badge badge-danger'>Not Sign Out</span>";
                        }else{$out = $q['sign_out_date'] .'  '. $q['sign_out_time'] ;}
                      echo "<div class='container'><span> <b>SignOut : </b>".$out.
                                        "<br><b> Sign-Out Comment: </b>" .$q['signout_comment'] ."</span></div>"; 
                              ?>
                      </li>
                      <li class="nav-item">
                        <span class="float-right">
                          <input id="printpagebutton" type="button" onclick="printpage()" class="btn btn-success btn-sm" value="Print Pass" /> 
                          <button id="printpagebutton2" type="button" class="btn btn-outline btn-danger btn-sm" onClick="window.close();">Close Window </button>
                          &nbsp;&nbsp;&nbsp;
                        </span>
                      </li>
                    </ul>
                  </div>
      </div>
    <!-- /.widget-user -->
    </div>
    <!-- /.div wrapper -->
</div>
</div>
<?php require "includes/footer.php"; ?>