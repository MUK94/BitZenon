// Menu Dropdown
document.addEventListener("DOMContentLoaded", function () {
	var dropdowns = document.querySelectorAll(".nav-cat-dropdown");

	dropdowns.forEach(function (dropdown) {
		var dropdownContent = dropdown.querySelector(".dropdown-content");

		dropdown.addEventListener("click", function (event) {
			event.stopPropagation();
			dropdown.classList.toggle("open");
		});

		// Close the dropdown when clicking outside of it
		document.addEventListener("click", function (event) {
			if (!dropdown.contains(event.target)) {
				dropdown.classList.remove("open");
			}
		});
	});
});

// ---------------Slider-----------------//
const slides = document.querySelectorAll(".slide");
const btnLeft = document.querySelector(".slider__btn--left");
const btnRight = document.querySelector(".slider__btn--right");
const dotContainer = document.querySelector(".dots");

let curSlide = 0;
const maxSlide = slides.length - 1;

// Creating dots
const createDots = function () {
	slides.forEach(function (_, i) {
		dotContainer.insertAdjacentHTML(
			"beforeend",
			`<button class="dots__dot" data-slide="${i}" aria-label="button"></button>`
		);
	});
};

createDots();

const activateDot = function (slide) {
	document
		.querySelectorAll(".dots__dot")
		.forEach((dot) => dot.classList.remove("dots__dot--active"));

	document
		.querySelector(`.dots__dot[data-slide="${slide}"]`)
		.classList.add("dots__dot--active");
};
activateDot(0);

// Go to Slide
const goToSlide = function (slide) {
	slides.forEach(
		(s, i) => (s.style.transform = `translateX(${100 * (i - slide)}%)`)
	);
};
goToSlide(0);

// Go to next slide right
const rightSlide = function () {
	if (curSlide === maxSlide) {
		curSlide = 0;
	} else {
		curSlide++;
	}
	goToSlide(curSlide);
	activateDot(curSlide);
};
// Go to next slide left
const leftSlide = function () {
	if (curSlide === 0) {
		curSlide = maxSlide;
	} else {
		curSlide--;
	}
	goToSlide(curSlide);
	activateDot(curSlide);
};

// Next slide
btnRight.addEventListener("click", rightSlide);
btnLeft.addEventListener("click", leftSlide);

// Handlling Arrow key to move the slides
document.addEventListener("keydown", function (e) {
	if (e.key === "ArrowRight") {
		rightSlide();
	}
});



// Dot event handling
dotContainer.addEventListener("click", function (e) {
	if (e.target.classList.contains("dots__dot")) {
		const { slide } = e.target.dataset;
		goToSlide(slide);
		activateDot(slide);
	}
});
// Auto move slider
setInterval(rightSlide, 4000);

// Category & Topic Dropdown
document.getElementById("topic").addEventListener("change", function () {
	window.location.href = this.value;
});

document.getElementById("category").addEventListener("change", function () {
	window.location.href = this.value;
});




// Quote Poppup Window
// document.addEventListener("DOMContentLoaded", function () {
// 	// Get elements
// 	const openBtn = document.querySelector(".btn-booking button");
// 	const closeBtn = document.getElementById("closePopup");
// 	const popup = document.getElementById("quotePopup");

// 	// Open popup on "Get a Quote" button click
// 	openBtn.addEventListener("click", function (event) {
// 		event.preventDefault();
// 		popup.classList.remove("hidden");
// 		popup.classList.add("flex");
// 	});

// 	// Close popup on "X" button click
// 	closeBtn.addEventListener("click", function () {
// 		popup.classList.add("hidden");
// 	});

// 	// Optional: close popup when clicking outside the popup
// 	window.addEventListener("click", function (event) {
// 		if (event.target === popup) {
// 			popup.classList.add("hidden");
// 		}
// 	});

// 	// Listen for the Livewire event to close the form after submission
// 	window.addEventListener("closeQuotePopup", function () {
// 		popup.classList.add("hidden");
// 	});
// });
