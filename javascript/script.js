/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

// Header scroll animation
const header = document.getElementById('header');
const mobileMenu = document.getElementById('mobile-menu');
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenuCloseButton = mobileMenu.querySelector('button');
const contentSections = document.getElementById('content-sections');

// Handle scroll events
const handleScroll = () => {
	const isScrolled = window.scrollY > 20;
	header.classList.toggle('scrolled', isScrolled);
};

// Handle mobile menu
const toggleMobileMenu = () => {
	mobileMenu.classList.toggle('menu-active');
	document.body.classList.toggle('menu-open');

	// Update button icon
	mobileMenuButton.innerHTML = mobileMenu.classList.contains('menu-active')
		? '<svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 18L18 6M6 6l12 12" /></svg>'
		: '<svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h16" /></svg>';
};

// Close mobile menu when clicking a link
const handleMobileMenuClick = (e) => {
	if (e.target.tagName === 'A') {
		toggleMobileMenu();
	}
};

// Event listeners
window.addEventListener('scroll', handleScroll);
mobileMenuButton.addEventListener('click', toggleMobileMenu);
mobileMenuCloseButton.addEventListener('click', toggleMobileMenu);
mobileMenu.addEventListener('click', handleMobileMenuClick);

// Wait for DOM to load
document.addEventListener('DOMContentLoaded', function () {
	// Initialize hero slider
	initHeroSlider();
});

// Hero slider functionality
function initHeroSlider() {
	const slides = document.querySelectorAll('.hero-slider .slide');
	const indicators = document.querySelectorAll('.slide-indicators button');
	const prevBtn = document.querySelector('.slider-arrow.prev');
	const nextBtn = document.querySelector('.slider-arrow.next');

	if (!slides.length) return;

	let currentSlide = 0;
	let slideInterval;
	const intervalTime = 5000; // 5 seconds between auto slides

	// Start automatic slideshow
	function startSlideShow() {
		slideInterval = setInterval(nextSlide, intervalTime);
	}

	// Reset interval after manual navigation
	function resetInterval() {
		clearInterval(slideInterval);
		startSlideShow();
	}

	// Switch to specific slide
	function goToSlide(index) {
		// Remove active class from all slides
		slides.forEach((slide) => slide.classList.remove('active'));
		indicators.forEach((indicator) => indicator.classList.remove('active'));

		// Set the active slide
		slides[index].classList.add('active');
		indicators[index].classList.add('active');
		currentSlide = index;
	}

	// Next slide function
	function nextSlide() {
		let nextIndex = currentSlide + 1;
		if (nextIndex >= slides.length) {
			nextIndex = 0;
		}
		goToSlide(nextIndex);
	}

	// Previous slide function
	function prevSlide() {
		let prevIndex = currentSlide - 1;
		if (prevIndex < 0) {
			prevIndex = slides.length - 1;
		}
		goToSlide(prevIndex);
	}

	// Event listeners for controls
	if (nextBtn) {
		nextBtn.addEventListener('click', () => {
			nextSlide();
			resetInterval();
		});
	}

	if (prevBtn) {
		prevBtn.addEventListener('click', () => {
			prevSlide();
			resetInterval();
		});
	}

	// Add event listeners to indicators
	indicators.forEach((indicator, index) => {
		indicator.addEventListener('click', () => {
			goToSlide(index);
			resetInterval();
		});
	});

	// Start the slideshow
	startSlideShow();
}
