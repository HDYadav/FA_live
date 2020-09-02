<?php include 'header.php';?>
<main class="content-wrapper">
 <!--//Contact details-->
  <form class=""  method="post" enctype="multipart/form-data" autocomplete="">
        <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                <section class="mdc-card__primary">
                  <h1 class="mdc-card__title mdc-card__title--large" style="color: #015198;">UPLOAD YOUR DOCUMENTS HERE</h1>
                  
                </section>
                <section class="mdc-card__supporting-text">
                  <div class="mdc-layout-grid__inner">
                   <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Highest Education Qualification</label>
                          <?php 
                          
                          if ($row['heq_image']=="0") {
                            # code...
                            ?><input  type="file" value="<?php echo $row['heq_image'] ;?>" class="mdc-text-field__input" name="highestqualification" placeholder="Contact No 1" >
                            <p style="color: #00529C;">Note: Upload as per mentioned in profile details.</p>
                            <div class="mdc-text-field__bottom-line"></div>

                        <?php  }else{
                            
                            ?>
                            <br>
                              <img width="10%"  src="upload/<?php echo $row['heq_image']; ?>">
                           
                           <br>
                           <span style="color:orange">If you want to change contact admin</span>
                         <?php }
                           
                           ?>
                            
                          
                        </div>
                      </div>
                    </div>
                     <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>Pan Card No.</label>
                          <?php 
                          
                          if ($row['pan_image']=="0") {
                            # code...
                            ?>
                            	 <input  type="file" class="mdc-text-field__input" value="<?php echo $row['pan_image'] ;?>" name="pan" >
                            <p style="color: #00529C;">Note: Upload as per mentioned in profile details.</p>
                            <div class="mdc-text-field__bottom-line"></div>
                        <?php  }else{
                            
                            ?>
                            <br>
                              <img width="10%"  src="upload/<?php echo $row['pan_image']; ?>">
                           
                            <br>
                           <span style="color:orange">If you want to change contact admin</span>
                         <?php }
                           
                           ?>
                           
                          
                        </div>
                      </div>
                    </div>

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>Address Proof</label>
                          <?php 
                          
                          if ($row['adds_image']=="0") {
                            # code...
                            ?>
                            <input  type="file" class="mdc-text-field__input" value="<?php echo $row['adds_image'] ;?>" name="address" >
                            <p style="color: #00529C;">Note: Upload as per mentioned in profile details.</p>
                            <div class="mdc-text-field__bottom-line"></div>
                          
                       <?php   }else{
                            
                            ?>
                            <br>

                           <img width="10%"  src="upload/<?php echo $row['adds_image']; ?>">
                            <br>
                           <span style="color:orange">If you want to change contact admin</span>
                         <?php }
                           
                           ?>
                            
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>Bank Details</label>
                           <?php 
                          
                          if ($row['bank_image']=="0") {
                            # code...
                            ?>
                             <input  type="file" class="mdc-text-field__input"  value="<?php echo $row['bank_image'] ;?>" name="bank" >
                            <p style="color: #00529C;">Note: Upload as per mentioned in profile details.</p>
                            <div class="mdc-text-field__bottom-line"></div>
                        <?php  }else{
                            
                            ?>
                            <br>
                           <img width="10%"  src="upload/<?php echo $row['bank_image']; ?>">
                            <br>
                           <span style="color:orange">If you want to change contact admin</span>
                         <?php }
                           
                           ?>
                           
                          
                        </div>
                      </div>
                     <!--  <img width="10%"  src="upload/<?php echo $row['heq_image']; ?>">
                      <br>
                      <img width="10%"  src="upload/<?php echo $row['pan_image']; ?>">
                      <br>
                      <img width="10%"  src="upload/<?php echo $row['adds_image']; ?>">
                      <br>
                      <img width="10%"  src="upload/<?php echo $row['bank_image']; ?>"> -->
                    </div>
                  </div>
                   <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
               
                 <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12" style="padding: 10px;">
                    
                    <div class="template-demo" style="margin: auto;">
                     <?php

                     if ($row['heq_image']=="0" || $row['pan_image']=="0" || $row['adds_image']=="0" || $row['bank_image']=="0") {
                     	# code...
                     	?>
                     	 <button class="mdc-button mdc-button--raised" name="submit" data-mdc-auto-init="MDCRipple" style="width: 200px;">
                      Submit
                    </button>
                     <?php }else {
                     	?>
                     <button class="mdc-button mdc-button--raised" name="contactadmin" data-mdc-auto-init="MDCRipple" style="width: 200px;">
                      Contact Admin
                    </button>
                     <?php }

                     ?>



                   

                  </div>

                 </div>
                
              </div>
            </div>


        </div>
                </section>
              </div>
            </div>


        </div>
</form>

</main>
<?php
$main_id=$row['id'];

$file="";


if(isset($_POST['submit'])){



$name1 = $_FILES['highestqualification']['name'];
  $url="http://www.sovjantaquizwala.com/sovjanta_video/admin/images/";

   $target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["highestqualification"]["name"]);

   // Select file type
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

   // Valid file extensions
   $extensions_arr = array("jpg","jpeg","png","gif","webp","pdf","docx");

   // Check extension
   if( in_array($imageFileType,$extensions_arr) ){

    // Convert to base64 
    $image_base64 = base64_encode(file_get_contents($_FILES['highestqualification']['tmp_name']) );
    $image = 'data:images/'.$imageFileType.';base64,'.$image_base64;
    // Insert record
    $iname = basename($_FILES["highestqualification"]["name"]);
   move_uploaded_file($_FILES['highestqualification']['tmp_name'],$target_dir.$name1);
   }


   $name2 = $_FILES['pan']['name'];
  $url="http://www.sovjantaquizwala.com/sovjanta_video/admin/images/";

   $target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["pan"]["name"]);

   // Select file type
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

   // Valid file extensions
   $extensions_arr = array("jpg","jpeg","png","gif","webp","pdf","docx");

   // Check extension
   if( in_array($imageFileType,$extensions_arr) ){

    // Convert to base64 
    $image_base64 = base64_encode(file_get_contents($_FILES['pan']['tmp_name']) );
    $image = 'data:images/'.$imageFileType.';base64,'.$image_base64;
    // Insert record
    $iname = basename($_FILES["pan"]["name"]);
move_uploaded_file($_FILES['pan']['tmp_name'],$target_dir.$name2);
   }


   $name3 = $_FILES['address']['name'];
  $url="http://www.sovjantaquizwala.com/sovjanta_video/admin/images/";

   $target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["address"]["name"]);

   // Select file type
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

   // Valid file extensions
   $extensions_arr = array("jpg","jpeg","png","gif","webp","pdf","docx");

   // Check extension
   if( in_array($imageFileType,$extensions_arr) ){

    // Convert to base64 
    $image_base64 = base64_encode(file_get_contents($_FILES['address']['tmp_name']) );
    $image = 'data:images/'.$imageFileType.';base64,'.$image_base64;
    // Insert record
    $iname = basename($_FILES["address"]["name"]);
 move_uploaded_file($_FILES['address']['tmp_name'],$target_dir.$name3);
   }


   $name4 = $_FILES['bank']['name'];
  $url="http://www.sovjantaquizwala.com/sovjanta_video/admin/images/";

   $target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["bank"]["name"]);

   // Select file type
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

   // Valid file extensions
   $extensions_arr = array("jpg","jpeg","png","gif","webp","pdf","docx");

   // Check extension
   if( in_array($imageFileType,$extensions_arr) ){

    // Convert to base64 
    $image_base64 = base64_encode(file_get_contents($_FILES['bank']['tmp_name']) );
    $image = 'data:images/'.$imageFileType.';base64,'.$image_base64;
    // Insert record
    $iname = basename($_FILES["bank"]["name"]);
move_uploaded_file($_FILES['bank']['tmp_name'],$target_dir.$name4);
   }


if (!empty($name1)) {
  # code...
 mysql_query("UPDATE `agent_details` SET `heq_image`='$name1'  WHERE id = '$main_id' ");

}else{
$row['heq_image'];
mysql_query("UPDATE `agent_details` SET `heq_image`='".$row['heq_image']."'  WHERE id = '$main_id' ");
}


if (!empty($name2)) {
  # code...
 mysql_query("UPDATE `agent_details` SET `pan_image`='$name2'  WHERE id = '$main_id' ");
}else{
$row['pan_image'];
mysql_query("UPDATE `agent_details` SET `pan_image`='".$row['pan_image']."'  WHERE id = '$main_id' ");
}

if (!empty($name3)) {
  # code...
 mysql_query("UPDATE `agent_details` SET `adds_image`='$name3'  WHERE id = '$main_id' ");
}else{
$row['adds_image'];
mysql_query("UPDATE `agent_details` SET `adds_image`='".$row['adds_image']."'  WHERE id = '$main_id' ");
}

if (!empty($name4)) {
  # code...
 mysql_query("UPDATE `agent_details` SET `bank_image`='$name4'  WHERE id = '$main_id' ");
}else{
$row['bank_image'];
mysql_query("UPDATE `agent_details` SET `bank_image`='".$row['bank_image']."'  WHERE id = '$main_id' ");
}


  # code...


echo "<script language='javascript' type='text/javascript'>alert('Upload successfull')
  location.href='agent_dashboard.php' </script>";
   


}



?>
<?php include 'footer.php';?>