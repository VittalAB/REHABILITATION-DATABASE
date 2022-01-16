<?php
include 'inc/header.php';
Session::CheckSession();
$sId =  Session::get('roleid');
if ($sId === '1') { ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addUser'])) {

  $userAdd = $users->addNewcoun1($_POST);
}

if (isset($userAdd)) {
  echo $userAdd;
}


 ?>


 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>Councling 1</h3>
        </div>
        <div class="cad-body">



            <div style="width: 300px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group pt-3">
                  <label for="name">Counceller</label>
                  <input type="text" name="counceller"  class="form-control">
                </div>
        <h4>Age of First Use (in years)</h4> 
                <div class="form-group">
                   <input type="checkbox" id="C" name="age_of_1s_use" value="5-10"/>    
                 <label>5-10</label> <br>    
              <input type="checkbox" id="Java" name="age_of_1s_use" value="11-20"/>    
                 <label>11-20</label> <br>    
              <input type="checkbox" id="Python" name="age_of_1s_use" value="20-30"/>    
                 <label>20-30</label> <br>  
         <input type="checkbox" id="PHP" name="age_of_1s_use" value="above 30"/>    
                 <label>Above 30</label>  
                </div>
                 <div class="form-group">
                   <h4>Quantity Per Day (ml) </h4> 
                <div class="form-group">
                   <input type="checkbox" id="C" name="quantity" value="0-250 ml"/>    
                 <label>0-250ml</label> <br>    
              <input type="checkbox" id="Java" name="quantity" value="250-500ml"/>    
                 <label>250-500ml</label> <br>    
              <input type="checkbox" id="Python" name="quantity" value="500-750ml"/>    
                 <label>500-750ml</label> <br>  
         <input type="checkbox" id="PHP" name="quantity" value="above 1000ml"/>    
                 <label>Above 1000ml</label>  
                </div>
                  <div class="form-group">
                  <h4>Frequency Of Consumption Per Day</h4>
       
                <div class="form-group">
                   <input type="checkbox" id="C" name="frequency" value="0 to 3 times / day"/>    
                 <label>0 To 3 Times a Day</label> <br>    
              <input type="checkbox" id="Java" name="frequency" value="3 to 6 times / day"/>    
                 <label>3 To 6 Times a Day</label> <br>    
              <input type="checkbox" id="Python" name="frequency" value="6 to 10 times / day"/>    
                 <label>6 To 10 Times a Day</label> <br>  
         <input type="checkbox" id="PHP" name="frequency" value="above 10 / day"/>    
                 <label>Above 10 / Day</label>  
                </div>
                 <div class="form-group">
                <h4>Type Of Alcohol</h4>
                           <div class="form-group">
                   <input type="checkbox" id="C" name="type_of_alcohol" value="beer"/>    
                 <label>Beer</label> <br>    
              <input type="checkbox" id="Java" name="type_of_alcohol" value="wisky"/>    
                 <label>Wisky</label> <br>    
              <input type="checkbox" id="Python" name="type_of_alcohol" value="rum"/>    
                 <label>Rum</label> <br>  
         <input type="checkbox" id="PHP" name="type_of_alcohol" value="brandy"/>    
                 <label>Brandy</label> <br>
                  <input type="checkbox" id="PHP" name="type_of_alcohol" value="others"/>    
                 <label>Others</label>  
                </div>
                  <div class="form-group pt-3">
                  <label for="name">Year Of  Excessive Usage Of Alcohol</label>
                  <input type="text" name="year_of_use"  class="form-control">
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
