
require(".././bootstrap");
import error from "../components/error.vue";
import loader from "../components/loader.vue";
import posts from "../components/posts.vue";
import Company from ".././Company.js";
import Status from ".././Status.js";
window.Vue = require("vue");
Vue.use(require('vue-cookies'));
window.Axios = require('axios');

var app = new Vue({
  el:"#app",
  mounted(){
    this.getCompanyData();
  },
  methods: {
    stagePost()
    {
      if(this.Status.status_content === null)
      {
        this.errorObject.error_text = "Please say something about your post";
        this.showErrorModal();
        return;
      }
      else if(this.Status.status_files === null ||
        this.Status.status_files.length <= 0)
      {
        this.errorObject.error_text = "Please upload at least one image";
        this.showErrorModal();
        return;
      }
      var req = {
        "host_id" : this.Company.guest_id,
        "host_token": this.Company.guest_token,
        "host_type": "comp"
      };
      this.serverRequest("/api/comp/status/getToken", req, "gen_token");
    },
    sendFiles(token)
    {
      this.Status.generated_token = token;

      var i;
      for(i=0; i < this.Status.status_files.length; i++)
      {
        var req = {
          'host_id' : this.Company.guest_id,
          'host_token' : this.Company.guest_token,
          'host_type' : "comp",
          "generated_token" : this.Status.generated_token,
          "api_key" : (this.Company.api_key === null) ? "apikey": this.Company.api_key,
          "file_value": this.Status.status_files[i].file_src,
          "has_files": i,
        }
        // req.file_value = this.Status.status_files[i].file_src;
        // req.has_files = i;
        console.log('i is ',i, ' req ',req);
        this.serverRequest("/api/comp/status/addFile", req, "add_file");
      }

    },
    savePost(index)
    {
      if((index+1) === this.Status.status_files.length)
      {
        var req = {
          'host_id' : this.Company.guest_id,
          'host_token' : this.Company.guest_token,
          'host_type' : "comp",
          "status_generated_token" : this.Status.generated_token,
          "status_content" : this.Status.status_content,
          "status_type": this.Status.status_type,
          "api_key": (this.Company.api_key === null) ? "apikey": this.Company.api_key,
          "has_files":index,
        };
        this.serverRequest("/api/comp/status/setStatus", req, "save_post")
      }
      else {
        console.log("index not equal ",index, " !== ", this.Status.status_files.length);
      }
    },
    setStatusFile()
    {
        var input = event.target;
        if(input.files && input.files[0])
        {
          var reader = new FileReader();
          reader.onload = (e) => {
            this.Status.status_files.push({
              "file_src": e.target.result,
              "file_id":null,
            })
          }
          reader.readAsDataURL(input.files[0]);
        }
    },
    pushNewStatus()
    {
      this.user_posts.push({
        "post_text": this.Status.status_content,
        "post_image": this.Status.status_files[0].file_src
      });
      this.Status = new Status();
      this.hideLoader();
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
          if(type === "comp_data")
            this.setCompanyData(response.data);
          else if(type === "gen_token")
            this.sendFiles(response.data.generated_token);
          else if(type === "add_file")
          {
            this.Status.status_files[response.data.file_index].file_id = response.data.file_id;
            this.savePost(response.data.file_index);
          }
          else if(type === "save_post")
            this.pushNewStatus();
          else if(type === "get_status")
            this.setStatus(response.data);
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
      var req = {
        "host_id": this.Company.guest_id,
        "host_token": this.Company.guest_token,
        "host_type": "comp",
        "api_key": (this.Company.api_key === null) ? "apikey" : this.Company.api_key
      };
      this.serverRequest("/api/comp/status/getCompStatus", req, "get_status");

    },
    setStatus(data)
    {
      var i=0;
      for(i; i<data.length; i++)
      {
        console.log(data[i]);
        this.user_posts.push({
          "post_text": data[i].status_content,
          "post_image": data[i].status__files[0].file_url,
          "post_time": data[i].created_at
        });
      }
      // this.user_posts.push({
      //
      // })
      this.hideLoader();
    },
    getProducts()
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
    hideLoader()
    {
      this.Loader.showLoader = this.showLoader = false;
    },
    showErrorModal()
    {
      this.errorObject.errorModal = this.errorModal = true;
    }
  },
  components:{
    error,loader, posts
  },
  data:{
    Company: new Company(),
    Status: new Status(),
    Loader: {
      "showLoader":false,
    },
    showLoader:false,
    errorModal:false,
    errorObject:{
      "errorModal":false,
      "error_text":'',
    },
    post_text:null,
    user_posts:[
      {
        "post_text": "This is my post text",
        "post_image": "/atoc_assets/images/nairobi_bk.jpg",
        "post_time":  "2019-10-13 02:49:18"
      },
    ],
    post_images: [

    ],
    productList:[],
  }
})
