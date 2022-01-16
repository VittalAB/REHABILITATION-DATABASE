<?php
include 'inc/header.php';

Session::CheckSession();

$logMsg = Session::get('logMsg');
if (isset($logMsg)) {
  echo $logMsg;
}
$msg = Session::get('msg');
if (isset($msg)) {
  echo $msg;
}
Session::set("msg", NULL);
Session::set("logMsg", NULL);
?>
<?php

if (isset($_GET['remove'])) {
  $remove = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['remove']);
  $removeUser = $users->deletepnById($remove);
}

if (isset($removeUser)) {
  echo $removeUser;
}
if (isset($_GET['deactive'])) {
  $deactive = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['deactive']);
  $deactiveId = $users->userDeactiveByAdmin($deactive);
}

if (isset($deactiveId)) {
  echo $deactiveId;
}
if (isset($_GET['active'])) {
  $active = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['active']);
  $activeId = $users->userActiveByAdmin($active);
}

if (isset($activeId)) {
  echo $activeId;
}


 ?>
      <div class="card ">
        <div class="card-header">
          <h3><i class="fas fa-users mr-2"></i>Patient list <span class="float-right">Welcome! <strong>
            <span class="badge badge-lg badge-secondary text-white">
<?php
$username = Session::get('username');
if (isset($username)) {
  echo $username;
}
 ?></span>

          </strong></span></h3>
        </div>
        <div class="card-body pr-2 pl-2">

          <table id="example" class="table table-striped table-bordered" style="width:100%">
             <h3> <span class="float-right"> <a href="addpnt.php" class="btn btn-primary">Add Patient</a> </h3>
                  <thead>
                    <tr>
                      <th  class="text-center">SL</th>
                       <th  class="text-center">Name</th>
                      <th  class="text-center">Address</th>
                      <th  class="text-center">Age</th>
                      <th  class="text-center">Phone</th>
                      <th  class="text-center">Gender</th>
                      <th  width='25%' class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                      $allUser = $users->selectAllppData();

                      if ($allUser) {
                        $i = 0;
                        foreach ($allUser as  $value) {
                          $i++;

                     ?>

                      <tr class="text-center"
                      <?php if (Session::get("p_id") == $value->p_id) {
                        echo "style='background:#d9edf7' ";
                      } ?>
                      >

                        <td><?php echo $i; ?></td>
                        <td><?php echo $value->name; ?></td>
                        <td><?php echo $value->address; ?> <br>
                         </td>
                        <td><?php echo $value->age; ?></td>
<td><?php echo $value->phone; ?></td>
   <td><?php echo $value->gender; ?></td>                       
                          

                      
                     

                        <td>
                        
                            <a class="btn btn-success btn-sm
                            " href="uppnt.php?p_id=<?php echo $value->p_id;?>">Edit</a>
                            <a class="btn btn-info btn-sm " href="cousn1.php?id=<?php echo $value->p_id;?>">Take Counsil</a>
                            <a onclick="return confirm('Are you sure To Delete ?')" class="btn btn-danger
                    <?php if (Session::get("p_id") == $value->p_id) {
                      echo "disabled";
                    } ?>
                             btn-sm " href="?remove=<?php echo $value->p_id;?>">Remove</a>

                             
                       



                       
                         
                         
                      

                        </td>
                      </tr>
                    <?php }}else{ ?>
                      <tr class="text-center">
                      <td>No user availabe now !</td>
                    </tr>
                    <?php } ?>

                  </tbody>

              </table>









        </div>
      </div>



  <?php
  include 'inc/footer.php';

  ?>
