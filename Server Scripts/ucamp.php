<?php
include 'inc/header.php';
Session::CheckSession();

 ?>

<?php

if (isset($_GET['c_id'])) {
  $userid = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['c_id']);

}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
  $updateUser = $users->updatecampByIdInfo($userid, $_POST);

}
if (isset($updateUser)) {
  echo $updateUser;
}




 ?>

 <div class="card ">
   <div class="card-header">
          <h3>User Profile <span class="float-right"> <a href="index.php" class="btn btn-primary">Back</a> </h3>
        </div>
        <div class="card-body">

    <?php
    $getUinfo = $users->getcampInfoById($userid);
    if ($getUinfo) {






     ?>


          <div style="width:600px; margin:0px auto">

          <form class="" action="" method="POST">
              <div class="form-group">
                <label for="name">Officer 1</label>
                <input type="text" name="officer_1" value="<?php echo $getUinfo->officer_1; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="username">Officer 2</label>
                <input type="text" name="officer_2" value="<?php echo $getUinfo->officer_2; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Place</label>
                <input type="text" id="email" name="place" value="<?php echo $getUinfo->place; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="mobile">Year</label>
                <input type="text" id="mobile" name="year" value="<?php echo $getUinfo->year; ?>" class="form-control">
              </div>
              
<div class="form-group">
                <label for="mobile">Start Date</label>
                <input type="date" id="mobile" name="start_date" value="<?php echo $getUinfo->start_date; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="mobile">End Date</label>
                <input type="date" id="mobile" name="end_date" value="<?php echo $getUinfo->end_date; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="mobile">Total People</label>
                <input type="text" id="mobile" name="mobile" value="<?php echo $getUinfo->total_p; ?>" class="form-control">
              </div>
              <?php if (Session::get("roleid") == '1') { ?>

              <div class="form-group
              <?php if (Session::get("roleid") == '1' && Session::get("id") == $getUinfo->id) {
                echo "d-none";
              } ?>
              ">
               

          <?php }else{?>
            <input type="hidden" name="roleid" value="<?php echo $getUinfo->roleid; ?>">
          <?php } ?>

              <?php if (Session::get("c_id") == $getUinfo->c_id) {?>


              <div class="form-group">
                <button type="submit" name="update" class="btn btn-success">Update</button>
                <a class="btn btn-primary" href="changepass.php?id=<?php echo $getUinfo->id;?>">Password change</a>
              </div>
            <?php } elseif(Session::get("roleid") == '1') {?>


              <div class="form-group">
                <button type="submit" name="update" class="btn btn-success">Update</button>
                <a class="btn btn-primary" href="changepass.php?id=<?php echo $getUinfo->id;?>">Password change</a>
              </div>
            <?php } elseif(Session::get("roleid") == '2') {?>


              <div class="form-group">
                <button type="submit" name="update" class="btn btn-success">Update</button>

              </div>

              <?php   }else{ ?>
                  <div class="form-group">

                    <a class="btn btn-primary" href="index.php">Ok</a>
                  </div>
                <?php } ?>


          </form>
        </div>

      <?php }else{

        header('Location:index.php');
      } ?>



      </div>
    </div>


  <?php
  include 'inc/footer.php';

  ?>
