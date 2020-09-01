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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/bargainmodel.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/bargainmodel.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
module.exports = {
  data: function data() {
    console.log('child ready');
    return {
      child: 1,
      version: 1,
      demand_quantity: null,
      demand_price: this.product.product_price,
      demand_description: null,
      payment_method: "Cheque",
      in_isLoading: this.isLoading
    };
  },
  methods: {
    disMissDemandModal: function disMissDemandModal() {
      this.showModel = false;
      this.$emit('close-quotation-modal');
    },
    sendDemandQuotation: function sendDemandQuotation() {
      this.$emit('demand-quotation-ready', this.demand_price, this.demand_quantity, this.payment_method, this.demand_description, this.product.product_id, this.product.product_token, this.product.product_type);
      this.in_isLoading = true;
    },
    isLoadingRequest: function isLoadingRequest() {
      if (this.in_isLoading) return 'spinner-border text-ligh ';
      return '';
    },
    getQuotationUrl: function getQuotationUrl() {
      return this.quotation_file.url;
      this.in_isLoading = false;
    }
  },
  props: ["product", "Error", "Success", "isLoading", "quotation_file"],
  watch: {
    'isLoading': function isLoading(oldvalue, newvalue) {
      this.in_isLoading = this.isLoading;
    }
  }
};

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/companylist.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/companylist.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
module.exports = {
  data: function data() {
    console.log('child ready');
    return {
      'companylist': 1,
      'version': 1
    };
  },
  props: ["comp_name", "comp_logo", "comp_type", "is_verified", "comp_rate", "comp_id", "comp_token"],
  filters: {
    truncate: function truncate(text, length, suffix) {
      return text.substring(0, length) + suffix;
    }
  },
  methods: {
    getCategoryLink: function getCategoryLink() {
      return "/comp/category/" + this.comp_type;
    },
    getCompLink: function getCompLink() {
      return "/comp/view/" + this.comp_id + "/" + this.comp_token;
    }
  }
};

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/error.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/error.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
module.exports = {
  data: function data() {
    console.log('child ready');
    return {
      'child': 1,
      'version': 1
    };
  },
  methods: {
    disMissErrorModel: function disMissErrorModel() {
      this.showModel = false;
      this.$emit('close-error-modal');
    }
  },
  props: ["error_text"]
};

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loader.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loader.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

//
//
//
//
//
//
module.exports = {
  data: function data() {
    console.log('child ready');
    return {
      'loader': 1,
      'version': 1
    };
  },
  props: ["showLoader"]
};

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/productlist.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/productlist.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
module.exports = {
  data: function data() {
    return {
      postlist: 1,
      version: 2,
      in_comment_text: this.comment_text,
      post_id: this.product_id === undefined ? this.status_id : this.product_id,
      post_token: this.product_token === undefined ? this.status_generated_token : this.product_token,
      comment_reply: null,
      show_reply_box: -1,
      in_comments: this.comments,
      requestLoading: false
    };
  },
  props: ["post_type", "host_profile", "comment_text", "comments", "likes", "host_id", "host_token", "is_logged_in", "generated_token", "product_currency", "product_description", "product_files", "product_token", "product_id", "product_name", "product_price", "product_unit", "product_company", "created_at", "status_image", "status_text", "status_time", "status_id", "status_generated_token", "status_files", "uploaded_by_name", "uploaded_by_picture", "uploaded_by_company"],
  filters: {
    // truncate: function(text, length, suffix) {
    //     return text.substring(0, length) + suffix;
    // },
    addClassMorePhotos: function addClassMorePhotos(url) {
      if (isLastPhoto(url)) return "more-photos";
      return "invalidclass";
    }
  },
  methods: {
    truncate: function truncate(status) {
      if (status.length > 150) return status.substring(0, 150) + "...";
      return status;
    },
    getStatusFiles: function getStatusFiles() {
      if (this.status_files.length > 2) return this.status_files.slice(0, 2);
      return this.status_files;
    },
    isLastPhoto: function isLastPhoto(url) {
      var l = this.status_files.length;
      if (l <= 1) return false;
      if (this.status_files[1].file_url === url && l > 2) return true;
      return false;
    },
    addClassMorePhotos: function addClassMorePhotos(url) {
      if (this.isLastPhoto(url)) return "more-photos";
      return "";
    },
    getStatusLink: function getStatusLink() {
      return "/status/" + this.status_id + "/" + this.status_generated_token;
    },
    isStatusStatus: function isStatusStatus() {
      return this.post_type === "status";
    },
    isStatusProduct: function isStatusProduct() {
      return this.post_type === "product";
    },
    submitComment: function submitComment(type) {
      var comment = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
      if (this.requestLoading) return;
      this.requestLoading = true;
      var comment_text;
      if (this.in_comment_text === null && this.comment_reply === null) return;else if (type === "comment" && comment === null) return;else if (type === "comment") {
        this.post_id = comment.id;
        this.post_token = comment.comment_token;
        comment_text = this.comment_reply;
      } else {
        this.post_id = this.status_id === undefined ? this.product_id : this.status_id;
        this.post_token = this.status_generated_token === undefined ? this.generated_token : this.status_generated_token;
        comment_text = this.in_comment_text;
      }
      if (type === "comment") this.$emit("submit-comment", type, this.post_id, this.post_token, comment_text, this.clearCommentReplyText);else {
        this.$emit("submit-comment", type, this.post_id, this.post_token, comment_text, this.clearCommentText);
      }
    },
    clearCommentText: function clearCommentText(data) {
      this.in_comments.push(data);
      this.in_comment_text = null;
      this.requestLoading = false;
    },
    clearCommentReplyText: function clearCommentReplyText(data) {
      var i = 0;

      for (i = 0; i < this.in_comments.length; i++) {
        if (this.in_comments[i].comment_token === data.status_token) this.in_comments[i].comment_replies.push(data);
      }

      this.comment_reply = null;
      this.requestLoading = false;
    },
    getCommentProfile: function getCommentProfile(comment) {
      if (comment.host_type === "comp") return comment.comp_profile.comp_logo;else return comment.person_profile.user_profile;
    },
    getCommentName: function getCommentName(comment) {
      if (comment.host_type === "comp") return comment.comp_profile.comp_name;else return comment.person_profile.user_fname + " " + comment.person_profile.user_sname;
    },
    showCommentReplyBox: function showCommentReplyBox(comment) {
      this.show_reply_box = comment.id;
    },
    isReplyTriggered: function isReplyTriggered(comment_id) {
      return this.show_reply_box === comment_id;
    },
    resetReplyBox: function resetReplyBox() {
      this.show_reply_box = -1;
    },
    hasChildren: function hasChildren(comment) {
      if (comment.comment_replies.length > 0) return "has-children";
      return false;
    },
    hasCommented: function hasCommented(comment) {
      if (comment.host_type === "comp") {
        if (comment.comp_profile.comp_token === this.host_token) return "color: #ff5e3a";else return "text-decoration:none";
      } else {
        if (comment.person_profile.user_token === this.host_token) return "color: #ff5e3a";else return "text-decoration:none";
      }
    },
    isLoggedIn: function isLoggedIn() {
      return this.is_logged_in;
    },
    getProductLink: function getProductLink() {
      return "/product/" + this.product_id + "/" + this.product_token;
    },
    viewProduct: function viewProduct() {
      this.$emit("view-product-details", this.post_id, this.post_token);
    },
    viewStatus: function viewStatus() {
      this.$emit("view-status-details", this.post_id, this.post_token);
    },
    makeLineText: function makeLineText(text) {
      return this.truncate(text).replace(/\n/g, "<br />");
    }
  }
};

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/statuslist.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/statuslist.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
module.exports = {
  data: function data() {
    console.log('child ready');
    return {
      'postlist': 1,
      'version': 1
    };
  },
  props: ["status_image", "status_text", "status_time", "status_id", "status_token"],
  filters: {// truncate: function (text, length, suffix) {
    //         return text.substring(0, length) + suffix;
    // },
  },
  methods: {
    truncate: function truncate(text) {
      if (text.length > 150) return text.substring(0, 150) + '...';
      return text;
    }
  }
};

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/statuslistv2.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/statuslistv2.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
module.exports = {
  data: function data() {
    console.log("child ready");
    return {
      postlist: 1,
      version: 2
    };
  },
  props: ["status_image", "status_text", "status_time", "status_id", "status_generated_token", "status_files", "uploaded_by_name", "uploaded_by_picture"],
  filters: {
    // truncate: function(text, length, suffix) {
    // 	return text.substring(0, length) + suffix;
    // },
    addClassMorePhotos: function addClassMorePhotos(url) {
      if (isLastPhoto(url)) return "more-photos";
      return "invalidclass";
    }
  },
  methods: {
    truncate: function truncate(text) {
      if (text.length > 150) return text.substring(0, 150) + "...";
      return text;
    },
    isLastPhoto: function isLastPhoto(url) {
      var l = this.status_files.length;
      if (l <= 1) return false;
      if (this.status_files[1].file_url === url && l > 2) return true;
      return false;
    },
    addClassMorePhotos: function addClassMorePhotos(url) {
      if (this.isLastPhoto(url)) return "more-photos";
      return "";
    },
    getStatusLink: function getStatusLink() {
      return "/status/" + this.status_id + "/" + this.status_generated_token;
    }
  }
};

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/trendingcompanylist.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/trendingcompanylist.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
module.exports = {
  data: function data() {
    console.log('child ready');
    return {
      'postlist': 1,
      'version': 1
    };
  },
  props: ["company_name", "company_token", "company_id", "company_logo", "company_type"],
  filters: {
    truncate: function truncate(text, length, suffix) {
      return text.substring(0, length) + suffix;
    }
  },
  methods: {
    shortenName: function shortenName(name) {
      if (name.length > 15) return name.substr(0, 15);
      return name;
    }
  }
};

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/viewpostdetails.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/viewpostdetails.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
module.exports = {
  data: function data() {
    console.log('child ready');
    return {
      'child': 1,
      'version': 1,
      in_comment_text: this.comment_text,
      post_id: this.product_id === undefined ? this.status_id : this.product_id,
      post_token: this.product_token === undefined ? this.status_generated_token : this.product_token,
      comment_reply: null,
      show_reply_box: -1,
      in_comments: this.comments,
      postIsStatus: this.post_type === "status",
      postIsProduct: this.post_type === "product"
    };
  },
  methods: {
    disMissModal: function disMissModal() {
      this.showModel = false;
      this.$emit('close-postdetail-modal');
    },
    isStatusStatus: function isStatusStatus() {
      return this.post_type === "status";
    },
    isStatusProduct: function isStatusProduct() {
      return this.post_type === "product";
    },
    isActive: function isActive(key) {
      return key === 0 ? "active" : '';
    },
    hasChildren: function hasChildren(comment) {
      if (comment.comment_replies.length > 0) return 'has-children';
      return false;
    },
    getCommentProfile: function getCommentProfile(comment) {
      if (comment.host_type === "comp") return comment.comp_profile.comp_logo;else return comment.person_profile.user_profile;
    },
    getCommentName: function getCommentName(comment) {
      if (comment.host_type === "comp") return comment.comp_profile.comp_name;else return comment.person_profile.user_fname + ' ' + comment.person_profile.user_sname;
    },
    hasCommented: function hasCommented(comment) {
      if (comment.host_type === "comp") {
        if (comment.comp_profile.comp_token === this.host_token) return "color: #ff5e3a";else return 'text-decoration:none';
      } else {
        if (comment.person_profile.user_token === this.host_token) return "color: #ff5e3a";else return 'text-decoration:none';
      }
    },
    isLoggedIn: function isLoggedIn() {
      return this.is_logged_in;
    },
    submitComment: function submitComment(type) {
      var comment = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
      var comment_text;
      if (this.in_comment_text === null && this.comment_reply === null) return;else if (type === "comment" && comment === null) return;else if (type === "comment") {
        this.post_id = comment.id;
        this.post_token = comment.comment_token;
        comment_text = this.comment_reply;
      } else {
        this.post_id = this.status_id === undefined ? this.product_id : this.status_id;
        this.post_token = this.status_generated_token === undefined ? this.generated_token : this.status_generated_token;
        comment_text = this.in_comment_text;
      }
      if (type === "comment") this.$emit('submit-comment', type, this.post_id, this.post_token, comment_text, this.clearCommentReplyText);else {
        this.$emit('submit-comment', type, this.post_id, this.post_token, comment_text, this.clearCommentText);
      }
    },
    clearCommentReplyText: function clearCommentReplyText(data) {
      var i = 0;

      for (i = 0; i < this.in_comments.length; i++) {
        if (this.in_comments[i].comment_token === data.status_token) this.in_comments[i].comment_replies.push(data);
      }

      this.comment_reply = null;
    },
    showCommentReplyBox: function showCommentReplyBox(comment) {
      this.show_reply_box = comment.id;
    },
    isReplyTriggered: function isReplyTriggered(comment_id) {
      return this.show_reply_box === comment_id;
    },
    resetReplyBox: function resetReplyBox() {
      this.show_reply_box = -1;
    },
    bargainModel: function bargainModel(product_id, product_token) {
      this.$emit('toggle-bargain-model', product_id, product_token);
    },
    makeLineText: function makeLineText(text) {
      return text.replace(/\n/g, "<br />");
    }
  },
  props: ["post_type", "host_profile", "comment_text", "comments", "likes", "host_id", "host_token", "is_logged_in", "host_type", "generated_token", "product_currency", "product_description", "product_files", "product_token", "product_id", "product_name", "product_price", "product_unit", "product_company", "created_at", "status_image", "status_text", "status_time", "status_id", "status_generated_token", "status_files", "uploaded_by_name", "uploaded_by_picture", "uploaded_by_company"]
};

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/bargainmodel.vue?vue&type=template&id=0a509ca2&":
/*!***************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/bargainmodel.vue?vue&type=template&id=0a509ca2& ***!
  \***************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    {
      staticClass: "modal",
      staticStyle: { display: "block" },
      attrs: { id: "myModal" }
    },
    [
      _c(
        "div",
        { staticClass: "modal-content", staticStyle: { width: "60%" } },
        [
          _c("div", { staticClass: "card" }, [
            _c("div", { staticClass: "card-header" }, [
              _c("h3", { staticClass: "title" }, [
                _vm._v("\n                    Product quotation "),
                _c(
                  "span",
                  {
                    staticClass: "close-modal",
                    on: {
                      click: function($event) {
                        $event.preventDefault()
                        return _vm.disMissDemandModal($event)
                      }
                    }
                  },
                  [_vm._v("×")]
                )
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "card-body" }, [
              _c("div", { staticClass: "table-responsive" }, [
                _c("table", { staticClass: "table" }, [
                  _vm._m(0),
                  _vm._v(" "),
                  _c("tbody", [
                    _c("tr", [
                      _c("th", { attrs: { scope: "row" } }, [
                        _vm._v(_vm._s(_vm.product.product_name))
                      ]),
                      _vm._v(" "),
                      _c("td", [
                        _vm._v(
                          " " + _vm._s(_vm.product.product_description) + " "
                        )
                      ]),
                      _vm._v(" "),
                      _c("td", [
                        _vm._v(
                          " " +
                            _vm._s(_vm.product.product_currency) +
                            " " +
                            _vm._s(_vm.product.product_price) +
                            " per\n                                    " +
                            _vm._s(_vm.product.product_unit) +
                            " "
                        )
                      ])
                    ])
                  ])
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "card" }, [
                _c("div", { staticClass: "card-header" }, [
                  _vm._v(
                    "\n                        Add quotation details.\n                    "
                  )
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "card-body" }, [
                  _c("div", { staticClass: "form-group" }, [
                    _c("label", { staticClass: "label" }, [
                      _vm._v("How much (quanity) do you need ? ")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticStyle: { display: "flex" } }, [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.demand_quantity,
                            expression: "demand_quantity"
                          }
                        ],
                        staticClass: "form-control col-md-8 col-lg-8",
                        attrs: {
                          type: "number",
                          placeholder: "Enter quantity"
                        },
                        domProps: { value: _vm.demand_quantity },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.demand_quantity = $event.target.value
                          }
                        }
                      }),
                      _vm._v(" "),
                      _c("input", {
                        staticClass: "form-control disabled col-md-4 col-lg-4",
                        attrs: { type: "text", disabled: "" },
                        domProps: { value: _vm.product.product_unit }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group" }, [
                    _c("label", { staticClass: "label" }, [
                      _vm._v(
                        "How much do you want to pay for each " +
                          _vm._s(_vm.product.product_unit) +
                          " ?\n                            "
                      )
                    ]),
                    _vm._v(" "),
                    _c("div", { staticStyle: { display: "flex" } }, [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.demand_price,
                            expression: "demand_price"
                          }
                        ],
                        staticClass: "form-control col-md-8 col-lg-8",
                        attrs: { type: "number", placeholder: "Enter Price" },
                        domProps: { value: _vm.demand_price },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.demand_price = $event.target.value
                          }
                        }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group" }, [
                    _c("label", { staticClass: "label" }, [
                      _vm._v(
                        "Do you want to describe more about your demand ? "
                      )
                    ]),
                    _vm._v(" "),
                    _c("textarea", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.demand_description,
                          expression: "demand_description"
                        }
                      ],
                      staticClass: "form-control",
                      attrs: {
                        type: "number",
                        placeholder: "Additional description?"
                      },
                      domProps: { value: _vm.demand_description },
                      on: {
                        input: function($event) {
                          if ($event.target.composing) {
                            return
                          }
                          _vm.demand_description = $event.target.value
                        }
                      }
                    })
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group" }, [
                    _c("label", { staticClass: "label" }, [
                      _vm._v("How do you plan to pay ? ")
                    ]),
                    _vm._v(" "),
                    _c(
                      "select",
                      {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.payment_method,
                            expression: "payment_method"
                          }
                        ],
                        attrs: { name: "", id: "" },
                        on: {
                          change: function($event) {
                            var $$selectedVal = Array.prototype.filter
                              .call($event.target.options, function(o) {
                                return o.selected
                              })
                              .map(function(o) {
                                var val = "_value" in o ? o._value : o.value
                                return val
                              })
                            _vm.payment_method = $event.target.multiple
                              ? $$selectedVal
                              : $$selectedVal[0]
                          }
                        }
                      },
                      [
                        _c("option", { attrs: { value: "Cheque" } }, [
                          _vm._v("Cheque")
                        ]),
                        _vm._v(" "),
                        _c("option", { attrs: { value: "Wire Transfer" } }, [
                          _vm._v("Wire Transfer")
                        ]),
                        _vm._v(" "),
                        _c("option", { attrs: { value: "Wechat Pay" } }, [
                          _vm._v("Wechat Pay")
                        ]),
                        _vm._v(" "),
                        _c("option", { attrs: { value: "AliPay" } }, [
                          _vm._v("AliPay")
                        ])
                      ]
                    )
                  ]),
                  _vm._v(" "),
                  _vm.Error.visible
                    ? _c("div", { staticClass: "form-group" }, [
                        _c("label", { staticClass: "label" }, [
                          _vm._v(_vm._s(_vm.Error.error_title) + " ")
                        ]),
                        _vm._v(" "),
                        _c("p", { staticClass: "danger text-danger" }, [
                          _vm._v(_vm._s(_vm.Error.error_text))
                        ])
                      ])
                    : _vm._e(),
                  _vm._v(" "),
                  _vm.Success.visible
                    ? _c("div", { staticClass: "form-group" }, [
                        _c("label", { staticClass: "label" }, [
                          _vm._v(_vm._s(_vm.Success.success_title) + " ")
                        ]),
                        _vm._v(" "),
                        _c("p", { staticClass: "success text-success" }, [
                          _vm._v(_vm._s(_vm.Success.success_text))
                        ])
                      ])
                    : _vm._e(),
                  _vm._v(" "),
                  _vm.quotation_file.visible
                    ? _c("div", { staticClass: "form-group" }, [
                        _c(
                          "a",
                          {
                            attrs: {
                              href: _vm.getQuotationUrl(),
                              target: "_blank"
                            }
                          },
                          [
                            _c("img", {
                              staticStyle: { height: "30px" },
                              attrs: { src: "/img/pdf_icon.png" }
                            }),
                            _vm._v(
                              " View Quotation file\n                            "
                            )
                          ]
                        )
                      ])
                    : _vm._e(),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group" }, [
                    _c(
                      "button",
                      {
                        staticClass: "btn btn-success ",
                        attrs: { disabled: _vm.in_isLoading },
                        on: {
                          click: function($event) {
                            $event.preventDefault()
                            return _vm.sendDemandQuotation()
                          }
                        }
                      },
                      [
                        _vm._v(
                          "\n                                Send quotation "
                        ),
                        _c("span", {
                          class: _vm.isLoadingRequest(),
                          attrs: { role: "status" }
                        })
                      ]
                    )
                  ])
                ])
              ])
            ])
          ])
        ]
      )
    ]
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", [
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Name")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Description")]),
        _vm._v(" "),
        _c("th", { attrs: { scope: "col" } }, [_vm._v("Price/Unit")])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/companylist.vue?vue&type=template&id=f15a37c0&":
/*!**************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/companylist.vue?vue&type=template&id=f15a37c0& ***!
  \**************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "article",
    {
      staticClass: "hentry blog-post col-md-4 col-lg-4",
      staticStyle: { "border-top": "thin solid gray", "padding-top": "9px" }
    },
    [
      _c("div", { staticClass: "post-thumb" }, [
        _c("img", { attrs: { src: _vm.comp_logo, alt: "photo" } })
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "post-content" }, [
        _c(
          "a",
          {
            staticClass: "post-category bg-blue-light",
            staticStyle: { "fon-size": "20px" },
            attrs: { href: _vm.getCategoryLink() }
          },
          [_vm._v("\n      " + _vm._s(_vm.comp_type) + "\n    ")]
        ),
        _vm._v(" "),
        _c(
          "a",
          { staticClass: "h4 post-title", attrs: { href: _vm.getCompLink() } },
          [_vm._v("\n      " + _vm._s(_vm.comp_name) + " ")]
        ),
        _vm._v(" "),
        _vm._m(0)
      ])
    ]
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "post-additional-info inline-items" }, [
      _c("ul", { staticClass: "friends-harmonic" }, [
        _c("li", [
          _c("a", { attrs: { href: "#" } }, [
            _c("img", {
              attrs: { src: "/olympus_assets/img/icon-chat27.png", alt: "icon" }
            })
          ])
        ]),
        _vm._v(" "),
        _c("li", [
          _c("a", { attrs: { href: "#" } }, [
            _c("img", {
              attrs: { src: "/olympus_assets/img/icon-chat2.png", alt: "icon" }
            })
          ])
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "names-people-likes" }, [
        _vm._v("\n        26 Transactions\n      ")
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/error.vue?vue&type=template&id=6e88e6cd&":
/*!********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/error.vue?vue&type=template&id=6e88e6cd& ***!
  \********************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    {
      staticClass: "modal",
      staticStyle: { display: "block" },
      attrs: { id: "myModal" }
    },
    [
      _c("div", { staticClass: "modal-content" }, [
        _c("div", { staticClass: "error-header" }, [
          _c("h4", { staticStyle: { color: "red" } }, [
            _vm._v("Error! "),
            _c(
              "span",
              {
                staticClass: "close-modal",
                on: {
                  click: function($event) {
                    $event.preventDefault()
                    return _vm.disMissErrorModel($event)
                  }
                }
              },
              [_vm._v("×")]
            )
          ])
        ]),
        _vm._v(" "),
        _c("div", {}, [
          _c("p", { domProps: { textContent: _vm._s(_vm.error_text) } })
        ])
      ])
    ]
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loader.vue?vue&type=template&id=155ec09e&":
/*!*********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/loader.vue?vue&type=template&id=155ec09e& ***!
  \*********************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      { staticClass: "spinner-border text-primary", attrs: { role: "status" } },
      [_c("span", { staticClass: "sr-only" }, [_vm._v("Loading...")])]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/productlist.vue?vue&type=template&id=7b22e292&":
/*!**************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/productlist.vue?vue&type=template&id=7b22e292& ***!
  \**************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm.isStatusProduct()
    ? _c(
        "article",
        {
          staticClass: "hentry blog-post blog-post-v3",
          staticStyle: {
            "border-bottom": "thin solid",
            display: "block",
            "padding-top": "25px"
          }
        },
        [
          _c(
            "div",
            {
              staticClass: "post__author author vcard inline-items",
              staticStyle: { "margin-left": "25px" }
            },
            [
              _c("img", {
                attrs: {
                  src: _vm.product_company.comp_logo,
                  alt: "company logo"
                }
              }),
              _vm._v(" "),
              _c("div", { staticClass: "author-date" }, [
                _c(
                  "a",
                  {
                    staticClass: "h6 post__author-name fn",
                    attrs: {
                      target: "_blank",
                      href:
                        "/comp/view/" +
                        _vm.product_company.comp_id +
                        "/" +
                        _vm.product_company.comp_token
                    }
                  },
                  [_c("h6", [_vm._v(_vm._s(_vm.product_company.comp_name))])]
                ),
                _vm._v("\n      posted\n      "),
                _c(
                  "a",
                  {
                    attrs: { href: _vm.getProductLink() },
                    on: {
                      click: function($event) {
                        $event.preventDefault()
                        return _vm.viewProduct()
                      }
                    }
                  },
                  [_vm._v("product")]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "post__date" }, [
                  _c(
                    "time",
                    {
                      staticClass: "published",
                      attrs: { datetime: _vm.created_at }
                    },
                    [_vm._v(_vm._s(" at " + _vm.created_at))]
                  )
                ])
              ])
            ]
          ),
          _vm._v(" "),
          _c(
            "div",
            {
              staticClass: "row",
              staticStyle: {
                display: "flex",
                "margin-bottom": "15px",
                "padding-left": "25px"
              }
            },
            [
              _c("div", { staticClass: "post-thumb xs-12" }, [
                _c("img", {
                  attrs: {
                    src: _vm.product_files[0].file_url,
                    alt: "Product photo"
                  },
                  on: {
                    click: function($event) {
                      $event.preventDefault()
                      return _vm.viewProduct()
                    }
                  }
                }),
                _vm._v(" "),
                _c(
                  "a",
                  {
                    staticClass: "post-category bg-blue-light",
                    attrs: { href: "#" },
                    on: {
                      click: function($event) {
                        $event.preventDefault()
                        return _vm.viewProduct()
                      }
                    }
                  },
                  [_vm._v("Product")]
                )
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "post-content xs-12" }, [
                _c(
                  "a",
                  {
                    staticClass: "h3 post-title",
                    attrs: { href: "#" },
                    on: {
                      click: function($event) {
                        $event.preventDefault()
                        return _vm.viewProduct()
                      }
                    }
                  },
                  [_vm._v(_vm._s(_vm.product_name))]
                ),
                _vm._v(" "),
                _c("p", {
                  domProps: {
                    innerHTML: _vm._s(_vm.makeLineText(_vm.product_description))
                  }
                }),
                _vm._v(" "),
                _c(
                  "div",
                  { staticClass: "post-additional-info inline-items" },
                  [
                    _c("div", { staticClass: "names-people-likes" }, [
                      _c("a", {
                        staticClass: "post-add-icon inline-items",
                        attrs: { href: "#" }
                      }),
                      _vm._v(" "),
                      _c("b", [
                        _c("u", [
                          _vm._v(
                            _vm._s(_vm.product_currency) +
                              " " +
                              _vm._s(_vm.product_price) +
                              " / " +
                              _vm._s(_vm.product_unit)
                          )
                        ])
                      ])
                    ]),
                    _vm._v(" "),
                    _vm._m(0)
                  ]
                )
              ])
            ]
          ),
          _vm._v(" "),
          _vm._l(_vm.in_comments, function(comment, ckey) {
            return _c("ul", { key: ckey, staticClass: "comments-list" }, [
              _c(
                "li",
                {
                  staticClass: "comment-item",
                  class: _vm.hasChildren(comment),
                  staticStyle: { "background-color": "aliceblue" }
                },
                [
                  _c(
                    "div",
                    { staticClass: "post__author author vcard inline-items" },
                    [
                      _c("img", {
                        attrs: {
                          src: _vm.getCommentProfile(comment),
                          alt: "author"
                        }
                      }),
                      _vm._v(" "),
                      _c("div", { staticClass: "author-date" }, [
                        _c(
                          "a",
                          {
                            staticClass: "h6 post__author-name fn",
                            attrs: { href: "#" }
                          },
                          [_vm._v(_vm._s(_vm.getCommentName(comment)))]
                        ),
                        _vm._v(" "),
                        _c("div", { staticClass: "post__date" }, [
                          _c(
                            "time",
                            {
                              staticClass: "published",
                              attrs: { datetime: "2017-03-24T18:18" }
                            },
                            [_vm._v(_vm._s(comment.created_at))]
                          )
                        ])
                      ]),
                      _vm._v(" "),
                      _c("a", { staticClass: "more", attrs: { href: "#" } }, [
                        _c("svg", { staticClass: "olymp-three-dots-icon" }, [
                          _c("use", {
                            attrs: { "xlink:href": "#olymp-three-dots-icon" }
                          })
                        ])
                      ])
                    ]
                  ),
                  _vm._v(" "),
                  _c("p", [_vm._v(_vm._s(comment.comment_text))]),
                  _vm._v(" "),
                  _c(
                    "a",
                    {
                      staticClass: "post-add-icon inline-items",
                      attrs: { href: "#" }
                    },
                    [
                      _c("i", { staticClass: "fas fa-thumbs-up" }),
                      _vm._v(" "),
                      _c("span", [
                        _vm._v(_vm._s(comment.comment_replies.length))
                      ])
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "a",
                    {
                      staticClass: "post-add-icon inline-items",
                      style: _vm.hasCommented(comment),
                      attrs: { href: "#" }
                    },
                    [
                      _c("i", { staticClass: "fas fa-comment-alt" }),
                      _vm._v(" "),
                      _c("span", [
                        _vm._v(_vm._s(comment.comment_replies.length))
                      ])
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "a",
                    {
                      staticClass: "post-add-icon inline-items",
                      attrs: { href: "#" },
                      on: {
                        click: function($event) {
                          $event.preventDefault()
                          return _vm.showCommentReplyBox(comment)
                        }
                      }
                    },
                    [_c("span", {}, [_vm._v("Reply")])]
                  ),
                  _vm._v(" "),
                  _c(
                    "ul",
                    { staticClass: "children" },
                    _vm._l(comment.comment_replies, function(reply, rkey) {
                      return _c(
                        "li",
                        {
                          key: rkey,
                          staticClass: "comment-item",
                          staticStyle: { "background-color": "aliceblue" }
                        },
                        [
                          _c(
                            "div",
                            {
                              staticClass:
                                "post__author author vcard inline-items"
                            },
                            [
                              _c("img", {
                                attrs: {
                                  src: _vm.getCommentProfile(reply),
                                  alt: "author"
                                }
                              }),
                              _vm._v(" "),
                              _c("div", { staticClass: "author-date" }, [
                                _c(
                                  "a",
                                  {
                                    staticClass: "h6 post__author-name fn",
                                    attrs: { href: "#" }
                                  },
                                  [_vm._v(_vm._s(_vm.getCommentName(reply)))]
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "post__date" }, [
                                  _c(
                                    "time",
                                    {
                                      staticClass: "published",
                                      attrs: { datetime: "2017-03-24T18:18" }
                                    },
                                    [_vm._v(_vm._s(reply.created_at))]
                                  )
                                ])
                              ])
                            ]
                          ),
                          _vm._v(" "),
                          _c("p", [_vm._v(_vm._s(reply.comment_text))]),
                          _vm._v(" "),
                          _vm._m(1, true)
                        ]
                      )
                    }),
                    0
                  ),
                  _vm._v(" "),
                  _vm.isLoggedIn()
                    ? _c(
                        "div",
                        {
                          directives: [
                            {
                              name: "show",
                              rawName: "v-show",
                              value: _vm.isReplyTriggered(comment.id),
                              expression: "isReplyTriggered(comment.id)"
                            }
                          ],
                          staticClass: "post-reply form-group"
                        },
                        [
                          _c("textarea", {
                            directives: [
                              {
                                name: "model",
                                rawName: "v-model",
                                value: _vm.comment_reply,
                                expression: "comment_reply"
                              }
                            ],
                            staticClass: "form-control",
                            staticStyle: { resize: "none", width: "100%" },
                            attrs: { placeholder: "Reply to comment" },
                            domProps: { value: _vm.comment_reply },
                            on: {
                              input: function($event) {
                                if ($event.target.composing) {
                                  return
                                }
                                _vm.comment_reply = $event.target.value
                              }
                            }
                          }),
                          _vm._v(" "),
                          _c("div", { staticClass: "inline-items right" }, [
                            _c(
                              "button",
                              {
                                staticClass: "btn btn-primary",
                                on: {
                                  click: function($event) {
                                    $event.preventDefault()
                                    return _vm.submitComment("comment", comment)
                                  }
                                }
                              },
                              [_vm._v("Reply")]
                            ),
                            _vm._v(" "),
                            _c(
                              "button",
                              {
                                staticClass: "btn btn-danger",
                                on: {
                                  click: function($event) {
                                    $event.preventDefault()
                                    return _vm.resetReplyBox()
                                  }
                                }
                              },
                              [_vm._v("Cancel")]
                            )
                          ])
                        ]
                      )
                    : _vm._e()
                ]
              )
            ])
          }),
          _vm._v(" "),
          _vm.isLoggedIn()
            ? _c("form", { staticClass: "comment-form inline-items" }, [
                _c(
                  "div",
                  { staticClass: "post__author author vcard inline-items" },
                  [
                    _c("img", {
                      attrs: { src: _vm.host_profile, alt: "author" }
                    }),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "form-group with-icon-right is-empty" },
                      [
                        _c("textarea", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.in_comment_text,
                              expression: "in_comment_text"
                            }
                          ],
                          staticClass: "form-control",
                          attrs: {
                            placeholder: "What do you think about this post?"
                          },
                          domProps: { value: _vm.in_comment_text },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.in_comment_text = $event.target.value
                            }
                          }
                        }),
                        _vm._v(" "),
                        _c("div", { staticClass: "add-options-message" }, [
                          _c(
                            "a",
                            {
                              staticClass: "options-message",
                              attrs: {
                                href: "#",
                                "data-toggle": "modal",
                                "data-target": "#update-header-photo"
                              }
                            },
                            [
                              _c("svg", { staticClass: "olymp-camera-icon" }, [
                                _c("use", {
                                  attrs: { "xlink:href": "#olymp-camera-icon" }
                                })
                              ])
                            ]
                          )
                        ]),
                        _vm._v(" "),
                        _c("span", { staticClass: "material-input" })
                      ]
                    )
                  ]
                ),
                _vm._v(" "),
                _c(
                  "button",
                  {
                    class: _vm.requestLoading
                      ? "btn btn-md-2 btn-secondary"
                      : "btn btn-md-2 btn-primary",
                    on: {
                      click: function($event) {
                        $event.preventDefault()
                        return _vm.submitComment("product")
                      }
                    }
                  },
                  [
                    _vm._v("\n      Post Comment\n      "),
                    _vm.requestLoading
                      ? _c(
                          "span",
                          {
                            staticClass: "spinner-border text-light",
                            attrs: { role: "status" }
                          },
                          [
                            _c("span", { staticClass: "sr-only" }, [
                              _vm._v("Loading...")
                            ])
                          ]
                        )
                      : _vm._e()
                  ]
                )
              ])
            : _vm._e()
        ],
        2
      )
    : _c(
        "article",
        { staticClass: "hentry post" },
        [
          _c("div", { staticClass: "post__author author vcard inline-items" }, [
            _c("img", {
              attrs: { src: _vm.uploaded_by_picture, alt: "author" }
            }),
            _vm._v(" "),
            _c("div", { staticClass: "author-date" }, [
              _c(
                "a",
                {
                  staticClass: "h6 post__author-name fn",
                  attrs: {
                    href:
                      "/comp/view/" +
                      _vm.uploaded_by_company.comp_id +
                      "/" +
                      _vm.uploaded_by_company.comp_token
                  }
                },
                [_vm._v(_vm._s(_vm.uploaded_by_name))]
              ),
              _vm._v("\n      posted\n      "),
              _c(
                "a",
                {
                  attrs: { href: _vm.getStatusLink() },
                  on: {
                    click: function($event) {
                      $event.preventDefault()
                      return _vm.viewStatus()
                    }
                  }
                },
                [_vm._v("status")]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "post__date" }, [
                _c(
                  "time",
                  {
                    staticClass: "published",
                    attrs: { datetime: _vm.status_time }
                  },
                  [_vm._v(_vm._s(_vm.status_time))]
                )
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "more" }, [
              _c("svg", { staticClass: "olymp-three-dots-icon" }, [
                _c("use", { attrs: { "xlink:href": "#olymp-three-dots-icon" } })
              ]),
              _vm._v(" "),
              _vm._m(2)
            ])
          ]),
          _vm._v(" "),
          _c("p", {
            domProps: { innerHTML: _vm._s(_vm.makeLineText(_vm.status_text)) }
          }),
          _vm._v(" "),
          _c(
            "div",
            { staticClass: "post-block-photo js-zoom-gallery" },
            _vm._l(_vm.getStatusFiles(), function(file, fkey) {
              return _c(
                "a",
                {
                  key: fkey,
                  staticClass: "half-width",
                  class: _vm.addClassMorePhotos(file.file_url),
                  attrs: { href: file.file_url },
                  on: {
                    click: function($event) {
                      $event.preventDefault()
                      return _vm.viewStatus()
                    }
                  }
                },
                [
                  _c("img", {
                    staticStyle: { border: "thin solid gray" },
                    attrs: { src: file.file_url, alt: "photo" }
                  }),
                  _vm._v(" "),
                  _c(
                    "span",
                    {
                      directives: [
                        {
                          name: "show",
                          rawName: "v-show",
                          value: _vm.isLastPhoto(file.file_url),
                          expression: "isLastPhoto(file.file_url)"
                        }
                      ],
                      staticClass: "h2"
                    },
                    [
                      _vm._v(
                        "\n        +\n        " +
                          _vm._s(_vm.status_files.length - 2) +
                          "\n      "
                      )
                    ]
                  )
                ]
              )
            }),
            0
          ),
          _vm._v(" "),
          _c("div", { staticClass: "post-additional-info inline-items" }, [
            _c("div", { staticClass: "comments-shared" }, [
              _c(
                "a",
                {
                  staticClass: "post-add-icon inline-items",
                  attrs: { href: "#" }
                },
                [
                  _c("i", { staticClass: "fas fa-thumbs-up" }),
                  _vm._v(" "),
                  _c("span", {}, [_vm._v(_vm._s(_vm.likes.length))])
                ]
              ),
              _vm._v(" "),
              _c(
                "a",
                {
                  staticClass: "post-add-icon inline-items",
                  attrs: { href: "#" }
                },
                [
                  _c("i", { staticClass: "fas fa-reply-all" }),
                  _vm._v(" "),
                  _c("span", [_vm._v(_vm._s(_vm.comments.length))])
                ]
              )
            ])
          ]),
          _vm._v(" "),
          _vm._l(_vm.in_comments, function(comment, cokey) {
            return _c("ul", { key: cokey, staticClass: "comments-list" }, [
              _c(
                "li",
                {
                  staticClass: "comment-item",
                  class: _vm.hasChildren(comment)
                },
                [
                  _c(
                    "div",
                    { staticClass: "post__author author vcard inline-items" },
                    [
                      _c("img", {
                        attrs: {
                          src: _vm.getCommentProfile(comment),
                          alt: "author"
                        }
                      }),
                      _vm._v(" "),
                      _c("div", { staticClass: "author-date" }, [
                        _c(
                          "a",
                          {
                            staticClass: "h6 post__author-name fn",
                            attrs: { href: "#" }
                          },
                          [_vm._v(_vm._s(_vm.getCommentName(comment)))]
                        ),
                        _vm._v(" "),
                        _c("div", { staticClass: "post__date" }, [
                          _c(
                            "time",
                            {
                              staticClass: "published",
                              attrs: { datetime: "2017-03-24T18:18" }
                            },
                            [_vm._v(_vm._s(comment.created_at))]
                          )
                        ])
                      ]),
                      _vm._v(" "),
                      _c("a", { staticClass: "more", attrs: { href: "#" } }, [
                        _c("svg", { staticClass: "olymp-three-dots-icon" }, [
                          _c("use", {
                            attrs: { "xlink:href": "#olymp-three-dots-icon" }
                          })
                        ])
                      ])
                    ]
                  ),
                  _vm._v(" "),
                  _c("p", [_vm._v(_vm._s(comment.comment_text))]),
                  _vm._v(" "),
                  _c(
                    "a",
                    {
                      staticClass: "post-add-icon inline-items",
                      attrs: { href: "#" }
                    },
                    [
                      _c("i", { staticClass: "fas fa-thumbs-up" }),
                      _vm._v(" "),
                      _c("span", [
                        _vm._v(_vm._s(comment.comment_replies.length))
                      ])
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "a",
                    {
                      staticClass: "post-add-icon inline-items",
                      style: _vm.hasCommented(comment),
                      attrs: { href: "#" }
                    },
                    [
                      _c("i", { staticClass: "fas fa-comment-alt" }),
                      _vm._v(" "),
                      _c("span", [
                        _vm._v(_vm._s(comment.comment_replies.length))
                      ])
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "a",
                    {
                      staticClass: "post-add-icon inline-items",
                      attrs: { href: "#" },
                      on: {
                        click: function($event) {
                          $event.preventDefault()
                          return _vm.showCommentReplyBox(comment)
                        }
                      }
                    },
                    [_c("span", {}, [_vm._v("Reply")])]
                  ),
                  _vm._v(" "),
                  _c(
                    "ul",
                    { staticClass: "children" },
                    _vm._l(comment.comment_replies, function(reply, rekey) {
                      return _c(
                        "li",
                        { key: rekey, staticClass: "comment-item" },
                        [
                          _c(
                            "div",
                            {
                              staticClass:
                                "post__author author vcard inline-items"
                            },
                            [
                              _c("img", {
                                attrs: {
                                  src: _vm.getCommentProfile(reply),
                                  alt: "author"
                                }
                              }),
                              _vm._v(" "),
                              _c("div", { staticClass: "author-date" }, [
                                _c(
                                  "a",
                                  {
                                    staticClass: "h6 post__author-name fn",
                                    attrs: { href: "#" }
                                  },
                                  [_vm._v(_vm._s(_vm.getCommentName(reply)))]
                                ),
                                _vm._v(" "),
                                _c("div", { staticClass: "post__date" }, [
                                  _c(
                                    "time",
                                    {
                                      staticClass: "published",
                                      attrs: { datetime: "2017-03-24T18:18" }
                                    },
                                    [_vm._v(_vm._s(reply.created_at))]
                                  )
                                ])
                              ])
                            ]
                          ),
                          _vm._v(" "),
                          _c("p", [_vm._v(_vm._s(reply.comment_text))]),
                          _vm._v(" "),
                          _vm._m(3, true)
                        ]
                      )
                    }),
                    0
                  ),
                  _vm._v(" "),
                  _vm.isLoggedIn()
                    ? _c(
                        "div",
                        {
                          directives: [
                            {
                              name: "show",
                              rawName: "v-show",
                              value: _vm.isReplyTriggered(comment.id),
                              expression: "isReplyTriggered(comment.id)"
                            }
                          ],
                          staticClass: "post-reply form-group"
                        },
                        [
                          _c("textarea", {
                            directives: [
                              {
                                name: "model",
                                rawName: "v-model",
                                value: _vm.comment_reply,
                                expression: "comment_reply"
                              }
                            ],
                            staticClass: "form-control",
                            staticStyle: { resize: "none", width: "100%" },
                            attrs: { placeholder: "Reply to comment" },
                            domProps: { value: _vm.comment_reply },
                            on: {
                              input: function($event) {
                                if ($event.target.composing) {
                                  return
                                }
                                _vm.comment_reply = $event.target.value
                              }
                            }
                          }),
                          _vm._v(" "),
                          _c("div", { staticClass: "inline-items right" }, [
                            _c(
                              "button",
                              {
                                staticClass: "btn btn-primary",
                                on: {
                                  click: function($event) {
                                    $event.preventDefault()
                                    return _vm.submitComment("comment", comment)
                                  }
                                }
                              },
                              [_vm._v("Reply")]
                            ),
                            _vm._v(" "),
                            _c(
                              "button",
                              {
                                staticClass: "btn btn-danger",
                                on: {
                                  click: function($event) {
                                    $event.preventDefault()
                                    return _vm.resetReplyBox()
                                  }
                                }
                              },
                              [_vm._v("Cancel")]
                            )
                          ])
                        ]
                      )
                    : _vm._e()
                ]
              )
            ])
          }),
          _vm._v(" "),
          _vm.isLoggedIn()
            ? _c("form", { staticClass: "comment-form inline-items" }, [
                _c(
                  "div",
                  { staticClass: "post__author author vcard inline-items" },
                  [
                    _c("img", {
                      attrs: { src: _vm.host_profile, alt: "author" }
                    }),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "form-group with-icon-right is-empty" },
                      [
                        _c("textarea", {
                          directives: [
                            {
                              name: "model",
                              rawName: "v-model",
                              value: _vm.in_comment_text,
                              expression: "in_comment_text"
                            }
                          ],
                          staticClass: "form-control",
                          attrs: {
                            placeholder: "What do you think about this post?"
                          },
                          domProps: { value: _vm.in_comment_text },
                          on: {
                            input: function($event) {
                              if ($event.target.composing) {
                                return
                              }
                              _vm.in_comment_text = $event.target.value
                            }
                          }
                        }),
                        _vm._v(" "),
                        _c("div", { staticClass: "add-options-message" }, [
                          _c(
                            "a",
                            {
                              staticClass: "options-message",
                              attrs: {
                                href: "#",
                                "data-toggle": "modal",
                                "data-target": "#update-header-photo"
                              }
                            },
                            [
                              _c("svg", { staticClass: "olymp-camera-icon" }, [
                                _c("use", {
                                  attrs: { "xlink:href": "#olymp-camera-icon" }
                                })
                              ])
                            ]
                          )
                        ]),
                        _vm._v(" "),
                        _c("span", { staticClass: "material-input" })
                      ]
                    )
                  ]
                ),
                _vm._v(" "),
                _c(
                  "button",
                  {
                    staticClass: "btn btn-md-2 btn-primary",
                    on: {
                      click: function($event) {
                        $event.preventDefault()
                        return _vm.submitComment("status")
                      }
                    }
                  },
                  [_vm._v("Post Comment")]
                )
              ])
            : _vm._e()
        ],
        2
      )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "comments-shared" }, [
      _c(
        "a",
        { staticClass: "post-add-icon inline-items", attrs: { href: "#" } },
        [
          _c("i", { staticClass: "fas fa-eye" }),
          _vm._v(" "),
          _c("span", [_vm._v("0")])
        ]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "a",
      { staticClass: "post-add-icon inline-items", attrs: { href: "#" } },
      [
        _c("i", { staticClass: "fas fa-thumbs-up" }),
        _vm._v(" "),
        _c("span", [_vm._v("0")])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("ul", { staticClass: "more-dropdown" }, [
      _c("li", [_c("a", { attrs: { href: "#" } }, [_vm._v("Edit Post")])]),
      _vm._v(" "),
      _c("li", [_c("a", { attrs: { href: "#" } }, [_vm._v("Delete Post")])]),
      _vm._v(" "),
      _c("li", [
        _c("a", { attrs: { href: "#" } }, [_vm._v("Turn Off Notifications")])
      ]),
      _vm._v(" "),
      _c("li", [
        _c("a", { attrs: { href: "#" } }, [_vm._v("Select as Featured")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "a",
      { staticClass: "post-add-icon inline-items", attrs: { href: "#" } },
      [
        _c("i", { staticClass: "fas fa-thumbs-up" }),
        _vm._v(" "),
        _c("span", [_vm._v("2")])
      ]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/statuslist.vue?vue&type=template&id=43cfd01b&":
/*!*************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/statuslist.vue?vue&type=template&id=43cfd01b& ***!
  \*************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { staticClass: "photo-album-item-wrap col-md-6 col-lg-6 mt-2" },
    [
      _c(
        "div",
        { staticClass: "photo-album-item", attrs: { "data-mh": "album-item" } },
        [
          _c("div", { staticClass: "photo-item" }, [
            _c("img", { attrs: { src: _vm.status_image, alt: "photo" } }),
            _vm._v(" "),
            _c("div", { staticClass: "overlay overlay-dark" }),
            _vm._v(" "),
            _c("a", { staticClass: "more", attrs: { href: "#" } }, [
              _c("svg", { staticClass: "olymp-three-dots-icon" }, [
                _c("use", { attrs: { "xlink:href": "#olymp-three-dots-icon" } })
              ])
            ]),
            _vm._v(" "),
            _c("a", { staticClass: "post-add-icon", attrs: { href: "#" } }, [
              _c("svg", { staticClass: "olymp-heart-icon" }, [
                _c("use", { attrs: { "xlink:href": "#olymp-heart-icon" } })
              ]),
              _vm._v(" "),
              _c("span", [_vm._v("324")])
            ]),
            _vm._v(" "),
            _c("a", {
              staticClass: "  full-block",
              attrs: {
                href: "#",
                "data-toggle": "modal",
                "data-target": "#open-photo-popup-v2"
              }
            })
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "content" }, [
            _c("a", { staticClass: "title h5", attrs: { href: "#" } }, [
              _vm._v(" " + _vm._s(_vm.status_text) + " ")
            ]),
            _vm._v(" "),
            _c("span", {
              staticClass: "sub-title",
              domProps: { textContent: _vm._s(_vm.status_time) }
            })
          ])
        ]
      )
    ]
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/statuslistv2.vue?vue&type=template&id=061aebd7&":
/*!***************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/statuslistv2.vue?vue&type=template&id=061aebd7& ***!
  \***************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("article", { staticClass: "hentry post" }, [
    _c("div", { staticClass: "post__author author vcard inline-items" }, [
      _c("img", { attrs: { src: _vm.uploaded_by_picture, alt: "author" } }),
      _vm._v(" "),
      _c("div", { staticClass: "author-date" }, [
        _c(
          "a",
          { staticClass: "h6 post__author-name fn", attrs: { href: "" } },
          [_vm._v(_vm._s(_vm.uploaded_by_name))]
        ),
        _vm._v("\n      posted\n      "),
        _c("a", { attrs: { href: _vm.getStatusLink() } }, [_vm._v("status")]),
        _vm._v(" "),
        _c("div", { staticClass: "post__date" }, [
          _c(
            "time",
            { staticClass: "published", attrs: { datetime: _vm.status_time } },
            [_vm._v(_vm._s(_vm.status_time))]
          )
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "more" }, [
        _c("svg", { staticClass: "olymp-three-dots-icon" }, [
          _c("use", { attrs: { "xlink:href": "#olymp-three-dots-icon" } })
        ]),
        _vm._v(" "),
        _vm._m(0)
      ])
    ]),
    _vm._v(" "),
    _c("p", [_vm._v(_vm._s(_vm.truncate(_vm.status_text)))]),
    _vm._v(" "),
    _c(
      "div",
      { staticClass: "post-block-photo js-zoom-gallery" },
      _vm._l(_vm.status_files.slice(0, 2), function(file, fkey) {
        return _c(
          "a",
          {
            key: fkey,
            staticClass: "half-width",
            class: _vm.addClassMorePhotos(file.file_url),
            attrs: { href: file.file_url }
          },
          [
            _c("img", {
              staticStyle: { border: "thin solid gray" },
              attrs: { src: file.file_url, alt: "photo" }
            }),
            _vm._v(" "),
            _c(
              "span",
              {
                directives: [
                  {
                    name: "show",
                    rawName: "v-show",
                    value: _vm.isLastPhoto(file.file_url),
                    expression: "isLastPhoto(file.file_url)"
                  }
                ],
                staticClass: "h2"
              },
              [
                _vm._v(
                  "\n        +\n        " +
                    _vm._s(_vm.status_files.length - 2) +
                    "\n      "
                )
              ]
            )
          ]
        )
      }),
      0
    ),
    _vm._v(" "),
    _vm._m(1)
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("ul", { staticClass: "more-dropdown" }, [
      _c("li", [_c("a", { attrs: { href: "#" } }, [_vm._v("Edit Post")])]),
      _vm._v(" "),
      _c("li", [_c("a", { attrs: { href: "#" } }, [_vm._v("Delete Post")])]),
      _vm._v(" "),
      _c("li", [
        _c("a", { attrs: { href: "#" } }, [_vm._v("Turn Off Notifications")])
      ]),
      _vm._v(" "),
      _c("li", [
        _c("a", { attrs: { href: "#" } }, [_vm._v("Select as Featured")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "post-additional-info inline-items" }, [
      _c("div", { staticClass: "comments-shared" }, [
        _c(
          "a",
          { staticClass: "post-add-icon inline-items", attrs: { href: "#" } },
          [
            _c("i", { staticClass: "fas fa-thumbs-up" }),
            _vm._v(" "),
            _c("span", [_vm._v("0")])
          ]
        ),
        _vm._v(" "),
        _c(
          "a",
          { staticClass: "post-add-icon inline-items", attrs: { href: "#" } },
          [
            _c(
              "a",
              {
                staticClass: "post-add-icon inline-items",
                attrs: { href: "#" }
              },
              [
                _c("i", { staticClass: "fas fa-eye" }),
                _vm._v(" "),
                _c("span", [_vm._v("0")])
              ]
            )
          ]
        )
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/trendingcompanylist.vue?vue&type=template&id=64e1435b&":
/*!**********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/trendingcompanylist.vue?vue&type=template&id=64e1435b& ***!
  \**********************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("li", { staticClass: "inline-items" }, [
    _c("div", { staticClass: "author-thumb" }, [
      _c("img", {
        staticStyle: { height: "35px", width: "35px" },
        attrs: { src: _vm.company_logo, alt: "author" }
      })
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "notification-event" }, [
      _c("a", {
        staticClass: "h6 notification-friend",
        attrs: {
          href: "/comp/view/" + this.company_id + "/" + this.company_token
        },
        domProps: { textContent: _vm._s(_vm.shortenName(_vm.company_name)) }
      }),
      _vm._v(" "),
      _c("span", { staticClass: "chat-message-item" }, [
        _vm._v(" " + _vm._s(_vm.company_type))
      ])
    ]),
    _vm._v(" "),
    _c(
      "span",
      {
        staticClass: "notification-icon",
        attrs: {
          "data-toggle": "tooltip",
          "data-placement": "top",
          "data-original-title": "View company"
        }
      },
      [
        _c(
          "a",
          {
            attrs: {
              href: "/comp/view/" + this.company_id + "/" + this.company_token
            }
          },
          [_vm._v("\n      view\n    ")]
        )
      ]
    )
  ])
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/viewpostdetails.vue?vue&type=template&id=3360e03c&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/viewpostdetails.vue?vue&type=template&id=3360e03c& ***!
  \******************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    {
      staticClass: "modal",
      staticStyle: { display: "block" },
      attrs: { id: "myModal" }
    },
    [
      _c(
        "div",
        { staticClass: "modal-content", staticStyle: { width: "50vw" } },
        [
          _c("div", { staticClass: "error-header" }, [
            _c("h4", { staticStyle: { color: "red" } }, [
              _vm._v("Details "),
              _c(
                "span",
                {
                  staticClass: "close-modal",
                  on: {
                    click: function($event) {
                      $event.preventDefault()
                      return _vm.disMissModal($event)
                    }
                  }
                },
                [_vm._v("×")]
              )
            ])
          ]),
          _vm._v(" "),
          _vm.postIsProduct
            ? _c("div", { staticClass: "card" }, [
                _c("div", { staticClass: "card-header" }, [
                  _vm._v("\n                Posted by "),
                  _c("span", {
                    domProps: {
                      textContent: _vm._s(_vm.product_company.comp_name)
                    }
                  }),
                  _vm._v(" "),
                  _c("span", {
                    staticClass: "ml-3",
                    domProps: { textContent: _vm._s(_vm.created_at) }
                  })
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "card-body" }, [
                  _c(
                    "div",
                    {
                      staticClass: "carousel slide",
                      attrs: {
                        id: "carouselExampleControls",
                        "data-ride": "carousel"
                      }
                    },
                    [
                      _c(
                        "ol",
                        { staticClass: "carousel-indicators" },
                        _vm._l(_vm.product_files, function(file, key) {
                          return _c("li", {
                            key: key,
                            class: _vm.isActive(key),
                            attrs: {
                              "data-target": "#carouselExampleIndicators",
                              "data-slide-to": key
                            }
                          })
                        }),
                        0
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        { staticClass: "carousel-inner" },
                        _vm._l(_vm.product_files, function(file, key) {
                          return _c(
                            "div",
                            {
                              key: key,
                              staticClass: "carousel-item ",
                              class: _vm.isActive(key)
                            },
                            [
                              _c("img", {
                                staticClass: "d-block w-100",
                                attrs: { src: file.file_url, alt: "..." }
                              })
                            ]
                          )
                        }),
                        0
                      ),
                      _vm._v(" "),
                      _vm._m(0),
                      _vm._v(" "),
                      _vm._m(1)
                    ]
                  ),
                  _vm._v(" "),
                  _c("div", {}, [
                    _c("div", { staticClass: "mt-3 row" }, [
                      _c("div", { staticClass: "col-md-8 col-lg-8" }, [
                        _c("label", { staticClass: "label" }, [
                          _vm._v("Product name:")
                        ]),
                        _vm._v(" "),
                        _c("input", {
                          staticClass: "input disabled",
                          attrs: { disabled: "" },
                          domProps: { value: _vm.product_name }
                        })
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "col-md-4 col-lg-4" }, [
                        _c("label", { staticClass: "label" }, [
                          _vm._v("Bargain?")
                        ]),
                        _vm._v(" "),
                        _vm.host_type === 1
                          ? _c("input", {
                              staticClass: "input btn btn-primary",
                              staticStyle: { height: "60px" },
                              attrs: {
                                type: "submit",
                                value: "Generate Quotation"
                              },
                              on: {
                                click: function($event) {
                                  $event.preventDefault()
                                  return _vm.bargainModel(
                                    _vm.product_id,
                                    _vm.product_token
                                  )
                                }
                              }
                            })
                          : _c("input", {
                              staticClass: "input btn btn-primary",
                              staticStyle: { height: "60px" },
                              attrs: {
                                type: "submit",
                                value: "Generate Quotation",
                                disabled: ""
                              }
                            })
                      ])
                    ]),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "mt-3", staticStyle: { display: "flex" } },
                      [
                        _c("div", { staticClass: "col-md-6 col-lg-6" }, [
                          _c("label", { staticClass: "label" }, [
                            _vm._v("Product Price:")
                          ]),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "input disabled",
                            attrs: { disabled: "" },
                            domProps: {
                              value:
                                _vm.product_price + " " + _vm.product_currency
                            }
                          })
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "col-md-6 col-lg-6" }, [
                          _c("label", { staticClass: "label" }, [
                            _vm._v("Product Measure Unit:")
                          ]),
                          _vm._v(" "),
                          _c("input", {
                            staticClass: "input disabled",
                            attrs: { disabled: "" },
                            domProps: { value: _vm.product_unit }
                          })
                        ])
                      ]
                    ),
                    _vm._v(" "),
                    _c("div", { staticClass: "mt-3" }, [
                      _c("div", { staticClass: "col-md-12 col-lg-12" }, [
                        _c("label", { staticClass: "label" }, [
                          _vm._v("Product Description:")
                        ]),
                        _vm._v(" "),
                        _c("p", {
                          staticStyle: {
                            border: "thin solid gray",
                            padding: "10px",
                            "background-color": "aliceblue"
                          },
                          domProps: {
                            innerHTML: _vm._s(
                              _vm.makeLineText(_vm.product_description)
                            )
                          }
                        })
                      ])
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "col-md-12 col-lg-12 mt-3 p-3" },
                    [
                      _vm._m(2),
                      _vm._v(" "),
                      _vm._l(_vm.comments, function(comment, key) {
                        return _c(
                          "ul",
                          {
                            key: key,
                            staticClass: "comments-list",
                            staticStyle: { border: "thin solid gray" }
                          },
                          [
                            _c(
                              "li",
                              {
                                staticClass: "comment-item",
                                class: _vm.hasChildren(comment),
                                staticStyle: { "background-color": "aliceblue" }
                              },
                              [
                                _c(
                                  "div",
                                  {
                                    staticClass:
                                      "post__author author vcard inline-items"
                                  },
                                  [
                                    _c("img", {
                                      attrs: {
                                        src: _vm.getCommentProfile(comment),
                                        alt: "author"
                                      }
                                    }),
                                    _vm._v(" "),
                                    _c("div", { staticClass: "author-date" }, [
                                      _c(
                                        "a",
                                        {
                                          staticClass:
                                            "h6 post__author-name fn",
                                          attrs: { href: "#" }
                                        },
                                        [
                                          _vm._v(
                                            "\n                                    " +
                                              _vm._s(
                                                _vm.getCommentName(comment)
                                              ) +
                                              "\n                                "
                                          )
                                        ]
                                      ),
                                      _vm._v(" "),
                                      _c("div", { staticClass: "post__date" }, [
                                        _c(
                                          "time",
                                          {
                                            staticClass: "published",
                                            attrs: {
                                              datetime: "2017-03-24T18:18"
                                            }
                                          },
                                          [
                                            _vm._v(
                                              "\n                                        " +
                                                _vm._s(comment.created_at) +
                                                "\n                                    "
                                            )
                                          ]
                                        )
                                      ])
                                    ]),
                                    _vm._v(" "),
                                    _c(
                                      "a",
                                      {
                                        staticClass: "more",
                                        attrs: { href: "#" }
                                      },
                                      [
                                        _c(
                                          "svg",
                                          {
                                            staticClass: "olymp-three-dots-icon"
                                          },
                                          [
                                            _c("use", {
                                              attrs: {
                                                "xlink:href":
                                                  "#olymp-three-dots-icon"
                                              }
                                            })
                                          ]
                                        )
                                      ]
                                    )
                                  ]
                                ),
                                _vm._v(" "),
                                _c("p", [
                                  _vm._v(
                                    "\n                            " +
                                      _vm._s(comment.comment_text) +
                                      "\n                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "a",
                                  {
                                    staticClass: "post-add-icon inline-items",
                                    attrs: { href: "#" }
                                  },
                                  [
                                    _c("i", {
                                      staticClass: "fas fa-thumbs-up"
                                    }),
                                    _vm._v(" "),
                                    _c("span", [
                                      _vm._v(
                                        _vm._s(comment.comment_replies.length)
                                      )
                                    ])
                                  ]
                                ),
                                _vm._v(" "),
                                _c(
                                  "a",
                                  {
                                    staticClass: "post-add-icon inline-items",
                                    style: _vm.hasCommented(comment),
                                    attrs: { href: "#" }
                                  },
                                  [
                                    _c("i", {
                                      staticClass: "fas fa-comment-alt"
                                    }),
                                    _vm._v(" "),
                                    _c("span", [
                                      _vm._v(
                                        _vm._s(comment.comment_replies.length)
                                      )
                                    ])
                                  ]
                                ),
                                _vm._v(" "),
                                _c(
                                  "a",
                                  {
                                    staticClass: "post-add-icon inline-items",
                                    attrs: { href: "#" },
                                    on: {
                                      click: function($event) {
                                        $event.preventDefault()
                                        return _vm.showCommentReplyBox(comment)
                                      }
                                    }
                                  },
                                  [_c("span", {}, [_vm._v("Reply")])]
                                ),
                                _vm._v(" "),
                                _c(
                                  "ul",
                                  { staticClass: "children" },
                                  _vm._l(comment.comment_replies, function(
                                    reply,
                                    key
                                  ) {
                                    return _c(
                                      "li",
                                      {
                                        key: key,
                                        staticClass: "comment-item",
                                        staticStyle: {
                                          "background-color": "aliceblue"
                                        }
                                      },
                                      [
                                        _c(
                                          "div",
                                          {
                                            staticClass:
                                              "post__author author vcard inline-items"
                                          },
                                          [
                                            _c("img", {
                                              attrs: {
                                                src: _vm.getCommentProfile(
                                                  reply
                                                ),
                                                alt: "author"
                                              }
                                            }),
                                            _vm._v(" "),
                                            _c(
                                              "div",
                                              { staticClass: "author-date" },
                                              [
                                                _c(
                                                  "a",
                                                  {
                                                    staticClass:
                                                      "h6 post__author-name fn",
                                                    attrs: { href: "#" }
                                                  },
                                                  [
                                                    _vm._v(
                                                      "\n                                            " +
                                                        _vm._s(
                                                          _vm.getCommentName(
                                                            reply
                                                          )
                                                        ) +
                                                        "\n                                        "
                                                    )
                                                  ]
                                                ),
                                                _vm._v(" "),
                                                _c(
                                                  "div",
                                                  { staticClass: "post__date" },
                                                  [
                                                    _c(
                                                      "time",
                                                      {
                                                        staticClass:
                                                          "published",
                                                        attrs: {
                                                          datetime:
                                                            "2017-03-24T18:18"
                                                        }
                                                      },
                                                      [
                                                        _vm._v(
                                                          "\n                                                " +
                                                            _vm._s(
                                                              reply.created_at
                                                            ) +
                                                            "\n                                            "
                                                        )
                                                      ]
                                                    )
                                                  ]
                                                )
                                              ]
                                            )
                                          ]
                                        ),
                                        _vm._v(" "),
                                        _c("p", [
                                          _vm._v(
                                            "\n                                    " +
                                              _vm._s(reply.comment_text) +
                                              "\n                                "
                                          )
                                        ]),
                                        _vm._v(" "),
                                        _vm._m(3, true)
                                      ]
                                    )
                                  }),
                                  0
                                ),
                                _vm._v(" "),
                                _vm.isLoggedIn()
                                  ? _c(
                                      "div",
                                      {
                                        directives: [
                                          {
                                            name: "show",
                                            rawName: "v-show",
                                            value: _vm.isReplyTriggered(
                                              comment.id
                                            ),
                                            expression:
                                              "isReplyTriggered(comment.id)"
                                          }
                                        ],
                                        staticClass: "post-reply form-group"
                                      },
                                      [
                                        _c("textarea", {
                                          directives: [
                                            {
                                              name: "model",
                                              rawName: "v-model",
                                              value: _vm.comment_reply,
                                              expression: "comment_reply"
                                            }
                                          ],
                                          staticClass: "form-control",
                                          staticStyle: {
                                            resize: "none",
                                            width: "100%"
                                          },
                                          attrs: {
                                            placeholder: "Reply to comment"
                                          },
                                          domProps: {
                                            value: _vm.comment_reply
                                          },
                                          on: {
                                            input: function($event) {
                                              if ($event.target.composing) {
                                                return
                                              }
                                              _vm.comment_reply =
                                                $event.target.value
                                            }
                                          }
                                        }),
                                        _vm._v(" "),
                                        _c(
                                          "div",
                                          { staticClass: "inline-items right" },
                                          [
                                            _c(
                                              "button",
                                              {
                                                staticClass: "btn btn-primary",
                                                on: {
                                                  click: function($event) {
                                                    $event.preventDefault()
                                                    return _vm.submitComment(
                                                      "comment",
                                                      comment
                                                    )
                                                  }
                                                }
                                              },
                                              [_vm._v("Reply ")]
                                            ),
                                            _vm._v(" "),
                                            _c(
                                              "button",
                                              {
                                                staticClass: "btn btn-danger ",
                                                on: {
                                                  click: function($event) {
                                                    $event.preventDefault()
                                                    return _vm.resetReplyBox()
                                                  }
                                                }
                                              },
                                              [_vm._v("Cancel ")]
                                            )
                                          ]
                                        )
                                      ]
                                    )
                                  : _vm._e()
                              ]
                            )
                          ]
                        )
                      })
                    ],
                    2
                  )
                ])
              ])
            : _vm._e(),
          _vm._v(" "),
          _vm.postIsStatus
            ? _c("div", { staticClass: "card" }, [
                _c("div", { staticClass: "card-header" }, [
                  _vm._v("\n                Posted by "),
                  _c("span", {
                    domProps: {
                      textContent: _vm._s(_vm.uploaded_by_company.comp_name)
                    }
                  }),
                  _vm._v(" "),
                  _c("span", {
                    staticClass: "ml-3",
                    domProps: { textContent: _vm._s(_vm.created_at) }
                  })
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "card-body" }, [
                  _c(
                    "div",
                    {
                      staticClass: "carousel slide",
                      attrs: {
                        id: "carouselExampleControls",
                        "data-ride": "carousel"
                      }
                    },
                    [
                      _c(
                        "ol",
                        { staticClass: "carousel-indicators" },
                        _vm._l(_vm.status_files, function(file, key) {
                          return _c("li", {
                            key: key,
                            class: _vm.isActive(key),
                            attrs: {
                              "data-target": "#carouselExampleIndicators",
                              "data-slide-to": key
                            }
                          })
                        }),
                        0
                      ),
                      _vm._v(" "),
                      _c(
                        "div",
                        { staticClass: "carousel-inner" },
                        _vm._l(_vm.status_files, function(file, key) {
                          return _c(
                            "div",
                            {
                              key: key,
                              staticClass: "carousel-item ",
                              class: _vm.isActive(key)
                            },
                            [
                              _c("img", {
                                staticClass: "d-block w-100",
                                attrs: { src: file.file_url, alt: "..." }
                              })
                            ]
                          )
                        }),
                        0
                      ),
                      _vm._v(" "),
                      _vm._m(4),
                      _vm._v(" "),
                      _vm._m(5)
                    ]
                  ),
                  _vm._v(" "),
                  _c("div", {}, [
                    _c("div", { staticClass: "mt-3" }, [
                      _c("div", { staticClass: "col-md-12 col-lg-12" }, [
                        _c("p", {
                          staticStyle: {
                            border: "thin solid gray",
                            padding: "10px",
                            "background-color": "aliceblue"
                          },
                          domProps: {
                            innerHTML: _vm._s(_vm.makeLineText(_vm.status_text))
                          }
                        })
                      ])
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "div",
                    { staticClass: "col-md-12 col-lg-12 mt-3 p-3" },
                    [
                      _vm._m(6),
                      _vm._v(" "),
                      _vm._l(_vm.comments, function(comment, key) {
                        return _c(
                          "ul",
                          {
                            key: key,
                            staticClass: "comments-list",
                            staticStyle: { border: "thin solid gray" }
                          },
                          [
                            _c(
                              "li",
                              {
                                staticClass: "comment-item",
                                class: _vm.hasChildren(comment),
                                staticStyle: { "background-color": "aliceblue" }
                              },
                              [
                                _c(
                                  "div",
                                  {
                                    staticClass:
                                      "post__author author vcard inline-items"
                                  },
                                  [
                                    _c("img", {
                                      attrs: {
                                        src: _vm.getCommentProfile(comment),
                                        alt: "author"
                                      }
                                    }),
                                    _vm._v(" "),
                                    _c("div", { staticClass: "author-date" }, [
                                      _c(
                                        "a",
                                        {
                                          staticClass:
                                            "h6 post__author-name fn",
                                          attrs: { href: "#" }
                                        },
                                        [
                                          _vm._v(
                                            "\n                                    " +
                                              _vm._s(
                                                _vm.getCommentName(comment)
                                              ) +
                                              "\n                                "
                                          )
                                        ]
                                      ),
                                      _vm._v(" "),
                                      _c("div", { staticClass: "post__date" }, [
                                        _c(
                                          "time",
                                          {
                                            staticClass: "published",
                                            attrs: {
                                              datetime: "2017-03-24T18:18"
                                            }
                                          },
                                          [
                                            _vm._v(
                                              "\n                                        " +
                                                _vm._s(comment.created_at) +
                                                "\n                                    "
                                            )
                                          ]
                                        )
                                      ])
                                    ]),
                                    _vm._v(" "),
                                    _c(
                                      "a",
                                      {
                                        staticClass: "more",
                                        attrs: { href: "#" }
                                      },
                                      [
                                        _c(
                                          "svg",
                                          {
                                            staticClass: "olymp-three-dots-icon"
                                          },
                                          [
                                            _c("use", {
                                              attrs: {
                                                "xlink:href":
                                                  "#olymp-three-dots-icon"
                                              }
                                            })
                                          ]
                                        )
                                      ]
                                    )
                                  ]
                                ),
                                _vm._v(" "),
                                _c("p", [
                                  _vm._v(
                                    "\n                            " +
                                      _vm._s(comment.comment_text) +
                                      "\n                        "
                                  )
                                ]),
                                _vm._v(" "),
                                _c(
                                  "a",
                                  {
                                    staticClass: "post-add-icon inline-items",
                                    attrs: { href: "#" }
                                  },
                                  [
                                    _c("i", {
                                      staticClass: "fas fa-thumbs-up"
                                    }),
                                    _vm._v(" "),
                                    _c("span", [
                                      _vm._v(
                                        _vm._s(comment.comment_replies.length)
                                      )
                                    ])
                                  ]
                                ),
                                _vm._v(" "),
                                _c(
                                  "a",
                                  {
                                    staticClass: "post-add-icon inline-items",
                                    style: _vm.hasCommented(comment),
                                    attrs: { href: "#" }
                                  },
                                  [
                                    _c("i", {
                                      staticClass: "fas fa-comment-alt"
                                    }),
                                    _vm._v(" "),
                                    _c("span", [
                                      _vm._v(
                                        _vm._s(comment.comment_replies.length)
                                      )
                                    ])
                                  ]
                                ),
                                _vm._v(" "),
                                _c(
                                  "a",
                                  {
                                    staticClass: "post-add-icon inline-items",
                                    attrs: { href: "#" },
                                    on: {
                                      click: function($event) {
                                        $event.preventDefault()
                                        return _vm.showCommentReplyBox(comment)
                                      }
                                    }
                                  },
                                  [_c("span", {}, [_vm._v("Reply")])]
                                ),
                                _vm._v(" "),
                                _c(
                                  "ul",
                                  { staticClass: "children" },
                                  _vm._l(comment.comment_replies, function(
                                    reply,
                                    key
                                  ) {
                                    return _c(
                                      "li",
                                      {
                                        key: key,
                                        staticClass: "comment-item",
                                        staticStyle: {
                                          "background-color": "aliceblue"
                                        }
                                      },
                                      [
                                        _c(
                                          "div",
                                          {
                                            staticClass:
                                              "post__author author vcard inline-items"
                                          },
                                          [
                                            _c("img", {
                                              attrs: {
                                                src: _vm.getCommentProfile(
                                                  reply
                                                ),
                                                alt: "author"
                                              }
                                            }),
                                            _vm._v(" "),
                                            _c(
                                              "div",
                                              { staticClass: "author-date" },
                                              [
                                                _c(
                                                  "a",
                                                  {
                                                    staticClass:
                                                      "h6 post__author-name fn",
                                                    attrs: { href: "#" }
                                                  },
                                                  [
                                                    _vm._v(
                                                      "\n                                            " +
                                                        _vm._s(
                                                          _vm.getCommentName(
                                                            reply
                                                          )
                                                        ) +
                                                        "\n                                        "
                                                    )
                                                  ]
                                                ),
                                                _vm._v(" "),
                                                _c(
                                                  "div",
                                                  { staticClass: "post__date" },
                                                  [
                                                    _c(
                                                      "time",
                                                      {
                                                        staticClass:
                                                          "published",
                                                        attrs: {
                                                          datetime:
                                                            "2017-03-24T18:18"
                                                        }
                                                      },
                                                      [
                                                        _vm._v(
                                                          "\n                                                " +
                                                            _vm._s(
                                                              reply.created_at
                                                            ) +
                                                            "\n                                            "
                                                        )
                                                      ]
                                                    )
                                                  ]
                                                )
                                              ]
                                            )
                                          ]
                                        ),
                                        _vm._v(" "),
                                        _c("p", [
                                          _vm._v(
                                            "\n                                    " +
                                              _vm._s(reply.comment_text) +
                                              "\n                                "
                                          )
                                        ]),
                                        _vm._v(" "),
                                        _vm._m(7, true)
                                      ]
                                    )
                                  }),
                                  0
                                ),
                                _vm._v(" "),
                                _vm.isLoggedIn()
                                  ? _c(
                                      "div",
                                      {
                                        directives: [
                                          {
                                            name: "show",
                                            rawName: "v-show",
                                            value: _vm.isReplyTriggered(
                                              comment.id
                                            ),
                                            expression:
                                              "isReplyTriggered(comment.id)"
                                          }
                                        ],
                                        staticClass: "post-reply form-group"
                                      },
                                      [
                                        _c("textarea", {
                                          directives: [
                                            {
                                              name: "model",
                                              rawName: "v-model",
                                              value: _vm.comment_reply,
                                              expression: "comment_reply"
                                            }
                                          ],
                                          staticClass: "form-control",
                                          staticStyle: {
                                            resize: "none",
                                            width: "100%"
                                          },
                                          attrs: {
                                            placeholder: "Reply to comment"
                                          },
                                          domProps: {
                                            value: _vm.comment_reply
                                          },
                                          on: {
                                            input: function($event) {
                                              if ($event.target.composing) {
                                                return
                                              }
                                              _vm.comment_reply =
                                                $event.target.value
                                            }
                                          }
                                        }),
                                        _vm._v(" "),
                                        _c(
                                          "div",
                                          { staticClass: "inline-items right" },
                                          [
                                            _c(
                                              "button",
                                              {
                                                staticClass: "btn btn-primary",
                                                on: {
                                                  click: function($event) {
                                                    $event.preventDefault()
                                                    return _vm.submitComment(
                                                      "comment",
                                                      comment
                                                    )
                                                  }
                                                }
                                              },
                                              [_vm._v("Reply ")]
                                            ),
                                            _vm._v(" "),
                                            _c(
                                              "button",
                                              {
                                                staticClass: "btn btn-danger ",
                                                on: {
                                                  click: function($event) {
                                                    $event.preventDefault()
                                                    return _vm.resetReplyBox()
                                                  }
                                                }
                                              },
                                              [_vm._v("Cancel ")]
                                            )
                                          ]
                                        )
                                      ]
                                    )
                                  : _vm._e()
                              ]
                            )
                          ]
                        )
                      })
                    ],
                    2
                  )
                ])
              ])
            : _vm._e()
        ]
      )
    ]
  )
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "a",
      {
        staticClass: "carousel-control-prev",
        attrs: {
          href: "#carouselExampleControls",
          role: "button",
          "data-slide": "prev"
        }
      },
      [
        _c("span", {
          staticClass: "carousel-control-prev-icon",
          attrs: { "aria-hidden": "true" }
        }),
        _vm._v(" "),
        _c("span", { staticClass: "sr-only" }, [_vm._v("Previous")])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "a",
      {
        staticClass: "carousel-control-next",
        attrs: {
          href: "#carouselExampleControls",
          role: "button",
          "data-slide": "next"
        }
      },
      [
        _c("span", {
          staticClass: "carousel-control-next-icon",
          attrs: { "aria-hidden": "true" }
        }),
        _vm._v(" "),
        _c("span", { staticClass: "sr-only" }, [_vm._v("Next")])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("h3", [_c("strong", [_c("u", [_vm._v("Comments")])])])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "a",
      { staticClass: "post-add-icon inline-items", attrs: { href: "#" } },
      [
        _c("i", { staticClass: "fas fa-thumbs-up" }),
        _vm._v(" "),
        _c("span", [_vm._v("0")])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "a",
      {
        staticClass: "carousel-control-prev",
        attrs: {
          href: "#carouselExampleControls",
          role: "button",
          "data-slide": "prev"
        }
      },
      [
        _c("span", {
          staticClass: "carousel-control-prev-icon",
          attrs: { "aria-hidden": "true" }
        }),
        _vm._v(" "),
        _c("span", { staticClass: "sr-only" }, [_vm._v("Previous")])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "a",
      {
        staticClass: "carousel-control-next",
        attrs: {
          href: "#carouselExampleControls",
          role: "button",
          "data-slide": "next"
        }
      },
      [
        _c("span", {
          staticClass: "carousel-control-next-icon",
          attrs: { "aria-hidden": "true" }
        }),
        _vm._v(" "),
        _c("span", { staticClass: "sr-only" }, [_vm._v("Next")])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("h3", [_c("strong", [_c("u", [_vm._v("Comments")])])])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "a",
      { staticClass: "post-add-icon inline-items", attrs: { href: "#" } },
      [
        _c("i", { staticClass: "fas fa-thumbs-up" }),
        _vm._v(" "),
        _c("span", [_vm._v("0")])
      ]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return normalizeComponent; });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent (
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier, /* server only */
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (render) {
    options.render = render
    options.staticRenderFns = staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = 'data-v-' + scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = shadowMode
      ? function () { injectStyles.call(this, this.$root.$options.shadowRoot) }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functioal component in vue file
      var originalRender = options.render
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ "./resources/js/components/bargainmodel.vue":
/*!**************************************************!*\
  !*** ./resources/js/components/bargainmodel.vue ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _bargainmodel_vue_vue_type_template_id_0a509ca2___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./bargainmodel.vue?vue&type=template&id=0a509ca2& */ "./resources/js/components/bargainmodel.vue?vue&type=template&id=0a509ca2&");
/* harmony import */ var _bargainmodel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./bargainmodel.vue?vue&type=script&lang=js& */ "./resources/js/components/bargainmodel.vue?vue&type=script&lang=js&");
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _bargainmodel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _bargainmodel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[key]; }) }(__WEBPACK_IMPORT_KEY__));
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _bargainmodel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _bargainmodel_vue_vue_type_template_id_0a509ca2___WEBPACK_IMPORTED_MODULE_0__["render"],
  _bargainmodel_vue_vue_type_template_id_0a509ca2___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/bargainmodel.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/bargainmodel.vue?vue&type=script&lang=js&":
/*!***************************************************************************!*\
  !*** ./resources/js/components/bargainmodel.vue?vue&type=script&lang=js& ***!
  \***************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_bargainmodel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./bargainmodel.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/bargainmodel.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_bargainmodel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_bargainmodel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_bargainmodel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_bargainmodel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_bargainmodel_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/components/bargainmodel.vue?vue&type=template&id=0a509ca2&":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/bargainmodel.vue?vue&type=template&id=0a509ca2& ***!
  \*********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_bargainmodel_vue_vue_type_template_id_0a509ca2___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./bargainmodel.vue?vue&type=template&id=0a509ca2& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/bargainmodel.vue?vue&type=template&id=0a509ca2&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_bargainmodel_vue_vue_type_template_id_0a509ca2___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_bargainmodel_vue_vue_type_template_id_0a509ca2___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/companylist.vue":
/*!*************************************************!*\
  !*** ./resources/js/components/companylist.vue ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _companylist_vue_vue_type_template_id_f15a37c0___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./companylist.vue?vue&type=template&id=f15a37c0& */ "./resources/js/components/companylist.vue?vue&type=template&id=f15a37c0&");
/* harmony import */ var _companylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./companylist.vue?vue&type=script&lang=js& */ "./resources/js/components/companylist.vue?vue&type=script&lang=js&");
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _companylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _companylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[key]; }) }(__WEBPACK_IMPORT_KEY__));
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _companylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _companylist_vue_vue_type_template_id_f15a37c0___WEBPACK_IMPORTED_MODULE_0__["render"],
  _companylist_vue_vue_type_template_id_f15a37c0___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/companylist.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/companylist.vue?vue&type=script&lang=js&":
/*!**************************************************************************!*\
  !*** ./resources/js/components/companylist.vue?vue&type=script&lang=js& ***!
  \**************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_companylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./companylist.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/companylist.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_companylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_companylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_companylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_companylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_companylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/components/companylist.vue?vue&type=template&id=f15a37c0&":
/*!********************************************************************************!*\
  !*** ./resources/js/components/companylist.vue?vue&type=template&id=f15a37c0& ***!
  \********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_companylist_vue_vue_type_template_id_f15a37c0___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./companylist.vue?vue&type=template&id=f15a37c0& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/companylist.vue?vue&type=template&id=f15a37c0&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_companylist_vue_vue_type_template_id_f15a37c0___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_companylist_vue_vue_type_template_id_f15a37c0___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/error.vue":
/*!*******************************************!*\
  !*** ./resources/js/components/error.vue ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _error_vue_vue_type_template_id_6e88e6cd___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./error.vue?vue&type=template&id=6e88e6cd& */ "./resources/js/components/error.vue?vue&type=template&id=6e88e6cd&");
/* harmony import */ var _error_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./error.vue?vue&type=script&lang=js& */ "./resources/js/components/error.vue?vue&type=script&lang=js&");
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _error_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _error_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[key]; }) }(__WEBPACK_IMPORT_KEY__));
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _error_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _error_vue_vue_type_template_id_6e88e6cd___WEBPACK_IMPORTED_MODULE_0__["render"],
  _error_vue_vue_type_template_id_6e88e6cd___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/error.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/error.vue?vue&type=script&lang=js&":
/*!********************************************************************!*\
  !*** ./resources/js/components/error.vue?vue&type=script&lang=js& ***!
  \********************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_error_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./error.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/error.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_error_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_error_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_error_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_error_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_error_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/components/error.vue?vue&type=template&id=6e88e6cd&":
/*!**************************************************************************!*\
  !*** ./resources/js/components/error.vue?vue&type=template&id=6e88e6cd& ***!
  \**************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_error_vue_vue_type_template_id_6e88e6cd___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./error.vue?vue&type=template&id=6e88e6cd& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/error.vue?vue&type=template&id=6e88e6cd&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_error_vue_vue_type_template_id_6e88e6cd___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_error_vue_vue_type_template_id_6e88e6cd___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/loader.vue":
/*!********************************************!*\
  !*** ./resources/js/components/loader.vue ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _loader_vue_vue_type_template_id_155ec09e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./loader.vue?vue&type=template&id=155ec09e& */ "./resources/js/components/loader.vue?vue&type=template&id=155ec09e&");
/* harmony import */ var _loader_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./loader.vue?vue&type=script&lang=js& */ "./resources/js/components/loader.vue?vue&type=script&lang=js&");
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _loader_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _loader_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[key]; }) }(__WEBPACK_IMPORT_KEY__));
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _loader_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _loader_vue_vue_type_template_id_155ec09e___WEBPACK_IMPORTED_MODULE_0__["render"],
  _loader_vue_vue_type_template_id_155ec09e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/loader.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/loader.vue?vue&type=script&lang=js&":
/*!*********************************************************************!*\
  !*** ./resources/js/components/loader.vue?vue&type=script&lang=js& ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_loader_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./loader.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loader.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_loader_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_loader_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_loader_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_loader_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_loader_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/components/loader.vue?vue&type=template&id=155ec09e&":
/*!***************************************************************************!*\
  !*** ./resources/js/components/loader.vue?vue&type=template&id=155ec09e& ***!
  \***************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_loader_vue_vue_type_template_id_155ec09e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./loader.vue?vue&type=template&id=155ec09e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/loader.vue?vue&type=template&id=155ec09e&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_loader_vue_vue_type_template_id_155ec09e___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_loader_vue_vue_type_template_id_155ec09e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/productlist.vue":
/*!*************************************************!*\
  !*** ./resources/js/components/productlist.vue ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _productlist_vue_vue_type_template_id_7b22e292___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./productlist.vue?vue&type=template&id=7b22e292& */ "./resources/js/components/productlist.vue?vue&type=template&id=7b22e292&");
/* harmony import */ var _productlist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./productlist.vue?vue&type=script&lang=js& */ "./resources/js/components/productlist.vue?vue&type=script&lang=js&");
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _productlist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _productlist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[key]; }) }(__WEBPACK_IMPORT_KEY__));
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _productlist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _productlist_vue_vue_type_template_id_7b22e292___WEBPACK_IMPORTED_MODULE_0__["render"],
  _productlist_vue_vue_type_template_id_7b22e292___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/productlist.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/productlist.vue?vue&type=script&lang=js&":
/*!**************************************************************************!*\
  !*** ./resources/js/components/productlist.vue?vue&type=script&lang=js& ***!
  \**************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_productlist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./productlist.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/productlist.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_productlist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_productlist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_productlist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_productlist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_productlist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/components/productlist.vue?vue&type=template&id=7b22e292&":
/*!********************************************************************************!*\
  !*** ./resources/js/components/productlist.vue?vue&type=template&id=7b22e292& ***!
  \********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_productlist_vue_vue_type_template_id_7b22e292___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./productlist.vue?vue&type=template&id=7b22e292& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/productlist.vue?vue&type=template&id=7b22e292&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_productlist_vue_vue_type_template_id_7b22e292___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_productlist_vue_vue_type_template_id_7b22e292___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/statuslist.vue":
/*!************************************************!*\
  !*** ./resources/js/components/statuslist.vue ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _statuslist_vue_vue_type_template_id_43cfd01b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./statuslist.vue?vue&type=template&id=43cfd01b& */ "./resources/js/components/statuslist.vue?vue&type=template&id=43cfd01b&");
/* harmony import */ var _statuslist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./statuslist.vue?vue&type=script&lang=js& */ "./resources/js/components/statuslist.vue?vue&type=script&lang=js&");
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _statuslist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _statuslist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[key]; }) }(__WEBPACK_IMPORT_KEY__));
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _statuslist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _statuslist_vue_vue_type_template_id_43cfd01b___WEBPACK_IMPORTED_MODULE_0__["render"],
  _statuslist_vue_vue_type_template_id_43cfd01b___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/statuslist.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/statuslist.vue?vue&type=script&lang=js&":
/*!*************************************************************************!*\
  !*** ./resources/js/components/statuslist.vue?vue&type=script&lang=js& ***!
  \*************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./statuslist.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/statuslist.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/components/statuslist.vue?vue&type=template&id=43cfd01b&":
/*!*******************************************************************************!*\
  !*** ./resources/js/components/statuslist.vue?vue&type=template&id=43cfd01b& ***!
  \*******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslist_vue_vue_type_template_id_43cfd01b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./statuslist.vue?vue&type=template&id=43cfd01b& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/statuslist.vue?vue&type=template&id=43cfd01b&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslist_vue_vue_type_template_id_43cfd01b___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslist_vue_vue_type_template_id_43cfd01b___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/statuslistv2.vue":
/*!**************************************************!*\
  !*** ./resources/js/components/statuslistv2.vue ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _statuslistv2_vue_vue_type_template_id_061aebd7___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./statuslistv2.vue?vue&type=template&id=061aebd7& */ "./resources/js/components/statuslistv2.vue?vue&type=template&id=061aebd7&");
/* harmony import */ var _statuslistv2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./statuslistv2.vue?vue&type=script&lang=js& */ "./resources/js/components/statuslistv2.vue?vue&type=script&lang=js&");
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _statuslistv2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _statuslistv2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[key]; }) }(__WEBPACK_IMPORT_KEY__));
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _statuslistv2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _statuslistv2_vue_vue_type_template_id_061aebd7___WEBPACK_IMPORTED_MODULE_0__["render"],
  _statuslistv2_vue_vue_type_template_id_061aebd7___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/statuslistv2.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/statuslistv2.vue?vue&type=script&lang=js&":
/*!***************************************************************************!*\
  !*** ./resources/js/components/statuslistv2.vue?vue&type=script&lang=js& ***!
  \***************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslistv2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./statuslistv2.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/statuslistv2.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslistv2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslistv2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslistv2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslistv2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslistv2_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/components/statuslistv2.vue?vue&type=template&id=061aebd7&":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/statuslistv2.vue?vue&type=template&id=061aebd7& ***!
  \*********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslistv2_vue_vue_type_template_id_061aebd7___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./statuslistv2.vue?vue&type=template&id=061aebd7& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/statuslistv2.vue?vue&type=template&id=061aebd7&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslistv2_vue_vue_type_template_id_061aebd7___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_statuslistv2_vue_vue_type_template_id_061aebd7___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/trendingcompanylist.vue":
/*!*********************************************************!*\
  !*** ./resources/js/components/trendingcompanylist.vue ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _trendingcompanylist_vue_vue_type_template_id_64e1435b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./trendingcompanylist.vue?vue&type=template&id=64e1435b& */ "./resources/js/components/trendingcompanylist.vue?vue&type=template&id=64e1435b&");
/* harmony import */ var _trendingcompanylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./trendingcompanylist.vue?vue&type=script&lang=js& */ "./resources/js/components/trendingcompanylist.vue?vue&type=script&lang=js&");
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _trendingcompanylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _trendingcompanylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[key]; }) }(__WEBPACK_IMPORT_KEY__));
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _trendingcompanylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _trendingcompanylist_vue_vue_type_template_id_64e1435b___WEBPACK_IMPORTED_MODULE_0__["render"],
  _trendingcompanylist_vue_vue_type_template_id_64e1435b___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/trendingcompanylist.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/trendingcompanylist.vue?vue&type=script&lang=js&":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/trendingcompanylist.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_trendingcompanylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./trendingcompanylist.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/trendingcompanylist.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_trendingcompanylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_trendingcompanylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_trendingcompanylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_trendingcompanylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_trendingcompanylist_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/components/trendingcompanylist.vue?vue&type=template&id=64e1435b&":
/*!****************************************************************************************!*\
  !*** ./resources/js/components/trendingcompanylist.vue?vue&type=template&id=64e1435b& ***!
  \****************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_trendingcompanylist_vue_vue_type_template_id_64e1435b___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./trendingcompanylist.vue?vue&type=template&id=64e1435b& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/trendingcompanylist.vue?vue&type=template&id=64e1435b&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_trendingcompanylist_vue_vue_type_template_id_64e1435b___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_trendingcompanylist_vue_vue_type_template_id_64e1435b___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/components/viewpostdetails.vue":
/*!*****************************************************!*\
  !*** ./resources/js/components/viewpostdetails.vue ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _viewpostdetails_vue_vue_type_template_id_3360e03c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./viewpostdetails.vue?vue&type=template&id=3360e03c& */ "./resources/js/components/viewpostdetails.vue?vue&type=template&id=3360e03c&");
/* harmony import */ var _viewpostdetails_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./viewpostdetails.vue?vue&type=script&lang=js& */ "./resources/js/components/viewpostdetails.vue?vue&type=script&lang=js&");
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _viewpostdetails_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _viewpostdetails_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[key]; }) }(__WEBPACK_IMPORT_KEY__));
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _viewpostdetails_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _viewpostdetails_vue_vue_type_template_id_3360e03c___WEBPACK_IMPORTED_MODULE_0__["render"],
  _viewpostdetails_vue_vue_type_template_id_3360e03c___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/viewpostdetails.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/viewpostdetails.vue?vue&type=script&lang=js&":
/*!******************************************************************************!*\
  !*** ./resources/js/components/viewpostdetails.vue?vue&type=script&lang=js& ***!
  \******************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_viewpostdetails_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./viewpostdetails.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/viewpostdetails.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_viewpostdetails_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_viewpostdetails_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_viewpostdetails_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_viewpostdetails_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_viewpostdetails_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/components/viewpostdetails.vue?vue&type=template&id=3360e03c&":
/*!************************************************************************************!*\
  !*** ./resources/js/components/viewpostdetails.vue?vue&type=template&id=3360e03c& ***!
  \************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_viewpostdetails_vue_vue_type_template_id_3360e03c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./viewpostdetails.vue?vue&type=template&id=3360e03c& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/viewpostdetails.vue?vue&type=template&id=3360e03c&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_viewpostdetails_vue_vue_type_template_id_3360e03c___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_viewpostdetails_vue_vue_type_template_id_3360e03c___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/config/required_components.js":
/*!****************************************************!*\
  !*** ./resources/js/config/required_components.js ***!
  \****************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_error_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/error.vue */ "./resources/js/components/error.vue");
/* harmony import */ var _components_loader_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../components/loader.vue */ "./resources/js/components/loader.vue");
/* harmony import */ var _components_statuslist_vue__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../components/statuslist.vue */ "./resources/js/components/statuslist.vue");
/* harmony import */ var _components_statuslistv2_vue__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../components/statuslistv2.vue */ "./resources/js/components/statuslistv2.vue");
/* harmony import */ var _components_productlist_vue__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../components/productlist.vue */ "./resources/js/components/productlist.vue");
/* harmony import */ var _components_trendingcompanylist_vue__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../components/trendingcompanylist.vue */ "./resources/js/components/trendingcompanylist.vue");
/* harmony import */ var _components_companylist_vue__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../components/companylist.vue */ "./resources/js/components/companylist.vue");
/* harmony import */ var _components_viewpostdetails_vue__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../components/viewpostdetails.vue */ "./resources/js/components/viewpostdetails.vue");
/* harmony import */ var _components_bargainmodel_vue__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../components/bargainmodel.vue */ "./resources/js/components/bargainmodel.vue");









window.error = _components_error_vue__WEBPACK_IMPORTED_MODULE_0__["default"];
window.loader = _components_loader_vue__WEBPACK_IMPORTED_MODULE_1__["default"];
window.statuslist = _components_statuslist_vue__WEBPACK_IMPORTED_MODULE_2__["default"];
window.statuslistv2 = _components_statuslistv2_vue__WEBPACK_IMPORTED_MODULE_3__["default"];
window.productlist = _components_productlist_vue__WEBPACK_IMPORTED_MODULE_4__["default"];
window.trendingcompanylist = _components_trendingcompanylist_vue__WEBPACK_IMPORTED_MODULE_5__["default"];
window.companylist = _components_companylist_vue__WEBPACK_IMPORTED_MODULE_6__["default"];
window.viewpostdetails = _components_viewpostdetails_vue__WEBPACK_IMPORTED_MODULE_7__["default"];
window.bargainmodel = _components_bargainmodel_vue__WEBPACK_IMPORTED_MODULE_8__["default"];

/***/ }),

/***/ 2:
/*!**********************************************************!*\
  !*** multi ./resources/js/config/required_components.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/noorfarooqy/Sites/feizhonglaravel/resources/js/config/required_components.js */"./resources/js/config/required_components.js");


/***/ })

/******/ });