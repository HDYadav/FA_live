

$(document).ready(function(){
    $('#timerform').submit(ajax);

     var hr = $("#timerh").val() ;
     var min = $("#timerm").val() ;
     var sec = $("#timers").val();

     

     if(min>=60)
    {
        $("#btn").show();
        document.getElementById("btn").click();;
        
    }
});

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

    setInterval(ajax, 5000);


}