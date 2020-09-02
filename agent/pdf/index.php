  <?php
session_start();
if (! empty($_SESSION['logged_in']))
{
    include_once("coon.php");
$id=$_REQUEST['id'];
$query = "SELECT * from agent_details where id='".$id."'"; 
$result = mysql_query($query) or die ( mysql_error());
$row = mysql_fetch_assoc($result);
  ?>
<?php


    //collect form data
    $name = $row['name'];
    $email = $row['email'];
//echo "<pre>";
//print_r($row); die;   

    //if no errors carry on
    if(!isset($error)){

        //create html of the data
        ob_start();
        ?>
        

<div style="width:800px; height:600px; padding:20px; text-align:center; border-image: url(images/border.png) 30 round;">
<div style="width:750px; height:1040px; padding:20px; text-align:center; border: 5px solid #787878">
 <div class="logo-header" style="text-align: left;">
  <img  src="https://www.firstadvisorsinsurance.com/agent/images/certificate_logo.png">
  </div>
  
    <div class="certificate-header" style="text-align: center;">
     <h1 style="text-align: center;">Certificate</h1>
      <img style="width: 10%" src="https://firstadvisorsinsurance.com/agent/upload/<?php echo $row['image']; ?>">
      <h3>PoSP Identification No - <?php echo $row['id_no']; ?></h3>
   </div>

   <div class="certificate-body" style="text-align: left;">
   <p style="font-size:20px;">Reference to the application made by <?php if ($row['gender']=="male") {
                # code...
                echo "<u>"."Mr.".$row['name']."</u>";
              }else{
                echo "<u>"."Ms.".$row['name']."</u>";
              } 
              ?> r/o: <u><?php echo $row['gurdian_name']; ?></u> for enrolling to act as<br> Point of Sales Person.</p>
   <p style="font-size:20px;">This is to certify / confirm that <?php if ($row['gender']=="male") {
                # code...
                echo "<u>"."Mr.".$row['name']."</u>";
              }else{
                echo "<u>"."Ms.".$row['name']."</u>";
              } 
              ?>, Aadhar No:<u><?php echo $row['aadhar_no']; ?></u>, PAN No: <u><?php echo $row['pan_no']; ?></u> has successfully completed the prescribed training on <u><?php $timestamp=strtotime($row['training_date']); echo $date = date('jS F Y',$timestamp);?></u>   and has also passed the examination on <u><?php $timestamp=strtotime($row['exam_date']); echo $date = date('jS F Y',$timestamp);?></u>  specified for Point of Sales Person examination conducted by First Advisor Insurance Brokers Private Limited under the Guidelines on Point of Sales Person for Insurance Intermediaries.</p>
   <p style="font-size:20px;">This letter / Certificate authorizes you to act as Point of Sales Person for First Advisor Insurance Brokers Private Limited to market products categorized and identified under the Guidelines only.</p>
    <p style="font-size:20px;">In case you wish to work for another insurance company or insurance intermediary, you are required to obtain a fresh letter from the new insurer/insurance intermediary, in order to act as Point of Sales Person for that entity.</p>
   </div>

               <div class="description-company" style="text-align:right;">
                      <p><b>For First Advisor Insurance Brokers Pvt. Ltd.</b></p>
                       <img src="../images/signature.png">
  <p><b>Authorized Signatory</b></p>
                     </div>


                     <div class="footer-content" style="border-top:2px solid #0084b5; text-align:center">
                     <p>{IRDA License No: 584 | Broker Code: DB 657/16 | Valid till 07/02/2023 | Direct (Life & General)} 
Corporate Office: 5th Floor, Fulcrum Hiranadani Business Park, Sahar Road Andheri East, Mumbai Maharashtra 400099 
Email: info@firstadvisorsinsurance.com | Website: www.firstadvisorsinsurance.com
</p>
                     </div> 

      
       
      <!--  <span style="font-size:20px"><i>dated</i></span><br>
            

            <span style="font-size:20px"><?php echo date('d/m/Y'); ?></span> -->
</div>
</div> 
        <!-- <h1>Data from form</h1>
        <img src="logo.png">
        <p>Name: <?php echo $name;?></p>
        <p>Email: <?php echo $email;?></p> -->
        
        <?php 
        $body = ob_get_clean();

        $body = iconv("UTF-8","UTF-8//IGNORE",$body);

        include("mpdf/mpdf.php");
        $mpdf=new \mPDF('c','A4','','' , 0, 0, 0, 0, 0, 0); 

        //write html to PDF
        $mpdf->WriteHTML($body);

        //output put
        $mpdf->Output('cirtificate.pdf','D');

        //save to server
        //$mpdf->Output("mydata.pdf",'F');



    }

header("location:agent_dashboard.php");
//if their are errors display them
if(isset($error)){
    foreach($error as $error){
        echo "<p style='color:#ff0000'>$error</p>";
    }
}
?> 

      <?php
}
else
{
  header("location:../index.php");
    /*echo 'You are not logged in. <a href="index.php">Click here</a> to log in.';*/
}
?>
