<?php
include 'inc/header.php';
Session::CheckSession();

 ?>

<?php

if (isset($_GET['p_id'])) {
  $userid = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['p_id']);

}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
  $updateUser = $users->updatpptByIdInfo($userid, $_POST);

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
    $getUinfo = $users->getpntInfoById($userid);
    if ($getUinfo) {






     ?>


          <div style="width:600px; margin:0px auto">

          <form class="" action="" method="POST">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo $getUinfo->name; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="username">Address</label>
                <input type="text" name="address" value="<?php echo $getUinfo->address; ?>" class="form-control">
              </div>
             
             <div class="form-group">
                <label for="name">Age</label>
                <input type="text" name="age" value="<?php echo $getUinfo->age; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="username">Phone</label>
                <input type="text" name="phone" value="<?php echo $getUinfo->phone; ?>" class="form-control">
              </div>
<div class="form-group">
                <label for="username">Gender</label>
                <input type="text" name="gender" value="<?php echo $getUinfo->gender; ?>" class="form-control">
              </div>
             


    


              <?php if (Session::get("p_id") == $getUinfo->p_id) {?>


              
            <?php } elseif(Session::get("roleid") == '1') {?>


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
