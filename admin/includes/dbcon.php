<?php 

//new mysqli('localhost', 'my_user', 'my_password', 'my_db');
$con = new mysqli('localhost','root','','gtb_vms') or die("Could not connect to mysql".mysqli_error($con));
 
?>