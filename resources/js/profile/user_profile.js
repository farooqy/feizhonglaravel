
require(".././bootstrap");
import error from "../components/error.vue";
import User from ".././User.js";
window.Vue = require("vue");
Vue.use(require('vue-cookies'));
window.Axios = require('axios');

var app = new Vue({
  el:"#app",
  methods: {
    getProfileData()
    {
      var data = {

      }
    },
    getHostInfo()
    {
      var data = {
        "platform":1,
        "host":"user"
      };
      this.serverRequest("/api/user/data", data, "hostdata");
    },
    setUserData(data)
    {
      data = data[0];
      this.User.user_firstName = data.user_fname+' ';
      this.User.user_lastName = data.user_sname;
      this.User.user_email = data.user_email;
      this.User.user_phone = data.user_phone;
      this.User.guest_id = data.user_id;
      this.User.guest_token = data.user_token;
      this.User.api_key = data.api_key;
      this.User.user_profile = data.user_profile;
      var req = {"user_id": this.User.guest_id, "user_token":this.User.guest_token};
      this.serverRequest("/api/user/address", req, "user_address");
      console.log(data);
    },
    setUserAddress(data)
    {
      if(data[0] !== undefined)
        data = data[0];
      if(data.hasOwnProperty("address"))
      {
        this.User.address = data.address;
        this.User.province_state = data.province_state;
        this.User.city = data.city;
        this.User.country = data.country;
        this.User.postal_code = data.postal_code;
        this.User.about_me = data.about_user;
      }
      else {
        console.log("The address is empty");
      }
    },
    updateInfo()
    {
      var req = {

      }
    },
    updateAddress()
    {
      var req = {
        "address": this.User.address,
        "province_state": this.User.province_state,
        "city": this.User.city,
        "country": this.User.country,
        "postal_code": this.User.postal_code,
        "user_id": this.User.guest_id,
        "user_token": this.User.guest_token
      };
      this.serverRequest("/api/user/update/address", req, "update_address");
    },
    updateAboutMe()
    {
      var req = {
        "user_id": this.User.guest_id,
        "user_token": this.User.guest_token,
        "about_me": this.User.about_me
      };
      this.serverRequest("/api/user/update/aboutMe", req, "udpate_about_me");
    },
    serverRequest(url, form, type="default")
    {
      axios.post(url, form).
      then(response => {
        response = response.data;
        if(response.data.error_message)
        {
          this.errorObject.error_text = response.error_message;
          this.errorObject.errorModal = this.errorModal = true;
        }
        else if(response.isSuccess)
        {
          if(type === "hostdata")
            this.setUserData(response.data);
          else if(type === "user_address")
            this.setUserAddress(response.data);
          else {
            alert('success');
            console.log(response);
          }
        }
        else
        {
          this.errorObject.error_text = response.errorMessage;
          this.errorObject.errorModal = this.errorModal = true;
        }
      })
      .catch(error => {
        console.log("server error ",error);
        this.errorObject.error_text = error;
        this.errorObject.errorModal = this.errorModal = true;
      })
    },
    disMissErrorModel()
    {
      this.errorModal = false;
      this.errorObject.errorModal = this.errorModal;
      this.errorObject.error_text = "This is the default error text"
    }
  },
  mounted(){
    this.getHostInfo();
  },
  computed: {

  },
  components: {
    error,
  },
  data: {
    User:new User(),
    errorModal:true,
    errorObject: {
      errorModal:false,
      error_text: "This is default error text"
    }
  }
});
