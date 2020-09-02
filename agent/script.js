if(localStorage.getItem("total_seconds")){
    var total_seconds = localStorage.getItem("total_seconds");
} else {
    var total_seconds = 54000;
}
var minutes = parseInt(total_seconds/60);
var seconds = parseInt(total_seconds%60);
function countDownTimer(){
    if(seconds < 10){
        seconds= "0"+ seconds ;
    }if(minutes < 10){
        minutes= "0"+ minutes ;
    }
    
    document.getElementById("quiz-time-left").innerHTML = "Time Left :"+minutes+"minutes"+seconds+"seconds";
    if(total_seconds <= 0){
        setTimeout("document.quiz.submit()",1);
    } else {
        total_seconds = total_seconds -1 ;
        minutes = parseInt(total_seconds/60);
        seconds = parseInt(total_seconds%60);
        localStorage.setItem("total_seconds",total_seconds)
        setTimeout("countDownTimer()",1000);
    }
}
setTimeout("countDownTimer()",1000);