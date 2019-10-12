
require(".././bootstrap");
import error from "../components/error.vue";
import loader from "../components/loader.vue";
import User from ".././User.js";
window.Vue = require("vue");
Vue.use(require('vue-cookies'));
window.Axios = require('axios');

var app = new Vue({
  el:"#app",
  methods: {
    getProfileData()
    {
      var req = {

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
      this.Loader.showLoader = this.showLoader = false;
    },
    updateInfo(field)
    {
      var fields = [
        "userFirstName","userLastName","userPhoneNumber",
      "userEmail"];
      var values = [
        this.User.user_firstName,
        this.User.user_lastName,
        this.User.user_phone,
        this.User.user_email,
      ];



      var data = {
        "userToken": this.User.guest_token,
        "userId": this.User.guest_id,
        "api_key": (!this.User.api_key) ? "apikey" : this.User.api_key,
        "updateField": fields[field],
        "updateValue": values[field]
      };
      console.log('data --- ',data);
      this.serverRequest("/api/user/update", data, ("field_"+field));

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
    userFieldUpdate(type)
    {
      switch (type)
      {
        case "field_0":
          alert("Your first name has been successfully updated");
          break;
        case "field_1":
          alert("Your second name has been successfully updated");
          break;
        case "field_2":
          alert("Your Phone number has been successfully updated");
          break;
        case "field_3":
          alert("Your email has been successfully updated");
          break;
        default:
          console.log("successful update of "+type);


      }
      this.Loader.showLoader = this.showLoader = false;
    },
    updateUserLogo(event)
    {
      console.log(event);
      var input = event.target;
      if(input.files && input.files[0])
      {
        var reader = new FileReader();
        reader.onload = (e) => {
          var req = {
            "profile_picture": e.target.result,
            "user_id": this.User.guest_id,
            "user_token": this.User.guest_token
          };
          this.serverRequest("/api/user/update/profile", req, "update_profile");

        }
        reader.readAsDataURL(input.files[0]);
      }
    },
    setNewProfile(data)
    {
      // data = data[0];
      this.User.user_profile = data.user_profile;
      this.Loader.showLoader = this.showLoader = false;
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
          if(type === "hostdata")
            this.setUserData(response.data);
          else if(type === "user_address")
            this.setUserAddress(response.data);
          else if(type === "field_1" || type === "field_2" ||
            type === "field_3" || type === "field_0")
            this.userFieldUpdate(type);
          else if(type === "update_profile")
            this.setNewProfile(response.data);
          else {
            alert('success');
            console.log(response);
            this.Loader.showLoader = this.showLoader = false;
          }
        }
        else
        {
          this.errorObject.error_text = response.errorMessage;
          this.errorObject.errorModal = this.errorModal = true;
          this.Loader.showLoader = this.showLoader = false;
        }
      })
      .catch(error => {
        console.log("server error ",error);
        this.errorObject.error_text = error;
        this.errorObject.errorModal = this.errorModal = true;
        this.Loader.showLoader = this.showLoader = false;
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
    error,loader
  },
  data: {
    User:new User(),
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
  }
});
