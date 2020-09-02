

<html>
<head>
</head>
<body>

<?php
if (isset($_POST['confirm'])) {
    if ($_POST['confirm'] == 'Yes') {
        header("Location:edit.php?id=1");
    }
    else if ($_POST['confirm'] == 'No') {
        header("goBack.php");
    } 
}
?>

<form method="post">
<?php
if(isset($_REQUEST['id']))
{
?>
<input type="submit" name="confirm" value="Yes"><br/>
<input type="submit" name="confirm" value="No"><br/>
<?php
}
?>
</form>
</body>
</html>