<!-- <form action="#">
  Mobile number: <input type="text" name="mobile" pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{11}$" title="Enter Valid mobile number ex.9811111111" required>
  <input type="submit">
</form> -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Validation Test</title>
        <script type="text/javascript" language="javascript">
        
        var ValidChars = "012345678912";
        var phoneNumberDelimiters = "()-,.+ ";
        var IsNumber=true;
        var Char;       
        
        function trim(strPhone)
        {   var i;
            var returnString = "";
            // Search through string's characters one by one.
            // If character is not a whitespace, append to returnString.
            for (i = 0; i < strPhone.length; i++)
            {
                // Check that current character isn't whitespace.
                var c = strPhone.charAt(i);
                if (c != " ") returnString += c;
            }
            return returnString;
        }
        
        function stripCharsInBag(strPhone, phoneNumberDelimiters){
            var i;
            var returnString = "";
            // Search through string's characters one by one.
            // If character is not in phoneNumberDelimiters, append to returnString.
            for (i = 0; i < strPhone.length; i++)
            {
                // Check that current character isn't whitespace.
                var c = strPhone.charAt(i);
                if (phoneNumberDelimiters.indexOf(c) == -1) returnString += c;
            }
            return returnString;
        }
        
        function IsNumeric(strPhone){       
            for (i = 0; i < strPhone.length && IsNumber == true; i++)
            {
                Char = strPhone.charAt(i);
                if (strPhone == "0" || strPhone == "00" || strPhone == "000" || strPhone == "0000" || strPhone == "00000" || strPhone == "000000" || strPhone == "0000000" || strPhone == "00000000" || strPhone == "000000000" || strPhone == "0000000000" || strPhone == "00000000000" || strPhone == "000000000000" || strPhone == "0000000000000" || strPhone == "00000000000000" || strPhone == "000000000000000" || strPhone == "0000000000000000" ||  strPhone == "7777777777" ||  strPhone == "9999999999" ||  strPhone == "0225353" ||  strPhone == "4444444444" ||  strPhone == "55555555555" ||  strPhone == "456321"   ) return false;
                if (ValidChars.indexOf(Char) == -1)
                {
                    IsNumber = false;
                }
            }
            return IsNumber;        
        }
        
        function checkInternationalPhone(strPhone){     
            strPhone=trim(strPhone);
            strPhone=stripCharsInBag(strPhone, phoneNumberDelimiters);
            return (IsNumeric(strPhone));
        }
        
        function ValidatePhoneNumber(){
            var Phone=document.frmSample.txtPhone;
            
            if (checkInternationalPhone(Phone.value)==false){
                alert("Please Enter a Valid Phone Number");
                Phone.value="";
                Phone.focus();
                return false;
            }
            return true;
         }
        </script>
    </head> 
    <body>
        <form name="frmSample" method="post" action="#" onSubmit="return ValidatePhoneNumber()">
            <p>Enter a phone number :
                <input type="text" pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{11}$" title="Enter Valid mobile number ex.9811111111" name="txtPhone">
            </p>
            <p>
                <input type="submit" name="Submit"  required value="Submit">
            </p>
        </form>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js" type="text/javscript"></script>
    </body>
</html>