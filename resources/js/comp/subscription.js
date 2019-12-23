
require(".././bootstrap");
import error from "../components/error.vue";
import loader from "../components/loader.vue";
import featurePlan from "../comp/feature_plan.vue";
import authenticationmodal from "../components/authenticationmodal.vue";
import Company from ".././Company.js";
import serverRequest from "../ServerRequest";
import Error from "../classes/Error";
import Success from "../classes/Success";

window.Vue = require("vue");
Vue.use(require('vue-cookies'));

var app = new Vue({
  el:"#app",
  methods: {
    getCompanyData()
    {
      var req = {
        "platform" : 1,
        "host": "comp"
      };
      this.Server.setRequest(req);
      this.Server.serverRequest("/api/comp/data", this.setCompanyData, this.showErrorModal);
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
    subscribeToFeaturePlan()
    {
        this.featurePlanPackage.visible = true;
    },
    showErrorModal(error)
    {
        this.Error.error_text = error;
        this.Error.visible = true;
        this.showLoader = false;

    },
    disMissErrorModel()
    {
      this.Error.visible = false;
      this.Error.error_text = ""
    },
    disMissAuthenticationModal()
    {
      this.showPasswordModal = false;
      this.changeWhere.change_type =-1;
    },
    disMissFeaturedPlanModel()
    {
        this.featurePlanPackage.visible = false;
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
    errorModal:error,error,loader, authenticationmodal,
    featurePlan
  },
  data: {
    Company:new Company(),
    Error: new Error(),
    showLoader: false,
    Loader: {
      showLoader:false
    },
    errorModal:false,
    errorObject:null,
    Success:new Success(),
    updateTarget:null,
    update_phone:false,
    addressTarget:null,
    changeWhere: {
      "change_type": -1,
      "change_value":null
    },
    Server: new serverRequest(),
    featurePlanPackage: {
        visible:false,
    }
  }
})
