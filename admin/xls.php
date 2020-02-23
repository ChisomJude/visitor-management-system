<?php 

require "includes/dbcon.php";

    $now=date("Y-m-d");
    $opt= $_POST['select_file'];

    $date= $_POST['date'];
    
	 $q= mysqli_query($con,"SELECT `name`,`email`,`phone`,`company`,`visiting_staff`, `visiting_dept`, `reason`, `comment`,`sign_in_date`, `sign_in_time`,`sign_out_date`,`sign_out_time` FROM visitors where sign_in_date = '$date'
        ORDER BY sign_in_time DESC") or die(mysqli_error($con));
	    //$q=mysqli_fetch_array($qr);


    
 if (isset($_POST["export"])) {
    $filename = "Visitors_list.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (!empty($q)) {
        foreach ($q as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }
    exit();
}
?>