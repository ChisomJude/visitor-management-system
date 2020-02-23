<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GTBank VMS</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/owl-carousel/assets/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/meanmenu.css">
	<link rel="stylesheet" href="assets/css/nivo-lightbox.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<!-- header -->
<header>
    <?php require_once "admin/includes/dbcon.php"; ?>
<nav class="navigation">
    <div class="container">
        <div class="row">
            <div class="logo-wrap col-md-3 col-xs-6">
                <a href="index.php"><img src="img/logo.jpg" alt="GTB" width="60" height="60"> </a>
            </div>
            <div class="menu-wrap col-md-8 ">
                <ul class="menu">
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about-us.php">About Us</a>
                    </li>
                    <li>
                        <a href="visit.php">Visitors SignUp</a>
                    </li>
                    <!-- <li>
                        <a href="contact-us.php">Contact</a>
                    </li> -->
                    <li>
                        <a href="admin/index.php">Staff login</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!--[ MOBILE-MENU-AREA START ]-->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="mobile-area">
                        <div class="mobile-menu">
                            <nav id="mobile-nav">
                                <ul class="mobile-menu">
                                    <li class="active">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="about-us.php">About Us</a>
                                    </li>
                                    <li>
                                        <a href="visit.php">Visitors SignUp</a>
                                    </li>
                                    <!-- <li>
                                        <a href="contact-us.php">Contact</a>
                                    </li> -->
                                    <li>
                                        <a href="admin/index.php">Staff login</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--[ MOBILE-MENU-AREA END  ]-->
</nav>	</header>
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

