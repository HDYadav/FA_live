<?php include 'header.php';?>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery-1.6.2.min.js"></script>
<style >


</style>

</head>
 <main class="content-wrapper">
         <div class="mdc-layout-grid">
          <div class="mdc-layout-grid__inner">
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card">
                
                <div class="mdc-layout-grid__inner">
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                    <section class="purchase__card_section">
                       <!-- Slideshow container -->
                        <form id ='timerform' method="post">
                 <div class="col-md-4">
                          

                              <input style="border: none; color: red;font-size: 20px;font-family: cursive;" type="hidden" size ='1' readonly id ='timerh'  name="timerh">
                             Min : 
                              <input style="border: none; color: red;font-size: 20px" type="text" size ='1' readonly id ='timerm'  name="timerm">  
                            Sec: 
                              <input style="border: none; color: red;font-size: 20px" type="text" size ='1' readonly id ='timers'  name="timers">
                            </form>
                          </div>

<form method="post">

<button style="display:none" name="submit" id="btn">FINISH!!!</button>

<input type="hidden" name="submit" value="<?php echo $row['id']; ?>">

                            </form>

<?php
if(isset($_POST['submit'])){
  # code...
  $value=$_POST['submit'];
echo "<script language='javascript' type='text/javascript'>alert('Exam Over')
  location.href='exam_result.php' </script>";
}

?>
                       <form id="myform"  action="" method="post">
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->


<?php
include_once("coon.php");
$main_id=$row['id']; 

$qs_atm = mysql_query("select * from agent_details where id='$main_id'");
$qs_atm_res=mysql_fetch_assoc($qs_atm);
$qs_atm_row=$qs_atm_res['que_no'];


$result = mysql_query("select * from questions where id='$qs_atm_row'");
$res = mysql_fetch_assoc($result);

/*echo $res['question'];*/

            ?>
           <?php 

           if ($qs_atm_row<="50") {
             # code...
            ?>

              <div class="mySlidesexam fade" id="gen">
      <p><?php echo $res['id'].'.'. $res['question'] ?></p> 

      
      <div class="ans-box">
      <input type="radio"  name="q1" value="<?php echo trim($res['option1']); ?>">
      <label><?php echo trim($res['option1']); ?> </label><br>
      <input type="radio"    name="q1" value="<?php echo trim($res['option2']); ?>">
      <label><?php echo trim($res['option2']); ?></label><br>
      <input type="radio"   name="q1" value="<?php echo trim($res['option3']); ?>">
      <label><?php echo trim($res['option3']); ?></label><br>
      <input type="radio"    name="q1" value="<?php echo trim($res['option4']); ?>">
      <label><?php echo trim($res['option4']); ?></label><br>
      </div>
    
  </div>
  <h3 id="error" style="color: red; display:none">Please Select Any option </h3>
    <div class="controler mt-2">
                     <button  name="prev" class="prev mdc-button mdc-button--stroked" >
                      Prev
                    </button>
                    <button name="next" onclick="return validate()" class="next mdc-button mdc-button--stroked" >
                      Next
                    </button>
                      
  
    

</div>
<svg id="svg" class="clock"></svg>
         <?php  }else{

 echo "<script language='javascript' type='text/javascript'>alert('You have completed the exam')
  location.href='exam_result.php' </script>";

         }
            ?>


<?php 
                   
                      ?>





  
</div>
</form>

<?php 
if(isset($_POST['next'])){

$main_id=$row['id']; 
  $ques=$_POST['q1'];
  $query=mysql_query("SELECT * FROM `questions` WHERE id='$qs_atm_row'");
$ansres=mysql_fetch_assoc($query);
$ansrow=$ansres['answer'];

if ($ques===$ansrow) {
  # code...
 $lastque= $qs_atm_res['que_no'];
 $lastqatm=$lastque+1;

  $dbra= $qs_atm_res['right_ans'];
 $lra=$dbra+1;
 mysql_query("UPDATE `agent_details` SET `que_no`='$lastqatm', `right_ans`='$lra' WHERE id='$main_id'");
 echo "
<script>
window.location.href = 'exam.php';
</script>";

}
else{
   $lastque= $qs_atm_res['que_no'];
 $lastqatm=$lastque+1;
$dbwa= $qs_atm_res['wrong_ans'];
 $lwa=$dbwa+1;
 mysql_query("UPDATE `agent_details` SET `que_no`='$lastqatm',`wrong_ans`='$lwa' WHERE id='$main_id'");
 echo "
<script>
window.location.href = 'exam.php';
</script>";
}

}

if(isset($_POST['prev'])){




   $lastque= $qs_atm_res['que_no'];


if ($lastque==="1") {
  # code...
   echo "
<script>
window.location.href = 'exam.php';
</script>";
}else{
   $lastqatm=$lastque-1;
 mysql_query("UPDATE `agent_details` SET `que_no`='$lastqatm' WHERE id='$main_id'");
 echo "
<script>
window.location.href = 'exam.php';
</script>";

}
}


 ?>


                    </section>
                  </div>
                  
                </div>
              </div>
            </div>
         
           
           
          </div>
        </div>
      </main>




<script type="text/javascript">
	var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlidesexam");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


</script>
<script type="text/javascript">
  function validate() {
var a = 0, rdbtn=document.getElementsByName("q1")
for(i=0;i<rdbtn.length;i++) {
if(rdbtn.item(i).checked == false) {
a++;
}
}
if(a == rdbtn.length) {
alert("Please select any option");
document.getElementById("gen").style.border = "2px solid red";
return false;
} else {
document.getElementById("gen").style.border = "";
}
}
</script>

                            
         <script type="text/javascript">
                            
                          //Pass database values to s,m,h and the timer will start from there          
                          var s = "<?php 
                                      if($row['timer_s']==0||$row['timer_s']=='')
                                        {echo '00';}

                                        else{ echo $row['timer_s'];} 

                                      ?>";


                          var m = "<?php 
                                      if($row['timer_m']==0||$row['timer_m']=='')
                                        {echo '00';}
                                        else{ echo $row['timer_m'];}  

                                      ?>";
;


                          var h = "<?php 
                                      if($row['timer_h']==0||$row['timer_h']=='')
                                        {echo '00';} 
                                      else{ echo $row['timer_h'];} 

                                      ?>";
;







                          // document.getElementById('hr').innerHTML = h;
                          // document.getElementById('min').innerHTML = m;
                          // document.getElementById('sec').innerHTML = s;

                           document.getElementById('timerh').value = h;
                           document.getElementById('timerm').value  = m;
                           document.getElementById('timers').value = s;


                         
                          
                          function pad(val) {
                            return val > 9 ? val : "0" + val;
                          }
                          var seconds = setInterval(function() {
                            var secpad = pad(++s);
                            
                            if(secpad == 60)
                            {
                              //document.getElementById('sec').innerHTML = '00';
                              document.getElementById('timers').value = '00';
                            }
                            else{
                              //document.getElementById('sec').innerHTML = secpad;
                              document.getElementById('timers').value = secpad;
                            }

                            // document.getElementById('timers').value = secpad;

                            //var second = pad(++s);
                            if (s == 60) {
                              var minpad = pad(++m);
                              if(minpad == 60)
                              {
                                //document.getElementById('min').innerHTML = '00';
                                document.getElementById('timerm').value = '00';

                              }
                              else{//document.getElementById('min').innerHTML = minpad;
                                   document.getElementById('timerm').value = minpad;
                                    }
                              

                              //var minute = pad(++m);
                              s = 0;
                              if (m == 60) {
                                var hrpad = pad(++h);

                                //document.getElementById('hr').innerHTML = hrpad;
                                document.getElementById('timerh').value = hrpad;

                                 

                                //var hour = pad(++h);
                                m = 0;
                              }

                            }
                                                                                   
                          }, 1000);



                             
                          

                          

                         
                          
                                                
                         
                           </script>
                           <!-- <script type="text/javascript" src="moduletimer.js"></script> -->
                           <script >
                             $(document).ready(function(){

    $('#timerform').submit(ajax);

     var hr = $("#timerh").val() ;
     var min = $("#timerm").val() ;
     var sec = $("#timers").val();

     

     
});
function myTimer() {
   $('#timerform').submit(ajax);

     var hr = $("#timerh").val() ;
  if(hr>=16)
    {

        location.reload(true);
        $("#btn").show();
        document.getElementById("btn").click();;
        
    }
}
function ajax(){
    
        $.ajax({
            url : 'ajaxtimer.php',
            type : 'POST',
            data : {'hr':$("#timerh").val(),
                    'min':$("#timerm").val(),
                    'sec':$("#timers").val()
          },
            success: function(data){
                console.log(data);

            }
        });
        //return false;
}



window.onload=function(){

    setInterval(ajax, 1000);
    setInterval(myTimer, 1000);


}
                           </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
     <script src="jquery-3.3.1.min.js"></script>
<script src="parsley.js"></script>


<?php include 'footer.php';?>