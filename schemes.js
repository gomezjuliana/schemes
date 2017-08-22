// This opens and closes the menu with a click on screens less than 1200px
document.querySelector('.nav-bar__hamburger').addEventListener('click', openMenu);

function openMenu() {
	document.querySelector('.nav-bar__menu').classList.toggle('nav-open');
};
// This closes the menu if you click anywhere other than the hamburger
document.addEventListener('click', function(event) {
	let isClickInside = document.querySelector('.nav-bar__hamburger').contains(event.target);
	if (!isClickInside) {
		document.querySelector('.nav-bar__menu').classList.remove('nav-open');
	}
});