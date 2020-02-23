
<?php
$pagename= "Search Visitor";
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
            <h1> Visitors List </h1>
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
            <h3 class="card-title">Search Result List</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
    </div>
  <div class="card-body">
      <table id="example2" class="table table-bordered  table-hover">
            <thead>
              <tr>
                <th>Controls</th>
                <th>Visitor ID</th>
                <th>Signin Date</th>
                <th>Signout Date</th>
                <th>Full Name</th>
                <th>Company</th>
               </tr>
           </thead>
            <tbody>
              <?php 
                $search= mysqli_escape_string($con, $_POST['search']);
                $qr= mysqli_query($con,"SELECT * FROM visitors WHERE name like '%$search%' ORDER BY id DESC");
                while($q = mysqli_fetch_array($qr)){
              ?>
                <tr>
                  <td>
                    <a href='#' onClick='signbage(<?php echo $q['id'] ?>)' role='button' title='View and Print Visitors Badge' class='btn btn-primary btn-sm'><i class='fa fa-eye'></i></a>
                      <a href='delete_visitor.php?cid=<?php echo $q['id'] ?>' role='button' title='Delete Visitor' class='btn btn-danger btn-sm'><i class='fa                                   fa-trash'></i></a>	
                      <a href='force_visitor_signout.php?cid=<?php echo $q['id'] ?>' role='button' title='Force Sign Out' class='btn btn-warning btn-sm'><i class='fa fa-arrow-right'></i></a>
                  </td>
                  
                  <td><?php echo $q['id'] ?></td>
                  <td><?php echo $q['sign_in_date'] .' '.$q['sign_in_time'] ;?></td>
                  <td><span class="label label-success">
                    <?php if($q['sign_out_date'] == 0){ 
                        echo "<span class='badge badge-danger'>Visitor Not  Signed out</span>";
                          }else{ echo '<span class="badge badge-success">'.$q['sign_out_date'].' '. $q['sign_out_time'] .'</span>'; }
                    ?></span></td>                       
                  <td><?php echo $q['name'] ?></td>
                  <td><?php echo $q['company'] ?></td>
                  </tr>  
                <?php } ?>
            </tbody>    
      </table>
  </div>
  </div> <!-- /.card-->
          
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  
   </div> 
  <?php require "includes/footer.php"; ?>