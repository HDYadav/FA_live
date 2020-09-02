    <?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if (! empty($_SESSION['logged_in']))
{
  include_once("coon.php");
$id="1";
$query = "SELECT * from super_admin where id='".$id."'"; 
$result = mysql_query($query) or die ( mysql_error());
$row = mysql_fetch_assoc($result);
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
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <link rel="stylesheet" type="text/css" href="mainstyle.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
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
              <a class="mdc-drawer-link" href="detatable.php">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">desktop_mac</i>
                POSP list
              </a>
            </div>
            
            <div class="mdc-list-item mdc-drawer-item" href="#" data-toggle="expansionPanel" target-panel="ui-sub-menu">
              <a class="mdc-drawer-link" href="#">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                Update Website
                <i class="mdc-drawer-arrow material-icons">arrow_drop_down</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-sub-menu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="terms_condition.php">
                      Terms & Condition
                    </a>
                  </div>
                  
                   <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="privacy_policy.php">
                      Privacy policy
                    </a>
                  </div>
                  
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="mission_vision.php">
                     Mission & Vision
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
            
           
            <!--//<div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="pages/forms/basic-forms.html">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
                Upload Document
              </a>
            </div>-->
            
           
          
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
                    <a href="update_agent_profile.php">Settings</a> 
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