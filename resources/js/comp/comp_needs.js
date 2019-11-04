
require(".././bootstrap");
import error from "../components/error.vue";
import loader from "../components/loader.vue";
import ServerRequest from ".././ServerRequest.js";
import Company from ".././Company.js";
window.Vue = require("vue");
Vue.use(require('vue-cookies'));
window.Axios = require('axios');

var app = new Vue({
  el:"#app",
  methods: {
    getCompanyData()
    {
      var req = {
        "platform" : 1,
        "host": "comp"
      };
      this.ServerRequest.setRequest(req);
      this.ServerRequest.serverRequest("/api/comp/data",
        this.setCompanyData, this.showError);
    },
    setCompanyData(data)
    {
      if(data[0])
        data = data[0];
      this.Company.company_logo = data.comp_logo;
      this.Company.company_name = data.comp_name;
      this.Company.company_email = data.comp_email;
      this.Company.company_phone = data.comp_phone;
      this.Company.guest_id = data.comp_id;
      this.Company.guest_token = data.comp_token;

      this.Company.company_address_one = data.address.comp_addr_one;
      this.Company.company_address_two = data.address.comp_addr_two;
      this.Company.company_province = data.address.comp_province;
      this.Company.company_city = data.address.comp_city;

      this.Company.company_type = data.type.comp_type;
      this.Company.company_subtype = data.type.comp_subtype;
      this.Company.company_description = data.type.comp_description;
      this.Company.company_hasLicense = data.hasLicense;
      console.log(data);
      this.hideLoader();

    },
    showError(error) {
        this.errorObject.error_text = error;
        this.errorObject.errorModal = this.errorModal = true;
    },
    disMissErrorModel()
    {
      this.errorModal = false;
      this.errorObject.errorModal = this.errorModal;
      this.errorObject.error_text = "This is the default error text"
    },
    disMissAuthenticationModal()
    {
      this.showPasswordModal = false;
      this.changeWhere.change_type =-1;
    },
    disMissPhoneModal()
    {
      this.update_phone = false;
    },
    hideLoader()
    {
      this.Loader.showLoader = this.showLoader = false;
    }
  },
  mounted(){
    this.getCompanyData();
  },
  computed: {

  },
  components: {
    error,loader,
  },
  data: {
    Company:new Company(),
    errorModal:false,
    errorObject: {
      errorModal:false,
      error_text: "This is default error text"
    },
    showLoader: false,
    Loader: {
      showLoader:false
    },
    ServerRequest: new ServerRequest()
  }
})
