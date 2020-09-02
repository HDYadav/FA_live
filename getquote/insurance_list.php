 <?php
 
 include_once("coon.php");
 include 'header.php';?>

     <section class="section-padding insurance-list-area" >
        <div class="container">

            <div class="row"> 
              <div class="col-md-12 mt-2 mb-2">
                <div class="list-box-header d-flex justify-content-start p-2 bg-light">
                 <div class="plan-txt">
                 <h5>All Plans</h5>
                 </div>
                 <div class="input-group ml-auto col-md-4">
                  <select name="" class="form-control">
                  	<option value="">Recommended</option>
                  </select>
  <div class="input-group-append">
    <button class="btn btn-dark" type="button" id="button-addon2"><i class="fa fa-filter" aria-hidden="true"></i> Filter Plans</button>
  </div>
    <div class="input-group-append">
    <button class="btn btn-primary" type="button" title="edit" id="button-addon2"><i class="fa fa-pencil"></i></button>
  </div>
                </div>
                </div>
              </div>

               <div class="col-md-12 col-lg-6 col-sm-12 mt-2 mb-2">
                  <div class="plan-box p-2 shadow">
                    <div class="company-details d-flex justify-content-around">
                      <div class="cpmpany-logo">
                       <img width="80" src="images/religare_logo.png"><br>
                     </div> 
                      <div class="company-name">
                        <li><b>Plan Name</b></li>
                         <li>Care</li>
                     </div>
                     <!-- <div class="company-name">
                        <li><b>religare HEALTH</b></li>
                         <li>Health Gain</li>
                     </div> -->
                     <div class="company-sum">
                       <span>Sum Insured</span>
                       <h4><?php echo str_replace("_", " ", $_REQUEST['suminsurance']); ?></h4>
                     </div>
                  </div>
                  <div class="features-area mt-2">
                 
                     <?php echo $_REQUEST['adult']." Adult and ".$_REQUEST['child']." "."Child";?>
                  <div class="main-fetaures d-flex justify-content-start">
                    <div class="features-details text-left">

                     <span class="font-weight-bold text-primary">Premium </span>
                    </div>
                    <div class="features-details ml-auto">
                     <span class="font-weight-bold text-primary"><i class="fa fa-rupee"></i>
  <?php
  
$adult=$_REQUEST['adult'];
$child=$_REQUEST['child'];
$gender=$_REQUEST['gender'];
$age=$_REQUEST['age'];
$suminsurance=$_REQUEST['suminsurance'];

$mob=$_REQUEST['mob'];
$name=$_REQUEST['name'];


if ($adult=="1" && $child==0) {
  # code...
  $sql=mysql_query("SELECT $suminsurance FROM `religare_rate_chart` WHERE member='Individual' AND $age BETWEEN age_start AND age_end");
}elseif ($adult=="1" && $child=="1") {
  # code...
  $sql=mysql_query("SELECT $suminsurance FROM `religare_rate_chart` WHERE member='1A + 1C' AND $age BETWEEN age_start AND age_end");
}elseif ($adult=="1" && $child=="2") {
  # code...
  $sql=mysql_query("SELECT $suminsurance FROM `religare_rate_chart` WHERE member='1A + 2C' AND $age BETWEEN age_start AND age_end");
}elseif ($adult=="1" && $child=="3") {
  # code...
  $sql=mysql_query("SELECT $suminsurance FROM `religare_rate_chart` WHERE member='1A + 3C' AND $age BETWEEN age_start AND age_end");
}elseif ($adult=="1" && $child=="4") {
  # code...
  $sql=mysql_query("SELECT $suminsurance FROM `religare_rate_chart` WHERE member='1A + 4C' AND $age BETWEEN age_start AND age_end");
}elseif ($adult=="2" && $child==0) {
  # code...
  $sql=mysql_query("SELECT $suminsurance FROM `religare_rate_chart` WHERE member='2A' AND $age BETWEEN age_start AND age_end");
}elseif ($adult=="2" && $child=="1") {
  # code...
  $sql=mysql_query("SELECT $suminsurance FROM `religare_rate_chart` WHERE member='2A + 1C' AND $age BETWEEN age_start AND age_end");
}elseif ($adult=="2" && $child=="2") {
  # code...
  $sql=mysql_query("SELECT $suminsurance FROM `religare_rate_chart` WHERE member='2A + 2C' AND $age BETWEEN age_start AND age_end");
}elseif ($adult=="2" && $child=="3") {
  # code...
  $sql=mysql_query("SELECT $suminsurance FROM `religare_rate_chart` WHERE member='2A + 3C' AND $age BETWEEN age_start AND age_end");
}elseif ($adult=="2" && $child=="4") {
  # code...
  $sql=mysql_query("SELECT $suminsurance FROM `religare_rate_chart` WHERE member='2A + 4C' AND $age BETWEEN age_start AND age_end");
}else{
  echo "invalid data";
}


if ($sql) {
  # code...
  $row=mysql_fetch_assoc($sql);

$percentage = ($row[$suminsurance]*18)/100;

  echo $premium=round($percentage+$row[$suminsurance]);
}else{

  echo mysql_error();
}

?>




                     </span>
                    </div>
                  </div>

                  <div class="main-fetaures d-flex justify-content-start">
                    <div class="features-details text-left">
                     <span>Pre & Post hospitalization.</span>
                    </div>
                    <div class="features-details ml-auto">
                     <span  data-toggle="tooltip" data-placement="left" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,"><i  class="fa fa-question-circle-o"></i></span>
                    </div>
                  </div>

                  <div class="main-fetaures d-flex justify-content-start">
                    <div class="features-details text-left">
                     <span>RNo Sub-Limits !</span>
                    </div>
                    <div class="features-details ml-auto">
                     <span  data-toggle="tooltip" data-placement="left" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,"><i  class="fa fa-question-circle-o"></i></span>
                    </div>
                  </div>

                  <div class="main-fetaures d-flex justify-content-start">
                    <div class="features-details text-left">
                     <span>No 'Claim-based' loading & Get Lifetime Renewability.</span>
                    </div>
                    <div class="features-details ml-auto">
                     <span  data-toggle="tooltip" data-placement="left" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,"><i  class="fa fa-question-circle-o"></i></span>
                    </div>
                  </div>
                  <div class="main-fetaures d-flex justify-content-start">
                    <div class="features-details text-left">
                     <span>Review your decision</span>
                    </div>
                    <div class="features-details ml-auto">
                     <span  data-toggle="tooltip" data-placement="left" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,"><i  class="fa fa-question-circle-o"></i></span>
                    </div>
                  </div>
                  <div class="main-fetaures d-flex justify-content-start">
                    <div class="features-details text-left">
                     <span>Avail Health Check-ups, every year.</span>
                    </div>
                    <div class="features-details ml-auto">
                     <span  data-toggle="tooltip" data-placement="left" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,"><i  class="fa fa-question-circle-o"></i></span>
                    </div>
                  </div>
                   <div class="main-fetaures d-flex justify-content-start">
                    <div class="features-details text-left">
                     <span class="font-weight-bold text-primary">Grand Total </span>
                    </div>
                    <div class="features-details ml-auto">
                     <span class="font-weight-bold text-primary"><i class="fa fa-rupee"></i>
                      <?php 
                      echo round($premium=$premium+($premium*10)/100);


                       ?>


                     </span>
                    </div>
                  </div>
                  <div class="main-fetaures d-flex justify-content-start">
                    <div class="features-details text-left">
                     <span style="font-size: 12px;">*Above premium includes 18% GST.</span>
                    </div>
                    <div class="features-details ml-auto">
                    
                    </div>
                  </div>

               </div>
               <hr>
               <div class="buy-now-btn d-flex flex-wrap justify-content-around align-items-center text-center">
                   <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="compare">
    <label class="form-check-label" for="exampleCheck1">Compare</label>
  </div>
              <?php 
              $adult=$_REQUEST['adult'];
             $child=$_REQUEST['child'];
             $gender=$_REQUEST['gender'];
             $age=$_REQUEST['age'];
              $suminsurance=$_REQUEST['suminsurance'];
            
           $mob=$_REQUEST['mob'];
             $name=$_REQUEST['name'];
             $lastname=$_REQUEST['lastname'];  

             echo "<a href='proposal2.php?adult=$adult&child=$child&gender=$gender&age=$age&suminsurance=$suminsurance&mob=$mob&name=$name&lastname=$lastname' class='btn btn-quote'>"."Buy Now"."</a>"?>

           
               </div>

               </div>
            </div>




 
        </div>
    	
    </section>

  <?php include 'footer.php';?>