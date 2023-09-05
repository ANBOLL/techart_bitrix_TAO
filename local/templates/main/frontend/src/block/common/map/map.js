/*eslint-disable no-undef*/
document.addEventListener("DOMContentLoaded", function(){
	document.getElementById('tula').onclick = function() {
		document.getElementById('mapmoscow').classList.add('active');
		document.getElementById('map').classList.remove('active');
		document.getElementById('tula').classList.add('activebut');
		document.getElementById('moscow').classList.remove('activebut');
	}
	document.getElementById('moscow').onclick = function() {
		document.getElementById('map').classList.add('active');
		document.getElementById('mapmoscow').classList.remove('active');
		document.getElementById('moscow').classList.add('activebut');
		document.getElementById('tula').classList.remove('activebut');
	}
	ymaps.ready(function () {
		var myMap = new ymaps.Map('map', {
				center: [54.200892, 37.584779],
				zoom: 14
			}, {
				searchControlProvider: 'yandex#search'
			}),
			myPlacemark = new ymaps.Placemark([54.200892, 37.584779], {
				hintContent: 'Офис Techart',
				balloonContent: 'г. Тула, ул. Ф. Смирнова ул., д. 28',
			}, {
				preset: 'islands#greenDotIconWithCaption',
				iconColor: '#841844',
				iconImageSize: [30, 42],
				iconImageOffset: [-5, -38]
			})
		myMap.geoObjects
			.add(myPlacemark);
	});
	ymaps.ready(function () {
		var myMap = new ymaps.Map('mapmoscow', {
				center: [55.679138, 37.630131],
				zoom: 14
			}, {
				searchControlProvider: 'yandex#search'
			}),
			myPlacemark = new ymaps.Placemark([55.679138, 37.630131], {
				hintContent: 'Офис Techart',
				balloonContent: 'г. Москва, Варшавское шоссе, д. 47, к. 4',
			}, {
				preset: 'islands#greenDotIconWithCaption',
				iconColor: '#841844',
				iconImageSize: [30, 42],
				iconImageOffset: [-5, -38]
			})
		myMap.geoObjects
			.add(myPlacemark);
	});
});
