// Set the date we're counting down to

var countDownDate = new Date("Apr 02, 2021 15:00:00").getTime();



// Update the count down every 1 second

var x = setInterval(function() {



  // Get today's date and time

  var now = new Date().getTime();

    

  // Find the distance between now and the count down date

  var distance = countDownDate - now;

    

  // Time calculations for days, hours, minutes and seconds

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));

  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    

  // Output the result in an element with id="demo"

  document.getElementById("countdown").innerHTML = 
  "<div class='col-sm-3 col-xs-3 timer'>HARI<p>" +days + "</p></div> <div class='col-sm-3 col-xs-3 timer'>JAM<p>" + hours + "</p></div> <div class='col-sm-3 col-xs-3 timer'>MENIT<p>" + minutes + "</p></div> <div class='col-sm-3 col-xs-3 timer'>DETIK<p>" + seconds + "</p></div'> ";

    

  // If the count down is over, write some text 

  if (distance < 0) {

    clearInterval(x);

    document.getElementById("countdown").innerHTML = "<div class='col-sm-3 col-xs-3 timer'>HARI<p> 0 </p></div> <div class='col-sm-3 col-xs-3 timer'>JAM<p> 0 </p></div> <div class='col-sm-3 col-xs-3 timer'>MENIT<p> 0 </p></div> <div class='col-sm-3 col-xs-3 timer'>DETIK<p> 0 </p></div'>";

  }

}, 1000);