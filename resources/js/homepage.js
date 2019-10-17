
require("./bootstrap");
import error from "./components/error.vue";
import loader from "./components/loader.vue";
import statuslist from "./components/statuslist.vue";
import statuslistv2 from "./components/statuslistv2.vue";
import trendingcompanylist from "./components/trendingcompanylist.vue";
import companylist from "./components/companylist.vue";
import Company from "./Company.js";
import User from "./User.js";
import Guest from "./Guest.js";
import Status from "./Status.js";
import Product from "./Product.js";
import ServerRequest from "./ServerRequest";
window.Vue = require("vue");
Vue.use(require('vue-cookies'));
window.Axios = require('axios');

var app = new Vue({
  el:"#app",
  mounted(){
    this.getCompanyData();
  },
  methods: {
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
            case "user_data":
              this.setUserData(response.data);
              break;
            case "trending":
              this.setTrendingList(response.data);
              break;
            case "list_status":
              this.setStatus(response.data);
              break;
            case "comp_list":
              this.setCompanyList(response.data);
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
    getCompanyList()
    {
      this.serverRequest('/api/list/companies', this.req, "comp_list")
    },
    setCompanyList(data)
    {
      var i;
      for(i=0; i < data.length; i++)
      {
        this.comp_list.push({
          "comp_id": data[i].comp_id,
          "comp_token": data[i].comp_token,
          "comp_name": data[i].comp_name,
          "comp_logo": data[i].comp_logo,
          "comp_type": data[i].comp_type,
          "is_verified": data[i].hasLicense,
          "comp_rate": 0
        });
      }

    },
    getStatuses()
    {

      this.serverRequest("/api/comp/status/getCompSimpleStatus", this.req, "list_status");
    },
    setStatus(data)
    {

      console.log(data);
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
          "status_text": data[i].status_content,
          "status_image": files[0].file_url,
          "status_time": data[i].created_at,
          "status_files": files,
          "uploaded_by_name": data[i].company_data.comp_name,
          "uploaded_by_picture": data[i].company_data.comp_logo
        })
      }
    },
    getTrendingCompanies()
    {
      //TO DO:: trending algorithm
      this.serverRequest('/api/list/companies', this.req, "trending");
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

        this.req = {
          "host_id":this.Host.guest_id,
          "host_token": this.Host.guest_token,
          "host_type": this.host_type === 1 ? "comp": "normal",
          "api_key": this.Host.api_key === null ? "apikey" : this.Host.api_key
        };
        this.getTrendingCompanies();

        this.getStatuses();
        this.getCompanyList();
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
      this.Host.api_key = data.api_key;
      this.Host.user_profile = data.user_profile;
      // var req = {"user_id": this.User.guest_id, "user_token":this.User.guest_token};
      // this.serverRequest("/api/user/address", req, "user_address");
      console.log(data);
      this.req = {
        "host_id":this.Host.guest_id,
        "host_token": this.Host.guest_token,
        "host_type": this.host_type === 1 ? "comp": "normal",
        "api_key": (this.Host.api_key === null ||
          this.Host.api_key === undefined) ? "apikey" : this.Host.api_key
      }
      this.getTrendingCompanies();

      this.getStatuses();
      this.getCompanyList();
    },
    setInitData(data)
    {
      if(data.host_type === "comp")
      {
        this.Host = new Company();
        this.host_type = 0;
        var req = {
          "platform" : 1,
          "host": "comp"
        };
        this.serverRequest("/api/comp/data", req, "comp_data");
      }
      else if(data.host_type === "user")
      {
        this.Host = new User();
        this.host_type = 1;
        var req = {
          "platform" : 1,
          "host": "user"
        };
        this.serverRequest("/api/user/data", req, "user_data");
      }
      else
      {
        this.Host = new Guest();
        this.host_type = 2;
        this.req = {
          "host_id": data.host_id,
          "host_token": data.host_token,
          "host_type": data.host_type,
          "api_key": "apikey",
        };
      }

      this.Host.guest_id = data.host_id;
      this.Host.guest_token = data.host_token;
      if(data.host_type === "guest")
      {

        this.getTrendingCompanies();

        this.getStatuses();
        this.getCompanyList();
      }
      this.hideLoader();
    },
    prepareProduct()
    {
      if(this.Product.product_name === null || Product.product_name === "")
      {
        this.showError('Please provide product name');
      }
      else if(this.Product.product_description ===null )
      {
        this.showError('Please provide product description')
      }
      else if(this.Product.product_price <= 0)
      {
        this.showError('Please provide product price')
      }
      else if(this.Product.product_currency ===null)
      {
        this.showError('Please provide product currency ')
      }
      else if(this.Product.product_unit ===null)
      {
        this.showError('Please provide product unit such as kilogram or pieces')
      }
      else if(this.Product.product_files.length <= 0)
      {
        this.showError('Please provide at least one image for the product')
      }
      else {
        console.log('ready for publishing product ');
      }
    },
    prepareProductFile(event)
    {

        console.log(event);
        var input = event.target;
        this.ServerRequest.previewFile(input, this.previewProductFile,
        this.showError);
    },
    previewProductFile(src)
    {
      this.Product.product_files.push({
        "file_src": src.target.result,
        "alt": "Product file",
        "index": this.Product.product_files.length,
      });
    },
    removeMe(index)
    {
      console.log(index, ' to be remved');
      this.Product.product_files.splice(index, 1);
      var i;
      for(i = index; i < this.Product.product_files.length; i++)
      {
        this.Product.product_files[i].index = i;
      }
    },
    showError(error)
    {
      this.errorObject.error_text = error;
      this.errorObject.errorModal = this.errorModal = true;
    },
    getHostProfile()
    {
      if(this.host_type === 0)
        return this.Host.company_logo;
      else
        return this.Host.user_profile;
    },
    getHostName()
    {
      if(this.host_type === 0)
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
    isLoggedIn()
    {
      return true === (this.host_type === 1 || this.host_type === 0);
    },
    disMissErrorModel()
    {
      this.errorModal = false;
    },

  },
  components: {
    error,loader,statuslist,trendingcompanylist,statuslistv2,
    companylist
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
    comp_list: [

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
    host_type:-1,
    req: null,
    Product:  new Product(),
    ServerRequest: new ServerRequest(),
  }
})
