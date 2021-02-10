function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

window.onscroll = function() {
	let hdp = document.getElementById("hdp");
	if (document.body.scrollTop > 350 || document.documentElement.scrollTop > 350) {
		hdp.className = "hautdepage elementToFadeIn show";
	} else {
		hdp.className = "hautdepage elementToFadeOut hide";
	}
};