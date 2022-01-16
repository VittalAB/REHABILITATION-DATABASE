<?php
include 'inc/header.php';
Session::CheckSession();
$sId =  Session::get('roleid');
if ($sId === '1') { ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addUser'])) {

  $userAdd = $users->addNewcoun2($_POST);
}

if (isset($userAdd)) {
  echo $userAdd;
}


 ?>


 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>Councling 2</h3>
        </div>
        <div class="cad-body">



            <div style="width: 300px; margin:0px auto">

            <form class="" action="" method="post">
        <h4>Height Of The Patient (cms)</h4> 
                <div class="form-group">
                   <input type="checkbox" id="C" name="height" value="Below 140"/>    
                 <label>Below 140</label> <br>    
              <input type="checkbox" id="Java" name="height" value="140-150"/>    
                 <label>140-150</label> <br>    
              <input type="checkbox" id="Python" name="height" value="150-160"/>    
                 <label>150-160</label> <br>  
         <input type="checkbox" id="PHP" name="height" value="Above 160"/>    
                 <label>Above 160</label>  
                </div>
                 <div class="form-group">
                   <h4>Weight Of The Patient (Kg)</h4> 
                <div class="form-group">
                   <input type="checkbox" id="C" name="weight" value="Below 50"/>    
                 <label>Below 50</label> <br>    
              <input type="checkbox" id="Java" name="weight" value="50-60"/>    
                 <label>50-60</label> <br>    
              <input type="checkbox" id="Python" name="weight" value="60-70"/>    
                 <label>60-70</label> <br>  
         <input type="checkbox" id="PHP" name="weight" value="Above 70"/>    
                 <label>Above 70</label>  
                </div>
                  <div class="form-group">
                  <h4>B.P (Blood Pressure Of The Patient)</h4>
       
                <div class="form-group">
                   <input type="checkbox" id="C" name="bp" value="Normal"/>    
                 <label>Normal</label> <br>    
              <input type="checkbox" id="Java" name="bp" value="High"/>    
                 <label>High</label> <br>    
              <input type="checkbox" id="Python" name="bp" value="Low"/>    
                 <label>Low</label> <br>  
        
                </div>
                 <div class="form-group">
                <h4>Sugar Level Of Patient (mg/dL) </h4>
                           <div class="form-group">
                   <input type="checkbox" id="C" name="sugar" value="72 - 108"/>    
                 <label>Normal Level 72-108</label> <br>    
              <input type="checkbox" id="Java" name="sugar" value="215 - 280"/>    
                 <label>High Level 215-280</label> <br>    
              <input type="checkbox" id="Python" name="sugar" value="50 - 70"/>    
                 <label>Low Level 50 - 70</label> <br>  
                </div>
                <div class="form-group">
                <h4>Pulse Rate Of The Patient</h4>
                           <div class="form-group">
                   <input type="checkbox" id="C" name="pulse_rate" value="Normal"/>    
                 <label>Normal</label> <br>    
              <input type="checkbox" id="Java" name="pulse_rate" value="High"/>    
                 <label>High</label> <br>    
              <input type="checkbox" id="Python" name="pulse_rate" value="Low"/>    
                 <label>Low</label> <br>  
                </div>
                  <div class="form-group">
                <h4>Physiological Disorder</h4>
                           <div class="form-group">
                   <input type="checkbox" id="C" name="phy_d" value="Asthama"/>    
                 <label>Asthama</label> <br>    
              <input type="checkbox" id="Java" name="phy_d" value="Diabetics"/>    
                 <label>Diabetics</label> <br>    
              <input type="checkbox" id="Python" name="phy_d" value="Glucoma"/>    
                 <label>Glucoma</label> <br>  
                 <input type="checkbox" id="Python" name="phy_d" value="Heart"/>    
                 <label>Heart</label> <br>  
               
                <input type="checkbox" id="Python" name="phy_d" value="Cancer"/>    
                 <label>Cancer</label> <br>

        <input type="checkbox" id="Python" name="phy_d" value="Others"/>    
                 <label>Others</label> <br>
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
