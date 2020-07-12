/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 179);
/******/ })
/************************************************************************/
/******/ ({

/***/ 179:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(180);
__webpack_require__(181);
module.exports = __webpack_require__(182);


/***/ }),

/***/ 180:
/***/ (function(module, exports) {

$('document').ready(function () {

  //======> Testimonial Slider
  $('.testimonial-slider').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    appendArrows: '.testimonial-slider-wrapper .slider-btns',
    prevArrow: '<button type="button" class="slick-prev"><i class="icon icon-tail-left"></i></button>',
    nextArrow: '<button type="button" class="slick-next"><i class="icon icon-tail-right"></i></button>',
    responsive: [{
      breakpoint: 991,
      settings: {
        slidesToShow: 2

      }
    }, {
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        autoplay: true
      }
    }]
  });

  //======>  Mobile Menu Activation
  $('.main-navigation').meanmenu({
    meanScreenWidth: "992",
    meanMenuContainer: '.mobile-menu',
    meanMenuClose: "<i class='icon icon-simple-remove'></i>",
    meanMenuOpen: "<i class='icon icon-menu-34'></i>",
    meanExpand: ""
  });
});

/***/ }),

/***/ 181:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 182:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })

/******/ });