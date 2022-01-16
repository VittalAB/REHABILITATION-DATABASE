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
  $removeUser = $users->deletecampById($remove);
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
          <h3><i class="fas fa-users mr-2"></i>Camp list <span class="float-right">Welcome! <strong>
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
             <h3> <span class="float-right"> <a href="addcamp.php" class="btn btn-primary">Add Camp</a> </h3>
                  <thead>
                    <tr>
                      <th  class="text-center">SL</th>
                      <th  class="text-center">Officer-1</th>
                      <th  class="text-center">Officer-2</th>
                      <th  class="text-center">Place</th>
                      <th  class="text-center">Year</th>
                      <th  class="text-center">Total People</th>
                      <th  class="text-center">Start Date</th>
                      <th  class="text-center">End Date</th>
                      <th  width='25%' class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                      $allUser = $users->selectAllcampData();

                      if ($allUser) {
                        $i = 0;
                        foreach ($allUser as  $value) {
                          $i++;

                     ?>

                      <tr class="text-center"
                      <?php if (Session::get("c_id") == $value->c_id) {
                        echo "style='background:#d9edf7' ";
                      } ?>
                      >

                        <td><?php echo $i; ?></td>
                        <td><?php echo $value->officer_1; ?></td>
                        <td><?php echo $value->officer_2; ?> <br>
                         </td>
                        <td><?php echo $value->place; ?></td>
<td><?php echo $value->year; ?></td>
   <td><?php echo $value->total_p; ?></td>
<td><?php echo $value->start_date; ?></td>
 <td><?php echo $value->end_date; ?></td>                       
                          

                        </td>
                     

                        <td>
                        
                           
                            <a class="btn btn-info btn-sm " href="ucamp.php?c_id=<?php echo $value->c_id;?>">Edit</a>
                            <a onclick="return confirm('Are you sure To Delete ?')" class="btn btn-danger
                    <?php if (Session::get("c_id") == $value->c_id) {
                      echo "disabled";
                    } ?>
                             btn-sm " href="?remove=<?php echo $value->c_id;?>">Remove</a>

                             
                       



                       
                         
                         
                      

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
