<?php include 'header.php';?>
  <head>
  	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="js/jquery.form.js"></script>
<script src="editor/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
        CKEDITOR.replace( 'editor',
        {

          fullPage : true,
          uiColor : '#9AB8F3',
          toolbar : 'MyToolbar',
          language    :'en'

        });
        
        
      });
      CKEDITOR.instances['editor'].setData(abch);
    </script>
  <main class="content-wrapper">

   <!--//personal details-->
        <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                <section class="mdc-card__primary">
                  <h1 class="mdc-card__title mdc-card__title--large" style="color: #015198;">Terms & Condition</h1>
                </section>
                <section class="mdc-card__supporting-text">
                  <div class="mdc-layout-grid__inner">
                   <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12-desktop">
                      <form method="post">
                      	<div class="form-group">
                      		
                      		<!-- <textarea class="form-control bg-light" rows="3"   placeholder="Text here"></textarea>  -->
                          <textarea class="form-control bg-light editor" id="editor" name="editor"></textarea>
            
             
                      	</div>
                     
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
                     
                    <button name="submit" class="mdc-button mdc-button--raised" data-mdc-auto-init="MDCRipple" style="width: 200px;">
                      Submit
                    </button>
                    <!-- <input type="submit" name="submit"> -->

                  </div>

                 </div>
                 </form>
              </div>
            </div>


        </div>

                  
 </main>
   <?php



if(isset($_POST['submit'])){

$ename=$_POST['editor'];

$sql =mysql_query("UPDATE `cms` SET `t&c` = '$ename' WHERE `cms`.`id` = '1'");

if ($sql) 

  
      echo "<script language='javascript' type='text/javascript'>alert('Updated Successfully')
  location.href='../termsandcondition.php' </script>";
        

else {
$errormsg="Wellcome";
      echo "<script type='text/javascript'>alert('$errormsg');</script>";
}
}
?>
<?php include 'footer.php';?>
