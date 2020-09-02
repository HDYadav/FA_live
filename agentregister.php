 <?php include 'header.php';?>
 <head>
 <script src="typeahead.min.js"></script>
    
    <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'search.php?key=%QUERY',
        limit : 10
    });
});
    </script>
     <style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance:textfield;
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}
  .autocomplete-items {
  position: absolute;
  border: 1px solid pink;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
  width: 100%;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>
  </head>
<div class="site-section">
      <div class="container">
         <div class="row">
           <div class="col-md-10 m-auto">
              <div class="login-box shadow  p-3">
                  <h4>POSP Register</h4>
                 <form method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                      <label class="control-label"><span>*</span>Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Name" required="">
                    </div>
                    <div class="form-group">
                      <label class="control-label"><span>*</span>Address</label>
                      <textarea name="adds" class="form-control" placeholder="Address" rows="2" required=""></textarea>
                    </div>
                   <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-3 pt-0"><span>*</span> Gender</legend>
      <div class="col-sm-4">
        <div class="form-check">
          <input class="form-check-input" type="radio"  id="gridRadios1" name="gen" value="male" checked>
         
          <label class="form-check-label" for="gridRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio"  id="gridRadios2" name="gen" value="female">
          <label class="form-check-label" for="gridRadios2">
            Female
          </label>
        </div>
        
      </div>
    </div>
  </fieldset>

                   <div class="form-row">
                   <div class="form-group col-md-6">
                      <label class="control-label"><span>*</span>State</label>
                       
<select name="state" id="state" class=" form-control">
<option value="">Select State</option>
<?php

$sql = mysql_query("select * from states order by name asc");
while($row=mysql_fetch_array($sql))
{
	
echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
} ?>
</select>
                    </div>

                          <div class="form-group col-md-6">
                      <label class="control-label"><span>*</span>City</label>
                    
  <!-- <select name="city" id="city" class="form-control">
<option>Select City</option>
</select> -->
<input type="text" class="form-control" name="city" placeholder=" City" required="">
                


                    </div>
                  </div>
                    <div class="form-row">
                   <div class="form-group col-md-6">
                      <label class="control-label"><span>*</span>DOB</label>
                      <input type="date" class="form-control" name="dob" placeholder="00/00/00" min="1950-01-01" max="2002-12-31" required="">
                      <!--<input class="date" name="dob" min="1950-01-01" max="2002-12-31"  type="date"   required="">-->
                    </div>
                    <div class="form-group col-md-6">
                      <label class="control-label"><span>*</span>Pin Code</label>
<!-- <select name="pincode" id="pincode" class="form-control">
<option>Select Pincode</option>
</select> -->
<input type="number" maxlength="6" class="form-control" name="pincode" placeholder=" pincode" required="">

                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="control-label"><span>*</span>Aadhar No</label>
                      <input type="text" pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[123456789]\d{11}$" title="12 digit and should be start with 7,8,9 like '8965-1258-0128'" maxlength="12"  class="form-control" name="aadharno" placeholder="Aadhar No" required="">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="control-label"><span>*</span>Pan No</label>
                      <input type="text" pattern="[a-zA-Z]{5}[0-9]{4}[a-zA-Z]{1}" title="Please enter valid PAN number. E.g. AAAAA9999A" class="form-control" name="pan" placeholder="Pan No" maxlength="10" required="">
                    </div>
                  </div>
                   <div class="form-group">
                      <label class="control-label"><span>*</span>E-mail Id</label>
                      <input type="email" class="form-control" name="aemail" placeholder="Enter Your E-mail" required="">
                    </div>
                    <div class="form-row">
                   <div class="form-group col-md-6">
                      <label class="control-label"><span>*</span>Mobile</label>
                     <!-- <input type="text" class="form-control" name="mobile" placeholder="Enter Your Mobile" required="">-->
                              <input style="width: 100%"  oninput="this.className = ''" class="form-control" type="text" maxlength="10" pattern="[6789][0-9]{9}" id="phn" name="phn" required="" placeholder="Type your valid phone number"><br><span  style="color: red;font-size: 15px" id="errmsg" >


                    </div>
                    <script>
  $(document).ready(function () {
  //called when key is pressed in textbox
  $("#phn").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only Starting from 6 to 9 and should be 10 digit").show().fadeOut(6000);
               return false;
    }
   });
});
</script>
                    <!-- <div class="form-group col-md-4">
                      <label class="control-label">&nbsp;</label>
                      <input type="button" class="form-control btn btn-danger" value="Send OTP" name="otp">
                    </div> -->
                  </div>

                   <div class="form-group">
                      <label class="control-label"><span>*</span>Password</label>
                      <!-- <input type="password" class="form-control" name="pwd" placeholder="Enter Your Password" required=""> -->
                      <input name="password" class="form-control" id="password" type="password" placeholder="Enter Your Password" required="" />
                    </div>
                    <div class="form-group">
                      <label class="control-label"><span>*</span>Confirm Password</label>
                      <!-- <input type="password" class="form-control" name="confirmpwd" placeholder="Enter Your Password" required=""> -->
                      <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Enter Your Password" required=""/>
                     <div id='message'></div>
                    </div>
                    <div class="form-group">
                      <center>
                      <button class="btn-danger btn btn-lg w-50" type="submit"  name="register" >Register</button>
                    </center>
                    </div>
                 </form>

              </div>
           </div>
           
<?php
include_once('coon.php');

$file="";


if(isset($_POST['register'])){

$ename=$_POST['name'];
$eadds=$_POST['adds'];
$egen=$_POST['gen'];
$eadds=$_POST['adds'];
$estate=$_POST['state'];
$ecity=$_POST['city'];
$edob=$_POST['dob'];
$epin=$_POST['pincode'];
$eaadhar=$_POST['aadharno'];
$epan=$_POST['pan'];
$eemail=$_POST['aemail'];
$emobile=$_POST['phn'];
$eadds=$_POST['adds'];
$epwd=$_POST['password'];
$ecpwd=$_POST['confirm_password'];

$ck=mysql_query("SELECT * FROM `agent_details` WHERE email='$eemail'");
if (mysql_num_rows($ck)>0) {
   # code...
   echo "<script language='javascript' type='text/javascript'> alert('Email Already Register') 
    </script>";
 } 
 else{

if ($epwd==$ecpwd) {
  # code...
$sname=mysql_query("SELECT * FROM states WHERE id='$estate'");
  $statename=mysql_fetch_assoc($sname);
  $statesname=$statename['name'];

/*  $cname=mysql_query("SELECT * FROM city WHERE id='$ecity'");
  $cityname=mysql_fetch_assoc($cname);
  $citysname=$cityname['name'];*/

$tdate=date("y");



  $sql=mysql_query("INSERT INTO `agent_details`(`name`, `address`, `gender`, `state`, `city`, `dob`, `pin`, `aadhar_no`, `pan_no`, `email`, `mobile_no`, `password`, `status`) VALUES ('$ename','$eadds','$egen','$statesname','$ecity','$edob','$epin','$eaadhar','$epan','$eemail','$emobile','$epwd','0')");
 

if ($egen=="male") {
	# code...
	$agender="Mr.";
}else{
	$agender="Ms.";
}

    //$to_email = "contact@nexttechsoftsolution.com";
   /* $to_email ="arup.ntss@gmail.com";
    $from_email = $_POST['aemail'];
    $subject = "Congratulation From First Advisors Insurance";
  
    $body =$ename . " " . $ename . " wrote the following:" . "\n\n" . $_POST['aadharno']. "\n\n" ."Address:".$_POST['aadharno']. "\n\n" .
    "Pincode:".$_POST['aadharno']. "\n\n" ."Phone No:".$_POST['aadharno']. "\n\n" ."Brand:".$_POST['aadharno']. "\n\n" ."Catagory:".$_POST['aadharno']. "\n\n" ."Sub-Catagory:".$_POST['aadharno']. "\n\n" ."Issue:".$_POST['aadharno'];
    $message2 = "Here is a copy of your message " . $ename . "\n\n" . $_POST['aadharno'];
    $headers = $_POST["aemail"];*/
    /*if ( ) {
      echo("Email successfully sent to $to_email...");
    } else {
      echo("Email sending failed...");
    }*/
    /*if ( ) {
      echo("Email successfully sent to $to_email...");
    } else {
      echo("Email sending failed...");
    }*/
 /* mail($to_email, $subject, $body, $headers)*/






if($sql)  
{
	 
echo "<script language='javascript' type='text/javascript'>alert('Thanks For Register')
  location.href='index.php' </script>";
   }
   else{
    echo "<script language='javascript' type='text/javascript'> alert('Error') 
    </script>";
   }

}
else{


    echo "<script language='javascript' type='text/javascript'> alert('confirm your password') 
    </script>"; 
    }
    } 

}
?>
<div class="modal fade" id="alertmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login Successful</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="alertmodal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login Error</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

         </div>
        
      </div>
   </div>
    <script src="js/main.js"></script>
  <script src="js/mainnew.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$("#state").change(function()
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
$("#city").html(cities);
} 
});

});
});
</script>

<script type="text/javascript">
$(document).ready(function()
{
$("#state").change(function()
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
$("#pincode").html(pincodes);
} 
});

});
});
</script>
    <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = [
    "Andaman and Nicobar Islands","Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chandigarh",
    "Chhattisgarh","Dadra and Nagar Haveli","Daman and Diu","Delhi","Goa","Gujarat","Haryana","Himachal Pradesh","Jammu and Kashmir",
    "Jharkhand","Karnataka","Kerala","Ladakh","Lakshadweep","Madhya Pradesh","Maharashtra","Manipur","Meghal","Mizoram","Nagaland",
    "Odisha","Puducherry","Punjab","Rajasthan","Sikkim","Tamil Nadu","Telangana","Tripura","Uttar Pradesh","Uttarakhand","West Bengal"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>
<script>
  $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
  </script>
  <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var city = [
  "Achalpur",
  "Achhnera",
  "Adalaj",
  "Adilabad",
  "Adityapur",
  "Adoni",
  "Adoor",
  "Adra",
  "Adyar",
  "Afzalpur",
  "Agartala",
  "Agra",
  "Ahmedabad",
  "Ahmednagar",
  "Aizawl",
  "Ajmer",
  "Akola",
  "Akot",
  "Alappuzha",
  "Aligarh",
  "AlipurdUrban Agglomerationr",
  "Alirajpur",
  "Allahabad",
  "Alwar",
  "Amalapuram",
  "Amalner",
  "Ambejogai",
  "Ambikapur",
  "Amravati",
  "Amreli",
  "Amritsar",
  "Amroha",
  "Anakapalle",
  "Anand",
  "Anantapur",
  "Anantnag",
  "Anjangaon",
  "Anjar",
  "Ankleshwar",
  "Arakkonam",
  "Arambagh",
  "Araria",
  "Arrah",
  "Arsikere",
  "Aruppukkottai",
  "Arvi",
  "Arwal",
  "Asansol",
  "Asarganj",
  "Ashok Nagar",
  "Athni",
  "Attingal",
  "Aurangabad",
  "Aurangabad",
  "Azamgarh",
  "Bagaha",
  "Bageshwar",
  "Bahadurgarh",
  "Baharampur",
  "Bahraich",
  "Balaghat",
  "Balangir",
  "Baleshwar Town",
  "Ballari",
  "Balurghat",
  "Bankura",
  "Bapatla",
  "Baramula",
  "Barbil",
  "Bargarh",
  "Barh",
  "Baripada Town",
  "Barmer",
  "Barnala",
  "Barpeta",
  "Batala",
  "Bathinda",
  "Begusarai",
  "Belagavi",
  "Bellampalle",
  "Belonia",
  "Bengaluru",
  "Bettiah",
  "BhabUrban Agglomeration",
  "Bhadrachalam",
  "Bhadrak",
  "Bhagalpur",
  "Bhainsa",
  "Bharatpur",
  "Bharuch",
  "Bhatapara",
  "Bhavnagar",
  "Bhawanipatna",
  "Bheemunipatnam",
  "Bhilai Nagar",
  "Bhilwara",
  "Bhimavaram",
  "Bhiwandi",
  "Bhiwani",
  "Bhongir",
  "Bhopal",
  "Bhubaneswar",
  "Bhuj",
  "Bikaner",
  "Bilaspur",
  "Bobbili",
  "Bodhan",
  "Bokaro Steel City",
  "Bongaigaon City",
  "Brahmapur",
  "Buxar",
  "Byasanagar",
  "Chaibasa",
  "Chalakudy",
  "Chandausi",
  "Chandigarh",
  "Changanassery",
  "Charkhi Dadri",
  "Chatra",
  "Chennai",
  "Cherthala",
  "Chhapra",
  "Chhapra",
  "Chikkamagaluru",
  "Chilakaluripet",
  "Chirala",
  "Chirkunda",
  "Chirmiri",
  "Chittoor",
  "Chittur-Thathamangalam",
  "Coimbatore",
  "Cuttack",
  "Dalli-Rajhara",
  "Darbhanga",
  "Darjiling",
  "Davanagere",
  "Deesa",
  "Dehradun",
  "Dehri-on-Sone",
  "Delhi",
  "Deoghar",
  "Dhamtari",
  "Dhanbad",
  "Dharmanagar",
  "Dharmavaram",
  "Dhenkanal",
  "Dhoraji",
  "Dhubri",
  "Dhule",
  "Dhuri",
  "Dibrugarh",
  "Dimapur",
  "Diphu",
  "Dumka",
  "Dumraon",
  "Durg",
  "Eluru",
  "English Bazar",
  "Erode",
  "Etawah",
  "Faridabad",
  "Faridkot",
  "Farooqnagar",
  "Fatehabad",
  "Fatehpur Sikri",
  "Fazilka",
  "Firozabad",
  "Firozpur Cantt.",
  "Firozpur",
  "Forbesganj",
  "Gadwal",
  "Gandhinagar",
  "Gangarampur",
  "Ganjbasoda",
  "Gaya",
  "Giridih",
  "Goalpara",
  "Gobichettipalayam",
  "Gobindgarh",
  "Godhra",
  "Gohana",
  "Gokak",
  "Gooty",
  "Gopalganj",
  "Gudivada",
  "Gudur",
  "Gumia",
  "Guntakal",
  "Guntur",
  "Gurdaspur",
  "Gurgaon",
  "Guruvayoor",
  "Guwahati",
  "Gwalior",
  "Habra",
  "Hajipur",
  "Haldwani-cum-Kathgodam",
  "Hansi",
  "Hapur",
  "Hardoi ",
  "Hardwar",
  "Hazaribag",
  "Hindupur",
  "Hisar",
  "Hoshiarpur",
  "Hubli-Dharwad",
  "Hugli-Chinsurah",
  "Hyderabad",
  "Ichalkaranji",
  "Imphal",
  "Indore",
  "Itarsi",
  "Jabalpur",
  "Jagdalpur",
  "Jaggaiahpet",
  "Jagraon",
  "Jagtial",
  "Jaipur",
  "Jalandhar Cantt.",
  "Jalandhar",
  "Jalpaiguri",
  "Jamalpur",
  "Jammalamadugu",
  "Jammu",
  "Jamnagar",
  "Jamshedpur",
  "Jamui",
  "Jangaon",
  "Jatani",
  "Jehanabad",
  "Jhansi",
  "Jhargram",
  "Jharsuguda",
  "Jhumri Tilaiya",
  "Jind",
  "Jodhpur",
  "Jorhat",
  "Kadapa",
  "Kadi",
  "Kadiri",
  "Kagaznagar",
  "Kailasahar",
  "Kaithal",
  "Kakinada",
  "Kalimpong",
  "Kalpi",
  "Kalyan-Dombivali",
  "Kamareddy",
  "Kancheepuram",
  "Kandukur",
  "Kanhangad",
  "Kannur",
  "Kanpur",
  "Kapadvanj",
  "Kapurthala",
  "Karaikal",
  "Karimganj",
  "Karimnagar",
  "Karjat",
  "Karnal",
  "Karur",
  "Karwar",
  "Kasaragod",
  "Kashipur",
  "KathUrban Agglomeration",
  "Katihar",
  "Kavali",
  "Kayamkulam",
  "Kendrapara",
  "Kendujhar",
  "Keshod",
  "Khair",
  "Khambhat",
  "Khammam",
  "Khanna",
  "Kharagpur",
  "Kharar",
  "Khowai",
  "Kishanganj",
  "Kochi",
  "Kodungallur",
  "Kohima",
  "Kolar",
  "Kolkata",
  "Kollam",
  "Koratla",
  "Korba",
  "Kot Kapura",
  "Kota",
  "Kothagudem",
  "Kottayam",
  "Kovvur",
  "Koyilandy",
  "Kozhikode",
  "Kunnamkulam",
  "Kurnool",
  "Kyathampalle",
  "Lachhmangarh",
  "Ladnu",
  "Ladwa",
  "Lahar",
  "Laharpur",
  "Lakheri",
  "Lakhimpur",
  "Lakhisarai",
  "Lakshmeshwar",
  "Lal Gopalganj Nindaura",
  "Lalganj",
  "Lalganj",
  "Lalgudi",
  "Lalitpur",
  "Lalsot",
  "Lanka",
  "Lar",
  "Lathi",
  "Latur",
  "Lilong",
  "Limbdi",
  "Lingsugur",
  "Loha",
  "Lohardaga",
  "Lonar",
  "Lonavla",
  "Longowal",
  "Loni",
  "Losal",
  "Lucknow",
  "Ludhiana",
  "Lumding",
  "Lunawada",
  "Lunglei",
  "Macherla",
  "Machilipatnam",
  "Madanapalle",
  "Maddur",
  "Madhepura",
  "Madhubani",
  "Madhugiri",
  "Madhupur",
  "Madikeri",
  "Madurai",
  "Magadi",
  "Mahad",
  "Mahalingapura",
  "Maharajganj",
  "Maharajpur",
  "Mahasamund",
  "Mahbubnagar",
  "Mahe",
  "Mahemdabad",
  "Mahendragarh",
  "Mahesana",
  "Mahidpur",
  "Mahnar Bazar",
  "Mahuva",
  "Maihar",
  "Mainaguri",
  "Makhdumpur",
  "Makrana",
  "Malaj Khand",
  "Malappuram",
  "Malavalli",
  "Malda",
  "Malegaon",
  "Malerkotla",
  "Malkangiri",
  "Malkapur",
  "Malout",
  "Malpura",
  "Malur",
  "Manachanallur",
  "Manasa",
  "Manavadar",
  "Manawar",
  "Mancherial",
  "Mandalgarh",
  "Mandamarri",
  "Mandapeta",
  "Mandawa",
  "Mandi Dabwali",
  "Mandi",
  "Mandideep",
  "Mandla",
  "Mandsaur",
  "Mandvi",
  "Mandya",
  "Manendragarh",
  "Maner",
  "Mangaldoi",
  "Mangaluru",
  "Mangalvedhe",
  "Manglaur",
  "Mangrol",
  "Mangrol",
  "Mangrulpir",
  "Manihari",
  "Manjlegaon",
  "Mankachar",
  "Manmad",
  "Mansa",
  "Mansa",
  "Manuguru",
  "Manvi",
  "Manwath",
  "Mapusa",
  "Margao",
  "Margherita",
  "Marhaura",
  "Mariani",
  "Marigaon",
  "Markapur",
  "Marmagao",
  "Masaurhi",
  "Mathabhanga",
  "Mathura",
  "Mattannur",
  "Mauganj",
  "Mavelikkara",
  "Mavoor",
  "Mayang Imphal",
  "Medak",
  "Medininagar (Daltonganj)",
  "Medinipur",
  "Meerut",
  "Mehkar",
  "Memari",
  "Merta City",
  "Mhaswad",
  "Mhow Cantonment",
  "Mhowgaon",
  "Mihijam",
  "Mira-Bhayandar",
  "Mirganj",
  "Miryalaguda",
  "Modasa",
  "Modinagar",
  "Moga",
  "Mohali",
  "Mokameh",
  "Mokokchung",
  "Monoharpur",
  "Moradabad",
  "Morena",
  "Morinda, India",
  "Morshi",
  "Morvi",
  "Motihari",
  "Motipur",
  "Mount Abu",
  "Mudabidri",
  "Mudalagi",
  "Muddebihal",
  "Mudhol",
  "Mukerian",
  "Mukhed",
  "Muktsar",
  "Mul",
  "Mulbagal",
  "Multai",
  "Mumbai",
  "Mundargi",
  "Mundi",
  "Mungeli",
  "Munger",
  "Murliganj",
  "Murshidabad",
  "Murtijapur",
  "Murwara (Katni)",
  "Musabani",
  "Mussoorie",
  "Muvattupuzha",
  "Muzaffarpur",
  "Mysore",
  "Nabadwip",
  "Nabarangapur",
  "Nabha",
  "Nadbai",
  "Nadiad",
  "Nagaon",
  "Nagapattinam",
  "Nagar",
  "Nagari",
  "Nagarkurnool",
  "Nagaur",
  "Nagda",
  "Nagercoil",
  "Nagina",
  "Nagla",
  "Nagpur",
  "Nahan",
  "Naharlagun",
  "Naidupet",
  "Naihati",
  "Naila Janjgir",
  "Nainital",
  "Nainpur",
  "Najibabad",
  "Nakodar",
  "Nakur",
  "Nalbari",
  "Namagiripettai",
  "Namakkal",
  "Nanded-Waghala",
  "Nandgaon",
  "Nandivaram-Guduvancheri",
  "Nandura",
  "Nandurbar",
  "Nandyal",
  "Nangal",
  "Nanjangud",
  "Nanjikottai",
  "Nanpara",
  "Narasapuram",
  "Narasaraopet",
  "Naraura",
  "Narayanpet",
  "Nargund",
  "Narkatiaganj",
  "Narkhed",
  "Narnaul",
  "Narsinghgarh",
  "Narsinghgarh",
  "Narsipatnam",
  "Narwana",
  "Nashik",
  "Nasirabad",
  "Natham",
  "Nathdwara",
  "Naugachhia",
  "Naugawan Sadat",
  "Nautanwa",
  "Navalgund",
  "Navsari",
  "Nawabganj",
  "Nawada",
  "Nawanshahr",
  "Nawapur",
  "Nedumangad",
  "Neem-Ka-Thana",
  "Neemuch",
  "Nehtaur",
  "Nelamangala",
  "Nellikuppam",
  "Nellore",
  "Nepanagar",
  "New Delhi",
  "Neyveli (TS)",
  "Neyyattinkara",
  "Nidadavole",
  "Nilambur",
  "Nilanga",
  "Nimbahera",
  "Nirmal",
  "Niwai",
  "Niwari",
  "Nizamabad",
  "Nohar",
  "Noida",
  "Nokha",
  "Nokha",
  "Nongstoin",
  "Noorpur",
  "North Lakhimpur",
  "Nowgong",
  "Nowrozabad (Khodargama)",
  "Nuzvid",
  "O' Valley",
  "Obra",
  "Oddanchatram",
  "Ongole",
  "Orai",
  "Osmanabad",
  "Ottappalam",
  "Ozar",
  "P.N.Patti",
  "Pachora",
  "Pachore",
  "Pacode",
  "Padmanabhapuram",
  "Padra",
  "Padrauna",
  "Paithan",
  "Pakaur",
  "Palacole",
  "Palai",
  "Palakkad",
  "Palampur",
  "Palani",
  "Palanpur",
  "Palasa Kasibugga",
  "Palghar",
  "Pali",
  "Pali",
  "Palia Kalan",
  "Palitana",
  "Palladam",
  "Pallapatti",
  "Pallikonda",
  "Palwal",
  "Palwancha",
  "Panagar",
  "Panagudi",
  "Panaji",
  "Panamattom",
  "Panchkula",
  "Panchla",
  "Pandharkaoda",
  "Pandharpur",
  "Pandhurna",
  "PandUrban Agglomeration",
  "Panipat",
  "Panna",
  "Panniyannur",
  "Panruti",
  "Panvel",
  "Pappinisseri",
  "Paradip",
  "Paramakudi",
  "Parangipettai",
  "Parasi",
  "Paravoor",
  "Parbhani",
  "Pardi",
  "Parlakhemundi",
  "Parli",
  "Partur",
  "Parvathipuram",
  "Pasan",
  "Paschim Punropara",
  "Pasighat",
  "Patan",
  "Pathanamthitta",
  "Pathankot",
  "Pathardi",
  "Pathri",
  "Patiala",
  "Patna",
  "Patratu",
  "Pattamundai",
  "Patti",
  "Pattran",
  "Pattukkottai",
  "Patur",
  "Pauni",
  "Pauri",
  "Pavagada",
  "Pedana",
  "Peddapuram",
  "Pehowa",
  "Pen",
  "Perambalur",
  "Peravurani",
  "Peringathur",
  "Perinthalmanna",
  "Periyakulam",
  "Periyasemur",
  "Pernampattu",
  "Perumbavoor",
  "Petlad",
  "Phagwara",
  "Phalodi",
  "Phaltan",
  "Phillaur",
  "Phulabani",
  "Phulera",
  "Phulpur",
  "Phusro",
  "Pihani",
  "Pilani",
  "Pilibanga",
  "Pilibhit",
  "Pilkhuwa",
  "Pindwara",
  "Pinjore",
  "Pipar City",
  "Pipariya",
  "Piriyapatna",
  "Piro",
  "Pithampur",
  "Pithapuram",
  "Pithoragarh",
  "Pollachi",
  "Polur",
  "Pondicherry",
  "Ponnani",
  "Ponneri",
  "Ponnur",
  "Porbandar",
  "Porsa",
  "Port Blair",
  "Powayan",
  "Prantij",
  "Pratapgarh",
  "Pratapgarh",
  "Prithvipur",
  "Proddatur",
  "Pudukkottai",
  "Pudupattinam",
  "Pukhrayan",
  "Pulgaon",
  "Puliyankudi",
  "Punalur",
  "Punch",
  "Pune",
  "Punganur",
  "Punjaipugalur",
  "Puranpur",
  "Puri",
  "Purna",
  "Purnia",
  "PurqUrban Agglomerationzi",
  "Purulia",
  "Purwa",
  "Pusad",
  "Puthuppally",
  "Puttur",
  "Puttur",
  "Qadian",
  "Raayachuru",
  "Rabkavi Banhatti",
  "Radhanpur",
  "Rae Bareli",
  "Rafiganj",
  "Raghogarh-Vijaypur",
  "Raghunathganj",
  "Raghunathpur",
  "Rahatgarh",
  "Rahuri",
  "Raiganj",
  "Raigarh",
  "Raikot",
  "Raipur",
  "Rairangpur",
  "Raisen",
  "Raisinghnagar",
  "Rajagangapur",
  "Rajahmundry",
  "Rajakhera",
  "Rajaldesar",
  "Rajam",
  "Rajampet",
  "Rajapalayam",
  "Rajauri",
  "Rajgarh (Alwar)",
  "Rajgarh (Churu)",
  "Rajgarh",
  "Rajgir",
  "Rajkot",
  "Rajnandgaon",
  "Rajpipla",
  "Rajpura",
  "Rajsamand",
  "Rajula",
  "Rajura",
  "Ramachandrapuram",
  "Ramagundam",
  "Ramanagaram",
  "Ramanathapuram",
  "Ramdurg",
  "Rameshwaram",
  "Ramganj Mandi",
  "Ramgarh",
  "Ramnagar",
  "Ramnagar",
  "Ramngarh",
  "Rampur Maniharan",
  "Rampur",
  "Rampura Phul",
  "Rampurhat",
  "Ramtek",
  "Ranaghat",
  "Ranavav",
  "Ranchi",
  "Ranebennuru",
  "Rangia",
  "Rania",
  "Ranibennur",
  "Ranipet",
  "Rapar",
  "Rasipuram",
  "Rasra",
  "Ratangarh",
  "Rath",
  "Ratia",
  "Ratlam",
  "Ratnagiri",
  "Rau",
  "Raurkela",
  "Raver",
  "Rawatbhata",
  "Rawatsar",
  "Raxaul Bazar",
  "Rayachoti",
  "Rayadurg",
  "Rayagada",
  "Reengus",
  "Rehli",
  "Renigunta",
  "Renukoot",
  "Reoti",
  "Repalle",
  "Revelganj",
  "Rewa",
  "Rewari",
  "Rishikesh",
  "Risod",
  "Robertsganj",
  "Robertson Pet",
  "Rohtak",
  "Ron",
  "Roorkee",
  "Rosera",
  "Rudauli",
  "Rudrapur",
  "Rudrapur",
  "Rupnagar",
  "Sabalgarh",
  "Sadabad",
  "Sadalagi",
  "Sadasivpet",
  "Sadri",
  "Sadulpur",
  "Sadulshahar",
  "Safidon",
  "Safipur",
  "Sagar",
  "Sagara",
  "Sagwara",
  "Saharanpur",
  "Saharsa",
  "Sahaspur",
  "Sahaswan",
  "Sahawar",
  "Sahibganj",
  "Sahjanwa",
  "Saidpur",
  "Saiha",
  "Sailu",
  "Sainthia",
  "Sakaleshapura",
  "Sakti",
  "Salaya",
  "Salem",
  "Salur",
  "Samalkha",
  "Samalkot",
  "Samana",
  "Samastipur",
  "Sambalpur",
  "Sambhal",
  "Sambhar",
  "Samdhan",
  "Samthar",
  "Sanand",
  "Sanawad",
  "Sanchore",
  "Sandi",
  "Sandila",
  "Sanduru",
  "Sangamner",
  "Sangareddy",
  "Sangaria",
  "Sangli",
  "Sangole",
  "Sangrur",
  "Sankarankovil",
  "Sankari",
  "Sankeshwara",
  "Santipur",
  "Sarangpur",
  "Sardarshahar",
  "Sardhana",
  "Sarni",
  "Sarsod",
  "Sasaram",
  "Sasvad",
  "Satana",
  "Satara",
  "Sathyamangalam",
  "Satna",
  "Sattenapalle",
  "Sattur",
  "Saunda",
  "Saundatti-Yellamma",
  "Sausar",
  "Savanur",
  "Savarkundla",
  "Savner",
  "Sawai Madhopur",
  "Sawantwadi",
  "Sedam",
  "Sehore",
  "Sendhwa",
  "Seohara",
  "Seoni",
  "Seoni-Malwa",
  "Shahabad",
  "Shahabad, Hardoi",
  "Shahabad, Rampur",
  "Shahade",
  "Shahbad",
  "Shahdol",
  "Shahganj",
  "Shahjahanpur",
  "Shahpur",
  "Shahpura",
  "Shahpura",
  "Shajapur",
  "Shamgarh",
  "Shamli",
  "Shamsabad, Agra",
  "Shamsabad, Farrukhabad",
  "Shegaon",
  "Sheikhpura",
  "Shendurjana",
  "Shenkottai",
  "Sheoganj",
  "Sheohar",
  "Sheopur",
  "Sherghati",
  "Sherkot",
  "Shiggaon",
  "Shikaripur",
  "Shikarpur, Bulandshahr",
  "Shikohabad",
  "Shillong",
  "Shimla",
  "Shirdi",
  "Shirpur-Warwade",
  "Shirur",
  "Shishgarh",
  "Shivamogga",
  "Shivpuri",
  "Sholavandan",
  "Sholingur",
  "Shoranur",
  "Shrigonda",
  "Shrirampur",
  "Shrirangapattana",
  "Shujalpur",
  "Siana",
  "Sibsagar",
  "Siddipet",
  "Sidhi",
  "Sidhpur",
  "Sidlaghatta",
  "Sihor",
  "Sihora",
  "Sikanderpur",
  "Sikandra Rao",
  "Sikandrabad",
  "Sikar",
  "Silao",
  "Silapathar",
  "Silchar",
  "Siliguri",
  "Sillod",
  "Silvassa",
  "Simdega",
  "Sindagi",
  "Sindhagi",
  "Sindhnur",
  "Singrauli",
  "Sinnar",
  "Sira",
  "Sircilla",
  "Sirhind Fatehgarh Sahib",
  "Sirkali",
  "Sirohi",
  "Sironj",
  "Sirsa",
  "Sirsaganj",
  "Sirsi",
  "Sirsi",
  "Siruguppa",
  "Sitamarhi",
  "Sitapur",
  "Sitarganj",
  "Sivaganga",
  "Sivagiri",
  "Sivakasi",
  "Siwan",
  "Sohagpur",
  "Sohna",
  "Sojat",
  "Solan",
  "Solapur",
  "Sonamukhi",
  "Sonepur",
  "Songadh",
  "Sonipat",
  "Sopore",
  "Soro",
  "Soron",
  "Soyagaon",
  "Sri Madhopur",
  "Srikakulam",
  "Srikalahasti",
  "Srinagar",
  "Srinagar",
  "Srinivaspur",
  "Srirampore",
  "Srisailam Project (Right Flank Colony) Township",
  "Srivilliputhur",
  "Sugauli",
  "Sujangarh",
  "Sujanpur",
  "Sullurpeta",
  "Sultanganj",
  "Sultanpur",
  "Sumerpur",
  "Sumerpur",
  "Sunabeda",
  "Sunam",
  "Sundargarh",
  "Sundarnagar",
  "Supaul",
  "Surandai",
  "Surapura",
  "Surat",
  "Suratgarh",
  "SUrban Agglomerationr",
  "Suri",
  "Suriyampalayam",
  "Suryapet",
  "Tadepalligudem",
  "Tadpatri",
  "Takhatgarh",
  "Taki",
  "Talaja",
  "Talcher",
  "Talegaon Dabhade",
  "Talikota",
  "Taliparamba",
  "Talode",
  "Talwara",
  "Tamluk",
  "Tanda",
  "Tandur",
  "Tanuku",
  "Tarakeswar",
  "Tarana",
  "Taranagar",
  "Taraori",
  "Tarbha",
  "Tarikere",
  "Tarn Taran",
  "Tasgaon",
  "Tehri",
  "Tekkalakote",
  "Tenali",
  "Tenkasi",
  "Tenu dam-cum-Kathhara",
  "Terdal",
  "Tezpur",
  "Thakurdwara",
  "Thammampatti",
  "Thana Bhawan",
  "Thane",
  "Thanesar",
  "Thangadh",
  "Thanjavur",
  "Tharad",
  "Tharamangalam",
  "Tharangambadi",
  "Theni Allinagaram",
  "Thirumangalam",
  "Thirupuvanam",
  "Thiruthuraipoondi",
  "Thiruvalla",
  "Thiruvallur",
  "Thiruvananthapuram",
  "Thiruvarur",
  "Thodupuzha",
  "Thoubal",
  "Thrissur",
  "Thuraiyur",
  "Tikamgarh",
  "Tilda Newra",
  "Tilhar",
  "Tindivanam",
  "Tinsukia",
  "Tiptur",
  "Tirora",
  "Tiruchendur",
  "Tiruchengode",
  "Tiruchirappalli",
  "Tirukalukundram",
  "Tirukkoyilur",
  "Tirunelveli",
  "Tirupathur",
  "Tirupathur",
  "Tirupati",
  "Tiruppur",
  "Tirur",
  "Tiruttani",
  "Tiruvannamalai",
  "Tiruvethipuram",
  "Tiruvuru",
  "Tirwaganj",
  "Titlagarh",
  "Tittakudi",
  "Todabhim",
  "Todaraisingh",
  "Tohana",
  "Tonk",
  "Tuensang",
  "Tuljapur",
  "Tulsipur",
  "Tumkur",
  "Tumsar",
  "Tundla",
  "Tuni",
  "Tura",
  "Uchgaon",
  "Udaipur",
  "Udaipur",
  "Udaipurwati",
  "Udgir",
  "Udhagamandalam",
  "Udhampur",
  "Udumalaipettai",
  "Udupi",
  "Ujhani",
  "Ujjain",
  "Umarga",
  "Umaria",
  "Umarkhed",
  "Umbergaon",
  "Umred",
  "Umreth",
  "Una",
  "Unjha",
  "Unnamalaikadai",
  "Unnao",
  "Upleta",
  "Uran Islampur",
  "Uran",
  "Uravakonda",
  "Urmar Tanda",
  "Usilampatti",
  "Uthamapalayam",
  "Uthiramerur",
  "Utraula",
  "Vadakkuvalliyur",
  "Vadalur",
  "Vadgaon Kasba",
  "Vadipatti",
  "Vadnagar",
  "Vadodara",
  "Vaijapur",
  "Vaikom",
  "Valparai",
  "Valsad",
  "Vandavasi",
  "Vaniyambadi",
  "Vapi",
  "Vapi",
  "Varanasi",
  "Varkala",
  "Vasai-Virar",
  "Vatakara",
  "Vedaranyam",
  "Vellakoil",
  "Vellore",
  "Venkatagiri",
  "Veraval",
  "Vidisha",
  "Vijainagar, Ajmer",
  "Vijapur",
  "Vijayapura",
  "Vijayawada",
  "Vijaypur",
  "Vikarabad",
  "Vikramasingapuram",
  "Viluppuram",
  "Vinukonda",
  "Viramgam",
  "Virudhachalam",
  "Virudhunagar",
  "Visakhapatnam",
  "Visnagar",
  "Viswanatham",
  "Vita",
  "Vizianagaram",
  "Vrindavan",
  "Vyara",
  "Wadgaon Road",
  "Wadhwan",
  "Wadi",
  "Wai",
  "Wanaparthy",
  "Wani",
  "Wankaner",
  "Wara Seoni",
  "Warangal",
  "Wardha",
  "Warhapur",
  "Warisaliganj",
  "Warora",
  "Warud",
  "Washim",
  "Wokha",
  "Yadgir",
  "Yamunanagar",
  "Yanam",
  "Yavatmal",
  "Yawal",
  "Yellandu",
  "Yemmiganur",
  "Yerraguntla",
  "Yevla",
  "Zaidpur",
  "Zamania",
  "Zira",
  "Zirakpur",
  "Zunheboto",
];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput1"), city);
</script>
 <?php include 'footer.php';?>