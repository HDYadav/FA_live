  <?php include 'header.php';?>
 <main class="content-wrapper">

   <!--//personal details-->
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
                            <input  type="text" class="mdc-text-field__input" name="branchname" placeholder="Branch Name">
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
                            <input  type="text" class="mdc-text-field__input" name="Identification" placeholder="Identification No">
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
                            <select class="mdc-text-field__input" name="Categorylife">
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
                            <input  type="text" class="mdc-text-field__input" name="Name" placeholder="Name">
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
                            <input  type="text" class="mdc-text-field__input" name="Fathername" placeholder="Father's Name">
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
                            <input  type="text" class="mdc-text-field__input" name="Gurdianname" placeholder="Guardian's Name">
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
                            <input  type="text" class="mdc-text-field__input" name="Gender" placeholder="Gender">
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
                            <input type="text"  class="mdc-text-field__input" name="DOB" placeholder="00/00/00">
                            
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
                            <input  type="text" class="mdc-text-field__input" name="Mother" placeholder="Mother's Name">
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
                              <option>Select Maritial Status</option>
                              <option>Single</option>
                               <option>Married</option>
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
                            <input  type="text" class="mdc-text-field__input" name="hw" placeholder="Housband or Wife Name">
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
                            <input  type="number" class="mdc-text-field__input" name="child" placeholder="No Of Child">
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
                            
                            <select class="mdc-text-field__input" name="Category">
                              <option>Yes</option>
                              <option>No</option>
                               
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
                            
                            <select class="mdc-text-field__input" name="Category">
                              <option>GEN</option>
                              <option>SC</option>
                               <option>ST</option>
                                <option>OBC</option>
                                 <option>EWS</option>
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
                              <option>Yes</option>
                              <option>No</option>
                              
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
                            
                            <select class="mdc-text-field__input" name="serviceman">
                              <option>Select Your Religion </option>
                              <option>Hinduism </option>
                              <option>Christianity </option>
                              <option>Islam </option>
                              <option>Sikhism </option>
                              <option>Buddhism</option>
                              <option>Jainism</option>
                              <option>Zoroastrian</option>
                              <option>Others</option>
                              
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
                            <input type="file" class="m" name="applicantimg">
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
                            <input  type="text" class="mdc-text-field__input" name="contactone" placeholder="Contact No 1">
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
                            <input  type="text" class="mdc-text-field__input" name="contacttwo" placeholder="Contact No 3">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Contact No1 </label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" name="contactthree" placeholder="Contact No 3">
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
                            <input  type="email" class="mdc-text-field__input" name="email" placeholder="E-mail Addres">
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
                            <input  type="text" class="mdc-text-field__input" name="contactone" placeholder="Contact No 1">
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
                            <input  type="text" class="mdc-text-field__input" name="contacttwo" placeholder="Contact No 3">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Contact No1 </label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" name="contactthree" placeholder="Contact No 3">
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
                            <input  type="text" class="mdc-text-field__input" name="land" placeholder="E-mail Addres">
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
                            <input  type="text" class="mdc-text-field__input" name="city" placeholder="City">
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
                            <input  type="text" class="mdc-text-field__input" name="State" placeholder="State">
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
                            <input  type="text" class="mdc-text-field__input" name="Dist" placeholder="Dist">
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
                            <input  type="number" class="mdc-text-field__input" name="pin" placeholder="pin">
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
                            <input  type="text" class="mdc-text-field__input" name="contactone" placeholder="Contact No 1">
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
                            <input  type="text" class="mdc-text-field__input" name="contacttwo" placeholder="Contact No 3">
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label >Contact No1 </label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" name="contactthree" placeholder="Contact No 3">
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
                            <input  type="text" class="mdc-text-field__input" name="land" placeholder="E-mail Addres">
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
                            <input  type="text" class="mdc-text-field__input" name="city" placeholder="City">
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
                            <input  type="text" class="mdc-text-field__input" name="State" placeholder="State">
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
                            <input  type="text" class="mdc-text-field__input" name="Dist" placeholder="Dist">
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
                            <input  type="number" class="mdc-text-field__input" name="pin" placeholder="pin">
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
                            
                            <select class="mdc-text-field__input" name="Name">
                              <option>Class 10</option>
                              <option>Class 12</option>
                              <option>Graduate</option>
                              <option>Post Graduate</option>
                              <option>Others</option>
                            </select>
                            <div class="mdc-text-field__bottom-line"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                     <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-4-desktop">
                      <div class="template-demo">
                        <div id="demo-tf-box-wrapper">
                          <label>Basic Educational Qualification</label>
                          <div class="mdc-text-field mdc-text-field--box w-100">
                            <input  type="text" class="mdc-text-field__input" name="passing" placeholder="Year Of passing">
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
                            <input  type="text" class="mdc-text-field__input" name="tenpassyear" placeholder="Year Of Class 10 pass">
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
                            <input  type="text" class="mdc-text-field__input" name="Roll" placeholder="Roll Number">
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
                            
                            <input type="text"  class="mdc-text-field__input" name="pan" placeholder="class 10th Examinaton Board">
                            
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
                            
                           <input  type="Number" class="mdc-text-field__input" name="Pan" placeholder="pan Card">
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
                            <input  type="number" class="mdc-text-field__input" name="aadhar" placeholder="Year Of passing">
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
                            <input  type="text" class="mdc-text-field__input" name="bank" placeholder="Bank Name">
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
                            <input  type="text" class="mdc-text-field__input" name="Branch" placeholder="Branch Name">
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
                            <input  type="text" class="mdc-text-field__input" name="AccountNo" placeholder="0000000000000">
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
                            <input  type="text" class="mdc-text-field__input" name="IFSC" placeholder="00000000000000">
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
                           
                            <input type="text"  class="mdc-text-field__input" name="MICR" placeholder="00000000000000">
                            
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
                            <input  type="text" class="mdc-text-field__input" name="branchaddress" placeholder="Branch Addres">
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
                            <input  type="text" class="mdc-text-field__input" name="Nomineename" placeholder="Nominee Name">
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
                            <input  type="text" class="mdc-text-field__input" name="Branch" placeholder="Branch Name">
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
                  <h1 class="mdc-card__title mdc-card__title--large" style="color: #015198;">Declartion</h1>
                </section>
                 <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12" style="padding: 10px;">
                    <p><input type="checkbox">This is to certify that all the information submitted by me in this Application Form is true and correct to the best of my
knowledge and belief. If any information, furnished by fake, misleading or illegal at any point of time, I will be solely
responsible for any financial, social or legal action me in this Application Form, is found to be incorrect, that may be taken
against me at any point of time.</p>


                 </div>
                
              </div>
            </div>


        </div>
          <div class="mdc-layout-grid">
           <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
               
                 <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12" style="padding: 10px;">
                    
                    <div class="template-demo" style="margin: auto;">
                     
                    <button class="mdc-button mdc-button--raised" data-mdc-auto-init="MDCRipple" style="width: 200px;">
                      Submit
                    </button>

                  </div>

                 </div>
                
              </div>
            </div>


        </div>

                  
 </main>
  <?php include 'footer.php';?>