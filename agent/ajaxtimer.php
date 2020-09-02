<?php 

include_once('coon.php');
require_once('session.php');
$timerh = $_POST['hr'];
$timerm = $_POST['min'];
$timers = $_POST['sec'];




$sql = "update agent_details set timer_h='$timerh', timer_m='$timerm', timer_s='$timers' where id = '$id'";

// echo $sql;
// die();

if(mysql_query($sql))
{
    echo 'saved';
}
else{
    echo'data error';
}

mysql_close();

?>