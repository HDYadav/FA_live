<!DOCTYPE html>

<html lang="en">
  <head>
    <title>FIRST ADVISOR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
     <link rel="icon" href="images/titleicon.png" type="image/icon type">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="mainstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
  </head>
  <body style="background-image: url('images/bg.jpg');">
  <!--//login modal-->

<!-- Modal -->
<div class="modal fade log-background" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     
      <div class="modal-body" style="background-image: linear-gradient(to right, #0094DF , #035197);">
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="head-tab m-auto  col-md-10">
        <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link link active text-light" id="pills-User-tab" data-toggle="pill" href="#pills-User" role="tab" aria-controls="pills-User" aria-selected="true">User Login</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link link text-light" id="pills-POSP-tab" data-toggle="pill" href="#pills-POSP" role="tab" aria-controls="pills-POSP" aria-selected="false">POSP Login</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link link text-light" id="pills-Corporate-tab" data-toggle="pill" href="#pills-Corporate" role="tab" aria-controls="pills-Corporate" aria-selected="false">Sub Admin</a>
  </li>
    <li class="nav-item" role="presentation">
    <a class="nav-link link text-light" id="pills-super-tab" data-toggle="pill" href="#pills-super" role="tab" aria-controls="pills-super" aria-selected="false">Super Admin</a>
  </li>
</ul>
</div>
<div class="tab-content mt-5" id="pills-tabContent">
  <div class="tab-pane fade show active"  id="pills-User" role="tabpanel" aria-labelledby="pills-User-tab">
     <div class="col-md-6 m-auto">
              <div class="login-box shadow bg-light text-center p-3">
                 <div class="login-img">
                 <span><i class="icon-user"></i></span>
                 </div>
                  <h4>User Login</h4>
                 <form>
                   <div class="form-group">
                     <input type="text" class="form-control" name="Email" placeholder="Enter Your E-mail">
                     
                   </div>

                    <div class="form-group">
                     <input type="password" class="form-control" name="Email" placeholder="Password">
                     <small id="forgetpassword" class="form-text text-muted text-left"><a href="#">Forgot Password</a></small>
                   </div>
                   <div class="form-group">
                     <input type="submit" class="form-control btn btn-danger" name="login" value="Login">
                     <small id="forgetpassword" class="form-text text-muted text-right"><a href="userregister.php">If you don't have account register Now</a></small>
        
                   </div>
                 </form>

              </div>
           </div>
  </div>
  <div class="tab-pane fade" id="pills-POSP" role="tabpanel" aria-labelledby="pills-POSP-tab">
     <div class="col-md-6 m-auto">
              <div class="login-box shadow bg-light text-center p-3">
                 <div class="login-img">
                 <span><i class="icon-user"></i></span>
                 </div>
                  <h4>POSP Login</h4>
                 <form method="post" enctype="multipart/form-data" autocomplete="off">
                   <div class="form-group">
                     <input type="email" class="form-control" name="email" placeholder="Enter Your E-mail" required="">
                     
                   </div>

                    <div class="form-group">
                     <input type="password" class="form-control" name="password" placeholder="Password" required="">
                     <small id="forgetpassword" class="form-text text-muted text-left"><a href="#">Forgot Password</a></small>
                   </div>
                   <div class="form-group">
                     <input type="submit" class="form-control btn btn-danger" name="submit" value="Login">
                     <small id="forgetpassword" class="form-text text-muted text-right"><a href="agentregister.php">If you don't have account register Now</a></small>
        
                   </div>
   <?php             
include_once('coon.php');
?> 
<?php             




if(isset($_POST['submit'])){

$eeusername=$_POST['email'];
$eepass=$_POST['password'];



$id="1";
$querys = "SELECT * from agent_details where  email='".$eeusername."' and status='".$id."'"; 
$results = mysql_query($querys) or die ( mysql_error());
$rows = mysql_fetch_assoc($results);
echo $pa=$rows['password'];
      if($rows['password']==$eepass){

$idd=$rows['id'];
//change 'valid_username' and 'valid_password' to your desired "correct" username and password
session_start();

  $_SESSION['logged_in'] = true;
  $_SESSION['mail'] = $idd;

    echo "<script language='javascript' type='text/javascript'>alert('Logged In Successfully')
  location.href='agent/agent_dashboard.php' </script>";
  /*header("Location:agent/agent_dashboard.php");*/

//header("Cache-Control: no cache");



 
  } 

else{

echo "<script language='javascript' type='text/javascript'>alert('Username And Password Not Match')
  </script>";
  header("Cache-Control: no cache");

session_cache_limiter("private_no_expire");
}

}
?>
</form>

              </div>
           </div>

  </div>
   <div class="tab-pane fade" id="pills-Corporate" role="tabpanel" aria-labelledby="pills-Corporate-tab">
    <div class="col-md-6 m-auto">
              <div class="login-box shadow bg-light text-center p-3">
                 <div class="login-img">
                 <span><i class="icon-user"></i></span>
                 </div>
                  <h4>Sub Admin</h4>
                 <form>
                   <div class="form-group">
                     <input type="text" class="form-control" name="Email" placeholder="Enter Your E-mail">
                     
                   </div>

                    <div class="form-group">
                     <input type="password" class="form-control" name="Email" placeholder="Password">
                     <small id="forgetpassword" class="form-text text-muted text-left"><a href="#">Forgot Password</a></small>
                   </div>
                   <div class="form-group">
                     <input type="submit" class="form-control btn btn-danger" name="login" value="Login">
                     
        
                   </div>
                 </form>

              </div>
           </div>
  </div>
  <div class="tab-pane fade" id="pills-super" role="tabpanel" aria-labelledby="pills-super-tab">
    <div class="col-md-6 m-auto">
              <div class="login-box shadow bg-light text-center p-3">
                 <div class="login-img">
                 <span><i class="icon-user"></i></span>
                 </div>
                  <h4>Super Admin</h4>
                 <form method="post" enctype="multipart/form-data" autocomplete="off">
                   <div class="form-group">
                     <input type="text" class="form-control" name="super_uname" placeholder="Enter Your E-mail">
                     
                   </div>

                    <div class="form-group">
                     <input type="password" class="form-control" name="super_pass" placeholder="Password">
                     <small id="forgetpassword" class="form-text text-muted text-left"><a href="#">Forgot Password</a></small>
                   </div>
                   <div class="form-group">
                     <input type="submit" class="form-control btn btn-danger" name="submit_super" value="Login">
                     
        
                   </div>
                 </form>

              </div>
           </div>
  </div>
</div>
      </div>
      <?php             




if(isset($_POST['submit_super'])){

$eusername=$_POST['super_uname'];
$epass=$_POST['super_pass'];



$id="0";
$query = "SELECT * from super_admin where  username='".$eusername."' and status='".$id."'"; 
$result = mysql_query($query) or die ( mysql_error());
$row = mysql_fetch_assoc($result);
echo $pa=$row['password'];
      if($row['password']==$epass){

$idd=$row['id'];
//change 'valid_username' and 'valid_password' to your desired "correct" username and password
session_start();

  $_SESSION['logged_in'] = true;
  //$_SESSION['mail'] = $idd;

    echo "<script language='javascript' type='text/javascript'>alert('Logged In Successfully')
  location.href='corporate/detatable.php?id=$idd' </script>";
  /*header("Location:agent/agent_dashboard.php");*/

//header("Cache-Control: no cache");



 
  } 

else{

echo "<script language='javascript' type='text/javascript'>alert('Username And Password Not Match')
  </script>";
  header("Cache-Control: no cache");

session_cache_limiter("private_no_expire");
}

}
?>
      
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
     
    </div>
  </div>
</div>
<!--/end login modal -->







  <div class="site-wrap">
    <div class="site-mobile-menu" style="background-color: #87CEEB;">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar" style="background-color: #87CEEB;">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="row align-items-center" style="background-color: #87CEEB;">
            <div class="col-2">
            <a href="index.php"><img style="width: 220px;" src="images/shadow_logo.png"></a>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation" style="font-weight: bold; font-family: arial; color: #ffffff;">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li class="active"><a href="index.php">Home</a></li>
                     <li class="has-children">
                      <a style="color: #00529C;">About</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="overreview.php">Overview</a></li>
                        <li><a href="weare.php">Who We are</a></li>
                        <li><a href="missionvission.php">Mission / Vission</a></li>
                        <li><a href="corevalue.php">Core Value</a></li>
                        
                        <li><a href="insurancebroker.php">Roll of an insurance broker</a></li>
                        
                      </ul>
                    </li>

                     <li class="has-children">
                      <a  style="color: #00529C;">Services</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="generalinsurance.php">General Insurance</a></li>
                        <li><a href="lifeinsurance.php">Life Insurance</a></li>
                        <li><a href="healthinsurance.php">Health Insurance</a></li>
                        
                      </ul>
                    </li>
                    
                   
                    <li><a href="career.php" style="color: #00529C;">Career</a></li>
                    <li><a href="contact.php" style="color: #00529C;">Contact</a></li>
                     <li><a data-toggle="modal" data-target="#loginmodal" style="color: #00529C;">Login</a></li>
                    <li><a data-toggle="modal" data-target="#quotenmodal"><span class="d-inline-block p-3  text-white btn " style="background-color: #00529C;">Get a quote</span></a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    