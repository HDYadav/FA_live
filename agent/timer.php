<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery-1.6.2.min.js"></script>
<div id="divCounter"></div>
<script >
 if (sessionStorage.getItem("counter")) {
      if (sessionStorage.getItem("counter") >= 10) {
        var value = 0;
      } else {
        var value = sessionStorage.getItem("counter");
      }
    } else {
      var value = 0;
    }
    document.getElementById('divCounter').innerHTML = value;

    var counter = function () {
      if (value >= 10) {
        sessionStorage.setItem("counter", 0);
        value = 0;
      } else {
  (function() {
  $(document).ready(function() {
    var time = "10:00:50",
      parts = time.split(':'),
      hours = +parts[0],
      minutes = +parts[1],
      seconds = +parts[2],
      span = $('#countdown');

    function correctNum(num) {
      return (num < 10) ? ("0" + num) : num;
    }

    var timer = setInterval(function() {
      seconds--;
      if (seconds == -1) {
        seconds = 59;
        minutes--;

        if (minutes == -1) {
          minutes = 59;
          hours--;

          if (hours == -1) {
            alert("timer finished");
            clearInterval(timer);
            return;
          }
        }
      }
      span.text(correctNum(hours) + ":" + correctNum(minutes) + ":" + correctNum(seconds));
    }, 1000);
  });
})()
}
</script>