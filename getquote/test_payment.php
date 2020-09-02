<?php 
$id=$_REQUEST['proposalNum'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <title></title>

    <script language="javascript" type="text/javascript">
        function submitHealthForm() {
          
     document.PAYMENTFORM.submit();

        }        
         
    </script>
</head>
<body>
    <form action='https://faveouat.religarehealthinsurance.com/portalui/PortalPayment.run' name='PAYMENTFORM' method='post'>
    <div>
    <input type='hidden' name='proposalNum' value='<?PHP echo $id; ?>'/>
	<input type='hidden' name='returnURL' value='http://www.nexttechsoftsolution.com/'/>	
	</div>
  	<script language='javascript' type="text/javascript">      
	submitHealthForm();</script>
    </form>
</body>
</html>
