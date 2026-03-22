var countDownDate = new Date("Feb 17, 2026 8:10:00").getTime();
var x = setInterval(function() {

  var counter = document.querySelector("#CD") ;  
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  counter.innerHTML = days + " يوم  " + hours +  "ساعة  "
  + minutes + " دقيقة  " + seconds + " ثانية  ";

  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "إنتهى الوقت !";
  }
}, 1000)




