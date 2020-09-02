
<?php
echo $checkboxstatus = $_POST['checkboxstatus'];
echo $id = $_POST['val'];

$host = "35.209.178.169";
$user = "firstadvisorsinsurance2020";
$password = "KvP6TTbvMIEcqucV4Khf";
$dbname = "firstadvisorsinsurance";

$cxn = mysqli_connect($host,$user,$password,$dbname);
if (mysqli_connect_errno()) {echo "No connection" . mysqli_connect_error();}

$query = " UPDATE agent_details
           SET status = '$checkboxstatus'
           WHERE id = '$id' ";
$result = mysqli_query($cxn, $query) or die ("could not query database 1");
?>