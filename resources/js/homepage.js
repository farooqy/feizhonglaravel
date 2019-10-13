
require("./bootstrap");
import error from "./components/error.vue";
import loader from "./components/loader.vue";
import statuslist from "./components/statuslist.vue";
import trendingcompanylist from "./components/trendingcompanylist.vue";
import Company from "./Company.js";
import User from "./User.js";
import Status from "./Status.js";
window.Vue = require("vue");
Vue.use(require('vue-cookies'));
window.Axios = require('axios');

var app = new Vue({
  el:"#app",
  mounted(){
    this.getCompanyData();
  },
  methods: {
    getStatuses()
    {

    },
    getTrendingCompanies()
    {

      var req = {
        "host_id":this.Host.guest_id,
        "host_token": this.Host.guest_token,
        "host_type": this.host_type === 1 ? "comp": "normal",
        "api_key": this.Host.api_key === null ? "apikey" : this.Host.api_key
      };
      this.serverRequest('/api/list/companies', req, "trending");
    },
    serverRequest(url, form, type="default")
    {
      this.Loader.showLoader = this.showLoader = true;
      console.log('received data ', form, 'for type ',type);
      axios.post(url, form).
      then(response => {
        response = response.data;
        if(response.hasOwnProperty('error_message'))
        {
          this.errorObject.error_text = response.error_message;
          this.errorObject.errorModal = this.errorModal = true;
        }
        else if(response.isSuccess)
        {
          switch (type) {
            case "init":
              this.setInitData(response.data);
              break;
            case "comp_data":
              this.setCompanyDetails(response.data);
              break;
            case "trending":
              this.setTrendingList(response.data);
              break;
            default:
              console.log('successfull request ',response);
          }
        }
        else
        {
          if(response.errorMessage[0])
            response.errorMessage = response.errorMessage[0];
          this.errorObject.error_text = response.errorMessage;
          this.errorObject.errorModal = this.errorModal = true;
          this.hideLoader();
        }
      })
      .catch(error => {
        console.log("server error ",error);
        this.errorObject.error_text = error;
        this.errorObject.errorModal = this.errorModal = true;
        this.hideLoader();
      })
    },
    setTrendingList(data)
    {
      var i;
      for(i=0; i < data.length; i++)
      {
        var d = data[i];
        this.trending_list.push({
          "company_name": d.comp_name,
          "company_id": d.comp_id,
          "company_logo": d.comp_logo,
          "company_type": d.comp_type,
          "company_token": d.comp_token
        });
      }
      console.log('trending ',data);
      this.hideLoader();

    },
    getCompanyData()
    {
      var req = {
        "platform" : 1,
        "host": "comp"
      };
      this.serverRequest('/api/statistics/generateIdAndToken', req, "init");
    },
    setCompanyDetails(data)
    {
        if(data[0])
          data = data[0];
        this.Host.company_logo = data.comp_logo;
        this.Host.company_name = data.comp_name;
        this.Host.company_email = data.comp_email;
        this.Host.company_phone = data.comp_phone;
        this.Host.guest_id = data.comp_id;
        this.Host.guest_token = data.comp_token;

        this.Host.company_address_one = data.address.comp_addr_one;
        this.Host.company_address_two = data.address.comp_addr_two;
        this.Host.company_province = data.address.comp_province;
        this.Host.company_city = data.address.comp_city;

        this.Host.company_type = data.type.comp_type;
        this.Host.company_subtype = data.type.comp_subtype;
        this.Host.company_description = data.type.comp_description;
        this.Host.company_hasLicense = data.hasLicense;

        this.getTrendingCompanies();
    },
    setInitData(data)
    {
      if(data.host_type === "comp")
      {
        this.Host = new Company();
        this.host_type = 1;
        var req = {
          "platform" : 1,
          "host": "comp"
        };
        this.serverRequest("/api/comp/data", req, "comp_data");
      }
      else {
        this.Host = new User();
        this.host_type = 2;
      }

      this.Host.guest_id = data.host_id;
      this.Host.guest_token = data.host_token;
      this.hideLoader();
    },
    getHostProfile()
    {
      if(this.host_type === 1)
        return this.Host.company_logo;
      else
        return this.Host.user_profile;
    },
    getHostName()
    {
      if(this.host_type === 1)
        return this.Host.company_name;
      else
        return this.Host.user_firstName+' '+this.Host.user_lastName;
    },
    hideLoader()
    {
      this.Loader.showLoader = this.showLoader = false;
    },
    showErrorModal()
    {
      this.errorObject.errorModal = this.errorModal = true;
    },
    disMissErrorModel()
    {
      this.errorModal = false;
    },

  },
  components: {
    error,loader,statuslist,trendingcompanylist
  },
  data: {
    Host: null,
    Status: [
      {
        "status_text": "This is my status text with a lot of long text",
        "status_image": "/olympus_assets/img/photo-album2.jpg",
        "status_time": "2019-10-13 02:49:18"
      }
    ],
    trending_list: [
    ],
    Loader: {
      "showLoader":false,
    },
    showLoader:false,
    errorModal:false,
    errorObject:{
      "errorModal":false,
      "error_text":'',
    },
    host_type:-1
  }
})
