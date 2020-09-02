    <?php
session_start();
if (! empty($_SESSION['logged_in']))
{
	include_once("coon.php");
$id=$_REQUEST['id'];
$query = "SELECT * from agent_details where id='".$id."'"; 
$result = mysql_query($query) or die ( mysql_error());
$rows = mysql_fetch_assoc($result);
    ?>
  <?php include 'header.php';?>
 <main class="content-wrapper">

   <!--//personal details-->
    <form class=""  method="post" enctype="multipart/form-data" autocomplete="">
        <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                <section class="mdc-card__primary">
                  <h1 class="mdc-card__title mdc-card__title--large" style="color: #015198;">Basic</h1>
                </section>
                <section class="mdc-card__supporting-text">
                  <div class="mdc-layout-grid__inner">
                   <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Branch Name</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input"  value="<?php 
                            if($rows['bank_branch_name']=='0'){
                             }else{
                              echo $rows['bank_branch_name'];
                             }

                              ?>" name="branchname" placeholder="Branch Name" >
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Category</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <select class="mdc-text-field__input" name="Categorylife" required="">
                              <option>Life</option>
                              <option>Non-Life &amp; Health </option>
                            </select>
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                  </div>

                </section>
              </div>
            </div>


        </div>
      <!--//personal details-->
        <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                <section class="mdc-card__primary">
                  <h1 class="mdc-card__title mdc-card__title--large" style="color: #015198;">Applicant's Personal Details</h1>
                  <span>* <span style="font-size: 12px; color: red;">(Details As per Educational / Legal Cetificate)</span></span>
                </section>
                <section class="mdc-card__supporting-text">
                  <div class="mdc-layout-grid__inner">
                   <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Applicant's full name </label>

                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" name="name" value="<?php echo $rows['name']; ?>"  placeholder="Name" >
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Father's Name </label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['father_name']=='0'){
                             }else{
                              echo $rows['father_name'];
                             }

                              ?>" name="fathername" placeholder="Father's Name">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Guardian's Name</label>

                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['gurdian_name']=='0'){
                             }else{
                              echo $rows['gurdian_name'];
                             }

                              ?>" name="gurdianname" placeholder="Guardian's Name">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Gender<br></label>
                          <div class="mdc-text-field mdc-text-field--box w-100">

                            
                            <select  class="mdc-text-field__input" name="gender" required="">
                              <option value="<?php echo $rows['gender']; ?>"><?php echo $rows['gender']; ?></option>
                              <option value="male">Male</option>
                               <option value="female">Female</option>
                            </select>
                            
                            
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Date of Birth</label>
                          <div class="mdc-text-field mdc-text-field--box mdc-text-field--with-leading-icon w-100">
                            <i class="material-icons mdc-text-field__icon" tabindex="0">event</i>
                            <input type="date"  class="mdc-text-field__input" name="dob" placeholder="YYYY/MM/DD" value="<?php echo $rows['dob']; ?>" >
                            
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Mother's Name </label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" name="mother" value="<?php 
                            if($rows['mother_name']=='0'){
                             }else{
                              echo $rows['mother_name'];
                             }

                              ?>" placeholder="Mother's Name">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Marital Status </label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            
                            <select  class="mdc-text-field__input" name="marital">
                              <?php 
                            if($rows['marital_status']=='0'){
                              ?>
                              <option value="">Please Select</option>
                            <?php }else{
                              ?>
                               <option value="<?php echo $rows['marital_status']; ?>"><?php echo $rows['marital_status']; ?></option>
                            <?php  }

                              ?>
                              

                              <option value="single">Single</option>
                               <option value="married">Married</option>
                            </select>
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Housband or Wife Name</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" name="hwname" value="<?php 
                            if($rows['h_w_name']=='0'){
                             }else{
                              echo $rows['h_w_name'];
                             }

                              ?>" placeholder="Housband or Wife Name">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >No Of Child</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="number" class="mdc-text-field__input" value="<?php 
                            if($rows['child_no']=='0'){
                             }else{
                              echo $rows['child_no'];
                             }

                              ?>"  name="child" placeholder="No Of Child">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                   <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Handicap</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            
                            <select class="mdc-text-field__input" name="handicap">
                               <?php 
                            if($rows['handicap']=='0'){
                              ?>
                              <option value="">Please Select</option>
                            <?php }else{
                              ?>
                              <option value="<?php echo $rows['handicap']; ?>"><?php echo $rows['handicap']; ?></option>
                            <?php  }

                              ?>
                            	
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                               
                            </select>
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Category</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            
                            <select class="mdc-text-field__input" name="cast">

                              <?php 
                            if($rows['catagory_cast']=='0'){
                              ?>
                              <option value="">Please Select</option>
                            <?php }else{
                              ?>
                              <option value="<?php echo $rows['catagory_cast']; ?>"><?php echo $rows['catagory_cast']; ?></option>
                            <?php  }

                              ?>
                         
                              <option value="gen">GEN</option>
                              <option value="sc">SC</option>
                               <option value="st">ST</option>
                                <option value="obc">OBC</option>
                                 <option value="ews">EWS</option>
                            </select>
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>

                     <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Ex Serice Man</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            
                            <select class="mdc-text-field__input" name="serviceman">
                               <?php 
                            if($rows['x_ser_man']=='0'){
                              ?>
                              <option value="">Please Select</option>
                            <?php }else{
                              ?>
                             <option value="<?php echo $rows['x_ser_man']; ?>"><?php echo $rows['x_ser_man']; ?></option>
                            <?php  }

                              ?>
                         
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                              
                            </select>
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>Religion</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            
                            <select class="mdc-text-field__input" name="religion">
                              <?php 
                            if($rows['religion']=='0'){
                              ?>
                              <option value="">Please Select</option>
                            <?php }else{
                              ?>
                             <option value="<?php echo $rows['religion']; ?>"><?php echo $rows['religion']; ?></option>
                            <?php  }

                              ?>
                              
                              <option value="hinduism">Hinduism </option>
                              <option value="christianity">Christianity </option>
                              <option value="islam">Islam </option>
                              <option value="sikhism">Sikhism </option>
                              <option value="buddhism">Buddhism</option>
                              <option value="jainism">Jainism</option>
                              <option value="zoroastrian">Zoroastrian</option>
                              <option value="others">Others</option>
                              
                            </select>
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Applicant Passport Size Photo</label><br>
                          
                            
                            <br>
                            <input type="file" class="m" value="<?php echo $rows['image'] ;?>" alt="1.jpg" name="file">
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
        <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                <section class="mdc-card__primary">
                  <h1 class="mdc-card__title mdc-card__title--large" style="color: #015198;">Contact Details</h1>
                  
                </section>
                <section class="mdc-card__supporting-text">
                  <div class="mdc-layout-grid__inner">
                   <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Contact No1 </label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['acd_1']=='0'){
                             }else{
                              echo $rows['acd_1'];
                             }

                              ?>" name="acd1" placeholder="Contact No 1">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Contact No2 </label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['acd_2']=='0'){
                             }else{
                              echo $rows['acd_2'];
                             }

                              ?>" name="acd2" placeholder="Contact No 3">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Contact No3 </label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['acd_3']=='0'){
                             }else{
                              echo $rows['acd_3'];
                             }

                              ?>" name="acd3" placeholder="Contact No 3">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >E-mail Addres</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="email" class="mdc-text-field__input" value="<?php 
                            if($rows['acd_email']=='0'){
                             }else{
                              echo $rows['acd_email'];
                             }

                              ?>" name="acd_email" placeholder="E-mail Addres">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </section>
              </div>
            </div>


        </div>

        <!--//Contact details two-->
        <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                <section class="mdc-card__primary">
                  <h1 class="mdc-card__title mdc-card__title--large" style="color: #015198;">Permanent Address Detaiils</h1>
                  
                </section>
                <section class="mdc-card__supporting-text">
                  <div class="mdc-layout-grid__inner">
                   <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Contact No1 </label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['mobile_no']=='0'){
                             }else{
                              echo $rows['mobile_no'];
                             }

                              ?>" name="pad1" placeholder="Contact No 1">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Contact No2 </label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['pad_2']=='0'){
                             }else{
                              echo $rows['pad_2'];
                             }

                              ?>" name="pad2" placeholder="Contact No 3">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Contact No3 </label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['pad_3']=='0'){
                             }else{
                              echo $rows['pad_3'];
                             }

                              ?>" name="pad3" placeholder="Contact No 3">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Land Mark</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['pad_lm']=='0'){
                             }else{
                              echo $rows['pad_lm'];
                             }

                              ?>" name="pad_land" placeholder="E-mail Addres">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>State</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input"  name="state" placeholder="state" value="<?php echo $rows['state']; ?>" >
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>Dist</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['pad_dist']=='0'){
                             }else{
                              echo $rows['pad_dist'];
                             }

                              ?>" name="pad_dist" placeholder="Dist">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>Pin</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="number" class="mdc-text-field__input" name="pin" placeholder="pin" value="<?php echo $rows['pin']; ?>" >
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>City</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" name="city" placeholder="City" value="<?php echo $rows['city']; ?>" >
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </section>
              </div>
            </div>


        </div>

        <!--//Contact details two-->
        <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                <section class="mdc-card__primary">
                  <h1 class="mdc-card__title mdc-card__title--large" style="color: #015198;">Correspondence Detaiils</h1>
                  
                </section>
                <section class="mdc-card__supporting-text">
                  <div class="mdc-layout-grid__inner">
                   <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Contact No1 </label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['cd_1']=='0'){
                             }else{
                              echo $rows['cd_1'];
                             }

                              ?>" name="cd1" placeholder="Contact No 1">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Contact No2 </label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['cd_2']=='0'){
                             }else{
                              echo $rows['cd_2'];
                             }

                              ?>" name="cd2" placeholder="Contact No 3">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Contact No3 </label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['cd_3']=='0'){
                             }else{
                              echo $rows['cd_3'];
                             }

                              ?>" name="cd3" placeholder="Contact No 3">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Land Mark</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['cd_lm']=='0'){
                             }else{
                              echo $rows['cd_lm'];
                             }

                              ?>" name="cd_land" placeholder="Land Mark">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>City</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['cd_city']=='0'){
                             }else{
                              echo $rows['cd_city'];
                             }

                              ?>" name="cd_city" placeholder="City">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>State</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['cd_state']=='0'){
                             }else{
                              echo $rows['cd_state'];
                             }

                              ?>" name="cd_state" placeholder="State">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>Dist</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['cd_dist']=='0'){
                             }else{
                              echo $rows['cd_dist'];
                             }

                              ?>" name="cd_dist" placeholder="Dist">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>Pin</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="number" class="mdc-text-field__input" value="<?php 
                            if($rows['cd_pin']=='0'){
                             }else{
                              echo $rows['cd_pin'];
                             }

                              ?>" name="cd_pin" placeholder="pin">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </section>
              </div>
            </div>


        </div>
       
       <!--//education details-->
        <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                <section class="mdc-card__primary">
                  <h1 class="mdc-card__title mdc-card__title--large" style="color: #015198;">Education/Qualification Details</h1>
                </section>
                <section class="mdc-card__supporting-text">
                  <div class="mdc-layout-grid__inner">
                   <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>Educational Qualification</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            
                            <select class="mdc-text-field__input" name="eq_details">
                              <?php 
                            if($rows['edu_qua']=='0'){
                              ?>
                              <option value="">Please Select</option>
                            <?php }else{
                              ?>
                               <option value="<?php echo $rows['edu_qua']; ?>"><?php echo $rows['edu_qua']; ?></option>
                            <?php  }

                              ?>"
                          
                              <option value="class 10">Class 10</option>
                              <option value="class 12">Class 12</option>
                              <option value="graduate">Graduate</option>
                              <option value="post graduate">Post Graduate</option>
                              <option value="others">Others</option>
                            </select>
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>Year Of Class 10 pass</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['pass_year']=='0'){
                             }else{
                              echo $rows['pass_year'];
                             }

                              ?>" name="pass_year" placeholder="Year Of Class 10 pass">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Roll Number</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['roll_no']=='0'){
                             }else{
                              echo $rows['roll_no'];
                             }

                              ?>" name="eq_roll" placeholder="Roll Number">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>Name of class 10th Examinaton Board</label>
                          <div class="mdc-text-field mdc-text-field--box  w-100">
                            
                            <input type="text"  class="mdc-text-field__input" value="<?php 
                            if($rows['board_name']=='0'){
                             }else{
                              echo $rows['board_name'];
                             }

                              ?>" name="eq_board" placeholder="class 10th Examinaton Board">
                            
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </section>
              </div>
            </div>

            
        </div>


         <!--//identification details-->
        <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                <section class="mdc-card__primary">
                  <h1 class="mdc-card__title mdc-card__title--large" style="color: #015198;">Indentification Details</h1>
                </section>
                <section class="mdc-card__supporting-text">
                  <div class="mdc-layout-grid__inner">
                   <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>Pan Card</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            
   <input  type="text" class="mdc-text-field__input" name="pan" placeholder="pancard" value="<?php echo $rows['pan_no']; ?>" >
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>Aadhar Card No</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="number" class="mdc-text-field__input" name="aadhar" placeholder="Aadhar No" value="<?php echo $rows['aadhar_no']; ?>" >
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
                    
                    
                  </div>

                </section>
              </div>
            </div>

            
        </div>

         <!--//bank details-->

         <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                <section class="mdc-card__primary">
                  <h1 class="mdc-card__title mdc-card__title--large" style="color: #015198;">Bank Details</h1>
                </section>
                <section class="mdc-card__supporting-text">
                  <div class="mdc-layout-grid__inner">
                   <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Bank Name</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['bank_name']=='0'){
                             }else{
                              echo $rows['bank_name'];
                             }

                              ?>" name="bank_name" placeholder="Bank Name">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Branch Name</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['branch_name']=='0'){
                             }else{
                              echo $rows['branch_name'];
                             }

                              ?>" name="bank_branch" placeholder="Branch Name">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Account No</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['ac_no']=='0'){
                             }else{
                              echo $rows['ac_no'];
                             }

                              ?>" name="bank_acc" placeholder="Bank Account Number">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >IFSC Code</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['ifsc']=='0'){
                             }else{
                              echo $rows['ifsc'];
                             }

                              ?>" name="bank_ifsc" placeholder="IFSC Code">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >MICR No.</label>
                          <div class="mdc-text-field mdc-text-field--box  w-100">
                           
                            <input type="text"  class="mdc-text-field__input" value="<?php 
                            if($rows['micr_no']=='0'){
                             }else{
                              echo $rows['micr_no'];
                             }

                              ?>" name="bank_micr" placeholder="MICR Number">
                            
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Branch Address</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['branch_adds']=='0'){
                             }else{
                              echo $rows['branch_adds'];
                             }

                              ?>" name="bank_branch_adds" placeholder="Branch Addres">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>

                </section>
              </div>
            </div>


        </div>


         <!--//Nominee details-->

         <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                <section class="mdc-card__primary">
                  <h1 class="mdc-card__title mdc-card__title--large" style="color: #015198;">Nominee Details</h1>
                </section>
                <section class="mdc-card__supporting-text">
                  <div class="mdc-layout-grid__inner">
                   <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Nominee Name</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['nominee_name']=='0'){
                             }else{
                              echo $rows['nominee_name'];
                             }

                              ?>"name="nomineename" placeholder="Nominee Name">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Relationship With Nominee </label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" value="<?php 
                            if($rows['nominee_rel']=='0'){
                             }else{
                              echo $rows['nominee_rel'];
                             }

                              ?>" name="nominee_rel" placeholder="Relationship With Nominee">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
                    
                    
                    
                    
                  </div>

                </section>
              </div>
            </div>


        </div>

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
$main_id=$rows['id'];

$file="";


if(isset($_POST['submit'])){

$aname=$_POST['name'];
$agender=$_POST['gender'];
$adob=$_POST['dob'];
$astate=$_POST['state'];
$apin=$_POST['pin'];
$acity=$_POST['city'];
$apancard=$_POST['pan'];
$aadhar=$_POST['aadhar'];

$categorylife=$_POST['Categorylife'];
$branchname=$_POST['branchname'];
$identification=$_POST['identification'];
$fathername=$_POST['fathername'];
$mother=$_POST['mother'];
$gurdianname=$_POST['gurdianname'];
$marital=$_POST['marital'];
$hwname=$_POST['hwname'];
$child=$_POST['child'];
$handicap=$_POST['handicap'];
$cast=$_POST['cast'];
$serviceman=$_POST['serviceman'];
$religion=$_POST['religion'];

$acd1=$_POST['acd1'];
$acd2=$_POST['acd2'];
$acd3=$_POST['acd3'];
$acd_email=$_POST['acd_email'];
$pad1=$_POST['pad1'];
$pad2=$_POST['pad2'];
$pad3=$_POST['pad3'];
$pad_land=$_POST['pad_land'];
$pad_dist=$_POST['pad_dist'];
$cd1=$_POST['cd1'];
$cd2=$_POST['cd2'];
$cd3=$_POST['cd3'];
$cd_land=$_POST['cd_land'];
$cd_city=$_POST['cd_city'];
$cd_state=$_POST['cd_state'];
$cd_dist=$_POST['cd_dist'];
$cd_pin=$_POST['cd_pin'];
$eq_details=$_POST['eq_details'];
$pass_year=$_POST['pass_year'];
$eq_roll=$_POST['eq_roll'];
$eq_board=$_POST['eq_board'];
$bank_name=$_POST['bank_name'];
$bank_branch=$_POST['bank_branch'];
$bank_acc=$_POST['bank_acc'];
$bank_ifsc=$_POST['bank_ifsc'];
$bank_micr=$_POST['bank_micr'];
$bank_branch_adds=$_POST['bank_branch_adds'];
$nomineename=$_POST['nomineename'];
$nominee_rel=$_POST['nominee_rel'];




  

if (empty($_FILES['file']['name'])) {
  # code...
  $imagename=$rows['image'];
}else{
  $imagename = $_FILES['file']['name'];
  $url="http://www.sovjantaquizwala.com/sovjanta_video/admin/images/";

   $target_dir = "upload/";
   $target_file = $target_dir . basename($_FILES["file"]["name"]);

   // Select file type
   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

   // Valid file extensions
   $extensions_arr = array("jpg","jpeg","png","webp");

   // Check extension
   if( in_array($imageFileType,$extensions_arr) ){

    // Convert to base64 
    $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
    $image = 'data:images/'.$imageFileType.';base64,'.$image_base64;
    // Insert record
    $iname = basename($_FILES["file"]["name"]);
 move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$imagename);
   }
}



  # code...mobile_no
  $sql=mysql_query("UPDATE `agent_details` SET `name`='$aname',`gender`='$agender',`state`='$astate',`city`='$acity',`dob`='$adob',`pin`='$apin',`aadhar_no`='$aadhar',`pan_no`='$apancard',`branch_name`='$branchname',`catagory`='$categorylife',`father_name`='$fathername',`mother_name`='$mother',`gurdian_name`='$gurdianname',`marital_status`='$marital',`h_w_name`='$hwname',`child_no`='$child',`handicap`='$handicap',`catagory_cast`='$cast',`x_ser_man`='$serviceman',`religion`='$religion',`image`='$imagename',
  `acd_1`='$acd1',`acd_2`='$acd2',`acd_3`='$acd3',`acd_email`='$acd_email',`mobile_no`='$pad1',`pad_2`='$pad2',`pad_3`='$pad3',`pad_lm`='$pad_land',`pad_dist`='$pad_dist',`cd_1`='$cd1',`cd_2`='$cd2',
  `cd_3`='$cd3',`cd_lm`='$cd_land',`cd_city`='$cd_city',`cd_state`='$cd_state',`cd_dist`='$cd_dist',`cd_pin`='$cd_pin',`edu_qua`='$eq_details',`basic_edu_qua`='0',`pass_year`='$pass_year',`roll_no`='$eq_roll',`board_name`='$eq_board',`bank_name`='$bank_name',`bank_branch_name`='$bank_branch',`ac_no`='$bank_acc',`ifsc`='$bank_ifsc',`micr_no`='$bank_micr',`branch_adds`='$bank_branch_adds',`nominee_name`='$nomineename',`nominee_rel`='$nominee_rel' WHERE id = '$main_id' ");
if($sql){
echo "<script language='javascript' type='text/javascript'>alert('Inserted successfull')
  location.href='detatable.php' </script>";
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