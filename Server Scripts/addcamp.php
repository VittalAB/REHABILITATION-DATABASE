<?php
include 'inc/header.php';
Session::CheckSession();
$sId =  Session::get('roleid');
if ($sId === '1') { ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addUser'])) {

  $userAdd = $users->addNewCamp($_POST);
}

if (isset($userAdd)) {
  echo $userAdd;
}


 ?>


 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>Add New User</h3>
        </div>
        <div class="cad-body">



            <div style="width:600px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group pt-3">
                  <label for="name">Camp Officer Name 1</label>
                  <input type="text" name="officer_1"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="username">Camp Officer Name 2</label>
                  <input type="text" name="officer_2"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Place</label>
                  <input type="text" name="place"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="mobile">Year</label>
                  <input type="text" name="year"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="mobile">Start Date</label>
                  <input type="date" name="start_date"  class="form-control">
                </div>
                  <div class="form-group">
                  <label for="mobile">End Date</label>
                  <input type="date" name="end_date"  class="form-control">
                </div>
                    <div class="form-group">
                  <label for="mobile">Total People</label>
                  <input type="text" name="total_p"  class="form-control">
                </div>
                
                
              
                <div class="form-group">
                  <button type="submit" name="addUser" class="btn btn-success">Submit</button>
                </div>


            </form>
          </div>


        </div>
      </div>

<?php
}else{

  header('Location:index.php');



}
 ?>

  <?php
  include 'inc/footer.php';

  ?>
