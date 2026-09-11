document.documentElement.classList.add('hide-scrollbar');

const navbar = document.querySelector('.navbar-custom');
let previousScrollPosition = window.scrollY;

window.addEventListener('scroll', () => {
	const currentScrollPosition = window.scrollY;
	const mobileMenu = navbar?.querySelector('.navbar-collapse.show');

	if (!navbar || mobileMenu) {
		return;
	}

	if (currentScrollPosition > previousScrollPosition && currentScrollPosition > navbar.offsetHeight) {
		navbar.classList.add('navbar-hidden');
	} else if (currentScrollPosition < previousScrollPosition) {
		navbar.classList.remove('navbar-hidden');
	}

	previousScrollPosition = currentScrollPosition;
}, { passive: true });

