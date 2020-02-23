
<?php
$pagename= "Users";
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
            <h1> Users List </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
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
            <h3 class="card-title">All User's List</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                
              </div>
    </div>
  <div class="card-body">
      <table id="example2" class="table table-bordered  table-hover">
            <thead>
              <tr>
                <th>Controls</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Last Login</th>
                <th>IP Address</th>
                <th>Rank</th>
               </tr>
           </thead>
            <tbody>
              <?php 
                $qr= mysqli_query($con,"SELECT * FROM users ORDER BY last_login DESC");
                while($q = mysqli_fetch_array($qr)){
              ?>
                <tr>
                  <td>
                      
                      <a href='edit_user.php?cid=<?php echo $q['id'] ?>' role='button' title='Edit' class='btn btn-info btn-sm'><i class='fa                                   fa-edit'></i></a>	
                      <a href='delete_user.php?cid=<?php echo $q['id'] ?>' role='button' title='Delete this user' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a>
                  </td>
                  
                  <td><?php echo $q['name'] ?></td>
                  <td><?php echo $q['email'] ;?></td>
                  <td><span class="label label-success">
                    <?php echo $q['last_login'] ; ?></span></td>                       
                  <td><?php echo $q['ip'] ?></td>
                  <td><?php echo "<span class='badge badge-info'>".$q['status'] ?></span></td>
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