
require(".././bootstrap");
import error from "../components/error.vue";
import loader from "../components/loader.vue";
import authenticationmodal from "../components/authenticationmodal.vue";
import phoneupdate from "../components/phoneupdate.vue";
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
    updateInfo(index)
    {
      this.changeWhere.change_type = 0;//info
      if(index === '2')
      {
        var req = {
          "telephone" : this.Company.company_phone,
          "guest_id" : this.Company.guest_id,
          "guest_token" : this.Company.guest_token,
          "api_key": this.Company.api_key === null ? "apikey" : this.Company.api_key,
        }
        this.serverRequest("/api/comp/register/phoneverificaton", req, "newphone");

      }
      else {
        this.showPasswordModal = true;
        this.updateTarget = index;
      }

        console.log('index ',index);
    },
    updatePhone(p, code)
    {
      var req = {
        "company_id" : this.Company.guest_id,
        "company_token": this.Company.guest_token,
        "api_key": this.Company.api_key === null ? "apikey" : this.Company.api_key,
        "company_password":p,
        "company_target_change":code
      }
      this.serverRequest("/api/comp/edit/phone", req, "update_phone");
    },
    saveChanges(p)
    {
      this.changeWhere.change_type = -1;//reset
      this.disMissAuthenticationModal();
      var data = {
        "company_id" : this.Company.guest_id,
        "company_token": this.Company.guest_token,
        "api_key": this.Company.api_key === null ? "apikey" : this.Company.api_key,
        "company_password":p
      };
      switch (this.updateTarget)
      {

        case '0':
          data.company_target_change = this.Company.company_name;
          this.serverRequest("/api/comp/edit/name", data, "update");
          break;
        case '1':
          data.company_target_change = this.Company.company_logo;
          this.serverRequest("/api/comp/edit/profiile", data, "update");
          break;
        case '2':
          data.company_target_change = this.Company.company_phone;
          this.serverRequest("/api/comp/edit/phone", data, "update");
          break;
        case '3':
          data.company_target_change = this.Company.company_email;
          this.serverRequest("/api/comp/edit/email", data, "update");
          break;
        default:

      }
      this.Loader.showLoader = this.showLoader = false;
    },
    updateAddress(index)
    {
      this.addressTarget = index;
      this.showPasswordModal = true;
      this.changeWhere.change_type = 1;//address
    },
    saveAddress(p)
    {
      var req = {
        "company_id" : this.Company.guest_id,
        "company_token": this.Company.guest_token,
        "api_key": this.Company.api_key === null ? "apikey" : this.Company.api_key,
        "company_password":p
      }
      switch (this.addressTarget) {
        case '0':
          req.company_target_change = this.Company.company_address_one;
          this.serverRequest("/api/comp/edit/addressOne", req, "address")
          break;
        case '1':
          req.company_target_change = this.Company.company_address_two;
          this.serverRequest("/api/comp/edit/addressTwo", req, "address")
          break;
        case '2':
          req.company_target_change = this.Company.company_province;
          this.serverRequest("/api/comp/edit/province", req, "address")
          break;
        case '3':
          req.company_target_change = this.Company.company_city;
          this.serverRequest("/api/comp/edit/city", req, "address")
          break;
        default:
          console.log('unrecognized field ',this.addressTarget);

      }
    },
    updateCompanyDescription()
    {
      this.changeWhere.change_type = 2;
      this.showPasswordModal = true;
    },
    saveCompanyDescription(p)
    {
      var req = {
        "company_id": this.Company.guest_id,
        "company_token": this.Company.guest_token,
        "api_key": this.Company.api_key === null ? "apikey" : this.Company.api_key,
        "company_target_change": this.Company.company_description,
        "company_password":p
      };
      this.serverRequest("/api/comp/edit/description", req, "update");
    },
    updateCompanyLogo(event)
    {
      console.log('updated event ',event);
      var input = event.target;
      this.Loader.showLoader = this.showLoader = true;
      if(input.files && input.files[0])
      {
        var reader = new FileReader();
        reader.onload = (e) => {
            this.changeWhere.change_value = this.updatedProfile = e.target.result;

            this.showPasswordModal = true;
            this.changeWhere.change_type = 3;
            this.hideLoader();
          };


        }
        reader.readAsDataURL(input.files[0]);
    },
    saveCompanyLogo(p,input)
    {
      console.log('event');
      console.log('event ',input);
      var req = {
        "company_target_change": input,
        "company_id": this.Company.guest_id,
        "company_token": this.Company.guest_token,
        "api_key": this.Company.api_key === null ? "apikey" : this.Company.api_key,
        "company_password":p,
      }
      this.serverRequest("/api/comp/edit/profile", req, "update_profile");


    },
    uploadCompanyLicense(event)
    {
      var input = event.target;
      if(input.files && input.files[0])
      {
        var reader = new FileReader();
        reader.onload = (e) => {
          var req = {
            "license": e.target.result,
            "comp_id": this.Company.guest_id,
            "comp_token": this.Company.guest_token,
            "api_key": this.Company.api_key === null ? "apikey" : this.Company.api_key,
          };
          this.serverRequest("/api/comp/addLicense", req, "update_license");

        }
        reader.readAsDataURL(input.files[0]);
      }
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
          else if(type === "update")
          {
            this.updateTarget = null;
            this.showPasswordModal = null;
            this.changeWhere.change_type = -1;
            this.hideLoader();
            alert("successfully updated");
          }
          else if(type === "newphone")
          {
            this.update_phone = true;
            this.hideLoader();
          }
          else if(type === "update_phone")
          {
            this.changeWhere.change_type = -1;
            this.update_phone = false;
            this.hideLoader();
            alert("phone number has been successfully updated");
          }
          else if(type === "update_license")
          {
            this.Company.company_hasLicense = true;
            alert("Company license has been updated successfully");
            this.hideLoader();
          }
          else if(type === "address")
          {
            this.changeWhere.change_type = -1;//reset
            this.showPasswordModal = false;
            this.hideLoader();
          }
          else if(type === "update_profile")
          {
            this.changeWhere.change_type = -1;
            this.changeWhere.change_value = null;
            this.showPasswordModal = false;
            this.Company.company_logo = response.data.change_value;
            this.hideLoader();
          }
          else {
            alert('success');
            console.log(response);
            this.Loader.showLoader = this.showLoader = false;
          }
        }
        else
        {
          this.changeWhere.change_type =-1;
          this.showPasswordModal = false;
          if(response.errorMessage[0])
            response.errorMessage = response.errorMessage[0];
          this.errorObject.error_text = response.errorMessage;
          this.errorObject.errorModal = this.errorModal = true;
          this.hideLoader();
        }
      })
      .catch(error => {
        this.changeWhere.change_type = -1;
        console.log("server error ",error);
        this.errorObject.error_text = error;
        this.errorObject.errorModal = this.errorModal = true;
        this.hideLoader();
      })
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
    error,loader, authenticationmodal, phoneupdate
  },
  data: {
    Company:new Company(),
    errorModal:false,
    errorObject: {
      errorModal:false,
      error_text: "This is default error text"
    },
    updatedProfile:null,
    showLoader: false,
    Loader: {
      showLoader:false
    },
    showPasswordModal:false,
    updateTarget:null,
    update_phone:false,
    addressTarget:null,
    changeWhere: {
      "change_type": -1,
      "change_value":null
    }
  }
})
