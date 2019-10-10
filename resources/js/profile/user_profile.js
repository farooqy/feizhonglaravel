
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
      console.log(data);
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
