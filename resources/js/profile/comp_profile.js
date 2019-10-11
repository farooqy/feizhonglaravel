
require(".././bootstrap");
import error from "../components/error.vue";
import loader from "../components/loader.vue";
import Company from ".././Company.js";
window.Vue = require("vue");
Vue.use(require('vue-cookies'));
window.Axios = require('axios');

var app = new Vue({
  el:"#app",
  methods: {
    updateInfo(index)
    {

    },
    updateAddress()
    {

    },
    updateCompanyDescription()
    {

    },
    updateUserLogo(event)
    {

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

          // else {
            alert('success');
            console.log(response);
            this.Loader.showLoader = this.showLoader = false;
          // }
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
  },
  computed: {

  },
  components: {
    error,loader
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
  }
})
