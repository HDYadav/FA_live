    <?php
      
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

if (! empty($_SESSION['logged_in']))
{
	include_once("coon.php");
$email=$_REQUEST['email'];
$query = "SELECT * from agent_details where email='".$email."'"; 
$result = mysql_query($query) or die ( mysql_error());
$row = mysql_fetch_assoc($result);
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
                            <input readonly="" type="text" class="mdc-text-field__input"  value="<?php 
                            if($row['branch_name']=='0'){
                             }else{
                              echo $row['branch_name'];
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
                          <label >Identification No (Office Use Only)</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input readonly="" type="text" class="mdc-text-field__input" name="identification" placeholder="Identification No" >
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
                            <select disabled="" class="mdc-text-field__input" name="Categorylife" required="">
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
                            <input readonly="" type="text" class="mdc-text-field__input" name="name" value="<?php echo $row['name']; ?>"  placeholder="Name" >
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['father_name']=='0'){
                             }else{
                              echo $row['father_name'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['gurdian_name']=='0'){
                             }else{
                              echo $row['gurdian_name'];
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

                            
                            <select disabled="" class="mdc-text-field__input" name="gender" required="">
                              <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
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
                            <input readonly="" type="date"  class="mdc-text-field__input" name="dob" placeholder="YYYY/MM/DD" value="<?php echo $row['dob']; ?>" >
                            
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
                            <input readonly="" type="text" class="mdc-text-field__input" name="mother" value="<?php 
                            if($row['mother_name']=='0'){
                             }else{
                              echo $row['mother_name'];
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
                            
                            <select disabled="" class="mdc-text-field__input" name="marital">
                              <?php 
                            if($row['marital_status']=='0'){
                              ?>
                              <option value="">Please Select</option>
                            <?php }else{
                              ?>
                               <option value="<?php echo $row['marital_status']; ?>"><?php echo $row['marital_status']; ?></option>
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
                            <input readonly="" type="text" class="mdc-text-field__input" name="hwname" value="<?php 
                            if($row['h_w_name']=='0'){
                             }else{
                              echo $row['h_w_name'];
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
                            <input readonly="" type="number" class="mdc-text-field__input" value="<?php 
                            if($row['child_no']=='0'){
                             }else{
                              echo $row['child_no'];
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
                            
                            <select disabled="" class="mdc-text-field__input" name="handicap">
                               <?php 
                            if($row['handicap']=='0'){
                              ?>
                              <option value="">Please Select</option>
                            <?php }else{
                              ?>
                              <option value="<?php echo $row['handicap']; ?>"><?php echo $row['handicap']; ?></option>
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
                            
                            <select disabled="" class="mdc-text-field__input" name="cast">

                              <?php 
                            if($row['catagory_cast']=='0'){
                              ?>
                              <option value="">Please Select</option>
                            <?php }else{
                              ?>
                              <option value="<?php echo $row['catagory_cast']; ?>"><?php echo $row['catagory_cast']; ?></option>
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
                            
                            <select disabled="" class="mdc-text-field__input" name="serviceman">
                               <?php 
                            if($row['x_ser_man']=='0'){
                              ?>
                              <option value="">Please Select</option>
                            <?php }else{
                              ?>
                             <option value="<?php echo $row['x_ser_man']; ?>"><?php echo $row['x_ser_man']; ?></option>
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
                            
                            <select disabled="" class="mdc-text-field__input" name="religion">
                              <?php 
                            if($row['religion']=='0'){
                              ?>
                              <option value="">Please Select</option>
                            <?php }else{
                              ?>
                             <option value="<?php echo $row['religion']; ?>"><?php echo $row['religion']; ?></option>
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
                      <!-- <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Applicant Passport Size Photo</label><br>
                          
                            
                            <br>
                            <input type="file" class="m" value="<?php echo $row['image'] ;?>" alt="1.jpg" name="file">
                            <div class="mdc-text-field__bottom-line"></div>
                         
                        </div>
                      </div> -->
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['acd_1']=='0'){
                             }else{
                              echo $row['acd_1'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['acd_2']=='0'){
                             }else{
                              echo $row['acd_2'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['acd_3']=='0'){
                             }else{
                              echo $row['acd_3'];
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
                            <input readonly="" type="email" class="mdc-text-field__input" value="<?php 
                            if($row['acd_email']=='0'){
                             }else{
                              echo $row['acd_email'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['mobile_no']=='0'){
                             }else{
                              echo $row['mobile_no'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['pad_2']=='0'){
                             }else{
                              echo $row['pad_2'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['pad_3']=='0'){
                             }else{
                              echo $row['pad_3'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['pad_lm']=='0'){
                             }else{
                              echo $row['pad_lm'];
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
                            <input readonly="" type="text" class="mdc-text-field__input"  name="state" placeholder="state" value="<?php echo $row['state']; ?>" >
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['pad_dist']=='0'){
                             }else{
                              echo $row['pad_dist'];
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
                            <input readonly="" type="number" class="mdc-text-field__input" name="pin" placeholder="pin" value="<?php echo $row['pin']; ?>" >
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
                            <input readonly="" type="text" class="mdc-text-field__input" name="city" placeholder="City" value="<?php echo $row['city']; ?>" >
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['cd_1']=='0'){
                             }else{
                              echo $row['cd_1'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['cd_2']=='0'){
                             }else{
                              echo $row['cd_2'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['cd_3']=='0'){
                             }else{
                              echo $row['cd_3'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['cd_lm']=='0'){
                             }else{
                              echo $row['cd_lm'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['cd_city']=='0'){
                             }else{
                              echo $row['cd_city'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['cd_state']=='0'){
                             }else{
                              echo $row['cd_state'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['cd_dist']=='0'){
                             }else{
                              echo $row['cd_dist'];
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
                            <input readonly="" type="number" class="mdc-text-field__input" value="<?php 
                            if($row['cd_pin']=='0'){
                             }else{
                              echo $row['cd_pin'];
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
                            
                            <select disabled="" class="mdc-text-field__input" name="eq_details">
                              <?php 
                            if($row['edu_qua']=='0'){
                              ?>
                              <option value="">Please Select</option>
                            <?php }else{
                              ?>
                               <option value="<?php echo $row['edu_qua']; ?>"><?php echo $row['edu_qua']; ?></option>
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['pass_year']=='0'){
                             }else{
                              echo $row['pass_year'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['roll_no']=='0'){
                             }else{
                              echo $row['roll_no'];
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
                            
                            <input readonly="" type="text"  class="mdc-text-field__input" value="<?php 
                            if($row['board_name']=='0'){
                             }else{
                              echo $row['board_name'];
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
                            
   <input readonly="" type="text" class="mdc-text-field__input" name="pan" placeholder="pancard" value="<?php echo $row['pan_no']; ?>" >
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
                            <input readonly="" type="number" class="mdc-text-field__input" name="aadhar" placeholder="Aadhar No" value="<?php echo $row['aadhar_no']; ?>" >
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['bank_name']=='0'){
                             }else{
                              echo $row['bank_name'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['branch_name']=='0'){
                             }else{
                              echo $row['branch_name'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['ac_no']=='0'){
                             }else{
                              echo $row['ac_no'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['ifsc']=='0'){
                             }else{
                              echo $row['ifsc'];
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
                           
                            <input readonly="" type="text"  class="mdc-text-field__input" value="<?php 
                            if($row['micr_no']=='0'){
                             }else{
                              echo $row['micr_no'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['branch_adds']=='0'){
                             }else{
                              echo $row['branch_adds'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['nominee_name']=='0'){
                             }else{
                              echo $row['nominee_name'];
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
                            <input readonly="" type="text" class="mdc-text-field__input" value="<?php 
                            if($row['nominee_rel']=='0'){
                             }else{
                              echo $row['nominee_rel'];
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

        

          </form>        
 </main>




  <?php include 'footer.php';?>
<?php
}
else
{
  header("location:index.php");
    /*echo 'You are not logged in. <a href="index.php">Click here</a> to log in.';*/
}
?>