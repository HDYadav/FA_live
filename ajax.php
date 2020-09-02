<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/

include('db.php');
if($_POST['id']){
	$id=$_POST['id'];
	if($id==0){
		echo "<option>Select City</option>";
		}else{
			 
			$sql = mysqli_query($con,"SELECT * FROM `city` WHERE state_id='$id'");
			echo "<option value=''>Select City</option>";
			while($row = mysqli_fetch_array($sql)){
				
				echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
				}
			}
		}
?>