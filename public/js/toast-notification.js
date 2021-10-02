/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
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
/*!*****************************************************************************!*\
  !*** ./resources/views/components/toast-notification/toast-notification.ts ***!
  \*****************************************************************************/
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "ToastNotification": () => (/* binding */ ToastNotification)
/* harmony export */ });
function _classCallCheck(instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError("Cannot call a class as a function");
  }
}

function _defineProperties(target, props) {
  for (var i = 0; i < props.length; i++) {
    var descriptor = props[i];
    descriptor.enumerable = descriptor.enumerable || false;
    descriptor.configurable = true;
    if ("value" in descriptor) descriptor.writable = true;
    Object.defineProperty(target, descriptor.key, descriptor);
  }
}

function _createClass(Constructor, protoProps, staticProps) {
  if (protoProps) _defineProperties(Constructor.prototype, protoProps);
  if (staticProps) _defineProperties(Constructor, staticProps);
  return Constructor;
}

var ToastNotification = /*#__PURE__*/function () {
  function ToastNotification() {
    var _this = this;

    _classCallCheck(this, ToastNotification);

    this.displaySuccessMessage = function (message) {
      _this.element.classList.remove("hidden");

      _this.element.classList.add("border-green-600");

      _this.element.classList.add("bg-green-300");

      _this.textElement.innerText = message;
      setTimeout(_this.close, 5000);
    };

    this.displayFailureMessage = function (message) {
      _this.element.classList.remove("hidden");

      _this.element.classList.add("border-red-600");

      _this.element.classList.add("bg-red-300");

      _this.textElement.innerText = message;
      setTimeout(_this.close, 5000);
    };

    this.close = function () {
      _this.element.classList.add("hidden");

      _this.element.classList.remove("border-red-600");

      _this.element.classList.remove("bg-red-300");

      _this.element.classList.remove("border-green-600");

      _this.element.classList.remove("bg-green-300");
    };

    this.element = document.querySelector("toast-notification div");
    this.textElement = this.element.querySelector("span");
  }

  _createClass(ToastNotification, [{
    key: "connectedCallback",
    value: function connectedCallback() {//this.element.addEventListener("click", this.close);
    }
  }]);

  return ToastNotification;
}();
/******/ })()
;