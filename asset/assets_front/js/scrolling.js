
var x = window.matchMedia("(max-width: 600px)");
if (x.matches) {
    window.onload = function() {
  		$("#myNav").show();
		document.getElementById("myLogo").src = "assets/img/logoKajati.png";
		document.getElementById("menuAtas").style.marginTop = "50px";
	};
}
else {

	$(window).scroll(function () {

	    var scroll = $(window).scrollTop();
		
	    if(scroll > 785){
	    	$("#myNav").show();
	    }
	    else {
	        $("#myNav").hide();
	    }

	});
}

 