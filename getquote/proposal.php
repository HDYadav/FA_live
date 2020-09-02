<?php include 'header.php';?>
 <section class="section-padding">
  <div class="container">
    <div class="table-responsive">
     <table class="table table-bordered">
      <thead>
        <tr class="bg-light">
        <th colspan="3"><a href="#"><i class="fa fa-backward"></i> Back TO Quote Page</a></th>
        </tr>
      </thead>
        <tbody>
          <tr>
          	<td><img width="100" src="images/12.png"></td>
          	<td><Span><b>ReLance General Insurance Co.LTD</b></Span><br>
             	<Span>Customer REF No. 4311906</Span><br>
          	</td>
          	<td class="text-danger"><Span><b>PREMIUM</b></Span><br>
             	<Span><i class="fa fa-rupee"></i> 6.933</Span><br>
          	</td>
          </tr>
        </tbody>


     </table>
    </div>

  </div>
 	
 </section>
 <section class="section-padding proposal-area">
  <div class="container">
    <div class="accordion" id="accordionExample">
    <form method="post">
  <div class="card">
    <div class="card-header  bg-info text-light d-flex justify-content-start" data-toggle="collapse" data-target="#collapseOne" id="headingOne" aria-expanded="true" aria-controls="collapseOne">
     <div class="heading-txt">
         <h4>Personal Information</h4>
     </div>
     <div class="heading-icon ml-auto">
         <h4><i class="fa fa-plus-circle" aria-hidden="true"></i></h4>
     </div>
     
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
       
          <div class="form-row">
              <div class="form-group col-md-4">
             <label class="control-label">TItle</label>
              <select name="title" class="form-control" required="" name="gender">
                <option value="">Please Select</option>
                <option value="MR">MR</option>
                <option value="MRS">MRS</option>
                <option value="MISS">MiSS</option>
                
              </select> 
           </div>
           <div class="form-group col-md-4">
             <label class="control-label">First Name</label>
             <input type="text" class="form-control" placeholder="First Name" name="fname" required=""> 
           </div>
           
            <div class="form-group col-md-4">
             <label class="control-label">Last Name</label>
             <input type="text" class="form-control" placeholder="Last Name" name="last" required=""> 
           </div>
             <div class="form-group col-md-4">
             <label class="control-label">Relation</label>
             <input type="text" class="form-control" placeholder="Last Name" name="relation"> 
           </div>
           <div class="form-group col-md-4">
             <label class="control-label">Gender</label>
              <select name="gender" class="form-control" name="gender" required="">
                <option value="">Please Select</option>
              	<option value="MALE">Male</option>
              	<option value="FEMALE">Female</option>
                <option value="OTHER">Others</option>
              </select> 
           </div>
           <div class="form-group col-md-4">
             <label class="control-label">E-mail Id</label>
             <input type="text" class="form-control" placeholder="E-mail" name="email" required=""> 
           </div>

           <div class="form-group col-md-4">
             <label class="control-label">PAN</label>
             <input type="text" class="form-control" placeholder="PAN" name="pan" required=""> 
           </div>

           

            <div class="form-group col-md-4">
             <label class="control-label">Mobile</label>
             <input type="text" class="form-control" placeholder="Mobile" name="mobile" required=""> 
           </div>
      <!--      <div class="form-group col-md-4">
             <label class="control-label">Relation</label>
             <select name="adultrelation" class="form-control">
         	  <option value="BOTH">BROTHER</option>
         	   <option value="COUS">COUSIN</option>
         	    <option value="DLAW">DAUGHTER IN LAW</option>
         	     <option value="FATH">FATHER</option>
         	      <option value="FLAW">FATHER IN LAW</option>
         	       <option value="GDAU">GRAND DAUGHTER</option>
         	        <option value="GFAT">GRAND FATHER</option>
         	         <option value="GMOT">GRAND MOTHER</option>
         	          <option value="GSON">GRAND SON</option>
         	           <option value="MANT">AUNTIE</option>
         	            <option value="MDTR">BROTHER IN LAW</option>
         	             <option value="MLAW">MOTHER IN LAW</option>
         	              <option value="MMBR">SISTER IN LAW</option>
         	               <option value="MOTH">MOTHER</option>
         	                <option value="MUNC">UNCLE</option>
         	                 <option value="NBON">NEW BORN BABY</option>
         	                  <option value="NEPH">NEPHEW</option>
         	                   <option value="NIEC">NIECE</option>
         	                    <option value="PANT">PATERNAL AUNT</option>
         	                     <option value="PUNC">Paternal Uncle</option>
         	                      <option value="SELF">SELF- PRIMARY MEMBER</option>
         	                       <option value="SIST">SISTER</option>
         	                        <option value="SLAW">SON IN LAW</option>
         	                         <option value="SONM">SON</option>
         	                          <option value="SPSE">SPOUSE</option>
         	                           <option value="KRTA">KARTA</option>
         	                             <option value="CPAR">COPARCENER</option>
         	                              <option value="UDTR">DAUGHTER</option>
         </select>
           </div>-->
          </div>
     
      </div>
    </div>
  </div>
  <div class="card">
   <div class="card-header  bg-info text-light d-flex justify-content-start" data-toggle="collapse" data-target="#collapseTwo" id="headingOne" aria-expanded="true" aria-controls="collapseOne">
     <div class="heading-txt">
         <h4>Contact Information</h4>
     </div>
     <div class="heading-icon ml-auto">
         <h4><i class="fa fa-plus-circle" aria-hidden="true"></i></h4>
     </div>
     
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      
          <div class="form-row">
           <div class="form-group col-md-4">
             <label class="control-label">Communication Address 1</label>
             <input type="text" class="form-control" placeholder="Communication Address 1" name="addressone"> 
           </div>
            <div class="form-group col-md-4">
             <label class="control-label">Communication Address 2</label>
             <input type="text" class="form-control" placeholder="Communication Address 2" name="addresstwo"> 
           </div>
            <div class="form-group col-md-4">
             <label class="control-label">Communication Address 3</label>
             <input type="text" class="form-control" placeholder="Communication Address 3" name="addressthree"> 
           </div>
             <div class="form-group col-md-4">
             <label class="control-label">Communication PinCode</label>
             <input type="text" class="form-control" placeholder="Enter Your PinCode" name="pin"> 
           </div>
          
           <div class="form-group col-md-4">
             <label class="control-label">DIST / City</label>
             <input type="text" class="form-control" placeholder="dist / city" name="ds"> 
           </div>

           <div class="form-group col-md-4">
             <label class="control-label">State</label>
             <input type="text" class="form-control" placeholder="State" name="state"> 
           </div>

           <div class="form-group col-md-4">
             <label class="control-label">Locality</label>
             <input type="text" class="form-control" placeholder="Locality" name="locality"> 
           </div>
          </div>
       
      </div>
    </div>
  </div>
  <div class="card">
     <div class="card-header  bg-info text-light d-flex justify-content-start" data-toggle="collapse" data-target="#collapseThree" id="headingOne" aria-expanded="true" aria-controls="collapseOne">
     <div class="heading-txt">
         <h4>Insured Member Details (1 Adult)</h4>
     </div>
     <div class="heading-icon ml-auto">
         <h4><i class="fa fa-plus-circle" aria-hidden="true"></i></h4>
     </div>
     
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
       <div class="head bg-light p-2">Adult</div>
        <div class="form-row">
         <div class="form-group col-md-4">
         <label class="control-label">Title</label>
         <select name="title" class="form-control">
         	<option value="MR">Mr</option>
         	<option value="MS">Ms</option>
         	<option value="MRS">Mrs</option>
         	<option value="MISS">Miss</option>
         </select>
         </div>
          <div class="form-group col-md-4">
             <label class="control-label">Self Full Name</label>
             <input type="text" class="form-control" placeholder="Full Name" name="fullname"> 
           </div>
          <div class="form-group col-md-4">
         <label class="control-label">Marital Status</label>
         <select name="marriedstatus" class="form-control">
         	<option value="">Single</option>
         <option value="">Married</option>
         </select>
         </div>

         <div class="form-group col-md-4">
         <label class="control-label">Gender</label>
         <select name="gendermember" class="form-control">
         	<option value="">Male</option>
         	<option value="">Female</option>
         	
         </select>
         </div>
           <div class="form-group col-md-4">
             <label class="control-label">DOB</label>
             <input type="text" class="form-control" placeholder="00/00/00" name="dob"> 
           </div>
           <div class="form-group col-md-4">
             <label class="control-label">Height</label>
             
               <select name="height" class="form-control">
         	
         </select>
           </div>
           <div class="form-group col-md-4">
             <label class="control-label">Weight</label>
              <select name="weight" class="form-control">
         	
         </select>
             
           </div>
           <div class="form-group col-md-4">
             <label class="control-label">Occupation</label>
             <select name="occupation" class="form-control">
         	
         </select>
           </div>
            <div class="form-group col-md-4">
             <label class="control-label">Qualification</label>
             <select name="qualification" class="form-control">
         	
         </select>
           </div>
           
             <div class="form-group col-md-4">
             <label class="control-label">Relation</label>
             <select name="relationwith" class="form-control" required="">
            <option value="">Select Relation</option>
         	  <option value="BOTH">BROTHER</option>
         	   <option value="COUS">COUSIN</option>
         	    <option value="DLAW">DAUGHTER IN LAW</option>
         	     <option value="FATH">FATHER</option>
         	      <option value="FLAW">FATHER IN LAW</option>
         	       <option value="GDAU">GRAND DAUGHTER</option>
         	        <option value="GFAT">GRAND FATHER</option>
         	         <option value="GMOT">GRAND MOTHER</option>
         	          <option value="GSON">GRAND SON</option>
         	           <option value="MANT">AUNTIE</option>
         	            <option value="MDTR">BROTHER IN LAW</option>
         	             <option value="MLAW">MOTHER IN LAW</option>
         	              <option value="MMBR">SISTER IN LAW</option>
         	               <option value="MOTH">MOTHER</option>
         	                <option value="MUNC">UNCLE</option>
         	                 <option value="NBON">NEW BORN BABY</option>
         	                  <option value="NEPH">NEPHEW</option>
         	                   <option value="NIEC">NIECE</option>
         	                    <option value="PANT">PATERNAL AUNT</option>
         	                     <option value="PUNC">Paternal Uncle</option>
         	                      <option value="SELF">SELF- PRIMARY MEMBER</option>
         	                       <option value="SIST">SISTER</option>
         	                        <option value="SLAW">SON IN LAW</option>
         	                         <option value="SONM">SON</option>
         	                          <option value="SPSE">SPOUSE</option>
         	                           <option value="KRTA">KARTA</option>
         	                             <option value="CPAR">COPARCENER</option>
         	                              <option value="UDTR">DAUGHTER</option>
         </select>
           </div>

        </div>
      </div>
       
  </div>

<!--  <div class="card">
     <div class="card-header  bg-info text-light d-flex justify-content-start" data-toggle="collapse" data-target="#collapseFour" id="headingOne" aria-expanded="true" aria-controls="collapseOne">
     <div class="heading-txt">
         <h4>Medicale history all members</h4>
     </div>
     <div class="heading-icon ml-auto">
         <h4><i class="fa fa-plus-circle" aria-hidden="true"></i></h4>
     </div>
     
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
         <h5>Disease</h5>
         <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="diseaseno" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No for all</label>
         </div>
         <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Is te Insured Sufferin from Cancer ?</label>
         </div>
         <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="no_cancer" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No for all members</label>
         </div>
          <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="self_cancer" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Self</label>
         </div>
      </div>

       <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Is te Insured Sufferin from Cardiacailments ?</label>
         </div>
         <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="no_cardiacailments" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No for all members</label>
         </div>
          <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="self_cardiacailments" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Self</label>
         </div>
      </div>

       <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Is te Insured Sufferin from COPD ?</label>
         </div>
         <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="no_copd" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No for all members</label>
         </div>
          <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="self_copd" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Self</label>
         </div>
      </div>

      <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Is te Insured Sufferin from HIV OR AIDS ?</label>
         </div>
         <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="no_hiv" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No for all members</label>
         </div>
          <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="self_hiv" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Self</label>
         </div>
      </div>
      
       <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Is te Insured have insulin Dependent Diabetes ?</label>
         </div>
         <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="no_insulin" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No for all members</label>
         </div>
          <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="self_insulin" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Self</label>
         </div>
      </div>

       <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Any Kidney  Ailment?</label>
         </div>
         <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="no_kidneyailment" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No for all members</label>
         </div>
          <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="self_kidneyailment" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Self</label>
         </div>
      </div>

       <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Have Liver Disease ?</label>
         </div>
         <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="no_liverdisease" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No for all members</label>
         </div>
          <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="self_liverdisease" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Self</label>
         </div>
      </div>

       <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Neurological Disorder or Stroke or Paralysis ?</label>
         </div>
         <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="no_neurological" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No for all members</label>
         </div>
          <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="self_neurological" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Self</label>
         </div>
      </div>

       <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Is te Insured Sufferin from Leukemia ?</label>
         </div>
         <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="no_leukemia" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No for all members</label>
         </div>
          <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="self_leukemia"  id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Self</label>
         </div>
      </div>

      <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Any Malignant Tumor ?</label>
         </div>
         <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="no_tumor" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No for all members</label>
         </div>
          <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="self_tumor" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Self</label>
         </div>
      </div>

      <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Thalasemia ?</label>
         </div>
         <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="no_thalasemia" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No for all members</label>
         </div>
          <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="self_thalasemia" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Self</label>
         </div>
      </div>

      <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Is te Insured Sufferin from Anyother Disease ?</label>
         </div>
         <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="no_anotherdisease" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">No for all members</label>
         </div>
          <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="self_anotherdisease" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Self</label>
         </div>
      </div>

      </div>
    </div>
  </div>-->


  <div class="card">
     <div class="card-header  bg-info text-light d-flex justify-content-start" data-toggle="collapse" data-target="#collapseSix" id="headingOne" aria-expanded="true" aria-controls="collapseOne">
     <div class="heading-txt">
         <h4>Nominee Information</h4>
     </div>
     <div class="heading-icon ml-auto">
         <h4><i class="fa fa-plus-circle" aria-hidden="true"></i></h4>
     </div>
     
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
          <div class="form-box form-group bg-light p-2 border">
         <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="nomineeaddress" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Same as Communiaction Address</label>
         </div>
          
      </div>

        <div class="form-row">
          <div class="form-group col-md-4">
           <label class="control-label">Nominee Full Name</label>
           <input type="text" class="form-control" placeholder="Nominee Name" name="nomineename">
          </div>
          <div class="form-group col-md-4">
           <label class="control-label">DOB</label>
           <input type="text" class="form-control" placeholder="00/00/00" name="nomdob">
          </div>
          <div class="form-group col-md-4">
           <label class="control-label">Nomonee Address</label>
           <input type="text" class="form-control" placeholder="Address" name="adreessnom">
          </div>
          <div class="form-group col-md-4">
           <label class="control-label">Nomonee Pincode</label>
           <input type="text" class="form-control" placeholder="PIN" name="nompin">
          </div>
           <div class="form-group col-md-4">
           <label class="control-label">City</label>
           <input type="text" class="form-control" placeholder="City" name="nomcity">
          </div>
          <div class="form-group col-md-4">
           <label class="control-label">Relation</label>
           <input type="text" class="form-control" placeholder="Relation with Nominee" name="nomrelation">
          </div>

        </div>
      </div>
    </div>
  </div>

   <div class="card">
     <div class="card-header  bg-info text-light d-flex justify-content-start" data-toggle="collapse" data-target="#collapseFive" id="headingOne" aria-expanded="true" aria-controls="collapseOne">
     <div class="heading-txt">
         <h4>Online Agreement</h4>
     </div>
     <div class="heading-icon ml-auto">
         <h4><i class="fa fa-plus-circle" aria-hidden="true"></i></h4>
     </div>
     
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="form-box form-group bg-light p-2 border">
         <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="tms" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">I hereby agree to the <a href="#">Terms & Conditions</a> of the Purchase of this Policy</label>
         </div>
          
      </div>
      </div>
    </div>
  </div>
       <div class="form-group text-center mt-4">
         
          <input type="submit" class="btn btn-lg btn-primary" name="submit" value="ONLINE PAYMENT">
        </div>
    </form>
</div>
  </div>
 	
 </section>
   
<?php include 'footer.php';?>

<?php
if(isset($_POST['submit'])){

  $selftitle=$_POST['title'];

$firstname=$_POST['fname'];

$lastname=$_POST['last'];

$gender=$_POST['gender'];
$selfroll=$_POST['roll'];
$selfdob=$_POST['dob'];
$selfemail=$_POST['email'];
$selfpan=$_POST['pan'];
$selfmobile=$_POST['mobile'];
$selfaddressone=$_POST['addressone'];
$selfaddresstwo=$_POST['addresstwo'];
$selfpin=$_POST['pin'];
$selfstate=$_POST['state'];
$selfcity=$_POST['city'];
$selfarea=$_POST['area'];
/**/
  $memberselftitle=$_POST['title'];

$memberfirstname=$_POST['fname'];

$memberlastname=$_POST['last'];

$membergender=$_POST['gender'];
$memberroll=$_POST['roll'];
$memberdob=$_POST['dob'];
$memberemail=$_POST['email'];
$memberpan=$_POST['pan'];
$membermobile=$_POST['mobile'];
$memberaddressone=$_POST['addressone'];
$memberaddresstwo=$_POST['addresstwo'];
$memberpin=$_POST['pin'];
$memberstate=$_POST['state'];
$membercity=$_POST['city'];
$memberarea=$_POST['area'];




    $url="https://apiuat.religarehealthinsurance.com/relinterfacerestful/religare/restful/createPolicy";
// Create a new cURL resource
$ch = curl_init($url); 
$data=array(
  "intPolicyDataIO"=> array(
    "policy"=> array(
      "quotationPremium"=> "54,538",
      "baseAgentId"=> "20008325",
      "baseProductId"=> "10001101",
      "productName"=> "CARE",
      "productFamilyId"=> "HEALTH",
      "businessTypeCd"=> "NEWBUSINESS",
      "faveoOTC"=> "NO",
      "abacusId"=> "160",
      "sumInsuredValue"=> "25 Lakhs",
      "coverType"=> "INDIVIDUAL",
      "eldestMemberAge"=> "5 - 24 years",
      "policyAdditionalFieldsDOList"=> array(
        array(
          "fieldAgree"=> "YES",
          "fieldTc"=> "YES",
          "field1"=> "NEWFAVEO",
          "spCode"=> "12345721",
          "spName"=> "Ramesh"
        )
      ),
      "partyDOList"=> array(
        array(
          "guid"=> "1513063896827-713997405808",
          "firstName"=> "Test",
          "lastName"=> $relation,
          "roleCd"=> "PRIMARY",
          "birthDt"=> "10/10/1970",
          "genderCd"=> "FEMALE",
          "titleCd"=> "MS",
          "relationCd"=> "SPSE",
          "partyAddressDOList"=> array(
            array(
              "addressLine1Lang1"=> "Vaishali",
              "addressLine2Lang1"=> "Mahagun",
              "addressTypeCd"=> "PERMANENT",
              "areaCd"=> "Ghaziabad",
              "cityCd"=> "Ghaziabad",
              "stateCd"=> "UTTAR PRADESH",
              "pinCode"=> "201010",
              "countryCd"=> "IND"
            ),
            array(
              "addressLine1Lang1"=> "Vaishali",
              "addressLine2Lang1"=> "Mahagun",
              "addressTypeCd"=> "COMMUNICATION",
              "areaCd"=> "Ghaziabad",
              "cityCd"=> "Ghaziabad",
              "stateCd"=> "UTTAR PRADESH",
              "pinCode"=> "201010",
              "countryCd"=> "IND"
            )
          ),
          "partyContactDOList"=> array(
            array(
              "contactTypeCd"=> "MOBILE",
              "contactNum"=> "8523698741",
              "stdCode"=> "+91"
            )
          ),
          "partyEmailDOList"=> array(
            array(
              "emailTypeCd"=> "PERSONAL",
              "emailAddress"=> "ashi@monocept.com"
            )
          ),
          "partyIdentityDOList"=> array(
            array(
              "identityTypeCd"=> "PAN",
              "identityNum"=> "ASDFG1224L"
            )
          ),
          "partyQuestionDOList"=> array(
            array(
              "questionSetCd"=> "yesNoExist",
              "questionCd"=> "pedYesNo",
              "response"=> "YES"
            ),
            array(
              "questionSetCd"=> "PEDcancerDetails",
              "questionCd"=> "114",
              "response"=> "YES"
            ),
            array(
              "questionSetCd"=> "PEDcancerDetails",
              "questionCd"=> "cancerExistingSince",
              "response"=> "01/2017"
            ),
            array(
              "questionSetCd"=> "PEDRespiratoryDetails",
              "questionCd"=> "250",
              "response"=> "YES"
            ),
            array(
              "questionSetCd"=> "PEDRespiratoryDetails",
              "questionCd"=> "respiratoryExistingSince",
              "response"=> "10/2017"
            ),
            array(
              "questionSetCd"=> "HEDHealthClaim",
              "questionCd"=> "H002",
              "response"=> "YES"
            ),
            array(
              "questionSetCd"=> "HEDHealthDeclined",
              "questionCd"=> "H003",
              "response"=> "YES"
            ),
            array(
              "questionSetCd"=> "HEDHealthCovered",
              "questionCd"=> "H004",
              "response"=> "YES"
            ),
            array(
              "questionSetCd"=> "HEDCareleafPA",
              "questionCd"=> "P010",
              "response"=> "NO"
            )
          )
        ),
        array(
          "guid"=> "1513063896827-790948913709",
          "firstName"=> $firstname,
          "lastName"=> $lastname,
          "roleCd"=> "PROPOSER",
          "birthDt"=> "01/01/1975",
          "partyAddressDOList"=> array(
            array(
              "addressLine1Lang1"=> "Vaishali",
              "addressLine2Lang1"=> "Mahagun",
              "addressTypeCd"=> "PERMANENT",
              "areaCd"=> "Ghaziabad",
              "cityCd"=> "Ghaziabad",
              "stateCd"=> "UTTAR PRADESH",
              "pinCode"=> "201010",
              "countryCd"=> "IND"
            ),
            array(
              "addressLine1Lang1"=> "Vaishali",
              "addressLine2Lang1"=> "Mahagun",
              "addressTypeCd"=> "COMMUNICATION",
              "areaCd"=> "Ghaziabad",
              "cityCd"=> "Ghaziabad",
              "stateCd"=> "UTTAR PRADESH",
              "pinCode"=> "201010",
              "countryCd"=> "IND"
            )
          ),
          "genderCd"=> $gender,
          "titleCd"=> $personal_title,
          "relationCd"=> "SELF",
          "partyContactDOList"=> array(
            array(
              "contactTypeCd"=> "MOBILE",
              "contactNum"=> $mobile,
              "stdCode"=> "+91"
            )
          ),
          "partyEmailDOList"=> array(
            array(
              "emailTypeCd"=> "PERSONAL",
              "emailAddress"=> $email
            )
          ),
          "partyIdentityDOList"=> array(
            array(
              "identityTypeCd"=> "PAN",
              "identityNum"=> $pan
            )
          ),
          "partyQuestionDOList"=> array(
           
           json_decode("{}")
              
            
          )
        )
      ),
      "addOns"=> "UAR,EVERYDAYCARE,CAREWITHNCB",
      "sumInsured"=> "093",
      "term"=> "3",
      "isPremiumCalculation"=> "YES"
    )
  )
);
$json=json_encode($data);
// Attach encoded JSON string to the POST fields
/*****************************************************/
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('appid: 554940','signature: VLwAATi/myXGqlG9C14DVIKsLgFjEUAZIizPSIbVdJw=','timestamp: 1545391069685', 'Content-Type: application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result = curl_exec($ch);

// Get the POST request header status
$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);



// Close cURL resource
curl_close($ch);

// if you need to process the response from the API further
//$response = json_decode($result, true);
echo $result;
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
// Execute the POST request
$result = curl_exec($ch);

// Get the POST request header status
$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// If header status is not Created or not OK, return error message
if ( $status !== 201 || $status !== 200 ) {
   die("Error: call to URL $url failed with status $status, response $result, curl_error " . curl_error($ch) . ", curl_errno " . curl_errno($ch));
}

 $finalres=json_decode($result);

 $response=$finalres->responseData;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$stat=$response->status;
 $stat;

echo "<br>";
echo "<br>";
/*if ($stat=="1") {
  # code...
echo $proposalNum=$finalres->intPolicyDataIO->policy->proposalNum;

 echo "<script language='javascript' type='text/javascript'>alert('Go for payment')
  location.href='test_payment.php?proposalNum=$proposalNum' </script>";

}else{

  echo $result;
}*/
 
}
?>