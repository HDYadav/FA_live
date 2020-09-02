
<?php
$checkboxstatus = $_POST['checkboxstatus'];
$id = $_POST['val'];


$host = "corporate-website-db.cltatgui7bo5.ap-south-1.rds.amazonaws.com";
$user = "root_fai";
$password = "H0o1a8DD9";
$dbname = "firstadvisorsinsurance";

$cxn = mysqli_connect($host,$user,$password,$dbname);
if (mysqli_connect_errno()) {echo "No connection" . mysqli_connect_error();}

$query = " UPDATE agent_details
           SET status = '$checkboxstatus'
           WHERE id = '$id' ";
$result = mysqli_query($cxn, $query) or die ("could not query database 1");
$sql=mysqli_query($cxn, "SELECT * FROM agent_details WHERE id='$id'");

$row=mysqli_fetch_assoc($sql);
$pin=$row['pin'];
$reg=$row['reg_id'];
date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
$regid=date("y").date("m").date("d").substr($pin,0,-4).$id;

$rdate=date('Y-m-d');

if ($reg=="0") {
	# code...
	$uregid = " UPDATE agent_details SET reg_id = '$regid', reg_date = '$rdate'  WHERE id = '$id' ";

  $result_update = mysqli_query($cxn, $uregid) or die ("could not query database 1");

}

?>
