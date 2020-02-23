<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GTBank Visitor Management System | Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <style>
    .login-page,
    .register-page {
      background:
        #fcfcfd;
        background-repeat: no-repeat;
        background-size: cover;
      background-image: url('../img/backgroung.jpg');
    }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
</head>

<body class="hold-transition login-page">
<?php 
 function get_userip(){
  //whether ip is from share internet
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   
    {
      $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
    {
      $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from remote address
    else
    {
      $ip_address = $_SERVER['REMOTE_ADDR'];
    }
    return $ip_address;
  }
?>  
<div class="login-box">
    <div class="login-logo">
     
    </div><!-- /.login-logo -->
    <div align="center" class="login-box-body" style="background:#ffffff; padding:25px;width:450px; height:300px">
    <a href="../index.php" style="color:orangered"><h3>GTBank Visitor Management System</h3></a>
      <?php 
      require "includes/dbcon.php";
       
          $v= rand(1,10);
          $vv= rand(1,10);
          //$addv= $v +$vv;
           // compare with value of login_auth
          ?>
           
          <?php 
           if(!isset($_POST['login_submit'])){  ?>
           <h5 class='text-danger text-center'><?php echo @$_GET['msg'] ?></h5>
      <p class="login-box-msg">Sign in to start your session</p>
     
     <?php }else{
        //process login
  $user = mysqli_escape_string($con, $_POST['user_email']);
  $pass= mysqli_escape_string($con, $_POST['user_pass']);
  $vert= mysqli_escape_string($con, $_POST['vert']); 
  $vert2= mysqli_escape_string($con, $_POST['vert2']); 

  $pass2= sha1($pass);
  
  if($vert != $vert2){
    //return error
    echo "<h4 style='color:red;'> Error! Incorrect Verification... </h4>";
  }else{
    
    $Q = "SELECT * FROM users WHERE `email` ='$user' AND `password` = '$pass2'"; 
      if($q= mysqli_query($con, $Q)){
          if(mysqli_num_rows($q) == 1){
              $type= mysqli_fetch_array($q);
              $name=  $type['name'];
              $id = $type['id'];
              $level = $type['user_level'];
              $last_login = $type['last_login'];
                  
              // set sessions
                      session_start();
                     $_SESSION['id']=$id;
                     $_SESSION['name'] = $name;
                    $_SESSION['level'] = $level;
                    $_SESSION['last_login'] = $last_login;
                   
                    
                    $ip_address= get_userip();// calling ip address function
                    //user ip address for local host ipv4
                    if($ip_address=='::1'){
                      $ip= "127.0.0.1"; 
                    }else{
                    $ip=$ip_address;
                    }
                    date_default_timezone_set("Africa/Lagos");
                    $date = date('Y-m-d H:i:s A');

                    // make updates to db
                    $qq= "UPDATE users SET `ip`='$ip', `log` = '1', `last_login` = '$date' WHERE `id` ='$id' ";

                    $qr= mysqli_query($con,$qq) or die(mysqli_error($con)) ;
                                                             
                    if($rr= mysqli_affected_rows($con)){
                  ?>
                  <script type="text/javascript">
                  window.location.href = "http://localhost/gtb/admin/dashboard.php";
                  </script>
                  <?php  }else{
          echo "<h4 style='color:red;'> An error occured on login</h4>";
            }

          }else{
          echo "<h4 style='color:red;'> Incorrect Login Details</h4>";
         }
      }else{
      echo "<h4 style='color:red;'> Try please again later</h4>";
      }
    }// $vert != $addv
     }?>
      <form action="" method="post">
        <div class="form-group has-feedback">
          <input type="text" required name="user_email" class="form-control" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="user_pass" class="form-control" placeholder="Password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        
        <div class="form-group has-feedback">
          <input type="text" name="vert" class="form-control" placeholder="<?php echo $v.'+'.$vv.'='  ?>"  required>
          <input type="hidden" name="vert2" value="<?php echo $v + $vv  ?>"  required>
          <span class="glyphicon glyphicon-option-horizontal form-control-feedback" id="message"></span>
          
        </div>
        
        <div class="row">
          <div class="col-xs-6">
          </div>
          <div class="col-xs-6">
            <button type="submit" name="login_submit" class="btn btn-block btn-round" style="background:orangered;color:peachpuff">Secure Login</button>
          </div>
        </div>
      </form>
      <!-- <a href="forgot_info.php">I forgot my password</a><br>
		<a href="register_account.php" class="text-center">Register a new account</a> -->
    </div>
  </div>
  <!-- jQuery 2.1.4 -->
  <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>

</html>