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

// owl logo partner Kerja
$(document).ready(function () {
	var owl_logo = $("#owl-logo");
	owl_logo.owlCarousel({
		loop: true,
		autoplay: true,
		items: 5,
		autoplaySpeed: 700,
		autoplayHoverPause: true,
		smartSpeed: 1000,
		responsive: {
			0: {
				items: 1,
			},
			600: {
				items: 2,
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

// Home sect 4 (OWL Layanan)
$(document).ready(function () {
	var owl_layanan = $("#owl_layanan");
	owl_layanan.owlCarousel({
		loop: true,
		autoplay: true,
		items: 3,
		autoplaySpeed: 700,
		autoplayHoverPause: true,
		smartSpeed: 1000,
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
	autoplayTimeout: 5000,
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

// Button scrolll top
var myButton = $("#btnScrollTop");

$(window).scroll(function () {
	if ($(window).scrollTop() > 300) {
		$("#btnScrollTop").fadeIn();
	} else {
		$("#btnScrollTop").fadeOut();
	}
});

myButton.on("click", function (e) {
	e.preventDefault();
	$("html, body").animate({ scrollTop: 0 }, "100");
});
// End Scroll Top

// AOS JS Animasi
// AOS.init();
