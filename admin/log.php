
<?php
$pagename= "Logs";
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
            <h1> System Logs</h1>
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
            <h3 class="card-title">Staff Log</h3>
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
                <th>SN</th>
                <th>User Details </th>
                <th>IP Address</th>
                <th>User Level </th>
                <th>Last Login</th>
                <th>Log Status</th>
               </tr>
           </thead>
            <tbody>
              <?php 
                  $x=1;
                $qr= mysqli_query($con,"SELECT * FROM users ORDER BY `last_login` DESC");
                while($q = mysqli_fetch_array($qr)){
              ?>
                <tr>
                  <td>
                    <?php	echo $x++; ?>
                  </td>
                  
                  <td><?php echo $q['name'] .'<br>'. $q['email'] ?></td>
                  <td><?php echo $q['ip'] ?></td>
                  <td><span class="label label-success">
                    <?php if($q['user_level'] == 1){ 
                        echo "<span class='badge badge-danger'>Admin</span>";
                          }else{ echo '<span class="badge badge-success">User</span>'; }
                    ?></span></td>                       
                  <td><?php echo $q['last_login'] ?></td>
                  <td><?php if($q['log'] == 0){ 
                        echo "<span class='badge badge-danger'>Offline</span>";
                       
                          }else{ echo '<span class="badge badge-success">Online</span>'; ?>
                           <?php
                          
                          
                          } ?>
                           
                        
                            
                        </td>
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