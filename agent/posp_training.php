 <?php include 'header.php';?>

      <main class="content-wrapper">
         <div class="mdc-layout-grid">
         <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
             <div class="mdc-card">
              <section class="mdc-card__supporting-text">

                   
               <form id ='timerform' method="post">
                 <div class="col-md-4">
                            Hr :
                              <input style="border: none; color: red;font-size: 20px;font-family: cursive;" type="text" size ='1' readonly id ='timerh'  name="timerh">
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
echo "<script language='javascript' type='text/javascript'>alert('Training Completed')
  location.href='output.php?id=$value' </script>";
}

?>



<div class="mySlides fade">
   
  <iframe src="training/MODULE1-01.pdf#toolbar=0"></iframe>
  
</div>
<div class="mySlides fade">
   
  <iframe src="training/MODULE1-02.pdf#toolbar=0"></iframe>
  
</div>

<div class="mySlides fade">
  <iframe src="training/MODULE1-03.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
 <iframe src="training/MODULE1-04.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
  <iframe src="training/MODULE1-05.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE1-06.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE1-07.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE1-08.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE1-09.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
  <iframe src="training/MODULE1-10.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
 <iframe src="training/MODULE1-11.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE1-12.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
  <iframe src="training/MODULE1-13.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
  <iframe src="training/MODULE1-14.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE1-15.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
 <iframe src="training/MODULE1-16.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
  <iframe src="training/MODULE1-17.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
  <iframe src="training/MODULE1-18.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE1-19.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
  <iframe src="training/MODULE1-20.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
  <iframe src="training/MODULE1-21.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE1-22.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
  <iframe src="training/MODULE1-23.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
  <iframe src="training/MODULE1-24.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
  <iframe src="training/MODULE1-25.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
  <iframe src="training/MODULE1-26.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
  <iframe src="training/MODULE1-27.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE1-28.pdf#toolbar=0"></iframe>
</div>



<div class="mySlides fade">
   <iframe src="training/MODULE2-01.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-02.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-03.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-04.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-05.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-06.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-07.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-08.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-09.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-10.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-11.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-12.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-13.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-14.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-15.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-16.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-17.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-18.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-19.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-20.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-21.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-22.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-23.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-24.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-25.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-26.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-27.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-28.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-29.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-30.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-31.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-32.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-33.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-34.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-35.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE2-36.pdf#toolbar=0"></iframe>
</div>




<div class="mySlides fade">
   <iframe src="training/MODULE3-01.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-02.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-03.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-04.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-05.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-06.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-07.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-08.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-09.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-10.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-11.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-12.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-13.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-14.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-15.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-16.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-17.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-18.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-19.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-20.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-21.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-22.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-23.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-24.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-25.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-26.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-27.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-28.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-29.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-30.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-31.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-32.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-33.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-34.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-35.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-36.pdf#toolbar=0"></iframe>
</div>
<div class="mySlides fade">
   <iframe src="training/MODULE3-37.pdf#toolbar=0"></iframe>
</div> 






<div class="controler mt-2">
  <button class="prev mdc-button mdc-button--stroked" data-mdc-auto-init="MDCRipple" onclick="plusSlides(-1)">
                      Prev
                    </button>
                    <button class="next mdc-button mdc-button--stroked" data-mdc-auto-init="MDCRipple" onclick="plusSlides(1)">
                      Next
                    </button>

</div>
</div>
                    </section>
                  </div>
                  
                </div>
              </div>
           
      </main>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
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

<!-- <script>
    $(document).ready(function() {
        var timer2 = localStorage.getItem('timer');
       

        if(timer2 === null) 
          timer2 = document.getElementById('tim').value;
        $('.countdown').html(timer2);

        var interval = setInterval(function() {
            var timer = timer2.split(':');
            var minutes = parseInt(timer[0], 10);
            var seconds = parseInt(timer[1], 10);
            --seconds;
            minutes = (seconds < 0) ? --minutes : minutes;
            if (minutes < 0){
                clearInterval(interval);
                localStorage.removeItem('timer');
                $("#btn").show();
                document.getElementById("btn").click();
                window.location = 'output.php' + timer2;
                $.ajax({
    type: 'post', // the method (could be GET btw)
    url: 'output.php', // The file where my php code is
    data: {
        'test': "thankyou" 
        // all variables i want to pass. In this case, only one.
    },
    datatype: 'json',
    success: function(data,status) { // in case of success get the output, i named data
        alert(data); // do something with the output, like an alert
    }
});
            }else{
              <?php 

              ?>
                seconds = (seconds < 0) ? 59 : seconds;
                seconds = (seconds < 10) ? '0' + seconds : seconds;
                $('.countdown').html(minutes + ':' + seconds);
                timer2 = minutes + ':' + seconds;
               var settime= localStorage.setItem('timer',timer2);
               var lastname = localStorage.getItem("timer");
               $.post("output.php", {timer:settime});
               jQuery('#div_session_write').load('output.php?settimes=settime');
                $.ajax({
   type: 'POST',
   data: {timer2 : timer2},
   url: 'output.php',
   success: function(data) {},
   error: function() {}
});

            }
        }, 1000);


 
    });
</script> -->
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
  if(hr>=15)
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
                           <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
                           <script src="main.js"></script>
<script src="parsley.js"></script>
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
<?php include 'footer.php';?>