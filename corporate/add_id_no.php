  <?php include 'header.php';?>
 <main class="content-wrapper">
  <form method="post">
   <!--//personal details-->
        <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                <section class="mdc-card__primary">
                  <h1 class="mdc-card__title mdc-card__title--large" style="color: #015198;">Add id identification No.</h1>
                </section>
                <section class="mdc-card__supporting-text">
                  <div class="mdc-layout-grid__inner">
                   <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12-desktop">
                      <div class="template-demo">
                        <div  id="demo-tf-box-wrapper">
                          <label >Add id identification No.</label>
                          <?php 
                              
                              $uid=$_REQUEST['id'];
                              $result = mysql_query("select * from agent_details where id=$uid");
                              $row=mysql_fetch_assoc($result);
                              $row['id_no'];

                              ?>
                          <div style="float: right;">
                            <button class="mdc-button mdc-button--raised">
                            <?php echo "<a style='color:white;text-decoration: none' href='update_agent_profile_posp.php?id=" . $row['id'] . "' >"."EDIT POSP DETAILS"."</a>" ?>

                          </button>
                          </div>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                              
                            <input  type="text" class="mdc-text-field__input" name="identification" 
                            placeholder="identification No." value="<?php 
                            if($row['id_no']=="0"){

                            }else{
                            echo $row['id_no']; 
                          }
                            ?>">
                            
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>

                          <div class="form-group">
                             
                <label for="posp">Change PoSP Document</label><br>
                <select name="change" class=" form-control">
                  <option value="0">Select which want want to change</option>
                  <option value="1">Highest Qualification Document</option>
                  <option value="2">Pan Card Document</option>
                  <option value="3">Address Proof Document</option>
                  <option value="4">Bank Document</option>
                  
                  
                </select>


                          
                            
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                          <!-- <select class="form-control">
                            <option>a</option>
                            <option>a</option>

                            <option>a</option>
                            <option>a</option>
                          </select> -->
                        </div>
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
                     
                    <button title="<?php echo 'H '.$row['timer_h'].' M '.$row['timer_m'].' S '.$row['timer_s'] ?>" name="add" class="mdc-button mdc-button--raised" data-mdc-auto-init="MDCRipple" style="width: 200px;">
                      Submit
                    </button>

                  </div>

                 </div>
                
              </div>
            </div>


        </div>



         </form>     
         
         
         <?php
if(isset($_POST['add'])){
    
    $ename=$_POST['identification'];
    /*$str = "fab/ish/js**14**15**59";*/
$result = explode('**', $ename);

$id_no=$result[0]; 
$hour=$result[1];
$min=$result[2];  
$sec=$result[3]; 

if ($hour==NULL || $min==NULL || $sec==NULL) {
  # code...

  $sql=mysql_query("UPDATE `agent_details` SET `id_no`='$id_no',`timer_h`='".$row['timer_h']."',`timer_m`='".$row['timer_m']."',`timer_s`='".$row['timer_s']."' WHERE id='$uid'");
}else{
    
    $sql=mysql_query("UPDATE `agent_details` SET `id_no`='$id_no',`timer_h`='$hour',`timer_m`='$min',`timer_s`='$sec' WHERE id='$uid'");
    }
$change_doc=$_POST['change'];
if ($change_doc=="1") {
  # code...
$doc_sql=mysql_query("UPDATE `agent_details` SET `heq_image`='0' WHERE id='$uid'");
}elseif ($change_doc=="2") {
  # code...
  $doc_sql=mysql_query("UPDATE `agent_details` SET `pan_image`='0' WHERE id='$uid'");
}elseif ($change_doc=="3") {
  # code...
  $doc_sql=mysql_query("UPDATE `agent_details` SET `adds_image`='0' WHERE id='$uid'");
}elseif ($change_doc=="4") {
  # code...
  $doc_sql=mysql_query("UPDATE `agent_details` SET `bank_image`='0' WHERE id='$uid'");
}else{
 $doc_sql=mysql_query("UPDATE `agent_details` SET `id`='$uid' WHERE id='$uid'");
}

    if($sql && $doc_sql){
        
        echo "<script language='javascript' type='text/javascript'>alert('Identification No Added')
  location.href='detatable.php' </script>";
        
    }else{
        
         echo "<script language='javascript' type='text/javascript'> alert('Error') 
    </script>";
        
    }
}
?>
 </main>
  <?php include 'footer.php';?>
  
  
  
  
  
  
  
  