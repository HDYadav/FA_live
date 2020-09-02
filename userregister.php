 <?php include 'header.php';?>
<div class="site-section">
      <div class="container">
         <div class="row">
           <div class="col-md-10 m-auto">
              <div class="login-box shadow  p-3">
                  <h4>User Register</h4>
                 <form>
                    <div class="form-group">
                      <label class="control-label"><span>*</span>Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label class="control-label"><span>*</span>Address</label>
                      <textarea class="form-control" placeholder="Address" rows="2"></textarea>
                    </div>
                   <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-3 pt-0"><span>*</span> Gender</legend>
      <div class="col-sm-4">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="male" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="female" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Female
          </label>
        </div>
        
      </div>
    </div>
  </fieldset>

                   <div class="form-group">
                      <label class="control-label"><span>*</span>State</label>
                      <select class="form-control" name="state">
                        <option>West Bengal</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label class="control-label"><span>*</span>City</label>
                      <select class="form-control" name="city">
                        <option>Kolkata</option>
                      </select>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="control-label"><span>*</span>DOB</label>
                      <input type="text" class="form-control" name="dob" placeholder="00/00/00">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="control-label"><span>*</span>Pin Code</label>
                      <input type="text" class="form-control" name="pincode" placeholder="pin Code">
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="control-label"><span>*</span>Aadhar No</label>
                      <input type="text" class="form-control" name="aadharno" placeholder="Aadhar No">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="control-label"><span>*</span>Pan No</label>
                      <input type="text" class="form-control" name="Pan" placeholder="Pan No">
                    </div>
                  </div>
                  <div class="form-group">
                      <label class="control-label"><span>*</span>E-mail Id</label>
                      <input type="text" class="form-control" name="email" placeholder="Enter Your E-mail">
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="control-label"><span>*</span>Mobile</label>
                      <input type="text" class="form-control" name="mobile" placeholder="Enter Your Mobile">
                    </div>
                    <div class="form-group col-md-4">
                      <label class="control-label">&nbsp;</label>
                      <input type="button" class="form-control btn btn-danger" value="Send OTP" name="otp">
                    </div>
                  </div>

                   <div class="form-group">
                      <label class="control-label"><span>*</span>Password</label>
                      <input type="password" class="form-control" name="pwd" placeholder="Enter Your Password">
                    </div>
                    <div class="form-group">
                      <label class="control-label"><span>*</span>Confirm Password</label>
                      <input type="password" class="form-control" name="confirmpwd" placeholder="Enter Your Password">
                    </div>
                    <div class="form-group">
                      <button class="btn-danger btn w-100">Register</button>
                    </div>
                 </form>

              </div>
           </div>
           
         </div>
        
      </div>
   </div>
 <?php include 'footer.php';?>
