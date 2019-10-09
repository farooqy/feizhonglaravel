
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require("./bootstrap");
import User from "./User.js";
import Company from "./Company.js";
window.Vue = require("vue");
Vue.use(require('vue-cookies'))
window.Axios = require('axios');
Vue.component('formerror', {
  template: `
  <div class="error_text">
  <slot></slot>
  </div>
  `
});
Vue.component('loader', {
  template: `
  <div class="spinner-border text-primary" role="status">
  <span class="sr-only">Loading...</span>
  </div>
  `
});
Vue.component('popmodel',{
  template:`
  <div class="modal" tabindex="-1" role="dialog" style="display:block;" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" v-text="modal_title"> title here </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <p v-text="modal_body"></p>
        <h4><u v-text="telephone_number"></u></h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" @click="sendVerificationCode">
          Continue
        </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal"
        @click="disMissPopModel">Edit</button>
      </div>
    </div>
  </div>
</div>
  `,
  methods: {
    sendVerificationCode()
    {
      this.$emit('hide-modal', 'continue');
      // this.$emit(continueVerificationCode();
    },
    disMissPopModel()
    {
      this.$emit('hide-modal', 'dismiss');
      console.log('child trigger');
    }

  },
  props:["modal_title", "modal_body", "telephone_number", "showPopModel"]
});
Vue.component('errormodal', {
  template: `
  <div class="modal" tabindex="-1" role="dialog" style="display:block;" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"> Error </h5>
        <button type="button" class="close" data-dismiss="modal"
        aria-label="Close" @click="disMissErrorModel">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" >
        <p v-text="error_text"></p>
      </div>
    </div>
  </div>
</div>
  `,
    props: ["error_text"],
  methods: {
    disMissErrorModel()
    {
      this.$emit('hide-error-model');
    }
  }
});
const app = new Vue({
    el: '#app',
    data: {
      User: new User(),
      Company: new Company(),
      idTokenUrl: "/api/statistics/generateIdAndToken",
      apiurl: "/api/statistics/getApiKey/browser",
      showLoader:false,
      comp_registration:false,
      user_registration:false,
      comp_login:true,
      user_login:false,
      login_panel:'#lg1',
      comp_basic_info:false,
      comp_addr_info:false,
      comp_type_info:false,
      comp_phone_verification:true,
      showPopModel:false,
      code_request_time : 0,
      errorModal: false,
      errorObject:{"errorModal":false,"error_text":''},
      modal_content:{
        "modal_title": "I am defualt title",
        "modal_body": "I am default body",
        "telephone_number":'0000-0000',
        "showPopModel": null,
      },
      selected_type: 0,
      customtype: false,
    },
    methods: {
      enableButton()
      {
        this.enableCodeButton = true;
        console.log(' I have done it');
      },
      comp_logo_changed(event)
      {
        this.showLoader = true;
        var input = event.target;
        if(input.files && input.files[0])
        {
          var reader = new FileReader();
          reader.onload = (e) => {
            this.Company.company_logo = e.target.result;

            this.showLoader = false;
          }
          reader.readAsDataURL(input.files[0]);
        }
      },
      showPanel(panel)
      {
        if(this.user_login)
        {
          if(panel ==='register')
          {
            this.user_login = false;
            this.user_registration = true;
          }
        }
        else if(this.user_registration)
        {
          if(panel === 'login')company_types
          {
            this.user_login = true;
            this.user_registration = false;
          }
        }
        else if(this.comp_login)
        {
          if(panel ==='register')
          {
            this.comp_login = false;
            this.comp_registration = true;
          }
        }
        else if(this.comp_registration)
        {
          if(panel === 'login')
          {
            this.comp_login = true;
            this.comp_registration = false;
          }
        }
      },
      showTab(tab)
      {company_types
        if(tab === 'supplier')
        {
          this.user_login = false;
          this.user_registration = false;
          this.comp_registration = false;
          this.comp_login = true;
        }
        else if('buyer')
        {
          this.user_login = true;
          this.user_registration = false;
          this.comp_registration = false;
          this.comp_login = false;
        }
      },
      userRegistration()
      {
        this.serverRequest(this.User, "/api/user/register");
      },
      serverRequest(form, url, type="user")
      {
        this.showLoader = true;
        axios.post(url,form).
        then(response => {
            if(response.data.isSuccess)
            {
              if(type === "user" || type === "company")
                window.location.reload();
              else if( type === "guest")
              {
                this.showLoader = false;
                console.log(response.data.data);
                this.User.guest_id = response.data.data.host_id;
                this.User.guest_token = response.data.data.host_token;
                this.Company.guest_id = response.data.data.host_id;
                this.Company.guest_token = response.data.data.host_token;
                this.getApiKey();
              }
              else if(type === "api")
              {
                this.showLoader = false;
                this.User.api_key = response.data.data.api_key;
                this.Company.api_key = response.data.data.api_key;
              }
              else if(type === "phone")
              {
                this.showLoader = false;
                alert('Please check your SMS for the codes sent');
              }
              else if(type === "basicInfo")
              {
                this.comp_basic_info =false;
                this.comp_addr_info = true
                this.showLoader = false;
                this.Company.company_id = this.Company.guest_id = response.data.data.comp_id;
                this.Company.company_token = this.Company.guest_token = response.data.data.comp_token;
                this.comp_basic_info =false;
                this.comp_addr_info = true
                this.showLoader = false;
              }
              else if(type === "address")
              {
                this.comp_addr_info =false;
                this.comp_type_info = true ;
                this.showLoader = false;
              }
              else if(type === "type")
              {
                var data = {
                  "company_phone": this.Company.country_code+
                  this.Company.company_phone,
                  "company_password": this.Company.company_password,
                  "guest_id": this.Company.guest_id,
                  "guest_token": this.Company.guest_token,
                  "api_key": this.Company.api_key
                };
                this.serverRequest(data, "/api/comp/login", "comp_login");
              }
              else if(type === "comp_login")
              {
                window.location.reload();
              }
              else
              {
                this.showLoader = false;
                alert('success');
              }
            }
            else {
            {
              this.showLoader = false;
                console.log(response.data);
                if(type === "user")
                  this.User.error = response.data.errorMessage;
                if(response.data.errorMessage.length > 0)
                  alert(response.data.errorMessage[0]);
                if(type === "phone")
                this.code_request_time -=60;
            }
          }
        });
      },
      getGuestCredentials()
      {
        var body = {"platform":1};
        this.serverRequest(body,this.idTokenUrl, "guest");
      },
      getApiKey()
      {
        var browser = browserDetails();
        browser.api_host_id = this.User.guest_id;
        browser.api_host_token = this.User.guest_token;
        browser.api_host_type = "guest";
        console.log(browser);
        this.serverRequest(browser,this.apiurl, "api");
      },
      requestPhoneCode()
      {
        var now = Math.round(Date.now()/(1000));
        if((now - this.code_request_time) < 60)
        {
          alert('please wait for 3 minutes before requesting code again');
          console.log('now - tiem '+(now-this.code_request_time))
          return;
        }
        else {
          this.code_request_time = Math.round(Date.now()/1000);
        }
        if(this.Company.company_phone === null)
        {
          alert('Please provide the telephone number');
          return;
        }
        this.modal_content.modal_title = 'Phone Verification';
        this.modal_content.modal_body = '6 Digits code will be sent to this phone'
        this.modal_content.telephone_number = this.Company.country_code+' '+
        this.Company.company_phone;
        this.showPopModel = true;
        this.modal_content.showPopModel = true;
      },
      continueVerificationCode(direction)
      {
        this.showPopModel = false;
        if(direction === "dismiss")
          return;
        this.showLoader = true;
        var data = {
          'telephone' : this.Company.country_code+this.Company.company_phone,
          'guest_id': this.Company.guest_id,
          'guest_token': this.Company.guest_token,
          'api_key': this.Company.api_key
        }
        this.serverRequest(data,'/api/comp/register/phoneverificaton', 'phone');
      },
      disMissPopModel()
      {
        this.showPopModel= false;
      },
      hideErrorModal()
      {
        this.errorModal = false;
        this.errorObject.errorModal = this.errorModal;
      },
      updateSelect(event){
        console.log("type number ", event.target.options.selectedIndex);
        this.selected_type =event.target.options.selectedIndex;
        this.Company.company_subtype = this.Company.types[this.selected_type][0];
        if(this.selected_type === 20)
        {
          this.showCustomInput();
        }
        else {
          this.customtype = false;
        }
      },
      showCustomInput()
      {
        this.customtype = true;
      },
      stageOneRegistration()
      {
        if(this.Company.company_logo === null ||
          this.Company.verification_code === null ||
          this.Company.company_logo === "/atoc_assets/images/upload_logo_icon.jpg")
        {
          this.errorObject.error_text = "Please upload a logo, and verify your phone number";
          this.errorModal = true;
          this.errorObject.errorModal = this.errorModal;
        }
        else
          this.comp_phone_verification = false, this.comp_basic_info = true;
      },
      stageBasicInfo()
      {
        if(this.Company.company_name === "" ||
          this.Company.company_name === null)
        {
          this.errorObject.error_text = "Please enter company name";
          this.errorModal = true;
          this.errorObject.errorModal = this.errorModal;
        }
        else if(this.Company.company_email === "" ||
            this.Company.company_email === null)
        {
          this.errorObject.error_text = "Please enter company email"  ;
          this.errorModal = true;
          this.errorObject.errorModal = this.errorModal;
        }
        else if(this.Company.company_password === "" ||
          this.Company.company_password === null)
        {
          this.errorObject.error_text = "Please enter company password"  ;
          this.errorModal = true;
          this.errorObject.errorModal = this.errorModal;
        }
        else if(this.Company.company_password !==
          this.Company.company_password_verification)
        {
          this.errorObject.error_text = "The company passwords do not match"  ;
          this.errorModal = true;
          this.errorObject.errorModal = this.errorModal;

        }
        else {
          var data = {
            "company_logo": this.Company.company_logo,
            "company_name": this.Company.company_name,
            "company_email": this.Company.company_email,
            "company_phone": this.Company.country_code+
            this.Company.company_phone,
            "company_password": this.Company.company_password,
            "verification_code": this.Company.verification_code,
            "guest_id": this.Company.guest_id,
            "guest_token": this.Company.guest_token,
            "api_key": this.Company.api_key
          };
          this.serverRequest(data, "/api/comp/register/basicInfo", "basicInfo");

        }

      },
      stageAddressInfo()
      {
        if(this.Company.company_address_one === null ||
          this.Company.company_addr_one === "")
        {
          this.errorObject.error_text = "Please provide company address";
          this.errorObject.errorModal = this.errorModal = true;
        }
        else if(this.Company.company_province === null ||
            this.Company.company_province === "")
        {
          this.errorObject.error_text = "Please provide company province";
          this.errorObject.errorModal = this.errorModal = true;
        }
        else if(this.Company.company_city === null ||
            this.Company.company_city === "")
        {
          this.errorObject.error_text = "Please provide company city";
          this.errorObject.errorModal = this.errorModal = true;
        }
        else {
          var data = {
            "company_address_one":this.Company.company_address_one,
            "company_address_two": this.Company.company_address_two,
            "company_province": this.Company.company_province,
            "company_city": this.Company.company_city,
            "company_token": this.Company.guest_token,
            "company_id": this.Company.guest_id,
            "api_key": this.Company.api_key,
          };
          this.serverRequest(data,"/api/comp/register/address","address");

        }

      },
      submitRegistrationForm()
      {
        if(this.Company.company_type === null ||
          this.Company.company_type === "")
        {
            this.errorObject.error_text = "Please provide company type";
            this.errorObject.errorModal = this.errorModal = true;
        }
        else if(this.Company.company_subtype === null ||
          this.Company.company_subtype === "")
        {
            this.errorObject.error_text = "Please provide company subtype";
            this.errorObject.errorModal = this.errorModal = true;
        }
        else if(this.Company.company_description === null ||
            this.Company.company_description === "")
        {
            this.errorObject.error_text = "Please provide company description";
            this.errorObject.errorModal = this.errorModal = true;
        }
        else {
          var data = {
            "company_type": this.Company.company_type,
            "company_subtype": this.Company.company_subtype,
            "company_description": this.Company.company_description,
            "company_token": this.Company.guest_token,
            "company_id": this.Company.guest_id,
            "api_key": this.Company.api_key,
          };

          this.serverRequest(data, "/api/comp/register/type", "type");
        }
      },
      companyLogin()
      {
        var data = {
          "company_phone": this.Company.country_code+
          this.Company.company_phone,
          "company_password": this.Company.company_password,
          "guest_id": this.Company.guest_id,
          "guest_token": this.Company.guest_token,
          "api_key": this.Company.api_key
        };
        this.serverRequest(data, "/api/comp/login", "comp_login");
      }

    },
    components: {

    },
    mounted() {
      this.modal_content.showPopModel = this.showPopModel;
      this.Company.company_type = "Aerospace industry";
      this.Company.company_subtype = "Civil Aircraft";
      this.getGuestCredentials();
    }
});

function browserDetails () {
    'use strict';

    var module = {
        options: [],
        header: [navigator.platform, navigator.userAgent, navigator.appVersion, navigator.vendor, window.opera],
        dataos: [
            { name: 'Windows Phone', value: 'Windows Phone', version: 'OS' },
            { name: 'Windows', value: 'Win', version: 'NT' },
            { name: 'iPhone', value: 'iPhone', version: 'OS' },
            { name: 'iPad', value: 'iPad', version: 'OS' },
            { name: 'Kindle', value: 'Silk', version: 'Silk' },
            { name: 'Android', value: 'Android', version: 'Android' },
            { name: 'PlayBook', value: 'PlayBook', version: 'OS' },
            { name: 'BlackBerry', value: 'BlackBerry', version: '/' },
            { name: 'Macintosh', value: 'Mac', version: 'OS X' },
            { name: 'Linux', value: 'Linux', version: 'rv' },
            { name: 'Palm', value: 'Palm', version: 'PalmOS' }
        ],
        databrowser: [
            { name: 'Chrome', value: 'Chrome', version: 'Chrome' },
            { name: 'Firefox', value: 'Firefox', version: 'Firefox' },
            { name: 'Safari', value: 'Safari', version: 'Version' },
            { name: 'Internet Explorer', value: 'MSIE', version: 'MSIE' },
            { name: 'Opera', value: 'Opera', version: 'Opera' },
            { name: 'BlackBerry', value: 'CLDC', version: 'CLDC' },
            { name: 'Mozilla', value: 'Mozilla', version: 'Mozilla' }
        ],
        init: function () {
            var agent = this.header.join(' '),
                os = this.matchItem(agent, this.dataos),
                browser = this.matchItem(agent, this.databrowser);

            return { os: os, browser: browser };
        },
        matchItem: function (string, data) {
            var i = 0,
                j = 0,
                html = '',
                regex,
                regexv,
                match,
                matches,
                version;

            for (i = 0; i < data.length; i += 1) {
                regex = new RegExp(data[i].value, 'i');
                match = regex.test(string);
                if (match) {
                    regexv = new RegExp(data[i].version + '[- /:;]([\\d._]+)', 'i');
                    matches = string.match(regexv);
                    version = '';
                    if (matches) { if (matches[1]) { matches = matches[1]; } }
                    if (matches) {
                        matches = matches.split(/[._]+/);
                        for (j = 0; j < matches.length; j += 1) {
                            if (j === 0) {
                                version += matches[j] + '.';
                            } else {
                                version += matches[j];
                            }
                        }
                    } else {
                        version = '0';
                    }
                    return {
                        name: data[i].name,
                        version: parseFloat(version)
                    };
                }
            }
            return { name: 'unknown', version: 0 };
        }
    };

    var e = module.init(),
        debug = '';

    debug = {
      'os_name' : e.os.name === "" ? "uknown" : e.os.name ,
      'os_version' : e.os.version === null ? "uknown" : e.os.version  ,
      'browser_name' : e.browser.name === "" ? "uknown" : e.browser.name,
      'browser_version' : e.browser.version === null ? "unknown" : e.browser.version+'',
      'navigator_userAgent' : navigator.userAgent === "" ? "unknown" : navigator.userAgent ,
      'navigator_appVersion' : navigator.appVersion === "" ? "unknown" : navigator.appVersion,
      'navigator_platform' : navigator.platform === "" ? "unknown" : navigator.platform,
      'navigator_vendor' : navigator.vendor === "" ? "unknown" : navigator.vendor,
      'api_host_id' : null,
      'api_host_token': null,
      'api_host_type' :null,
    };

    return debug;
};
