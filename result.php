<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/
?>
<html>
<head>
<title>Dynamic Dependent Select Box using jQuery and Ajax</title>
</head>
<body>
<div>
<label>State :</label><select name="state" class="state">
<option value="0">Select Country</option>
<?php
include('db.php');
$sql = mysqli_query($con,"select * from states");
while($row=mysqli_fetch_array($sql))
{
echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
} ?>
</select><br/><br/>
<label>City :</label><select name="city" class="city">
<option>Select City</option>
</select>


<br /><br />

<label>Pincode :</label><select name="pincode" class="pincode">
<option>Select Pincode</option>
</select>


<br /><br />
<a href="https://www.allphptricks.com/dynamic-dependent-select-box-using-jquery-and-ajax/">Tutorial Link</a> <br /><br />
For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/">AllPHPTricks.com</a>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$(".state").change(function()
{
var state_id=$(this).val();
var post_id = 'id='+ state_id;

$.ajax
({
type: "POST",
url: "ajax.php",
data: post_id,
cache: false,
success: function(cities)
{
$(".city").html(cities);
} 
});

});
});
</script>

<script type="text/javascript">
$(document).ready(function()
{
$(".state").change(function()
{
var state_id=$(this).val();
var post_id = 'id='+ state_id;

$.ajax
({
type: "POST",
url: "ajax2.php",
data: post_id,
cache: false,
success: function(pincodes)
{
$(".pincode").html(pincodes);
} 
});

});
});
</script>
</body>
</html>