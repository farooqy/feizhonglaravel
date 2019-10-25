
require("./bootstrap");
import error from "./components/error.vue";
import loader from "./components/loader.vue";
import statuslist from "./components/statuslist.vue";
import productviewgrid from "./components/productviewgrid.vue";
import statuslistv2 from "./components/statuslistv2.vue";
import trendingcompanylist from "./components/trendingcompanylist.vue";
import companylist from "./components/companylist.vue";
import baidumap from "./components/baidumap.vue";
import compaddress from "./components/compaddress.vue";
import Company from "./Company.js";
import User from "./User.js";
import Guest from "./Guest.js";
import ServerRequest from "./ServerRequest.js";
import Status from "./Status.js";
import Product from "./Product.js";

import BaiduMap from 'vue-baidu-map'
window.Vue = require("vue");
Vue.use(require('vue-cookies'));
Vue.use(BaiduMap, {
  ak:"FFEE5WmR5LDV9sjklTwgdmiQk6XEDeHL"
});
window.Axios = require('axios');

var app = new Vue({
  el:"#app",
  mounted(){
    var url = window.location.href.split('/');
    console.log('url ',url);
    if(url.length !== 7)
    {
      this.showError("Invalid url");
      return;
    }
    else
    {
      this.comp_id = url[5];
      this.comp_token = url[6];
    }
    this.getCompanyData();
  },
  methods: {
    getProduct()
    {
      var req = this.req;
      req.comp_id = this.comp_id;
      req.comp_token = this.comp_token;
      this.ServerRequest.setRequest(req);
      this.ServerRequest.serverRequest("/api/comp/products/list",
        this.setProducts, this.showError);
    },
    setProducts(data)
    {
      var i;
      for(i=0; i < data.length; i++)
      {
        var p = new Product();
        var d = data[i];
        p.product_id = d.id;
        p.product_token = d.product_gen_token;
        p.generated_token = d.product_gen_token;
        p.product_files = d.product__files;
        p.product_description = d.product_description;
        p.product_name = d.product_name;
        p.product_price = d.product_price;
        p.product_currency = d.product_measure_currency;
        p.product_unit = d.product_measure_unit;
        p.product_company = d.companydata;
        p.created_at = d.created_at;
        p.post_type = "product";
        // this.productList.push(p)
        //combine product and status
        this.productList.push(p);
      }

      console.log('products ',data);
    },
    getStatuses()
    {
      this.ServerRequest.setRequest({
        "host_id": this.comp_id,
        "host_token": this.comp_token,
        "api_key": (this.Host.api_key === null ||
          this.Host.api === undefined) ? "apikey":this.Host.api_key,
        "host_type": "comp",
      });
      this.ServerRequest.serverRequest("/api/comp/status/getCompStatus",
      this.setStatus, this.showError);
    },
    setStatus(data)
    {

      console.log('status ',data);
      // console.log('status files ', data[0].);
      var i;
      for(i=0; i < data.length; i++)
      {
        var j, c_counter, l_counter;
        var files = [];
        var comments = [];
        var likes = [];
        for(j=0; j<data[i].status__files.length; j++)
        {
          files.push({
            "file_url": data[i].status__files[j].file_url
          });
        }
        for(c_counter =0; c_counter < data[i].comments.length; c_counter++)
        {
          console.log("comments ",data[i].comments)
        }
        for(l_counter =0; l_counter < data[i].comments.length; l_counter++)
        {
            console.log("lieks ",data[i].likes);
        }

        this.Status.push({
          "status_id": data[i].id,
          "status_generated_token": data[i].status_generated_token,
          "status_text": data[i].status_content,
          "status_image": files[0].file_url,
          "status_time": data[i].created_at,
          "status_files": files,
          "uploaded_by_name": data[i].company_data.comp_name,
          "uploaded_by_picture": data[i].company_data.comp_logo
        })
      }
    },
    getCompanyData()
    {
      this.showLoaderDiv();
      this.ServerRequest.setRequest( {
        "platform" : 1,
        "host": "guest"
      });
      this.ServerRequest.serverRequest('/api/statistics/generateIdAndToken',
      this.setInit, this.showError);

    },
    setInit(data)
    {
      console.log('set inti called ',data.host_type);
      if(data.host_type === "comp")
      {
        this.Host = new Company();

        this.Host.guest_id = data.host_id;
        this.Host.guest_token = data.host_token;
        this.Host.api_key = "apikey";
        this.host_type = 0;
        this.ServerRequest.setRequest({
          "platform" : 1,
          "host": "comp"
        });
        this.ServerRequest.serverRequest("/api/comp/data",
        this.setCompanyDetails, this.showError);
      }
      else if(data.host_type === "user")
      {
        this.Host = new User();

        this.Host.guest_id = data.host_id;
        this.Host.guest_token = data.host_token;
        this.Host.api_key = "apikey";
        this.host_type = 1;
        this.ServerRequest.setRequest({
          "platform" : 1,
          "host": "user"
        });
        this.ServerRequest.serverRequest("/api/user/data",
        this.setUserData, this.showError);
      }
      else {

        this.host_type = 2;
        this.Host = new Guest();

        this.Host.guest_id = data.host_id;
        this.Host.guest_token = data.host_token;
        this.Host.api_key = "apikey";
        this.req = {
          "host_id": data.host_id,
          "host_token": data.host_token,
          "host_type": data.host_type,
          "api_key": "apikey",
        };
        this.getCompanyProfile();
      }

    },
    setCompanyDetails(data)
    {
      console.log('will set details ',data);
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

        this.req = {
          "host_id":this.Host.guest_id,
          "host_token": this.Host.guest_token,
          "host_type": this.host_type === 0 ? "comp": "normal",
          "api_key": this.Host.api_key === null ? "apikey" : this.Host.api_key
        };
        this.getCompanyProfile();

    },
    setUserData(data)
    {
      data = data[0];
      this.Host.user_firstName = data.user_fname+' ';
      this.Host.user_lastName = data.user_sname;
      this.Host.user_email = data.user_email;
      this.Host.user_phone = data.user_phone;
      this.Host.guest_id = data.user_id;
      this.Host.guest_token = data.user_token;
      // this.Host.api_key = data.api_key;
      this.Host.user_profile = data.user_profile;
      // var req = {"user_id": this.User.guest_id, "user_token":this.User.guest_token};
      // this.serverRequest("/api/user/address", req, "user_address");

      this.req = {
        "host_id":this.Host.guest_id,
        "host_token": this.Host.guest_token,
        "host_type": this.host_type === 0 ? "comp": "normal",
        "api_key": this.Host.api_key === null ? "apikey" : this.Host.api_key
      };
      console.log(data);
      this.getCompanyProfile();
    },
    getCompanyProfile()
    {
      console.log('make request for profile');
      this.ServerRequest.setRequest({
        "comp_id": this.comp_id,
        "comp_token": this.comp_token,
        "api_key": (this.Host.api_key === null ||
          this.Host.api === undefined) ? "apikey":this.Host.api_key,
      });
      this.ServerRequest.serverRequest("/api/list/getCompanyData",
      this.setCompanyProfile, this.showError);
    },
    setCompanyProfile(data)
    {
      this.Comp_Profile.company_name = data[0].comp_name;
      this.Comp_Profile.company_email = data[0].comp_email;
      this.Comp_Profile.company_phone = data[0].comp_phone;
      this.Comp_Profile.company_logo = data[0].comp_logo;
      this.Comp_Profile.company_description = data[0].type.comp_description;
      this.Comp_Profile.company_province = data[0].address.comp_province;
      this.Comp_Profile.company_city = data[0].address.comp_city;
      this.Comp_Profile.company_type = data[0].type.comp_type;
      this.Comp_Profile.company_subtype = data[0].type.comp_subtype;
      this.getStatuses();
      this.getProduct();
      this.hideLoader();

    },
    getHostProfile()
    {
      if(this.host_type === 0)
        return this.Host.company_logo;
      else if(this.host_type === 1)
        return this.Host.user_profile;
      else
          console.log('_----------- Uknown host ',this.host_type);
    },
    getHostName()
    {
      if(this.host_type === 0)
        return this.Host.company_name;
      else if(this.host_type === 1)
        return this.Host.user_firstName+' '+this.Host.user_lastName;
      else
        console.log('_----------- Uknown host ',this.host_type);
    },
    toggleTab(tab)
    {
      switch(tab)
      {
        case 0:
          this.profile_tabs.about_tab = true;
          this.profile_tabs.post_tab = false;
          this.profile_tabs.product_tab = false;
          this.profile_tabs.address_tab = false;
          break;
        case 1:
          this.profile_tabs.about_tab = false;
          this.profile_tabs.post_tab = true;
          this.profile_tabs.product_tab = false;
          this.profile_tabs.address_tab = false;
          break;
        case 2:
          this.profile_tabs.about_tab = false;
          this.profile_tabs.post_tab = false;
          this.profile_tabs.product_tab = true;
          this.profile_tabs.address_tab = false;
          break;
        case 3:
          this.profile_tabs.about_tab = false;
          this.profile_tabs.post_tab = false;
          this.profile_tabs.product_tab = false;
          this.profile_tabs.address_tab = true;
          break;
      }
    },
    showLoaderDiv()
    {
        this.Loader.showLoader = this.showLoader = true;
    },
    hideLoader()
    {
      this.Loader.showLoader = this.showLoader = false;
    },
    showError(error)
    {
      console.log('set error called ',error);
      this.errorObject.error_text = error;
      this.showErrorModal();
      this.hideLoader();
    },
    isLoggedIn()
    {
      return true === (this.host_type === 1 || this.host_type === 0);
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
    error,loader,statuslist,trendingcompanylist,statuslistv2,
    companylist, baidumap, compaddress, productviewgrid
  },
  data: {
    ServerRequest: new ServerRequest(),
    host_type: null,
    Host: null,
    Loader: {
      "showLoader":false,
    },
    showLoader:false,
    errorModal:false,
    errorObject:{
      "errorModal":false,
      "error_text":'',
    },
    req: null,//repeating request,
    comp_id:null,//target company id,
    comp_token: null,//target comany token,
    Comp_Profile:new Company(),
    Status: [],
    profile_tabs: {
      about_tab: true,
      post_tab: false,
      product_tab:false,
      address_tab:false,
    },
    Product: new Product(),
    productList : []

  }
})
