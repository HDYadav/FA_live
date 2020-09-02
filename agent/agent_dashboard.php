  <?php include 'header.php';?>
 <main class="content-wrapper">
        <div class="mdc-layout-grid">
          <div class="mdc-layout-grid__inner">
            
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                 <a href="agent_profile.php"> <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                    <div class="mdc--tile mdc--tile-danger rounded">
                      <i class="mdi mdi-account-settings text-white icon-md"></i>
                    </div>
                    <div class="text-wrapper pl-1">
                      <h3 class="mdc-typography--display font-weight-bold mb-1">View Profile</h3>
                      
                    </div>
                  </div></a>
                </div>
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                 <a href="update_agent_profile.php"> <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                    <div class="mdc--tile mdc--tile-success rounded">
                      <i class="mdi mdi-account-settings text-white icon-md"></i>
                    </div>
                    <div class="text-wrapper pl-1">
                      <h3 class="mdc-typography--display font-weight-bold mb-1">Update Profile</h3>
                   
                    </div>
                  </div></a>
                </div>
                <?php 
                if ($row['exam']==0) {
                      # code... 
                    ?>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                  <a href="posp_training.php"><div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                    <div class="mdc--tile mdc--tile-warning rounded">
                      <i class="mdi mdi-ticket text-white icon-md"></i>
                    </div>
                    <div class="text-wrapper pl-1">
                      <h3 class="mdc-typography--display font-weight-bold mb-1">POSP Training</h3>
                      
                    </div>
                  </div></a>
                </div>
                    <?php }else{
                      ?>
<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                  <a href="#"><div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                    <div class="mdc--tile mdc--tile-warning rounded">
                      <i class="mdi mdi-ticket text-white icon-md"></i>
                    </div>
                    <div class="text-wrapper pl-1">
                      <h3 class="mdc-typography--display font-weight-bold mb-1">Training Completed</h3>
                      
                    </div>
                  </div></a>
                </div>
                      
                   <?php }?>
                

              

                 <?php 
                if ($row['marks']>0) {
                      # code... 
                    ?>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                  <a href="#"><div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                    <div class="mdc--tile mdc--tile-warning rounded">
                      <i class="mdi mdi-account-star text-white icon-md"></i>
                    </div>
                    <div class="text-wrapper pl-1">
                      <h3 class="mdc-typography--display font-weight-bold mb-1">Exam Completed</h3>
                      
                    </div>
                  </div></a>
                </div>
                    <?php }else{
                      ?>
<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3">
                  <a href="exam.php"><div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                    <div class="mdc--tile mdc--tile-warning rounded">
                      <i class="mdi mdi-account-star text-white icon-md"></i>
                    </div>
                    <div class="text-wrapper pl-1">
                      <h3 class="mdc-typography--display font-weight-bold mb-1">POSP Exam</h3>
                      
                    </div>
                  </div></a>
                </div>
                      
                   <?php }?>
              </div>


            </div>
            
            
            
            
          </div>
        </div>

         <div class="mdc-layout-grid">
          <div class="mdc-layout-grid__inner">
            
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                 <a href="download_certificate.php"> <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                    <div class="mdc--tile mdc--tile-danger rounded">
                      <i class="mdi mdi-account-settings text-white icon-md"></i>
                    </div>
                    <div class="text-wrapper pl-1">
                      <h3 class="mdc-typography--display font-weight-bold mb-1">Download Certificate</h3>
                      
                    </div>
                  </div></a>
                </div>
                 <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4">
                 <a href="upload_doc.php"> <div class="mdc-card py-3 pl-2 d-flex flex-row align-item-center">
                    <div class="mdc--tile mdc--tile-danger rounded">
                      <i class="mdi mdi-account-settings text-white icon-md"></i>
                    </div>
                    <div class="text-wrapper pl-1">
                      <h3 class="mdc-typography--display font-weight-bold mb-1">Upload Documents</h3>
                      
                    </div>
                  </div></a>
                </div>
                
               

                

               
              </div>

              
            </div>
            
            
            
            
          </div>
        </div>
      </main>
      <?php include 'footer.php';?>