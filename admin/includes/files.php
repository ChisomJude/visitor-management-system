
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
            <h1>Select File to Export to CSV</h1>
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
                <h3 class="card-title">Export to CSV</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
              <div class="card-body card-block">
                 <form action="xls.php" method="post" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="hf-email" class=" form-control-label">Select File:</label>
                        </div>
             
                       <div class="col-12 col-md-6">
                        	<select name="select_file" class= "form-control" required="required"> 
                        		<option value="">Select File to download</option>
                        		<option value='1'>Approved Agents List</option>
                        		<option value="2">Unapproved List</option>
                        		<option value="3">Pending List</option>
                        		
                        	</select>
                    	</div>
                    </div>
                    
                     <div class="row form-group">
                        <div class="col col-md-2">
                            <label for="hf-email" class=" form-control-label">Select Date:</label>
                        </div>
             
                       <div class="col-12 col-md-6">

                        	<input name="date" class= "form-control" placeholder="Use the year-month-day format eg: 2019-02-19" required="required"> 
                        	
                        	
                    	</div>
                    </div>
            </div>
            <div class="row form-group" align="center">
                <div class="col col-md-8">
                <button type="submit" id="btnExport"
                    name='export' value="Download As Excel"
                    class="btn btn-info"><i class="fa fa-download"></i>&nbsp;Download As Excel</button>
            </div>
            
            </div>
            <br/><hr/><br/>
            <div class="row form-group" align="center">
                <div class="col-md-10">
                <a href="approveexcel.php" style="color:#006400"><i class="fa fa-download"></i>All Approved List</a>&nbsp;&nbsp;&nbsp;
                <a href="newapplicant.php" style="color:#00008B"><i class="fa fa-download"></i> New Applicant List</a>&nbsp;&nbsp;&nbsp;
                <a href="allreg.php" style="color:#DC143C"><i class="fa fa-download"></i>All Registered List</a>&nbsp;&nbsp;&nbsp;
                

                </div>

            </div>
            </form>
            <div class="card-footer"> </div>
            </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  
    </div>
  <?php require "includes/footer.php"; ?>

  

  

<?php
//TEMPLETE 2.0.0
?>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Delete Visitor</h1>
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
                <h3 class="card-title">Delete Visitor <?php  echo $name ;?></h3>
              </div>

              <div class="card-body">
                <div class="callout callout-success with-border">
                 
                  <div class="box-body no-padding">
                    Welsome here
                  </div>
                  <div class="box-footer text-center">
                    All the best
                  </div>
               
                </div>
              </div>
              <!-- /.callout and card-body -->
              <div class="card-footer">
                Buttons 
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  
    </div>
  <?php require "includes/footer.php"; ?>




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
            <h1>Dashboard</h1>
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
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                Start creating your amazing application!
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  
    </div>
  <?php require "includes/footer.php"; ?>

  

  

<?php
//TEMPLETE 2.0.0
?>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Delete Visitor</h1>
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
                <h3 class="card-title">Delete Visitor <?php  echo $name ;?></h3>
              </div>

              <div class="card-body">
                <div class="callout callout-success with-border">
                 
                  <div class="box-body no-padding">
                    Welsome here
                  </div>
                  <div class="box-footer text-center">
                    All the best
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



