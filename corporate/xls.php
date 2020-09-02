
<?php

$date=$_REQUEST['date'];
$dquery=$_REQUEST['query'];


   $dateArr = split ("-", $date); 
   if(count($dateArr)==2 )
   {
    $fDate=$dateArr[0];
    $tDate=$dateArr[1];
   }
$fDate=$dateArr[0];
 $from = date("Y-m-d", strtotime($fDate));

   $tDate=$dateArr[1];
$to = date("Y-m-d", strtotime($tDate));

/*******EDIT LINES 3-8*******/

$DB_Server = "corporate-website-db.cltatgui7bo5.ap-south-1.rds.amazonaws.com"; //MySQL Server    
$DB_Username = "root_fai"; //MySQL Username     
$DB_Password = "H0o1a8DD9";             //MySQL Password     
$DB_DBName = "firstadvisorsinsurance";         //MySQL Database Name  
$DB_TBLName = "agent_details"; //MySQL Table Name   
$filename = "export";         //File Name
/*******YOU DO NOT NEED TO EDIT ANYTHING BELOW THIS LINE*******/    
//create MySQL connection   
if ($dquery=="1") {
  # code...
  $sql = "SELECT name AS Name,address AS Address,gender AS Gender, mobile_no AS MobileNumber,pan_no AS PanNO,aadhar_no AS AadharNo,reg_date AS RegistrationDate FROM $DB_TBLName WHERE  status='1' AND reg_date BETWEEN '$from' AND '$to' ";
}elseif($dquery=="2") {
  # code...
  $sql = "SELECT name AS Name,address AS Address,gender AS Gender, mobile_no AS MobileNumber,pan_no AS PanNO,aadhar_no AS AadharNo,reg_date AS RegistrationDate FROM $DB_TBLName WHERE  exam='1' AND reg_date BETWEEN '$from' AND '$to' ";
}elseif ($dquery=="3") {
  # code...
  $sql = "SELECT name AS Name,address AS Address,gender AS Gender, mobile_no AS MobileNumber,pan_no AS PanNO,aadhar_no AS AadharNo,reg_date AS RegistrationDate FROM $DB_TBLName WHERE  que_no='51' AND reg_date BETWEEN '$from' AND '$to' ";
}elseif ($dquery=="4") {
  # code...
  $sql = "SELECT name AS Name,address AS Address,gender AS Gender, mobile_no AS MobileNumber,pan_no AS PanNO,aadhar_no AS AadharNo,reg_date AS RegistrationDate FROM $DB_TBLName WHERE  marks > '24'
 AND reg_date BETWEEN '$from' AND '$to' ORDER BY id ASC";
}elseif ($dquery=="5") {
  # code...
  $sql = "SELECT name AS Name,address AS Address,gender AS Gender, mobile_no AS MobileNumber,pan_no AS PanNO,aadhar_no AS AadharNo,reg_date AS RegistrationDate FROM $DB_TBLName WHERE  marks < '25'
 AND exam='1' AND reg_date BETWEEN '$from' AND '$to' ORDER BY id ASC";
}elseif ($dquery=="6") {
  # code...
  $sql = "SELECT name AS Name,address AS Address,gender AS Gender, mobile_no AS MobileNumber,pan_no AS PanNO,aadhar_no AS AadharNo,reg_date AS RegistrationDate FROM $DB_TBLName WHERE  id_no != '0' AND heq_imag != '0' AND pan_image !='0' AND adds_image !='0' AND bank_image !='0' AND marks > '24' AND reg_date BETWEEN '$from' AND '$to' ";
}elseif ($dquery=="7") {
  # code...
  $sql = "SELECT name AS Name,address AS Address,gender AS Gender, mobile_no AS MobileNumber,pan_no AS PanNO,aadhar_no AS AadharNo,reg_date AS RegistrationDate FROM $DB_TBLName WHERE  exam='0' AND que_no = '1' AND reg_date BETWEEN '$from' AND '$to' ";
}else{
  echo "error on range";
}






$Connect = @mysql_connect($DB_Server, $DB_Username, $DB_Password) or die("Couldn't connect to MySQL:<br>" . mysql_error() . "<br>" . mysql_errno());
//select database   
$Db = @mysql_select_db($DB_DBName, $Connect) or die("Couldn't select database:<br>" . mysql_error(). "<br>" . mysql_errno());   
//execute query 
$result = @mysql_query($sql,$Connect) or die("Couldn't execute query:<br>" . mysql_error(). "<br>" . mysql_errno());    
$file_ending = "xls";
//header info for browser
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
/*header("Content-Type: application/xls"); */   
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");
/*******Start of Formatting for Excel*******/   
//define separator (defines columns in excel & tabs in word)
$sep = "\t"; //tabbed character
//start of printing column names as names of MySQL fields
for ($i = 0; $i < mysql_num_fields($result); $i++) {
echo mysql_field_name($result,$i) . "\t";
}
print("\n");    
//end of printing column names  
//start while loop to get data
    while($row = mysql_fetch_row($result))
    {
        $schema_insert = "";
        for($j=0; $j<mysql_num_fields($result);$j++)
        {
            if(!isset($row[$j]))
                $schema_insert .= "NULL".$sep;
            elseif ($row[$j] != "")
                $schema_insert .= "$row[$j]".$sep;
            else
                $schema_insert .= "".$sep;
        }
        $schema_insert = str_replace($sep."$", "", $schema_insert);
        $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
        $schema_insert .= "\t";
        print(trim($schema_insert));
        print "\n";
    }  
 /*header('Refresh: 1; URL=detatable.php');*/

/*header("location:detatable.php");*/

?>

