 <?php include 'header.php';?>

       <section class="banner-solid pt-3 pb-3">
    	  <div class="container">
    	     <div class="row">
    	       <div class="col-md-12 col-lg-7 col-sm-12 colmt">
    	          <div class="tab-box p-2 shadow">
                 <div class="row">
    	           <div class="nav flex-column nav-pills col-md-3 col-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link active" id="v-pills-car-tab" data-toggle="pill" href="#v-pills-car" role="tab" aria-controls="v-pills-car" aria-selected="true"><span><i class="fa fa-car"></i></span> Car</a>
  <a class="nav-link" id="v-pills-bike-tab" data-toggle="pill" href="#v-pills-bike" role="tab" aria-controls="v-pills-bike" aria-selected="false"><Span><i class="fa fa-bicycle" aria-hidden="true"></i></span> Bike</a>
  <a class="nav-link" id="v-pills-health-tab" data-toggle="pill" href="#v-pills-health" role="tab" aria-controls="v-pills-health" aria-selected="false"><span><i class="fa fa-heart-o"></i></span> Health</a>
  <a class="nav-link" id="v-pills-termlife-tab" data-toggle="pill" href="#v-pills-termlife" role="tab" aria-controls="v-pills-termlife" aria-selected="false"><span><i class="fa fa-life-ring" aria-hidden="true"></i></span> Term Life</a>
  <a class="nav-link" id="v-pills-travel-tab" data-toggle="pill" href="#v-pills-travel" role="tab" aria-controls="v-pills-travel" aria-selected="false"><span><i class="fa fa-globe"></i></span> Travel</a>
  <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false"><span><i class="fa fa-home"></i></span> Home</a>
  <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false"><span><i class="fa fa-rupee"></i></span> Tax Saving</a>
</div>
<div class="tab-content col-md-9 col-9" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-car" role="tabpanel" aria-labelledby="v-pills-car-tab">
       <form method="post">
        <div class="form-row">
          <div class="form-group col-md-4">
            <label class="control-label">Your Car</label>
             <select name="car" class="form-control" >
              <option value="">Select Vehicle</option>
              
            </select>
          </div>

          <div class="form-group col-md-4">
            <label class="control-label">Fuel</label>
             <select name="car" class="form-control" >
              <option value="">Select Vehicle</option>
              
            </select>
          </div>
           <div class="form-group col-md-4">
            <label class="control-label">Varient</label>
             <select name="car" class="form-control" >
              <option value="">Select Varient</option>
              
            </select>
          </div>

        </div>

        <div class="form-row">
          <div class="form-group  col-md-4">
            <label class="control-label">City of Registretion</label>
             <select name="car" class="form-control" >
              <option value="">Select City</option>
              
            </select>
          </div>

          <div class="form-group col-md-4">
            <label class="control-label">Registretion Year</label>
             <select name="car" class="form-control" >
              <option value="">Select Year</option>
              
            </select>
          </div>
           <div class="form-group col-md-4">
            <label class="control-label">Your Mobile</label>
              <input type="text" class="form-control" placeholder="Mobile">
          </div>

        </div>
        <div class="form-check form-group ">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">By Processing You are accepting our term &amp; Condition</label>
        </div>
        <div class="form-group text-center">
          <a href="#" class="btn btn-quote">Get Quotes</a>
        </div>
     </form>
  </div>

 <!-- health -->
  <div class="tab-pane fade" id="v-pills-health" role="tabpanel" aria-labelledby="v-pills-health-tab">
      <form method="post">
        <div class="form-group">
         <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text bg-dark text-light" style="Width:80px; border:1px solid #000000;">Member</span>
  </div>
  <input type="number" placeholder="Adult"  class="form-control">
  <input type="number" placeholder="Child" class="form-control">
</div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label class="control-label">Gender</label>
             <select name="gender" class="form-control" >
                <option value="">Choose Gender</option>
              <option value="">Male</option>
              <option value="">Female</option>
              <option value="">Others</option>
            </select>
          </div>

           <div class="form-group col-md-4">
            <label class="control-label">Age </label>
             <input type="text" class="form-control" placeholder="Eldest Member" name="age">
          </div>
           <div class="form-group col-md-4">
            <label class="control-label">Sum Insured</label>
             <select name="suminsurance" class="form-control" >
              <option value="">Choose Amount</option>
                <option value="">3,00000</option>
              <option value="">3,50000</option>
              <option value="">4,00000</option>
              <option value="">4,50000</option>
              <option value="">5,00000</option>
            </select>
          </div>
           
          

        </div>

        <div class="form-row">
        <div class="form-group  col-md-4">
            <label class="control-label">Pin </label>
            <input type="text" class="form-control" name="pin" placeholder="PIN Code">
          </div>

          <div class="form-group col-md-4">
            <label class="control-label">Mobile</label>
             <input type="text" class="form-control" name="mob" placeholder="No.">
          </div>
           <div class="form-group col-md-4">
            <label class="control-label">Name</label>
              <input type="text" name="name" class="form-control" placeholder="Name">
          </div>

        </div>
        <div class="form-check form-group ">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">By Processing You are accepting our term &amp; Condition</label>
        </div>
        <div class="form-group text-center">
          <a href="#" class="btn btn-quote">Get Quotes</a>
        </div>
     </form>
  </div>
  <!-- end health -->
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
</div>
</div>

    	          </div>
    	       </div>



    	            <div class="col-md-12 col-lg-3 col-sm-12 colmt ">
    	          <div class="tab-box p-2 shadow">
                   <h4 class="text-center">TO HELP</h4>
                   <form>
                    <div class="form-row">
    	             <div class="form-group col-md-6">
    	              <label class="control-label">Interested in</label>
    	              <input type="text" class="form-control">
    	             </div>
    	             <div class="form-group col-md-6">
    	              <label class="control-label">Mobile</label>
    	              <input type="text" class="form-control" placeholder="No">
    	             </div>
    	             </div>
    	             <div class="form-group">
    	              <label class="control-label">Name</label>
    	              <input type="text" class="form-control" placeholder="Name">
    	             </div>
    	             <div class="form-group">
    	              <label class="control-label">E-mail</label>
    	              <input type="text" class="form-control" placeholder="E-mail">
    	             </div>
    	             <div class="form-group text-center">
          <a href="#" class="btn btn-quote">Click</a>
        </div>
                    </form>
    	          </div>
    	       </div>

    	       <div class="col-md-12 col-lg-2 col-sm-12 colmt">
                 <div class="hurry-box p-2 align-items-center">
                  <h2 class="text-light">In a Hurry</h2>
                  <p class="text-dark">Just Upload your Documents & Get Instant Quotes</p>
                   <div class="form-group">
          <a href="#" class="btn btn-quote"><i class="fa fa-upload"></i> Upload</a>
        </div>
                 </div>
    	       </div>

    	     </div>
    	  	
    	  </div>
    </section>

     <section class="section-padding">
    	   	<div class="container">
    	   	  <div class="row">
    	   	    <div class="col-md-4 col-sm-12 colmt">
    	   	       <div class="insurance-img">
                     <img class="d-block w-100" src="images/healthinsurance.jpg">
    	   	       </div>
    	   	       <div class="text-insurance text-center p-3 border bg-light">
    	   	         <h4>Health Insurance</h4>
    	   	         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <span>Read More</span></p>
    	   	       </div>
    	   	    </div>
    	   	    <div class="col-md-4 col-sm-12 colmt">
    	   	       <div class="insurance-img">
                     <img class="d-block w-100" src="images/carinsurance.jpg">
    	   	       </div>
    	   	       <div class="text-insurance text-center p-3 border bg-light">
    	   	         <h4>Car Insurance</h4>
    	   	         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <span>Read More</span></p>
    	   	       </div>
    	   	    </div>
    	   	    <div class="col-md-4 col-sm-12 colmt">
    	   	       <div class="insurance-img">
                     <img class="d-block w-100" src="images/bikeinsurance.jpg">
    	   	       </div>
    	   	       <div class="text-insurance text-center p-3 border bg-light">
    	   	         <h4>Two Wheelers</h4>
    	   	         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <span>Read More</span></p>
    	   	       </div>
    	   	    </div>

    	   	    

    	   	  </div>
                  
    	   	</div>
    </section>

    <section class="section-padding partners pt-4 pb-4">
    	 <div class="container">
    	  <h2 class="text-center text-light"> Our Partners</h4>
    	   <div class="col-md-12 m-auto">
             <div class="partner-box p-3 bg-light shadow">
                <div class="partner-img-area d-flex flex-wrap  align-items-center justify-content-around text-center mt-4">

                <div class="p-img">
                 <img src="images/1.png">
                </div>

                <div class="p-img">
                 <img src="images/2.png">
                </div>

                <div class="p-img">
                 <img src="images/3.png">
                </div>

                <div class="p-img">
                 <img src="images/4.png">
                </div>

                <div class="p-img">
                 <img src="images/5.png">
                </div>

                <div class="p-img">
                 <img src="images/6.png">
                </div>

                <div class="p-img">
                 <img src="images/7.png">
                </div>

                <div class="p-img">
                 <img src="images/8.png">
                </div>

                <div class="p-img">
                 <img src="images/9.png">
                </div>

                <div class="p-img">
                 <img src="images/10.png">
                </div>

                
             </div>
           
    	   </div>

    	 </div>
    </section>
     <section class="section-padding">
    	 <div class="cotainer">
            <div class="payment col-md-8 m-auto">
               <div class="payment-box flex-wrap  bg-light shadow p-2 d-flex justify-content-around align-items-center">
                   <div class="payment-img">
                  <a href="#"> <img src="images/p1.png"></a>
                   </div>
                   <div class="payment-img">
                 <a href="#"> <img src="images/p2.png"></a>
                   </div>
                   <div class="payment-img">
                  <a href="#"> <img src="images/p3.png"></a>
                   </div>
                   <div class="payment-img">
                   <a href="#"> <img src="images/p4.png"></a>
                   </div>
                   <div class="payment-img">
               <a href="#"> <img src="images/p5.png"></a>
                   </div>
                   <div class="payment-img">
                   <a href="#"> <img src="images/p6.png"></a>
                   </div>
               </div>
            </div>
    	 </div>
    </section>
 <?php include 'footer.php';?>