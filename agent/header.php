    <?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if (! empty($_SESSION['logged_in']) && ! empty($_SESSION['mail']))
{
  include_once("coon.php");
$id=$_SESSION['mail'];
$query = "SELECT * from agent_details where id='".$id."'"; 
$result = mysql_query($query) or die ( mysql_error());
$row = mysql_fetch_assoc($result);
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>First Advisor</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" type="text/css" href="mainstyle.css">
</head>

<body>
  <div class="body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <aside class="mdc-persistent-drawer mdc-persistent-drawer--open">
      <nav class="mdc-persistent-drawer__drawer">
        <div class="mdc-persistent-drawer__toolbar-spacer">
          <a href="index.html" class="brand-logo">
						<img src="images/logo.png"  style="width: 120px; margin: auto;" alt="logo">
					</a>
        </div>
        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="agent_dashboard.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">desktop_mac</i>
                Dashboard
              </a>
            </div>
            
            <div class="mdc-list-item mdc-drawer-item" href="#" data-toggle="expansionPanel" target-panel="ui-sub-menu">
              <a class="mdc-drawer-link" href="#">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Profile
                <i class="mdc-drawer-arrow material-icons">arrow_drop_down</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="update_agent_profile.php">
                      Update Profile info
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <!--//<a class="mdc-drawer-link" href="pages/ui-features/typography.html">
                      Change Password
                    </a>-->
                  </div>
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item" href="#" data-toggle="expansionPanel" target-panel="sample-page-submenu">
              <a class="mdc-drawer-link" href="#">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pages</i>
                POSP Training
                <i class="mdc-drawer-arrow material-icons">arrow_drop_down</i>
              </a>
              <div class="mdc-expansion-panel" id="sample-page-submenu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <?php 
                    if ($row['exam']==0) {
                      # code... 
                      ?>
                        <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="posp_training.php">
                     Start Training
                    </a>
                  </div>
                   <?php  }else{?>
                      <p >You've completed the training!<br><p style="color:red">Congratulation</p></p>
                     
                    

                    <?php }?>
                 
                </nav>
              </div>
            </div>
            <div class="mdc-list-item mdc-drawer-item" href="#" data-toggle="expansionPanel" target-panel="sample-page-submenuexam">
              <a class="mdc-drawer-link" href="#">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">pages</i>
                Examination
                <i class="mdc-drawer-arrow material-icons">arrow_drop_down</i>
              </a>
              <div class="mdc-expansion-panel" id="sample-page-submenuexam">
                <nav class="mdc-list mdc-drawer-submenu">
                 
                   <?php 
                    if ($row['exam']==1) {
                      # code... 
                      
                       if ($row['marks']>0) {
                        ?>
                       
                      <p >You Have Completed The Exam!<br><p style="color:red">Congratulation</p></p>
                    
                    

                   <?php  }
                            else{
                              ?>
                              <div class="mdc-list-item mdc-drawer-item">
                      <a class="mdc-drawer-link" href="exam.php">
                      <span style="
                      font-size: 12px;">Exam</span>
                    </a>
                    </div>
                           <?php }


                   }else{?>
                     <div class="mdc-list-item mdc-drawer-item">
                       <a class="mdc-drawer-link" href="#">
                      <span style="
                      font-size: 12px;">Available after 15 Hours Training</span>
                    </a>
                    </div>

                    <?php }?>

                    
                  
                </nav>
              </div>
            </div>
            <!--//<div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="pages/forms/basic-forms.html">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                Upload Document
              </a>
            </div>-->
            
            <div class="mdc-list-item mdc-drawer-item purchase-link">
              <a href="upload_doc.php" class="mdc-button mdc-button--raised mdc-button--dense mdc-drawer-link" data-mdc-auto-init="MDCRipple">
                Upload Documents
              </a>
            </div>
            <div class="mdc-list-item mdc-drawer-item purchase-link">
               <?php 
                    if ($row['exam']==1) {
                      # code... 
                      ?>
              <a href="download_certificate.php" class="mdc-button mdc-button--raised mdc-button--dense mdc-drawer-link" data-mdc-auto-init="MDCRipple">
                Download Certificate
              </a>
              <?php } else{
                  ?>
                 
                   <a href="#" class="mdc-button mdc-button--raised mdc-button--dense mdc-drawer-link" data-mdc-auto-init="MDCRipple">
               Download Certificate After Exam</p>
               
              </a>
                <?php }?>
                
            </div>
          </nav>
        </div>
      </nav>
    </aside>
    <!-- partial -->
    <!-- partial:partials/_navbar.html -->
    <header class="mdc-toolbar mdc-elevation--z4 mdc-toolbar--fixed">
      <div class="mdc-toolbar__row">
        <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
          <a href="#" class="menu-toggler material-icons mdc-toolbar__menu-icon">menu</a>
          <!--//<span class="mdc-toolbar__input">
            <div class="mdc-text-field">
              <input type="text" class="mdc-text-field__input" id="css-only-text-field-box" placeholder="Search anything...">
            </div>
          </span>-->
        </section>
        <section class="mdc-toolbar__section mdc-toolbar__section--align-end" role="toolbar">
          <div class="mdc-menu-anchor">
            
            
          </div>
          <!--//<div class="mdc-menu-anchor">
            <a href="#" class="mdc-toolbar__icon mdc-ripple-surface" data-mdc-auto-init="MDCRipple">
              <i class="material-icons">widgets</i>
            </a>
          </div>-->
          <div class="mdc-menu-anchor">
            <a href="#" class="mdc-toolbar__icon mdc-ripple-surface" data-mdc-auto-init="MDCRipple" style="color: #ffffff">
              <span><img width="60;"  src="upload/<?php echo $row['image']; ?>"></span>&nbsp; <span><?php

             echo $row['name'];


              ?></span>
            </a>
          </div>
          <div class="mdc-menu-anchor mr-1">
            <a href="#" class="mdc-toolbar__icon toggle mdc-ripple-surface" data-toggle="dropdown" toggle-dropdown="logout-menu" data-mdc-auto-init="MDCRipple">
              <i class="material-icons">more_vert</i>
            </a>
            <div class="mdc-simple-menu mdc-simple-menu--right" tabindex="-1" id="logout-menu">
                <ul class="mdc-simple-menu__items mdc-list" role="menu" aria-hidden="true">
                  <li class="mdc-list-item" role="menuitem" tabindex="0">
                    <i class="material-icons mdc-theme--primary mr-1">settings</i>
                    <a href="exam_result.php"> Result</a>
                  </li>
                  
                  <li class="mdc-list-item" role="menuitem" tabindex="0">
                    <i class="material-icons mdc-theme--primary mr-1">power_settings_new</i>
                    <a href="logout.php"> Logout</a>
                  </li>

                </ul>
            </div>
          </div>
        </section>
      </div>
    </header>
    <!-- partial -->
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
      <?php
}
else
{
  header("location:index.php");
    /*echo 'You are not logged in. <a href="index.php">Click here</a> to log in.';*/
}
?>