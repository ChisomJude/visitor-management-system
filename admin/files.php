
<?php
$pagename= "Export Files";
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
            <h1>Download List to Excel</h1>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View and Export Vistors List </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
              <div class="card-body card-block">
                <?php if(!isset($_POST['export'])){?>
                 <form action="" method="post" class="form-horizontal">
                    <div class="row form-group">
                            <div class="col col-md-2">
                                <label for="hf-email" class=" form-control-label">Enter Start Date:</label>
                            </div>
                
                          <div class="col-12 col-md-6">

                              <input name="sdate" class= "form-control" placeholder="Use YY-MM-DD format eg: 2019-02-19" required="required"> 
                          </div>
                        </div>
                        
                        <div class="row form-group">
                            <div class="col col-md-2">
                                <label for="hf-email" class=" form-control-label">Enter End Date:</label>
                            </div>
                
                          <div class="col-12 col-md-6">

                              <input name="edate" class= "form-control" placeholder="Use YY-MM-DD format eg: 2019-02-19" required="required"> 
                          </div>
                        </div>
                    </div>

                    <div class="row form-group" align="center">
                      <div class="col col-md-8">
                      <button type="submit" id="btnExport"
                          name='export' value="Preview List CSV"
                          class="btn btn-info"><i class="fa fa-download"></i>&nbsp;Preview List</button>
                    </div>
                
                    </div>
                    </div>
                </form>
                <?php }else{  //show table 
                 
                  ?>

                  <div class="card-body">
                    <div class="col-md-6 col-sm-6 offset-3">
                    <button onclick="exportTableToExcel('example22')" class="btn btn-danger btn-sm btn-block"><i class="fa fa-download"></i> Download Data To Excel File</button><br><br>
                    </div>
  <script>
    function exportTableToExcel(tableID, filename = 'vistorslist'){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>
                  <table id="example22" class="table table-bordered  table-hover">
            <thead>
              <tr>
                <th>SN</th>
                <th>Vistor's Name</th>
                <th>Company</th>
                <th>Signin Date</th>
                <th>Signout Date</th>
                <th>Department</th>
                <th>Person</th>
                <th>Reason</th>
                
               </tr>
           </thead>
            <tbody>
              <?php
                $x=0;
                $sdate = mysqli_escape_string($con,$_POST['sdate']);
                $edate = mysqli_escape_string($con, $_POST['edate']);
                
                $qr= mysqli_query($con,"SELECT * FROM `visitors` WHERE (sign_in_date BETWEEN '$sdate ' AND '$edate') ORDER by sign_in_date DESC
                ");
                while($q = mysqli_fetch_array($qr)){
                  $x++;
              ?>
                <tr>
                  <td>
                    <?php echo $x; ?>
                  </td>
                  
                  <td><?php echo $q['name'] ?></td>
                  <td><?php echo $q['company'] ?> </td>
                  <td><?php echo $q['sign_in_date'] .' '.$q['sign_in_time'] ;?></td>
                  <td><span class="label label-success">
                    <?php if($q['sign_out_date'] == 0){ 
                        echo "<span class='badge badge-danger'>Visitor Not  Signed out</span>";
                          }else{ echo '<span class="badge badge-success">'.$q['sign_out_date'].' '. $q['sign_out_time'] .'</span>'; }
                    ?></span></td>                       
                  <td><?php echo $q['visiting_dept']  ?></td>
                  <td><?php echo  $q['visiting_staff'] ?> </td>
                  <td><?php echo $q['reason'] ?> </td>
                  </tr>  
                <?php } ?>
            </tbody>    
      </table>
              </div>
               <?php } ?>
            </div>
              </div>
              <!-- /.card-body -->
             
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  
    </div>
  <?php require "includes/footer.php"; ?>

  
