<?php
include 'inc/header.php';
Session::CheckSession();
$sId =  Session::get('roleid');
if ($sId === '1') { ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addUser'])) {

  $userAdd = $users->addNewcoun3($_POST);
}

if (isset($userAdd)) {
  echo $userAdd;
}


 ?>


 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>Counsling 3</h3>
        </div>
        <div class="cad-body">



            <div style="width: 300px; margin:0px auto">

            <form class="" action="" method="post">
               <div class="form-group pt-3">
                  <label for="name">Current Living Of The Patient</label>
                  <input type="text" name="curr_living"  class="form-control">
                </div>
                <div class="form-group">

                   <h4>Childhood or Adoloscence Problematic Behaviour</h4> 

                <div class="form-group">
                   <input type="checkbox" id="C" name="culture_issue" value="Running  Away From Home"/>    
                 <label>Running Away From Home</label> <br>    
              <input type="checkbox" id="Java" name="culture_issue" value="Frequent Physical Fight And Violence"/>    
                 <label>Frequent Physical Fight And Violence</label> <br>    
              <input type="checkbox" id="Python" name="culture_issue" value="Destruction of other properties"/>    
                 <label>Destruction of other properties</label> <br>  
        <input type="checkbox" id="Python" name="culture_issue" value="Stealing"/>    
                 <label>Stealing</label> <br> 
     <input type="checkbox" id="Python" name="culture_issue" value="Experimenting with drugs and alcohol"/>    
                 <label>Experimenting With Drugs And Alcohol</label> <br> 

     <input type="checkbox" id="Python" name="culture_issue" value="Gambling"/>    
                 <label>Gambling</label> <br> 
     <input type="checkbox" id="Python" name="culture_issue" value="Sexual Issue"/>    
                 <label>Sexual Issue</label> <br> 


     <input type="checkbox" id="Python" name="culture_issue" value="Stochastic Backwardness"/>    
                 <label>Stochastic Backwardness</label> <br> 





        
                </div>
        <h4>Adverse Childhood Experience Of Patient</h4> 
                <div class="form-group">
                   <input type="checkbox" id="C" name="childhood_exp" value="Poverty Or Severe Debt"/>    
                 <label>Poverty Or Severe Debt</label> <br>    
              <input type="checkbox" id="Java" name="childhood_exp" value="Early Parental Loss"/>    
                 <label>Early Parental Loss</label> <br>    
              <input type="checkbox" id="Python" name="childhood_exp" value="Extra Martial Affairs Of Parents"/>    
                 <label>Extra Martial Affairs Of Parents</label> <br>  
         <input type="checkbox" id="PHP" name="childhood_exp" value="Broken Home Or Single Parentage"/>    
                 <label>Broken Home Or Single Parentage</label><br>  
                  <input type="checkbox" id="PHP" name="childhood_exp" value="Physical Abuse"/>    
                 <label>Physical Abuse</label><br>
                  <input type="checkbox" id="PHP" name="childhood_exp" value="Sexual Harssement"/>    
                 <label>Sexual Harssement</label><br>  
                  <input type="checkbox" id="PHP" name="childhood_exp" value="Violence"/>    
                 <label>Violence</label><br>    
                  <input type="checkbox" id="PHP" name="childhood_exp" value="Others"/>    
                 <label>Others</label>  
                </div>
                 <div class="form-group">


                   <h4>Financial Related Issues</h4> 
<h4>( Money Borrowed From )</h4>
                <div class="form-group">
                   <input type="checkbox" id="C" name="finance" value="Family"/>    
                 <label>Family</label> <br>    
              <input type="checkbox" id="Java" name="finance" value="Bank"/>    
                 <label>Bank</label> <br>    
              <input type="checkbox" id="Python" name="finance" value="Insurance Company"/>    
                 <label>Insurance Company</label> <br>  
        
 <input type="checkbox" id="Python" name="finance" value="Loan From Pan shop "/>    
                 <label>Loan From Pan Shop  </label> <br> 

     <input type="checkbox" id="Python" name="finance" value="Loan From Liqour Shop"/>    
                 <label>Loan From  Liqour Shop </label> <br>

  <input type="checkbox" id="Python" name="finance" value="Friends"/>    
                 <label>Friends</label> <br>  
         <input type="checkbox" id="Python" name="finance" value="Hand loan"/>    
                 <label>Hand loan</label> <br>  
         
                </div>
                  <div class="form-group">
                  <h4>Job Related Issues</h4>
       
                <div class="form-group">
                   <input type="checkbox" id="C" name="job_issues" value="Unemployed"/>    
                 <label>Unemployed</label> <br>    
              <input type="checkbox" id="Java" name="job_issues" value="Less Salary"/>    
                 <label>Less Salary</label> <br>    
              <input type="checkbox" id="Python" name="job_issues" value="Harrasement"/>    
                 <label>Harrasement</label> <br>  
                  <input type="checkbox" id="Python" name="job_issues" value="Discrimination"/>    
                 <label>Discrimination</label> <br>  
         <input type="checkbox" id="Python" name="job_issues" value="Others"/>    
                 <label>Others</label> <br>  
                </div>
                 <div class="form-group">
                <h4>Home Environment Of The Patient</h4>
                           <div class="form-group">
                   <input type="checkbox" id="C" name="home_environment" value="Parent Drinking"/>    
                 <label>Parent Drinking</label> <br>    
              <input type="checkbox" id="Java" name="home_environment" value="singal"/>    
                 <label>Batchular(singal)</label> <br>    
              <input type="checkbox" id="Python" name="home_environment" value="rural"/>    
                 <label>Rural</label> <br>  
                 <input type="checkbox" id="Python" name="home_environment" value="city"/>    
                 <label>City</label> <br>
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
