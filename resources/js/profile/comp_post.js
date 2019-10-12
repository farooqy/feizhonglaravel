
require(".././bootstrap");
import error from "../components/error.vue";
import loader from "../components/loader.vue";
import posts from "../components/posts.vue";
import Company from ".././Company.js";
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
          if(type === "comp_data")
            this.setCompanyData(response.data);
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
    disMissErrorModel()
    {
      this.errorModal = false;
    },
    getCompanyData()
    {
      var req = {
        "platform" : 1,
        "host": "comp"
      };
      this.serverRequest("/api/comp/data", req, "comp_data");
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
    hideLoader()
    {
      this.Loader.showLoader = this.showLoader = false;
    }
  },
  components:{
    error,loader, posts
  },
  data:{
    Company: new Company(),
    Loader: {
      "showLoader":false,
    },
    showLoader:false,
    errorModal:false,
    errorObject:{
      errorModal:false,
    },
    post_text:null,
    user_posts:[
      {
        "post_title": "This is my title",
        "post_text": "This is my post text",
        "post_image": "/atoc_assets/images/nairobi_bk.jpg",
      },
    ],
    post_images: [
      
    ]
  }
})
