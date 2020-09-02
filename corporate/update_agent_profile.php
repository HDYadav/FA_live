    <?php
session_start();
if (! empty($_SESSION['logged_in']))
{

    ?>
  <?php include 'header.php';?>
 <main class="content-wrapper">

   <!--//personal details-->
    <form class=""  method="post" enctype="multipart/form-data" autocomplete="">
        
      <!--//personal details-->
        <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                <section class="mdc-card__primary">
                  <h1 class="mdc-card__title mdc-card__title--large" style="color: #015198;">Super/Corporate Admin Details</h1>
                  
                </section>
                <section class="mdc-card__supporting-text">
                  <div class="mdc-layout-grid__inner">
                   <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Name </label>

                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" name="name" value="<?php echo $row['name']; ?>"  placeholder="Name" >
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Username </label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" name="username" value="<?php echo $row['username']; ?>"  placeholder="user name">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Password</label>

                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="password" class="mdc-text-field__input" id="myInput" name="password" value="<?php echo $row['password']; ?>"  placeholder="password">
                           
                            <div class="mdc-text-field__bottom-line"></div>

                          </div>
                          <input type="checkbox" onclick="myFunction()" >Show Password

                            <script >
                              function myFunction() {
                              var x = document.getElementById("myInput");
                              if (x.type === "password") {
                              x.type = "text";
                              } else {
                                  x.type = "password";
                                }
                              }
                            </script>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Gender<br></label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" name="Gender" placeholder="Gender" value="<?php echo $row['gender']; ?>" >
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    
                   
                   
                   
                  

                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Photo</label><br>
                          
                            
                            <br>
                            <input type="file" class="m" value="<?php echo $row['image'] ;?>" name="file">
                            <div class="mdc-text-field__bottom-line"></div>
                         
                        </div>
                      </div>
                    </div>
                
                  </div>

                </section>
              </div>
            </div>


        </div>

        <!--//Contact details-->
       
         <!--//Nominee details-->

        
          <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
               
                 <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12" style="padding: 10px;">
                    
                    <div class="template-demo" style="margin: auto;">
                     
                    <button class="mdc-button mdc-button--raised" name="submit" data-mdc-auto-init="MDCRipple" style="width: 200px;">
                      Update
                    </button>

                  </div>

                 </div>
                
              </div>
            </div>


        </div>

          </form>        
 </main>
<?php
$main_id=$row['id'];

$file="";


if(isset($_POST['submit'])){

$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];


if (empty($_FILES['file']['name'])) {
  # code...
  $imagename=$row['image'];
}else{
  $imagename = $_FILES['file']['name'];
  

   $target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["file"]["name"]);

   // Select file type
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

   // Valid file extensions
   $extensions_arr = array("jpg","jpeg","png","gif","webp");

   // Check extension
   if( in_array($imageFileType,$extensions_arr) ){

    // Convert to base64 
    $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
    $image = 'data:images/'.$imageFileType.';base64,'.$image_base64;
    // Insert record
    $iname = basename($_FILES["file"]["name"]);
/* move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$imagename);*/
 move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$imagename);
   }
}




  # code...
  $sql=mysql_query("UPDATE `super_admin` SET `name`='$name',`username`='$username',`password`='$password',`image`='$imagename',`status`='0' WHERE id = '1' ");
if($sql){
echo "<script language='javascript' type='text/javascript'>alert('Update successfull')
  location.href='update_agent_profile.php' </script>";
   }
   else{
    echo "<script language='javascript' type='text/javascript'> alert('Error') 
    </script>";
   }

}



?>



  <?php include 'footer.php';?>
<?php
}
else
{
  header("location:index.php");
    /*echo 'You are not logged in. <a href="index.php">Click here</a> to log in.';*/
}
?>