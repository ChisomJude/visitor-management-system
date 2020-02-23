
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GTBank VMS| Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/select2.min.css">	
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
function goBack() {
    window.history.back();
}
</script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <a href="#" class="logo">
          <span class="logo-mini"></span>
          <span class="logo-lg">GTBank Visitor Management System</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
			          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">0</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 0 recent activity</li>
                  <li>
                    <ul class="menu">
			
<li>No Updates/Alerts</li>
		  
                    </ul>
                  </li>
                  <li class="footer"><a href="my_profile.php">View all</a></li>
                </ul>
              </li>
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/avatar_profile.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">admin </span>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <img src="dist/img/avatar_profile.png" class="img-circle" alt="User Image">
                    <p>
                      admin                       <small>Date: 02/15/2020 08:24 AM<br />IP:197.210.44.184</small>
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="my_profile.php" class="btn btn-default btn-flat">Profile</a>
					  <a href="change_password.php" class="btn btn-default btn-flat">Password</a>
					  <a href="logout.php" class="btn btn-default btn-flat">Logout</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/avatar_profile.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><a href="my_profile.php">admin </a></p>
			  Welcome Back!
            </div>
          </div>
          <form action="visitors.php" method="post" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="search_visitors" class="form-control" value="" placeholder="Search visitors">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <ul class="sidebar-menu">
            <li class="active treeview">
              <a href="dashboard.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class=" treeview">
              <a href="#">
                <i class="fa fa-sitemap"></i>
                <span>Visitor's</span>
                &nbsp;&nbsp; <span class="label label-primary">4</span>
				<i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
			    <li ><a href="visitors.php"><i class="fa fa-users"></i> Visitor's List</a></li>
				<li ><a href="../" target="_blank"><i class="fa fa-user-plus"></i> Signin New Visitor</a></li>
              </ul>
            </li>		
			<li class=" treeview">
              <a href="admin_report.php">
                <i class="fa fa-area-chart"></i> <span>Visitor's Signin Activity's</span>
              </a>
            </li>
			
			 <li class=" treeview">
              <a href="my_profile.php">
                <i class="fa fa-user"></i> <span>My Profile</span>
              </a>
            </li>
						<li class=" treeview">
              <a href="#">
                <i class="fa fa-gears"></i>
                <span>Admin Settings</span>
				<i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li ><a href="users_list.php"><i class="fa fa-users"></i> Users List</a></li>
                <li ><a href="new_usr_account.php"><i class="fa fa-user-plus"></i> Create User</a></li>
                <li ><a href="panel_logs.php"><i class="fa fa-book"></i> Logs</a></li>
			    <li ><a href="panel_settings.php"><i class="fa fa-gear"></i> Site Settings</a></li>
			  </ul>
            </li>
			             <li class=" treeview">
              <a href="logout.php">
                <i class="fa fa-power-off"></i> <span>Logout</span>
              </a>
            </li>
          </ul>
        </section>
      </aside><script type='text/javascript' language='javascript'>	
	function signbage(hashid){
		windowObjectReference = window.open(
    "print_visitor_badge.php?cid="+ hashid +"&action=allow_usr&decode=6767676gh5662684de61a08888",
    "DescriptiveWindowName",
    "width=350,height=300,resizable,scrollbars,status"
  );
	}

	function viewsignin(hashid){
		windowObjectReference = window.open(
    "view_visitor_badge.php?cid="+ hashid +"&action=allow_usr&decode=6767676gh5662684de61a08888",
    "DescriptiveWindowName",
    "width=650,height=660,resizable,scrollbars,status"
  );
	}	
</script>
      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Dashboard
          </h1>
        </section>
        
        <section class="content">
          <div class="row">
            <div class="col-lg-6 col-xs-6">
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>1</h3>
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
                  <h3>3</h3>
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
            <div class="col-md-6">
          <div class="box box-success with-border">
                  <div class="box-header with-border">
                    <h3 class="box-title">Last Visitors Signin</h3>
                  </div>
                  <div class="box-body no-padding">
                    <ul class="users-list clearfix">
              
                      <li>
                      
                        <a class="users-list-name" href='#' onClick='viewsignin("13")'>gffg</a>
                        <span class="users-list-date">02/14/2020 03:06 PM</span>
                      </li>                 
    
                      <li>
                      
                        <a class="users-list-name" href='#' onClick='viewsignin("12")'>chisom</a>
                        <span class="users-list-date">02/14/2020 02:59 PM</span>
                      </li>                 
    
                      <li>
                      
                        <a class="users-list-name" href='#' onClick='viewsignin("9")'>Yewande Balogun</a>
                        <span class="users-list-date">12/19/2019 05:21 PM</span>
                      </li>                 
    
                      <li>
                      
                        <a class="users-list-name" href='#' onClick='viewsignin("8")'>Yewande</a>
                        <span class="users-list-date">12/18/2019 12:55 PM</span>
                      </li>                 
            </ul>
                  </div>
                  <div class="box-footer text-center">
                    <a href="visitors.php" class="uppercase">View All Visitors</a>
                  </div>
                </div>
          </div>
          <div class="col-md-6">
                <div class="box box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">Visitors have not Signed Out</h3>
                </div>
                  <div class="box-body no-padding">
                    <ul class="users-list clearfix">
              
                      <li>
                        
                        <a class="users-list-name" href='#' onClick='viewsignin("13")'>gffg</a>
                        <span class="users-list-date">02/14/2020 03:06 PM</span>
                      </li>                 
    
                      <li>
                        
                        <a class="users-list-name" href='#' onClick='viewsignin("12")'>chisom</a>
                        <span class="users-list-date">02/14/2020 02:59 PM</span>
                      </li>                 
    
                      <li>
                        
                        <a class="users-list-name" href='#' onClick='viewsignin("8")'>Yewande</a>
                        <span class="users-list-date">12/18/2019 12:55 PM</span>
                      </li>                 
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


      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          
        </div>
        <strong>Copyright &copy; 2019 </strong> All rights reserved.
      </footer>
    </div>
    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
 <script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var a=n[o];" "==a.charAt(0);)a=a.substring(1);if(0==a.indexOf(e))return a.substring(e.length,a.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0],wpSidebar=document.getElementById("adminmenuwrap"),wpTopBarRight=document.getElementById("wp-admin-bar-top-secondary");if(null!=wordpressAdminBody&&notification.length>0&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;} .upgrade-btn-sidebar {display: none;} #wp-toolbar .top-bar-upgrade-btn {width: 52px; height: 46px !important; padding: 0 !important;} .top-bar-upgrade-btn__text {display: none;} .dashicons-star-filled.top-bar-upgrade-btn__icon::before {font-size: 28px; margin-top: 10px; width: 28px; height: 28px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; right: 0; display: flex; padding: 0 5%}} @media only screen and (max-width: 960px) {.upgrade-btn-sidebar {border-radius: 0 !important; padding: 10px 0 !important; margin: 0 !important;} .upgrade-btn-sidebar__icon {display: block !important; margin: auto;} .upgrade-btn-sidebar__text {display: none;}}  .web-hosting-90-off-image {max-width: 90%; margin-top: 20px;} .content-wrapper {z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 12px -6px #cc292f; max-width: 350px; border: 0; border-radius: 3px; background-color: #ff5c62 !important; padding: 15px 55px !important;  margin-bottom: 48px; font-size: 14px; font-weight: 800; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: rgba(255,92,98, 0.9) !important;} .upgrade-btn-sidebar {text-align:center;background-color:#ff5c62;max-width: 350px;border-radius: 3px;border: 0;padding: 12px; margin: 20px 10px;display: block; font-size: 12px;color: #ffffff;font-weight: 700;text-decoration: none;} .upgrade-btn-sidebar:hover, .upgrade-btn-sidebar:focus, .upgrade-btn-sidebar:active {background-color: rgba(255,92,98, 0.9); color: #ffffff;} .upgrade-btn-sidebar__icon {display: none;} .top-bar-upgrade-btn {height: 100% !important; display: inline-block !important; padding: 0 10px !important; color: #ffffff; cursor: pointer;} .top-bar-upgrade-btn:hover, .top-bar-upgrade-btn:active, .top-bar-upgrade-btn:focus {background-color: #ff5c62 !important; color: #ffffff !important;} .top-bar-upgrade-btn__icon {margin-right: 6px;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Upgrade Now</button>',(notification=notification[0]).setAttribute("style","background-color: #f8f8f8; border-left-color: #ff5c62 !important;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Limited Time Offer",h1Tag.setAttribute("style","color: #32454c;  margin-top: 48px; font-size: 48px; font-weight: 700;");var h2Tag=document.createElement("H2");h2Tag.innerHTML="From $0.72/month",h2Tag.setAttribute("style","color: #32454c; margin: 20px 0 45px 0; font-size: 48px; font-weight: 700;"),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="Don’t miss the opportunity to enjoy up to <strong>4x WordPress Speed, Free SSL and all premium features</strong> available for a fraction of the price!",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 18px; font-weight: 300; color: #6f7c81; margin-bottom: 20px;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/wp-inject-default-img.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0];wpSidebar.insertAdjacentHTML("beforeend",'<a href="https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&amp;utm_medium=panel&amp;utm_campaign=000-wp-sidebar" target="_blank" class="upgrade-btn-sidebar"><span class="dashicons dashicons-star-filled upgrade-btn-sidebar__icon"></span><span class="upgrade-btn-sidebar__text">Upgrade</span></a>'),wpTopBarRight.insertAdjacentHTML("beforebegin",'<a class="top-bar-upgrade-btn" href="https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&amp;utm_medium=panel&amp;utm_campaign=000-wp-top-bar" target="_blank"><span class="ab-icon dashicons-before dashicons-star-filled top-bar-upgrade-btn__icon"></span><span class="top-bar-upgrade-btn__text">Go Premium</span></a>'),wordpressAdminBody.insertAdjacentHTML("beforeend",'<script type="text/javascript" src="https://a.opmnstr.com/app/js/api.min.js" data-campaign="f6brbmuxflyqoriatchv" data-user="71036" async><\/script>')}</script>
  
  
  </body>
</html>