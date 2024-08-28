window.onload = function () {
    document.body.classList.add('loaded_hiding');
    window.setTimeout(function () {
		document.body.classList.add('loaded');
		document.body.classList.remove('loaded_hiding');
	}, 500);
}

function toggleMobileNavigation() {
 	let navBar = document.getElementById("mobileNav");
	if(navBar.style.display === "none") {
    		navBar.style.display = "block";
    	} else {
	    navBar.style.display = "none";
	}
};

