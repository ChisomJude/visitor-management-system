
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



