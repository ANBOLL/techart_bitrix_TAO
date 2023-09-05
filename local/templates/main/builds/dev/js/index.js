/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/block/common/common.js":
/*!************************************!*\
  !*** ./src/block/common/common.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

function requireAll(r) {
  r.keys().map(r);
}
requireAll(__webpack_require__("./src/block/common sync recursive ^\\.\\/[^/]+\\/[^/.]+\\.(js%7Ccss%7Cscss%7Csass%7Cless)$"));

/***/ }),

/***/ "./src/block/common/map/map.js":
/*!*************************************!*\
  !*** ./src/block/common/map/map.js ***!
  \*************************************/
/***/ (() => {

/*eslint-disable no-undef*/
document.addEventListener("DOMContentLoaded", function () {
  document.getElementById('tula').onclick = function () {
    document.getElementById('mapmoscow').classList.add('active');
    document.getElementById('map').classList.remove('active');
    document.getElementById('tula').classList.add('activebut');
    document.getElementById('moscow').classList.remove('activebut');
  };
  document.getElementById('moscow').onclick = function () {
    document.getElementById('map').classList.add('active');
    document.getElementById('mapmoscow').classList.remove('active');
    document.getElementById('moscow').classList.add('activebut');
    document.getElementById('tula').classList.remove('activebut');
  };
  ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
        center: [54.200892, 37.584779],
        zoom: 14
      }, {
        searchControlProvider: 'yandex#search'
      }),
      myPlacemark = new ymaps.Placemark([54.200892, 37.584779], {
        hintContent: 'Офис Techart',
        balloonContent: 'г. Тула, ул. Ф. Смирнова ул., д. 28'
      }, {
        preset: 'islands#greenDotIconWithCaption',
        iconColor: '#841844',
        iconImageSize: [30, 42],
        iconImageOffset: [-5, -38]
      });
    myMap.geoObjects.add(myPlacemark);
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
        balloonContent: 'г. Москва, Варшавское шоссе, д. 47, к. 4'
      }, {
        preset: 'islands#greenDotIconWithCaption',
        iconColor: '#841844',
        iconImageSize: [30, 42],
        iconImageOffset: [-5, -38]
      });
    myMap.geoObjects.add(myPlacemark);
  });
});

/***/ }),

/***/ "./src/block/common/multimenu/multimenu.js":
/*!*************************************************!*\
  !*** ./src/block/common/multimenu/multimenu.js ***!
  \*************************************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  const btn = document.querySelector('.icon');
  btn.addEventListener('click', function () {
    myFunction();
  });
  btn.addEventListener('');
});
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

/***/ }),

/***/ "./src/block/common/feedback/feedback.scss":
/*!*************************************************!*\
  !*** ./src/block/common/feedback/feedback.scss ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/block/common/footer/footer.scss":
/*!*********************************************!*\
  !*** ./src/block/common/footer/footer.scss ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/block/common/header/header.scss":
/*!*********************************************!*\
  !*** ./src/block/common/header/header.scss ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/block/common/layoutfeedback/layoutfeedback.scss":
/*!*************************************************************!*\
  !*** ./src/block/common/layoutfeedback/layoutfeedback.scss ***!
  \*************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/block/common/loginform/loginform.scss":
/*!***************************************************!*\
  !*** ./src/block/common/loginform/loginform.scss ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/block/common/map/map.scss":
/*!***************************************!*\
  !*** ./src/block/common/map/map.scss ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/block/common/multimenu/multimenu.scss":
/*!***************************************************!*\
  !*** ./src/block/common/multimenu/multimenu.scss ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/style/layout/base.scss":
/*!************************************!*\
  !*** ./src/style/layout/base.scss ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./src/block/common sync recursive ^\\.\\/[^/]+\\/[^/.]+\\.(js%7Ccss%7Cscss%7Csass%7Cless)$":
/*!*************************************************************************************!*\
  !*** ./src/block/common/ sync ^\.\/[^/]+\/[^/.]+\.(js%7Ccss%7Cscss%7Csass%7Cless)$ ***!
  \*************************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

var map = {
	"./feedback/feedback.scss": "./src/block/common/feedback/feedback.scss",
	"./footer/footer.scss": "./src/block/common/footer/footer.scss",
	"./header/header.scss": "./src/block/common/header/header.scss",
	"./layoutfeedback/layoutfeedback.scss": "./src/block/common/layoutfeedback/layoutfeedback.scss",
	"./loginform/loginform.scss": "./src/block/common/loginform/loginform.scss",
	"./map/map.js": "./src/block/common/map/map.js",
	"./map/map.scss": "./src/block/common/map/map.scss",
	"./multimenu/multimenu.js": "./src/block/common/multimenu/multimenu.js",
	"./multimenu/multimenu.scss": "./src/block/common/multimenu/multimenu.scss"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./src/block/common sync recursive ^\\.\\/[^/]+\\/[^/.]+\\.(js%7Ccss%7Cscss%7Csass%7Cless)$";

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!****************************!*\
  !*** ./src/entry/index.js ***!
  \****************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var style_layout_base__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! style/layout/base */ "./src/style/layout/base.scss");
/* harmony import */ var block_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! block/common */ "./src/block/common/common.js");
/* harmony import */ var block_common__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(block_common__WEBPACK_IMPORTED_MODULE_1__);


})();

/******/ })()
;
//# sourceMappingURL=index.js.map