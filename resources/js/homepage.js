
require("./bootstrap");
import error from "./components/error.vue";
import loader from "./components/loader.vue";
import statuslist from "./components/statuslist.vue";
import statuslistv2 from "./components/statuslistv2.vue";
import productlist from "./components/productlist.vue";
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
Vue.use(require('vue-faker'), {locale: 'zh_CN'});
window.Axios = require('axios');

var app = new Vue({
  el:"#app",
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
              this.setStatusProduct(response.data);
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

      this.serverRequest("/api/comp/status/getStatus", this.req, "list_status");
    },
    setStatusProduct(data)
    {

      console.log(data);
      // console.log('status files ', data[0].);
      var i;
      for(i=0; i < data.length; i++)
      {
        var statusproduct = data[i];
        var j, c_counter, l_counter;
        var files = [];
        var comments = statusproduct.comments;
        var likes = statusproduct.likes;;
        var listfiles;
        if(statusproduct.type === "product")
        {
          listfiles = statusproduct.product_files;
          console.log('file is for proudct ', listfiles);
        }
        else{
          listfiles = statusproduct.status__files;
          console.log('file is for status ', listfiles);
        }

        for(j=0; j<listfiles.length; j++)
        {
          files.push({
            "file_url": listfiles[j].file_url
          });
        }
        // for(c_counter =0; c_counter < statusproduct.comments.length; c_counter++)
        // {
        //   console.log("comments ",statusproduct.comments)
        // }
        // for(l_counter =0; l_counter < statusproduct.comments.length; l_counter++)
        // {
        //     console.log("lieks ",statusproduct.likes);
        // }
        if(statusproduct.type === "status")
          this.setStatus(statusproduct, comments, likes, files);
        else
          this.setProduct(statusproduct, comments, likes, files);
      }
    },
    setStatus(status, comments, likes, files)
    {
      this.StatusList.push({
        "status_text": status.status_content,
        'status_id': status.id,
        'status_generated_token': status.status_generated_token,
        "status_image": files[0].file_url,
        "status_time": status.created_at,
        "status_files": files,
        "uploaded_by_name": status.company_data.comp_name,
        "uploaded_by_picture": status.company_data.comp_logo,
        "comments": comments,
        "likes": likes,
        "post_type" : "status",
        "host_profile": this.getHostProfile(),
      })
    },
    setProduct(product, comments, likes,files)
    {
      var p = new Product();
      p.product_id = product.id;
      p.product_token = product.product_gen_token;
      p.generated_token = product.product_gen_token;
      p.product_files = product.product_files;
      p.product_description = product.product_description;
      p.product_name = product.product_name;
      p.product_price = product.product_price;
      p.product_currency = product.product_measure_currency;
      p.product_unit = product.product_measure_unit;
      p.product_company = product.companydata;
      p.created_at = product.created_at;
      p.post_type = "product";
      p.host_profile = this.getHostProfile();
      p.comments = comments;
      p.likes = likes;
      // this.productList.push(p)
      //combine product and status
      this.StatusList.push(p);
      console.log('products ',product);
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

        this.StatusList.host_profile = this.Host.company_logo;

        this.req = {
          "host_id":this.Host.guest_id,
          "host_token": this.Host.guest_token,
          "host_type": this.host_type === 0 ? "comp": "normal",
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
        this.ServerRequest.setRequest(this.req);
        this.ServerRequest.serverRequest("/api/comp/product/genToken",
        this.setProductFiles, this.showError);
      }
    },
    setProductFiles(data)
    {
      if(data[0] !== undefined)
        data = data[0];
      this.Product.generated_token = data.generated_token;
      var i;
      var len = this.Product.product_files.length;
      var pfiles = this.Product.product_files;
      for(i=0; i < len; i++)
      {
        var p_src = pfiles[i];
        var file_src = p_src.file_src;
        var req = {
          "host_id" : this.Host.guest_id,
          "host_token": this.Host.guest_token,
          "host_type": "comp",
          "product_file": file_src,
          "product_gen_token": this.Product.generated_token,
        }
        console.log('req for product is ',req);
        this.ServerRequest.setRequest(req);
        this.ServerRequest.serverRequest("/api/comp/product/addImage",
        this.setProductFileUrl, this.showError);
      }
    },
    setProductFileUrl(data)
    {
      if(data[0] !== undefined)
        data =  data[0];
      this.successfullProductFiles.push({
        "file_url": data.product_file_src,
        "file_id": data.product_file_id
      });
      if(this.successfullProductFiles.length ===
        this.Product.product_files.length)
      {
        var req = this.req;
        req.product_gen_token = this.Product.generated_token;
        req.product_name = this.Product.product_name;
        req.product_description = this.Product.product_description;
        req.product_measure_unit = this.Product.product_unit;
        req.product_measure_currency = this.Product.product_currency;
        req.product_price = parseInt( this.Product.product_price);
        this.ServerRequest.setRequest(req);

        this.ServerRequest.serverRequest("/api/comp/product/addProduct",
          this.setProductInfo, this.showError);
      }

    },
    setProductInfo(data)
    {
      var p = {
        "created_at": "now",
        "generated_token": this.Product.generated_token,
        "post_type": "product",
        "product_company": {
          "comp_name":this.Host.company_name,
          "comp_id": this.Host.guest_id,
          "comp_token": this.Host.guest_token,
          "comp_logo": this.Host.company_logo
        },
        "product_currency": this.Product.product_currency,
        "product_description": this.Product.product_description,
        "product_files": this.successfullProductFiles,
        "product_token": this.Product.generated_token,
        "product_price": this.Product.product_price,
        "product_unit": this.Product.product_unit,
        "host_profile": this.getHostProfile(),
        "comments": [],
        "likes":[],
      }
      this.StatusList.unshift(p);
      this.Product = new Product();
      this.successfullProductFiles = [];
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
    prepareStatusFile(event)
    {
      var input = event.target;
      this.ServerRequest.previewFile(input, this.previewStatusFile,
      this.showError);

    },
    previewStatusFile(src)
    {
      this.Status.status_files.push({
        "file_src": src.target.result,
        "alt": "Status file",
        "index": this.Status.status_files.length
      })
    },
    preparePostStaus()
    {
      if(this.Status.status_content === null)
        this.showError("Please say something about your status");
      else if(this.Status.status_files.length <=0)
        this.showError("Please upload at least one image/video");
      else {
        var req = this.req;
        this.ServerRequest.setRequest(req);
        this.ServerRequest.serverRequest("/api/comp/status/getToken",
          this.setStatusFiles, this.showError);
      }
    },
    setStatusFiles(data)
    {
      if(data[0])
        data = data[0];
      this.Status.generated_token = data.generated_token;
      var i;
      var files = this.Status.status_files;
      for(i=0; i < files.length; i++ )
      {
        var f = files[i];
        console.log('f is  ',f);
        var src = f.file_src;
        var statRequest = {
          "host_id": this.Host.guest_id,
          "host_token": this.Host.guest_token,
          "host_type": "comp",
          "has_files": i,
          "file_value": src,
          "api_key": this.Host.api_key === null ? "api_key" : this.Host.api_key,
          "generated_token": data.generated_token
        }
        this.ServerRequest.setRequest(statRequest);
        this.ServerRequest.serverRequest("/api/comp/status/addFile",
          this.setUploadedFile, this.showError);
      }
    },
    setUploadedFile(data)
    {
      if(data[0])
        data = data[0];
      this.successfullStatusFiles.push({
        "file_id": data.file_id,
        "file_src": data.file_src,
        "file_index": data.file_index
      });
      if(this.successfullStatusFiles.length ===
        this.Status.status_files.length)
      {
        this.setStatusInfo(data) ;
      }
    },
    setStatusInfo(data)
    {
      var req = this.req;
      req.status_content = this.Status.status_content;
      req.status_type = "status";
      req.status_generated_token = this.Status.generated_token;
      req.has_files = this.successfullStatusFiles.length;

      this.ServerRequest.setRequest(req);
      this.ServerRequest.serverRequest("/api/comp/status/setStatus",
        this.setSavedStatus, this.showError)
    },
    setSavedStatus(data)
    {
      this.StatusList.unshift({
        "status_text": this.Status.status_content,
        "status_image": this.successfullStatusFiles[0].file_src,
        "status_time": "now",
        "status_files": this.successfullStatusFiles,
        "uploaded_by_name": this.Host.company_name,
        "uploaded_by_picture": this.Host.company_logo,
        "comments": [],
        "likes": [],
        "post_type" : "status",
        "host_profile": this.getHostProfile(),
      });
      this.Status = new Status();
      this.successfullStatusFiles = [];
    },
    removeMe(index, type="product")
    {
      console.log(index, ' to be remved');
      var files ;
      if(type === "product")
        files = this.Product.product_files;
      else
        files = this.Status.status_files;
      files.splice(index, 1);
      var i;
      for(i = index; i < files.length; i++)
      {
        files[i].index = i;
      }
      if(type === "product")
        this.Product.product_files = files;
      else
        this.Status.status_files = files;
    },
    submitComment(type, id, token, text)
    {
      var req = this.req;
      req.type = type;
      req.comment_text = text;
      req.status_id = id;
      req.status_token = token;
      this.ServerRequest.setRequest(req);
      this.ServerRequest.serverRequest('/api/comp/status/comment',
      this.setCommentPost, this.showError);
      console.log(' comment is ',req);
    },
    setCommentPost(data)
    {
      console.log('data coment response ',data);
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
    populateProduct()
    {
      // this.Product =  new Product();
      this.Product.product_name = this.$faker().commerce.productName();
      this.Product.product_description = this.$faker().lorem.paragraph();
      this.Product.product_currency = this.$faker().finance.currencySymbol();
      this.Product.product_unit = "pieces";
      this.Product.product_price = this.$faker().finance.amount(1,50);
    },

  },
  components: {
    error,loader,statuslist,trendingcompanylist,statuslistv2,
    companylist, productlist,
  },
  data: {
    Host: null,
    StatusList: [
      {
        "status_text": "This is my status text with a lot of long text",
        "status_image": "/olympus_assets/img/photo-album2.jpg",
        "status_time": "2019-10-13 02:49:18"
      }
    ],
    productList: [

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
    Status: new Status(),
    ServerRequest: new ServerRequest(),
    successfullProductFiles:[],
    successfullStatusFiles: [],

  },
  mounted(){
    this.getCompanyData();
      this.populateProduct();
    this.Status.status_content = this.$faker().lorem.paragraph();
  },
})
