document.addEventListener("DOMContentLoaded", function(){
	const btn = document.querySelector('.icon');

	btn.addEventListener('click', function () {
		myFunction();
	});

	btn.addEventListener('')
});


function myFunction(){
	var x = document.getElementById("myTopnav");
	if (x.className === "topnav") {
		x.className += " responsive";
	} else {
		x.className = "topnav";
	}
}