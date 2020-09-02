<?php

session_start();
if ($_SESSION["mail"]=="") 
{
	header("location:../../index.php");
}
else
{
	$id = $_SESSION["mail"];
	include_once("coon.php");
	
	

	//if ((time() - $_SESSION["last_login_timestamp"]) > 900) // 15 * 60
	//{
	//	header("location:logout.php");
	//}
	$query = mysql_query("select * from agent_details where id ='$id'");
	$row = mysql_fetch_array($query);
	

	

	
}

?>