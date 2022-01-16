<?php
include 'inc/header.php';
Session::CheckSession();
$sId =  Session::get('roleid');
if ($sId === '1') { ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addUser'])) {

  $userAdd = $users->addNewcoun4($_POST);
}

if (isset($userAdd)) {
  echo $userAdd;
}


 ?>


 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>Counsling 4</h3>
        </div>
        <div class="cad-body">



            <div style="width:300px; margin:0px auto">

            <form class="" action="" method="post">
              
  <h4>Shaky hands</h4><div class="form-group pt-3" style="position: relative; padding-left:100px;"> 
      <input type="radio" id="contactChoice1"
     name="cs1" value="yes">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="cs1" value="no">
    <label for="contactChoice2">No</label>
  </div>
                <h4>Sweating</h4>
  <div class="form-group pt-3" style="position: relative; padding-left:100px;"> 
      <input type="radio" id="contactChoice1"
     name="cs2" value="yes">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="cs2" value="no">
    <label for="contactChoice2">No</label>
  </div>
                <h4>Anxiety</h4>
  <div class="form-group pt-3" style="position: relative; padding-left:100px;"> 
      <input type="radio" id="contactChoice1"
     name="cs3" value="yes">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="cs3" value="no">
    <label for="contactChoice2">No</label>
  </div>
                <h4>Mental stress</h4>
  <div class="form-group pt-3" style="position: relative; padding-left:100px;"> 
      <input type="radio" id="contactChoice1"
     name="cs4" value="yes">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="cs4" value="no">
    <label for="contactChoice2">No</label>
  </div>
                <h4>Fever</h4>
  <div class="form-group pt-3" style="position: relative; padding-left:100px;"> 
      <input type="radio" id="contactChoice1"
     name="cs51" value="yes">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="cs51" value="no">
    <label for="contactChoice2">No</label>
  </div>
                <h4>Visual Halluciantion</h4>
  <div class="form-group pt-3" style="position: relative; padding-left:100px;"> 
      <input type="radio" id="contactChoice1"
     name="cs6" value="yes">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="cs6" value="no">
    <label for="contactChoice2">No</label>
  </div>
                <h4>Sound Halluciation</h4>
  <div class="form-group pt-3" style="position: relative; padding-left:100px;"> 
      <input type="radio" id="contactChoice1"
     name="cs7" value="yes">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="cs7" value="no">
    <label for="contactChoice2">No</label>
  </div>
                <h4>Vomiting</h4>
  <div class="form-group pt-3" style="position: relative; padding-left:100px;"> 
      <input type="radio" id="contactChoice1"
     name="cs8" value="yes">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="cs8" value="no">
    <label for="contactChoice2">No</label>
  </div>
                <h4>Nausea</h4>
  <div class="form-group pt-3" style="position: relative; padding-left:100px;"> 
      <input type="radio" id="contactChoice1"
     name="cs9" value="yes">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="cs9" value="no">
    <label for="contactChoice2">No</label>
  </div>
                <h4>Headche</h4>
  <div class="form-group pt-3" style="position: relative; padding-left:100px;"> 
      <input type="radio" id="contactChoice1"
     name="cs10" value="yes">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="cs10" value="no">
    <label for="contactChoice2">No</label>
  </div>
                <h4>Confusion</h4>
  <div class="form-group pt-3" style="position: relative; padding-left:100px;"> 
      <input type="radio" id="contactChoice1"
     name="cs11" value="yes">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="cs11" value="no">
    <label for="contactChoice2">No</label>
  </div>
                <h4>Insomia</h4>
  <div class="form-group pt-3" style="position: relative; padding-left:100px;"> 
      <input type="radio" id="contactChoice1"
     name="cs12" value="yes">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="cs12" value="no">
    <label for="contactChoice2">No</label>
  </div>
                <h4>Night Mare</h4>
  <div class="form-group pt-3" style="position: relative; padding-left:100px;"> 
      <input type="radio" id="contactChoice1"
     name="cs13" value="yes">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="cs13" value="no">
    <label for="contactChoice2">No</label>
  </div>
                <h4>High BP</h4>
  <div class="form-group pt-3" style="position: relative; padding-left:100px;"> 
      <input type="radio" id="contactChoice1"
     name="cs14" value="yes">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="cs14" value="no">
    <label for="contactChoice2">No</label>
  </div>


   <h4>Others</h4>
  <div class="form-group pt-3" style="position: relative; padding-left:100px;"> 
      <input type="radio" id="contactChoice1"
     name="cs15" value="yes">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="cs15" value="no">
    <label for="contactChoice2">No</label>
  </div>


                <h4>Others</h4>
  <div class="form-group pt-3" style="position: relative; padding-left:100px;"> 
      <input type="radio" id="contactChoice1"
     name="cs15" value="yes">
    <label for="contactChoice1">Yes</label>

    <input type="radio" id="contactChoice2"
     name="cs15" value="no">
    <label for="contactChoice2">No</label>
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

  header('Location:patientview.php');



}
 ?>

  <?php
  include 'inc/footer.php';

  ?>