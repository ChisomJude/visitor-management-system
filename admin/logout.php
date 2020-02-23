<?php require_once "includes/header.php";
  require_once 'includes/dbcon.php';
 $qq= "UPDATE users SET  `log` = '0'  WHERE id ='$_SESSION[id]' ";
                    $qq= mysqli_query($con,$qq);
                    if(mysqli_affected_rows($con)){
//session_start();
if(session_destroy()) // Destroying All Sessions
{?>
  <script type="text/javascript">
  window.location.href = "http://localhost/gtb/admin/index.php?msg=You are logged out";
  </script>
  <?php
}
  }
?>