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
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
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

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Company =
/*#__PURE__*/
function () {
  function Company() {
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
    this.company_needs = [];
    this.is_verified = false;
    this.company_address_one = null;
    this.company_address_two = null;
    this.company_province = null;
    this.company_city = null;
    this.company_token = null;
    this.company_id = null;
    this.company_type = null;
    this.company_subtype = null;
    this.company_description = null;
    this.company_hasLicense = null;
    this.company_license = null;
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
    this.types = [["Civil Aircraft", "General Aviation Aircraft", "Commercial Heavy Aircraft", "Military Aircaft", "Helicopters", "Unmanned aerial vehicles", "Missiles", "Space launchers", "Spacecraft", "Airships", "Propulsion", "Avionics"], ["Fishing industry", "Timer Industry", "Tobacco Industry", "Coffee industry"], ["Face make up", "Slim products"], ["Pharmaceutical Industry"], ["Software Industry"], ["Metals", "Bricks"], ["Arms industry"], ["Books", "Pens"], ["Electrical Power", "Petroleum Industry"], ["Dj Equeipments"], ["Insurance industry"], ["Fruit Production"], ["Hospital facilities"], ["Motion industry"], ["Automotive Industry", "Electronic Industry", "Pulp and paper", "Steel Industry", "Ship building"], ["Broadcasting", "Film Industry", "Music Industry", "News Media", "Publishing", "World Wide Web"], ["Gold mining", "Mineral mining"], ["Internet", "Signal Boosters"], ["Brigdes", "Road staff"], ["Water bottles", "Drinks"], ["Heavy products"], ["Other"]];
  }

  _createClass(Company, [{
    key: "getBasicInfo",
    value: function getBasicInfo() {
      return {
        company_logo: this.company_logo,
        company_name: this.company_name,
        company_email: this.company_email,
        company_phone: this.country_code + this.company_phone,
        verification_code: this.verification_code,
        company_password: this.company_password,
        company_password_verification: this.company_password_verification
      };
    }
  }, {
    key: "getAddresInfo",
    value: function getAddresInfo() {
      return {
        company_address_one: this.company_address_one,
        company_address_two: this.company_address_two,
        company_province: this.company_province,
        company_country: this.company_city
      };
    }
  }, {
    key: "getTypeInfo",
    value: function getTypeInfo() {
      return {
        company_type: this.company_type,
        company_subtype: this.company_subtype,
        company_description: this.company_description
      };
    }
  }, {
    key: "getLoginInfo",
    value: function getLoginInfo() {
      return {
        company_email: this.company_email,
        company_password: this.company_password
      };
    }
  }]);

  return Company;
}();



/***/ }),

/***/ 5:
/*!***************************************!*\
  !*** multi ./resources/js/Company.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/noorfarooqy/Documents/Noor/sites/feizhonglaravel/resources/js/Company.js */"./resources/js/Company.js");


/***/ })

/******/ });