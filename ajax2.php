<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/

include('db.php');
$id=$_POST['id'];
if($id){

	if($id=="0"){
		echo "<option>Zero</option>";
		
		
		}else{
			
			
	$res=mysqli_query($con,"SELECT * FROM `states` WHERE id='".$id."'");

	$row=mysqli_fetch_assoc($res);
	$name=$row['name'];
	
			$sql = mysqli_query($con,"SELECT * FROM `pincodes` WHERE state_name='".$name."'");
			echo "<option value=''>Select pincode</option>";
			while($row = mysqli_fetch_assoc($sql)){
				$main_id=$row['id'];
				$mail_name=$row['name'];
				//echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';

				echo "<option value='".$mail_name."'>".$mail_name."</option>";
				}
			}
		}else{
			header("Location:../index.php");
		}
?>