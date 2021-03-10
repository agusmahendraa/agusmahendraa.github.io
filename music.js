var buttonmodal = document.getElementById("button-modal");

var button = document.getElementById("button");

var audio = document.getElementById("player");



button.addEventListener("click", function(){

	if(audio.paused){

    	audio.play();

    	button.innerHTML = "<span class='glyphicon glyphicon-pause'></span>";

  	} else {

    	audio.pause();

    	button.innerHTML = "<span class='glyphicon glyphicon-play'></span>";

  	}

});

buttonmodal.addEventListener("click", function(){

	if(audio.paused){

    	audio.play();

    	button.innerHTML = "<span class='glyphicon glyphicon-pause'></span>";

  	} else {

    	audio.pause();

    	button.innerHTML = "<span class='glyphicon glyphicon-play'></span>";

  	}

});
