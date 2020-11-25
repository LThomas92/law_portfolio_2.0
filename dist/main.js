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
/******/ 	__webpack_require__.p = "/dist/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
__webpack_require__(2);

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 2 */
/***/ (function(module, exports) {

var $ = jQuery.noConflict();
let windowSize = false;
let windowHeight = $(window).height();
let gutenbergScrollAnims = false;
let blockTriggerHeight = $(window).height() * .33;

$(document).ready(function () {
  //SEARCH ICON
  $('.search-icon').click(function () {
    $('.search-overlay').addClass('active');
    $('.close-btn').show();
    $('.search-icon').hide();
  });

  //CLOSE BTN
  $('.close-btn').on('click', function () {
    $('.search-overlay').removeClass('active');
    $('.close-btn').hide();
    $('.search-icon').show();
  });

  //MOBILE 
  //HAMBURGER MENU
  $('.mobile-close-btn').hide();
  $('.hamburger-menu').on('click', function () {
    $('.menu-overlay').show();
    $('.hamburger-menu').hide();
    $('.mobile-close-btn').show();
  });

  //CLOSE BTN

  $('.mobile-close-btn').on('click', function () {
    $('.menu-overlay').hide();
    $('.mobile-close-btn').hide();
    $('.hamburger-menu').show();
  });

  if (jQuery('.project-block-section > *').length && !(window.location.hash != "" && jQuery(window.location.hash).length)) {
    gutenbergScrollAnims = true;
    jQuery('.project-block-section > *').each(function () {
      let offset = jQuery(this).get(0).getBoundingClientRect().top;;
      jQuery(this).data('offset', offset);
      jQuery(this).addClass('to-reveal');
    });

    let numRevealed = 0;
    jQuery('.project-block-section .to-reveal').each(function () {
      if (jQuery(window).scrollTop() + windowHeight - blockTriggerHeight >= jQuery(this).data('offset')) {
        numRevealed++;
        const thisRef = $(this);
        setTimeout(function () {
          thisRef.removeClass('to-reveal');
          thisRef.addClass('revealed');
        }, 700 + numRevealed * 600);
      }
    });
  }

  $(window).scroll(() => {
    let scrolled = $(window).scrollTop();

    // gutenberg scroll anims
    if (gutenbergScrollAnims) {
      $('.project-block-section .to-reveal').each(function () {
        console.log($(this).data('offset'));
        console.log(scrolled + windowHeight - blockTriggerHeight);
        if (scrolled + windowHeight - blockTriggerHeight >= $(this).data('offset')) {
          $(this).removeClass('to-reveal');
          $(this).addClass('revealed');
        }
      });
    }
  });

  $(window).resize(() => {

    if (jQuery('.project-block-section > *').length && !(window.location.hash != "" && jQuery(window.location.hash).length)) {
      gutenbergScrollAnims = true;
      // console.log(window.scrollY + $(window).height());
      // console.log($('.gutenberg-styles > *'));
      jQuery('.project-block-section > *').each(function () {
        let offset = jQuery(this).get(0).getBoundingClientRect().top;
        // console.log(offset);
        jQuery(this).data('offset', offset);
        jQuery(this).addClass('to-reveal');
      });

      let numRevealed = 0;
      jQuery('.project-block-section .to-reveal').each(function () {
        if (jQuery(window).scrollTop() + (windowHeight - blockTriggerHeight) >= jQuery(this).data('offset')) {
          numRevealed++;
          const thisRef = $(this);
          setTimeout(function () {
            thisRef.removeClass('to-reveal');
            thisRef.addClass('revealed');
          }, 700 + numRevealed * 600);
        }
      });
    }
  });
});

/***/ })
/******/ ]);
//# sourceMappingURL=main.js.map