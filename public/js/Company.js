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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/Company.js":
/*!*********************************!*\
  !*** ./resources/js/Company.js ***!
  \*********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Company; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Company = function Company() {
  _classCallCheck(this, Company);

  this.company_logo = "/atoc_assets/images/upload_logo_icon.jpg";
  this.company_name = null;
  this.company_email = null;
  this.country_code = "+86";
  this.company_phone = null;
  this.company_password = null;
  this.company_password_verification = null;
  this.verification_code = null;
  this.guest_id = null;
  this.guest_token = null;
  this.api_key = null;
  this.company_address_one = null;
  this.company_address_two = null;
  this.company_province = null;
  this.company_city = null;
  this.company_token = null;
  this.company_id = null;
  this.company_type = null;
  this.company_subtype = null;
  this.company_description = null;
  this.browser = true;
  this.error = {
    "company_logo": null,
    "company_name": null,
    "company_phone": null,
    "company_password": null,
    "verification_code": null,
    "guest_id": null,
    "guest_token": null,
    "api_key": null,
    "company_address_one": null,
    "company_province": null,
    "company_city": null,
    "company_token": null,
    "company_id": null,
    "company_type": null,
    "company_subtype": null,
    "company_description": null
  };
  this.types = [["Civil Aircraft", "General Aviation Aircraft", "Commercial Heavy Aircraft", "Military Aircaft", "Helicopters", "Unmanned aerial vehicles", "Missiles", "Space launchers", "Spacecraft", "Airships", "Propulsion", "Avionics", "Other"], ["Fishing industry", "Timer Industry", "Tobacco Industry", "Other"], ["Pharmaceutical Industry", "Other"], ["Software Industry", "Other"], ["Other"], ["Arms industry", "Other"], ["Other"], ["Electrical Power", "Petroleum Industry", "Other"], ["Other"], ["Insurance industry", "Other"], ["Fruit Production", "Other"], ["Hospital facilities", "Other"], ["Motion industry", "Other"], ["Automotive Industry", "Electronic Industry", "Pulp and paper", "Steel Industry", "Ship building", "Other"], ["Broadcasting", "Film Industry", "Music Industry", "News Media", "Publishing", "World Wide Web", "Other"], ["Gold mining", "Mineral mining", "Other"], ["Internet", "Other"], ["Other"], ["Other"], ["Other"], ["Other"]];
};



/***/ }),

/***/ 3:
/*!***************************************!*\
  !*** multi ./resources/js/Company.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/farooqy/Documents/Noor/sites/feizhonglaravel/resources/js/Company.js */"./resources/js/Company.js");


/***/ })

/******/ });