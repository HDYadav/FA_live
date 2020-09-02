<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL ^ E_DEPRECATED);
$servername="corporate-website-db.cltatgui7bo5.ap-south-1.rds.amazonaws.com";
$username="root_fai";
$password="H0o1a8DD9";
$dbname="firstadvisorsinsurance";
$db=mysql_connect($servername,$username,$password);
//mysql_set_charset('utf8',$db);
//if($db) {
	$database=mysql_select_db("firstadvisorsinsurance",$db);
//}
//else {
//	die(mysql_error());
//}
?>
