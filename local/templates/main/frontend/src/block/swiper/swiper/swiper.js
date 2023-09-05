import { Swiper, Navigation, Pagination, Autoplay } from 'swiper/swiper.esm.js';
document.addEventListener("DOMContentLoaded", function(){
	Swiper.use([Navigation, Pagination, Autoplay]);
	const swiper = new Swiper('.swiper', {
		loop: true,
		spaceBetween: 30,
		centeredSlides: true,
		autoplay: {
			delay: 2000,
			disableOnInteraction:false,
		},
		navigation:{
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
			type: 'progressbar',
		},
	});
	swiper;
});

