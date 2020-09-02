<?php
include_once("coon.php");
if (!empty($_REQUEST['id'])) {


	$id=$_REQUEST['id'];
	

$sql=mysql_query("UPDATE `agent_details` SET `exam`='1', `timer_h`='15', `timer_m`='00', `timer_s`='00' WHERE id='".$id."'"); 
if ($sql) {
	# code...
	date_default_timezone_set('Asia/Kolkata');
$timestamp = date("Y-m-d H:i:s");
	mysql_query("UPDATE `agent_details` SET  `training_date`='$timestamp' WHERE id='".$id."'");
echo "<script language='javascript' type='text/javascript'>alert('You can now give the exam')
  location.href='agent_dashboard.php' </script>";
}
else{
	echo "not ok";
}
}else{
	echo "error";
}


?>
