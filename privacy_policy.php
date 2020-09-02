<?php include 'header.php';?>
 <div class="site-blocks-cover inner-page overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade">
          <h1 class="text-uppercase">Privacy & Policy</h1>
          <span class="caption d-block text-white">An Insurance Company</span>
        </div>
      </div>
    </div> 
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            
          </div>
        </div>
        <div class="mission-area">
         

<?php 
$query=mysql_query("SELECT * FROM cms WHERE id='1'");
$tc=mysql_fetch_assoc($query);
echo $tc['p&p'];

 ?>
        </div>
      </div>
    </div>

<?php include 'footer.php';?>