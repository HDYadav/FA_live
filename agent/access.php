<?php
include_once('coon.php');
$idd=$_REQUEST['id'];

session_start();

  $_SESSION['logged_in'] = true;
  $_SESSION['mail'] = $idd;

  if (!isset($_SESSION)) {
  	# code...
  	echo "<script language='javascript' type='text/javascript'>alert('Login Again')
  </script>";
  	
  }else{

  header("Location: agent_dashboard.php");
  }

 ?>