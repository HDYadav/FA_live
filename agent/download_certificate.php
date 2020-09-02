  <?php
session_start();
if (! empty($_SESSION['logged_in']))
{
  ?>
<?php include 'header.php';?>
<main class="content-wrapper">
 <!--//Contact details-->
     <form class=""  method="post" enctype="multipart/form-data" autocomplete="">

        <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                <section class="mdc-card__primary">
                  <h1 class="mdc-card__title mdc-card__title--large" style="color: #015198;">Download Certificate</h1>
                  
                </section>
                
              </div>
            </div>
        </div>
        <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                <section class="mdc-card__primary">
                   <div class="Certificate-box" style=" border: 10px solid transparent;
  padding: 15px;
  border-image: url(images/border.png) 30 round;">

                     <div class="header-imge" style="text-align: left;">
                       <img  width="200" src="images/certificate_logo.png">
                     </div>
                     <div class="header-txt" style="text-align: center; color: #015198; ">
                       <h2>Certificate</h2>
                       <br>
                       <img width="10%" src="upload/<?php echo $row['image']; ?>">
                     </div>
                     <div class="posp-name text-center" style="text-align: center; color: #015198; font-family: Monotype Corsiva;">
                      <h3><span>-:</span><?php echo $row['name']; ?><span>:-</span></h3>
                       
                     </div>
                     <div class="description text-center">

                      <center><h4>PoSP Identiﬁcation No- <?php echo $row['id_no']; ?></h4></center>
                      <h4 style="line-height: 2.5">
              <p>Reference to the application made by <?php if ($row['gender']=="male") {
                # code...
                echo "<u>"."Mr.".$row['name']."</u>";
              }else{
                echo "<u>"."Ms.".$row['name']."</u>";
              } 
              ?>
                <br>

              ro <u><?php echo $row['gurdian_name']; ?></u></p>

This is to certify I confirm that <?php if ($row['gender']=="male") {
                # code...
                echo "<u>"."Mr.".$row['name']."</u>";
              }else{
                echo "<u>"."Ms.".$row['name']."</u>";
              } 
              ?>
<!-- date('d-m-Y', $timestamp) -->
, Aadhar No:<u><?php echo $row['aadhar_no']; ?></u>  PAN No: <u><?php echo $row['pan_no']; ?></u> has successfully completed the prescribed training on <u><?php $timestamp=strtotime($row['training_date']); echo $date = date('jS F Y',$timestamp);?></u>  and has also passed the examination on <u><?php $timestamp=strtotime($row['exam_date']); echo $date = date('jS F Y',$timestamp);?></u>  specified for Point of Sales Person examination conducted by First Advisor Insurance Brokers Private Limited under the Guidelines on Point of Sales Person for Insurance Intermediaries.
<br>
This letter / Certiﬁcate authorizes you to act as Point of Sales Person for First Advisor Insurance Brokers Private Limited to market products categorized and identiﬁed under the Guidelines only.

of Sales Person

In case you wish to work for another insurance company or insurance intermediary, you are required to obtain a fresh letter from the new insurer/insurance intermediary, in order to act as Point of Sales Person for that entity.</h4>
                     </div>
                     <div class="description-company" style="text-align:right;">
                      <p><b>For First Advisor Insurance Brokers Pvt. Ltd.</b></p>
                       <img src="images/signature.png">
                       <p><b>Authorized Signatory</b></p>
                     </div>

                     <div class="footer-content" style="border-top:2px solid #0084b5; text-align:center">
                     <p>{IRDA License No: 584 | Broker Code: DB 657/16 | Valid till 07/02/2023 | Direct (Life & General)} 
Corporate Office: 5th Floor, Fulcrum Hiranadani Business Park, Sahar Road Andheri East, Mumbai Maharashtra 400099 
Email: info@firstadvisorsinsurance.com | Website: www.firstadvisorsinsurance.com
</p>
                     </div>
                   </div>
                  
                </section>
                
              </div>
            </div>


        </div>
     <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
               
                 <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12" style="padding: 10px;">
                    
                    <div class="template-demo" style="margin: auto;">
                     
                    <button class="mdc-button mdc-button--raised" name="submit" data-mdc-auto-init="MDCRipple" style="width: 200px;">
                      Download 
                    </button>

                  </div>

                 </div>
                
              </div>
            </div>


        </div>
      </form>
</main>

<?php
if(isset($_POST['submit'])){
  $id=$row['id'];

   echo "<script language='javascript' type='text/javascript'>alert('Your Certificate will be download')
  location.href='pdf/index.php?id=$id' </script>";
}?>

<?php include 'footer.php';?>
      <?php
}
else
{
  header("location:index.php");
    /*echo 'You are not logged in. <a href="index.php">Click here</a> to log in.';*/
}
?>