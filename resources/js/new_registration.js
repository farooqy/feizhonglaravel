import './bootstrap';
import Company from './Company'
import User from './User';
import Error from './classes/Error';
import Success from './classes/Success'
import ServerRequest from './ServerRequest'

//components
import authtypemodal from "./authmodals/authtypemodal.vue";
import confirmemail from "./authmodals/confirmemail.vue";
import mainloader from "./mainmodals/mainloader.vue";

window.Vue = require('vue');
var App = new Vue({
    el: "#App",
    data: {
        Company: new Company(),
        User: new User(),
        Error: new Error(),
        Success: new Success(),
        Server: new ServerRequest(),
        Navigation: {
            stage_one: true,
            stage_two: false,
            stage_three: false,
            stage_four: false,
            current_stage: 0,
        },
        selected_type:-1,
        customtype:false,
        auth_type: {
            visible:false,
            target: -1,
            Register: {
                Company:false,
                User:false,
            },
            Login:  {
                Company:false,
                User:false,
            },
        },
        confirmEmail : {
            visible: false,
            data: {
                email:null,
            }
        },
        Loader: {
            visible: false,
            text: 'loading ...'
        },
    },
    methods: {  

        confirmEmailAddress()
        {
            this.confirmEmail.visible = false;
            console.log(' will start the registratin steps');
            this.showLoader('Sending verification code to email ' + this.Company.company_email);
        },
        //static
        isActiveTab(index) {
            if (this.Navigation.current_stage === index)
                return 'btn-primary';
        },
        Nextstage(next = true) {
            if (next && this.Navigation.current_stage < 3) {
                this.Navigation.current_stage += 1;

            } else if (!next && this.Navigation.current_stage > 0) {
                this.Navigation.current_stage -= 1;
            }
            this.changeStage();
        },
        changeStage() {
            this.Navigation.stage_one = this.Navigation.current_stage === 0;
            this.Navigation.stage_two = this.Navigation.current_stage === 1;
            this.Navigation.stage_three = this.Navigation.current_stage === 2;
            this.Navigation.stage_four = this.Navigation.current_stage === 3;
        },
        updateSelect(event) {
            console.log('event target ', event);
            this.selected_type = event.target.options.selectedIndex;
            this.Company.company_subtype = this.Company.types[this.selected_type][0];
            if (this.selected_type === 21) {
                this.showCustomInput();
                this.Company.company_type = this.Company.company_subtype =  null;
            } else {
                this.customtype = false;
            }
        },
        showCustomInput() {
            this.customtype = true;
        },
        toggleAuthType(type)
        {
            this.auth_type.target = type;
            this.auth_type.visible = !this.auth_type.visible;
        },
        showAuthType(subtype)
        {
            this.auth_type.Register.Company = this.auth_type.target === 0 && subtype === 0;
            this.auth_type.Register.User = this.auth_type.target == 0 && subtype === 1;

            this.auth_type.Login.Company = this.auth_type.target === 1 && subtype === 0;
            this.auth_type.Login.User= this.auth_type.target === 1 && subtype === 1;

            this.auth_type.visible = false;
            
        },
        showEmailConfirmation()
        {
            this.confirmEmail.data.email = this.Company.company_email;
            this.confirmEmail.visible = true;
        },
        showLoader(text='Loading...') {
            this.Loader.text = text;
            this.Loader.visible = true;
        }

    },
    mounted() {

    },
    components: {authtypemodal, confirmemail, mainloader}
});

