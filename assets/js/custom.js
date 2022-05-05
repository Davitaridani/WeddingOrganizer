// Dropdown button bag/keranjang
// function dropdown_bag() {
// 	let bag = document.getElementById("#bag");
// 	if ( ) {
// 	}
// }

$(document).ready(function () {
	var slider = $("#slider-home");
	slider.owlCarousel({
		items: 1,
		loop: true,
		nav: true,
		dits: true,
		autoplay: true,
		autoplaySpeed: 1000,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		animateOut: "fadeOut",
	});
});

// Carousel card '\
$(document).ready(function () {
	var owl_card = $(".testimoni-carousel");
	owl_card.owlCarousel({
		loop: true,
		margin: 20,
		autoplay: true,
		autoplayHoverPause: true,
		smartSpeed: 1400,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 2,
			},
			1000: {
				items: 3,
			},
		},
	});
});

// owl logo
$(document).ready(function () {
	var owl_logo = $("#owl-logo");
	owl_logo.owlCarousel({
		loop: true,
		autoplay: true,
		items: 5,
		autoplaySpeed: 1000,
		autoplayHoverPause: true,
		smartSpeed: 1000,
		responsive: {
			0: {
				items: 2,
			},
			600: {
				items: 3,
			},
			1000: {
				items: 5,
			},
		},
	});
});

// owl Detail Produk
$(document).ready(function () {
	var owl_logo = $("#owl-img-detailProduk");
	owl_logo.owlCarousel({
		loop: true,
		autoplay: true,
		items: 5,
		autoplaySpeed: 1000,
		autoplayHoverPause: true,
		animateOut: "fadeOut",
		smartSpeed: 1000,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 1,
			},
			1000: {
				items: 1,
			},
		},
	});
});

// Navbar
function myFunction() {
	var x = document.getElementById("myTopnav");
	if (x.className === "topnav") {
		x.className += " responsive";
	} else {
		x.className = "topnav";
	}
}
// OWL Carousel Testimoni
$(".items-testimoni").owlCarousel({
	loop: true,
	margin: 10,
	autoplay: true,
	autoplayTimeout: 9000,
	smartSpeed: 1100,
	autoplayHoverPause: true,
	responsive: {
		0: {
			items: 2,
		},
		600: {
			items: 1,
		},
		1000: {
			items: 1,
		},
	},
});

// AOS JS Animasi
// AOS.init();

// COUNTER JS
// const el = document.querySelector(".counter ");

// counterUp(el, {
// 	duration: 1000,
// 	delay: 16,
// });
