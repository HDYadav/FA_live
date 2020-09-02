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
          	<td><img width="100" src="images/religare_logo.png"></td>
          	<td><Span><b>Religare Health Insurance</b></Span><br>
             <!-- 	<Span>Customer REF No. 4311906</Span><br> -->
          	</td>
          	<td class="text-danger"><Span><b>SUMINSURED</b></Span><br>
             	<Span><i class="fa fa-rupee"></i><?php echo str_replace("_", " ", $_REQUEST['suminsurance']); ?></Span><br>

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
              <div class="form-group col-md-12">
             <label class="control-label">Relation</label>
             <input type="text" readonly class="form-control" placeholder="self" name="self"> 
           </div>
              <div class="form-group col-md-4">
             <label class="control-label">TItle</label>
             <select name="title" class="form-control" required="" >
                <option  value="">Please Select</option>
                <option value="MR">MR</option>
                <option value="MRS">MRS</option>
                <option value="MISS">MiSS</option>
                
              </select> 
           </div>
           <div class="form-group col-md-4">
             <label class="control-label">First Name</label>
             <input type="text" class="form-control" placeholder="First Name" value="<?php echo $_REQUEST['name']; ?>" name="fname" required=""> 
           </div>
           
            <div class="form-group col-md-4">
             <label class="control-label">Last Name</label>
             <input type="text" class="form-control" placeholder="Last Name" value="<?php echo $_REQUEST['lastname']; ?>" name="last" required=""> 
           </div>
   
           <div class="form-group col-md-4">
             <label class="control-label">Gender</label>
               <select name="gender" class="form-control" required="">
                <option selected="" value="<?php echo $_REQUEST['gender']; ?>"><?php echo $_REQUEST['gender']; ?></option>
                <option value="MALE">Male</option>
                <option value="FEMALE">Female</option>
                <option value="OTHER">Others</option>
              </select> 
           </div>
           <div class="form-group col-md-4">
             <label class="control-label">Roll</label>
              <select  class="form-control" name="roll" required="">

                <option value="">Please Select</option>
                <option value="PROPOSER">PROPOSER</option>
                <option value="PRIMARY">PRIMARY</option>
                
              </select> 
           </div>

           <div class="form-group col-md-4">
             <label class="control-label">DOB</label>
             <input type="text" class="form-control" placeholder="DOB" name="dob" required=""> 
           </div>
           
            <div class="form-group col-md-4">
             <label class="control-label">E-mail</label>
             <input type="email" class="form-control" placeholder="Enter your E-mail" name="email" required=""> 
           </div>
           
            <div class="form-group col-md-4">
             <label class="control-label">PAN</label>
             <input type="text" class="form-control" placeholder="Enter your PAN No" name="pan" required=""> 
           </div>
          <div class="form-group col-md-4">
             <label class="control-label">Mobile</label>
             <input type="text" class="form-control" value="<?php echo $_REQUEST['mob']; ?>" placeholder="Enter your mobile No" name="mobile" required=""> 
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
         <h4>Permanent Address</h4>
     </div>
     <div class="heading-icon ml-auto">
         <h4><i class="fa fa-plus-circle" aria-hidden="true"></i></h4>
     </div>
     
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
    <div class="card-body">
               
          <div class="form-row">
           <div class="form-group col-md-4">
             <label class="control-label">Address line 1</label>
             <input type="text" class="form-control" placeholder="Enter your address 1" name="addressone" required=""> 
           </div>
            <div class="form-group col-md-4">
             <label class="control-label">Address line 2</label>
             <input type="text" class="form-control" placeholder="Enter your address  2" name="addresstwo" required=""> 
           </div>
        
             <div class="form-group col-md-4">
             <label class="control-label"> Pin Code</label>
             <input type="text" class="form-control" placeholder="Enter Your PinCode" name="pin" required=""> 
           </div>
          
         

           <div class="form-group col-md-4">
             <label class="control-label">State</label>
             <input type="text" class="form-control" placeholder="State" name="state" required=""> 
           </div>

           <div class="form-group col-md-4">
             <label class="control-label">city</label>
             <input type="text" class="form-control" placeholder="City" name="city" required=""> 
           </div>
           
            <div class="form-group col-md-4">
             <label class="control-label">Area</label>
             <input type="text" class="form-control" placeholder="Area" name="area" required=""> 
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
       
          <div class="form-row">
              <div class="form-group col-md-4">
             <label class="control-label">TItle</label>
              <select name="membertitle" class="form-control" required="" >
                <option value="">Please Select</option>
                <option value="MR">MR</option>
                <option value="MRS">MRS</option>
                <option value="MISS">MiSS</option>
                
              </select> 
           </div>
           <div class="form-group col-md-4">
             <label class="control-label">First Name</label>
             <input type="text" class="form-control" placeholder="First Name" name="memberfname" required=""> 
           </div>
           
            <div class="form-group col-md-4">
             <label class="control-label">Last Name</label>
             <input type="text" class="form-control" placeholder="Last Name" name="memberlast" required=""> 
           </div>

           <div class="form-group col-md-4">
             <label class="control-label">Gender</label>
              <select name="membergender" class="form-control" required="">
                <option value="">Please Select</option>
                <option value="MALE">Male</option>
                <option value="FEMALE">Female</option>
                <option value="OTHER">Others</option>
              </select> 
           </div>
           <div class="form-group col-md-4">
             <label class="control-label">Roll</label>
             <select  class="form-control" name="memberroll" required="">

                <option value="">Please Select</option>
                <option value="PROPOSER">PROPOSER</option>
                <option value="PRIMARY">PRIMARY</option>
                
              </select> 
           </div>

           <div class="form-group col-md-4">
             <label class="control-label">DOB</label>
             <input type="text" class="form-control" placeholder="DOB" name="memberdob" required=""> 
           </div>

         

            
        <div class="form-group col-md-4">
             <label class="control-label">Relation</label>
             <select name="memberrelation" class="form-control" required="">
                   <option value="select">Please Select</option>
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
         	                    <!--  <option value="SELF">SELF- PRIMARY MEMBER</option>-->
         	                       <option value="SIST">SISTER</option>
         	                        <option value="SLAW">SON IN LAW</option>
         	                         <option value="SONM">SON</option>
         	                          <option value="SPSE">SPOUSE</option>
         	                           <option value="KRTA">KARTA</option>
         	                             <option value="CPAR">COPARCENER</option>
         	                              <option value="UDTR">DAUGHTER</option>
         </select>
           </div>
           
            <div class="form-group col-md-4">
             <label class="control-label">E-mail</label>
             <input type="text" class="form-control" placeholder="Enter your E-mail" name="memberemail" required=""> 
           </div>
           
            <div class="form-group col-md-4">
             <label class="control-label">PAN</label>
             <input type="text" class="form-control" placeholder="Enter your PAN No" name="memberpan" required=""> 
           </div>
          <div class="form-group col-md-4">
             <label class="control-label">Mobile</label>
             <input type="text" class="form-control" placeholder="Enter your mobile No" name="membermobile" required=""> 
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
         <label class="control-label">Diabetes ?</label>
         </div>

         <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="dibetes">
      <label class="form-check-label" for="inlineRadio1">YES</label>
       </div>
       
       <div class="form-group col-md-4">
           <label class="control-label">Existing since?</label>
           <input type="text" class="form-control">
       </div>
       
   
            <div class="form-check form-group">
  <input class="form-check-input" type="radio" name="dibetes">
  <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
 
    </div>

       <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Hypertension / High Blood Pressure ?</label>
         </div>
       <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="hypertension">
      <label class="form-check-label" for="inlineRadio1">YES</label>
       </div>
       
       <div class="form-group col-md-4">
           <label class="control-label">Existing since?</label>
           <input type="text" class="form-control">
       </div>
       
   
            <div class="form-check form-group">
  <input class="form-check-input" type="radio" name="hypertension">
  <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
      </div>

      <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Liver Disease?</label>
         </div>
       <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="liver">
      <label class="form-check-label" for="inlineRadio1">YES</label>
       </div>
       
       <div class="form-group col-md-4">
           <label class="control-label">Existing since?</label>
           <input type="text" class="form-control">
       </div>
       
   
            <div class="form-check form-group">
  <input class="form-check-input" type="radio" name="liver">
  <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
      </div>

      <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Cancer ?</label>
         </div>
       <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="cancer">
      <label class="form-check-label" for="inlineRadio1">YES</label>
       </div>
       
       <div class="form-group col-md-4">
           <label class="control-label">Existing since?</label>
           <input type="text" class="form-control">
       </div>
       
   
            <div class="form-check form-group">
  <input class="form-check-input" type="radio" name="cancer">
  <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
      </div>
      
      <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Cardiac Disease ?</label>
         </div>
       <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="cardiac">
      <label class="form-check-label" for="inlineRadio1">YES</label>
       </div>
       
       <div class="form-group col-md-4">
           <label class="control-label">Existing since?</label>
           <input type="text" class="form-control">
       </div>
       
   
            <div class="form-check form-group">
  <input class="form-check-input" type="radio" name="cardiac">
  <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
      </div>

      <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Joint Pain? ?</label>
         </div>
       <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="joinpaint">
      <label class="form-check-label" for="inlineRadio1">YES</label>
       </div>
       
       <div class="form-group col-md-4">
           <label class="control-label">Existing since?</label>
           <input type="text" class="form-control">
       </div>
       
   
            <div class="form-check form-group">
  <input class="form-check-input" type="radio" name="joinpaint">
  <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
      </div>

      <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Kidney Disease ?</label>
         </div>
       <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="kidney">
      <label class="form-check-label" for="inlineRadio1">YES</label>
       </div>
       
       <div class="form-group col-md-4">
           <label class="control-label">Existing since?</label>
           <input type="text" class="form-control">
       </div>
       
   
            <div class="form-check form-group">
  <input class="form-check-input" type="radio" name="kidney">
  <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
      </div>

      <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Paralysis ?</label>
         </div>
       <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="paralysis">
      <label class="form-check-label" for="inlineRadio1">YES</label>
       </div>
       
       <div class="form-group col-md-4">
           <label class="control-label">Existing since?</label>
           <input type="text" class="form-control">
       </div>
       
   
            <div class="form-check form-group">
  <input class="form-check-input" type="radio" name="paralysis">
  <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
      </div>

      <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Congenital Disorder ?</label>
         </div>
       <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="congental">
      <label class="form-check-label" for="inlineRadio1">YES</label>
       </div>
       
       <div class="form-group col-md-4">
           <label class="control-label">Existing since?</label>
           <input type="text" class="form-control">
       </div>
       
   
            <div class="form-check form-group">
  <input class="form-check-input" type="radio" name="congental">
  <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
      </div>



      <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">HIV/AIDS ?</label>
         </div>
       <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="hiv_aids">
      <label class="form-check-label" for="inlineRadio1">YES</label>
       </div>
       
       <div class="form-group col-md-4">
           <label class="control-label">Existing since?</label>
           <input type="text" class="form-control">
       </div>
       
   
            <div class="form-check form-group">
  <input class="form-check-input" type="radio" name="hiv_aids">
  <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
      </div>

      <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Does any person(s) to be insured has any Pre-existing diseases ?</label>
         </div>
       <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="diseases">
      <label class="form-check-label" for="inlineRadio1">YES</label>
       </div>
       
   
            <div class="form-check form-group">
  <input class="form-check-input" type="radio" name="diseases">
  <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
      </div>
      
      
            <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Have any of the above mentioned person(s) to be insured been diagnosed / hospitalized for any illness / injury during the last 48 months?</label>
         </div>
       <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="hospitalized">
      <label class="form-check-label" for="inlineRadio1">YES</label>
       </div>
       
       
   
            <div class="form-check form-group">
  <input class="form-check-input" type="radio" name="hospitalized">
  <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
      </div>
      
      
            <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Have any of the person(s) to be insured ever filed a claim with their current / previous insurer? </label>
         </div>
       <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="insured_claim">
      <label class="form-check-label" for="inlineRadio1">YES</label>
       </div>
       
      
   
            <div class="form-check form-group">
  <input class="form-check-input" type="radio" name="insured_claim">
  <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
      </div>
      
      
                  <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Has any proposal for Health insurance been declined, cancelled or charged a higher premium? </label>
         </div>
       <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="proposal_health">
      <label class="form-check-label" for="inlineRadio1">YES</label>
       </div>
       
      
   
            <div class="form-check form-group">
  <input class="form-check-input" type="radio" name="proposal_health">
  <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
      </div>
      
      
        <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Is any of the person(s) to be insured, already covered under any other health insurance policy of Religare Health Insurance?</label>
         </div>
       <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="already_covered">
      <label class="form-check-label" for="inlineRadio1">YES</label>
       </div>
       
      
   
            <div class="form-check form-group">
  <input class="form-check-input" type="radio" name="already_covered">
  <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
      </div>
      
              <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Any other diseases or ailments not mentioned above ?</label>
         </div>
       <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="not_mentioned">
      <label class="form-check-label" for="inlineRadio1">YES</label>
       </div>
       <div class="form-group col-md-4">
           <label class="control-label">Existing since?</label>
           <input type="text" class="form-control">
       </div>
      
   
            <div class="form-check form-group">
  <input class="form-check-input" type="radio" name="not_mentioned">
  <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
      </div>
      
                    <div class="form-box form-group bg-light p-2 border">
         <div class="form-group">
         <label class="control-label">Respiratory disorders inclusion ?</label>
         </div>
       <div class="form-check form-group">
      <input class="form-check-input" type="radio" name="disorders_inclusion">
      <label class="form-check-label" for="inlineRadio1">YES</label>
       </div>
       <div class="form-group col-md-4">
           <label class="control-label">Existing since?</label>
           <input type="text" class="form-control">
       </div>
      
   
            <div class="form-check form-group">
  <input class="form-check-input" type="radio" name="disorders_inclusion">
  <label class="form-check-label" for="inlineRadio2">NO</label>
            </div>
      </div>

      </div>
    </div>
  </div>

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
    <label class="form-check-label" for="exampleCheck1">I hereby agree to the <a href="#">Terms & Conditions</a> of the Purchase of this Plicy</label>
         </div>
          
      </div>
      </div>
    </div>
  </div>
       <div class="form-group text-center mt-4">
          <!-- <a href="#" class="btn btn-lg btn-primary">ONLNE PAYMENT</a> -->
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
  $memberselftitle=$_POST['membertitle'];

$memberfirstname=$_POST['memberfname'];

$memberlastname=$_POST['memberlast'];
$memberrelation=$_POST['memberrelation'];

$membergender=$_POST['membergender'];
$memberroll=$_POST['memberroll'];
$memberdob=$_POST['memberdob'];
$memberemail=$_POST['memberemail'];
$memberpan=$_POST['memberpan'];
$membermobile=$_POST['membermobile'];

$adult=$_REQUEST['adult'];
$child=$_REQUEST['child'];
$age=$_REQUEST['age'];
$suminsurance=$_REQUEST['suminsurance'];
$mob=$_REQUEST['mob'];


     
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
      "sumInsuredValue"=> $suminsurance,
      "coverType"=> "INDIVIDUAL",
      "eldestMemberAge"=> $age,
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
          "firstName"=> $memberfirstname,
          "lastName"=> $memberlastname,
          "roleCd"=> $memberroll,
          "birthDt"=> $memberdob,
          "genderCd"=> $membergender,
          "titleCd"=> $memberselftitle,
          "relationCd"=> $memberrelation,
          "partyAddressDOList"=> array(
            array(
              "addressLine1Lang1"=> $selfaddressone,
              "addressLine2Lang1"=> $selfaddresstwo,
              "addressTypeCd"=> "PERMANENT",
              "areaCd"=> $selfarea,
              "cityCd"=> $selfcity,
              "stateCd"=> $selfstate,
              "pinCode"=> $selfpin,
              "countryCd"=> "IND"
            ),
            array(
              "addressLine1Lang1"=> $selfaddressone,
              "addressLine2Lang1"=> $selfaddresstwo,
              "addressTypeCd"=> "COMMUNICATION",
              "areaCd"=> $selfarea,
              "cityCd"=> $selfcity,
              "stateCd"=> $selfstate,
              "pinCode"=> $selfpin,
              "countryCd"=> "IND"
            )
          ),
          "partyContactDOList"=> array(
            array(
              "contactTypeCd"=> "MOBILE",
              "contactNum"=> $membermobile,
              "stdCode"=> "+91"
            )
          ),
          "partyEmailDOList"=> array(
            array(
              "emailTypeCd"=> "PERSONAL",
              "emailAddress"=> $memberemail
            )
          ),
          "partyIdentityDOList"=> array(
            array(
              "identityTypeCd"=> "PAN",
              "identityNum"=> $memberpan
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
          "roleCd"=> $selfroll,
          "birthDt"=> $selfdob,
          "partyAddressDOList"=> array(
            array(
              "addressLine1Lang1"=> $selfaddressone,
              "addressLine2Lang1"=> $selfaddresstwo,
              "addressTypeCd"=> "PERMANENT",
              "areaCd"=> $selfarea,
              "cityCd"=> $selfcity,
              "stateCd"=> $selfstate,
              "pinCode"=> $selfpin,
              "countryCd"=> "IND"
            ),
            array(
               "addressLine1Lang1"=> $selfaddressone,
              "addressLine2Lang1"=> $selfaddresstwo,
              "addressTypeCd"=> "COMMUNICATION",
              "areaCd"=> $selfarea,
              "cityCd"=> $selfcity,
              "stateCd"=> $selfstate,
              "pinCode"=> $selfpin,
              "countryCd"=> "IND"
            )
          ),
          "genderCd"=> $gender,
          "titleCd"=> $selftitle,
          "relationCd"=> "SELF",
          "partyContactDOList"=> array(
            array(
              "contactTypeCd"=> "MOBILE",
              "contactNum"=> $selfmobile,
              "stdCode"=> "+91"
            )
          ),
          "partyEmailDOList"=> array(
            array(
              "emailTypeCd"=> "PERSONAL",
              "emailAddress"=> $selfemail
            )
          ),
          "partyIdentityDOList"=> array(
            array(
              "identityTypeCd"=> "PAN",
              "identityNum"=> $selfpan
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
$url="https://apiuat.religarehealthinsurance.com/relinterfacerestful/religare/restful/createPolicy";
// Create a new cURL resource
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('appid: 554940','signature: VLwAATi/myXGqlG9C14DVIKsLgFjEUAZIizPSIbVdJw=','timestamp: 1545391069685', 'Content-Type: application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 10000);
// Execute the POST request
$result = curl_exec($ch);

// Get the POST request header status
$status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// If header status is not Created or not OK, return error message


// Close cURL resource
echo $result;
echo $status;

if ( $status !== 201 || $status !== 200 ) {
   die("Error: call to URL $url failed with status $status, response $result, curl_error " . curl_error($ch) . ", curl_errno " . curl_errno($ch));
}
curl_close($ch);


     
 }
?>