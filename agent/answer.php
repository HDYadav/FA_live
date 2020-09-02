
<form method="post">
Question:	<input type="text" required="" name="ques">

	<br><br>
Answer 1:	<input type="text" required="" name="ans1">
	<br><br>
Answer 2:	<input type="text" required="" name="ans2">
	<br><br>
Answer 3:	<input type="text" required="" name="ans3">
	<br><br>
Answer 4:	<input type="text" required="" name="ans4">
	<br><br>
Right Answer:	<input type="text" required="" name="right">
	<br><br>

	<input type="submit" name="submit">



</form>

<?php
include('coon.php');


if(isset($_POST['submit'])){

$ques=trim($_POST['ques']);
$ans1=trim($_POST['ans1']);
$ans2=trim($_POST['ans2']);
$ans3=trim($_POST['ans3']);
$ans4=trim($_POST['ans4']);
$right=trim($_POST['right']);


$chk=mysql_query("SELECT * FROM `questions` WHERE question='$ques'");
if (mysql_num_rows($chk)>0) {
	# code...
	$errormsg="Already Inserted";
	echo "<script type='text/javascript'>alert('$errormsg');</script>";
}
else{

$sql =mysql_query("INSERT INTO `questions`(`question`, `option1`, `option2`, `option3`, `option4`, `answer`, `status`) VALUES ('$ques',
	 '$ans1','$ans2','$ans3','$ans4','$right','0')");

if ($sql) 
{
  
      echo "<script language='javascript' type='text/javascript'>alert('Inserted Successfully')

  ; </script>";
        
}
else {
$errormsg="Wellcome";
      echo "<script type='text/javascript'>alert('$errormsg');</script>";
}


}


}
?>