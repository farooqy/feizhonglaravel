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
import errormodal from "./mainmodals/errormodal.vue";
import infomodal from "./mainmodals/infomodal.vue";

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
        req: {
            host_id: -1,
            host_token: null
        }
    },
    methods: {  
        getBrowserInfo()
        {
            this.Server.setRequest({
                platform: 1
            });
            this.Server.serverRequest('/api/statistics/generateIdAndToken',
            this.returnedBrowserApi, this.Error.showErrorModal)
        },
        confirmEmailAddress()
        {
            this.confirmEmail.visible = false;
            console.log(' will start the registratin steps');
            this.showLoader('Sending verification code to email ' + this.Company.company_email);
            this.Server.setRequest({
                email_address: this.Company.company_email
            })
            this.Server.serverRequest('/api/comp/send/email/verification', this.emailSent, this.showErrorModal);
        },
        emailSent(data)
        {
            this.Loader.visible = false;
            this.Success.success_text = "The code has been sent to "+this.Company.company_email;
            this.Success.visible = true;
            console.log('Email has been verified successfully');

        },
        submitRegistrationForm()
        {
            if(this.Company.company_type === null)
            {
                this.showErrorModal('Please enter company type  ');
                return;
            }
            else if(this.Company.company_subtype === null)
            {
                this.showErrorModal('Please enter company sub type  ');
                return;
            }
            else if(this.Company.company_description === null)
            {
                this.showErrorModal('Please enter company description  ');
                return;
            }
            else
            {
                var type_req = this.Company.getTypeInfo();
                type_req.company_id = this.req.host_id;
                type_req.company_token = this.req.host_token; 
                type_req.api_key = 'api_key';
                this.Server.setRequest(type_req);
                this.Server.serverRequest('/api/comp/register/type', this.registrationComplete, this.showErrorModal)
            }
        },
        basicInfoDone(data)
        {
            if(data[0])
                data = data[0];
            this.req.host_id = data.comp_id;
            this.req.host_token = data.comp_token;
            this.Navigation.current_stage +=1;
            this.changeStage();
        },
        addressInfoDone(data)
        {
            if(data[0])
                data = data[0];
                this.Navigation.current_stage +=1;
                this.changeStage();
        },
        registrationComplete(data)
        {
            this.companyLogin();
            
        },
        userLoggedIn(data)
        {
            window.location.reload();
        },
        previewComplogo(event)
        {
            this.Server.previewFile(event.target, this.showCompLogo, this.showErrorModal);

        },
        showCompLogo(e)
        {
            this.Company.company_logo = e.target.result;
        },
        companyLogin()
        {
            var login_req = this.Company.getLoginInfo();
            login_req.guest_id = this.req.host_id;
            login_req.guest_token = this.req.host_token;
            login_req.api_key = 'api_key';

            this.Server.setRequest(login_req);
            this.Server.serverRequest('/api/comp/login', this.userLoggedIn, this.showErrorModal);

        },
        UserRegistration()
        {
            var reg_req = this.User;
            reg_req.guest_id = this.req.host_id;
            reg_req.guest_token = this.req.host_token;
            reg_req.api_key = 'api_key';
            this.Server.setRequest(reg_req);
            this.Server.serverRequest('/api/user/register', this.loginUser, this.showErrorModal);
        },
        loginUser(data=null)
        {
            var login_req = {
                user_email: this.User.user_email,
                user_password: this.User.password,
                guest_id: this.req.host_id,
                guest_token: this.req.host_token,
                api_key: 'api_key',
            }
            this.Server.setRequest(login_req);
            this.Server.serverRequest('/api/user/login', this.userLoggedIn, this.showErrorModal);
        },
        //static
        isActiveTab(index) {
            if (this.Navigation.current_stage === index)
                return 'btn-primary';
        },
        Nextstage(next = true) {
            if(this.Navigation.current_stage === 0 && next)
            {
                console.log('we shuld check hre');
                if(this.Company.company_email === null || this.Company.company_email === "")
                {
                    this.showErrorModal('Please enter your email address before continuing to the next step');
                    return;
                }
                else if(this.Company.verification_code === null || this.Company.verification_code === "")
                {
                    this.showErrorModal('Please enter verification code sent to your email \
                     before continuing to the next step. Please check the email in your junk or spam folder');
                    return;

                }
            }
            else if(this.Navigation.current_stage === 1 && next)
            {
                if(this.Company.country_code === null || this.Company.company_phone === null)
                {
                    this.showErrorModal('Please enter company phone together with the country code');
                    return;
                }
                else if(this.Company.company_name === null)
                {
                    this.showErrorModal('Please enter company name');
                    return;
                }
                else if(this.Company.company_password === null )
                {
                    
                    this.showErrorModal('Please enter company password');
                    return;
                }
                else if(this.Company.company_password_verification === null)
                {

                    this.showErrorModal('Please enter verification password');
                    return;
                }
                else
                {
                    var basic_req = this.Company.getBasicInfo();
                    basic_req.guest_id = this.req.host_id;
                    basic_req.guest_token = this.req.host_token;
                    basic_req.api_key = 'api_key';
                    this.Server.setRequest(basic_req);
                    this.Server.serverRequest('/api/comp/register/basicInfo', this.basicInfoDone, this.showErrorModal)
                    return;
                }
            }
            else if(this.Navigation.current_stage === 2 && next)
            {
                if(this.Company.company_address_one ===null)
                {
                    this.showErrorModal('Please enter verification password');
                    return;
                }
                else if(Company.company_province)
                {
                    this.showErrorModal('Please enter company located province');
                    return;
                }
                else if(Company.company_city)
                {
                    this.showErrorModal('Please enter company located country');
                    return;
                }
                else
                {
                    var address_req = this.Company.getAddresInfo();
                    address_req.company_id = this.req.host_id;
                    address_req.company_token = this.req.host_token;
                    address_req.api_key = 'api_key';
                    this.Server.setRequest(address_req);
                    this.Server.serverRequest('/api/comp/register/address', this.addressInfoDone, this.showErrorModal)
                    return;
                }
            }
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
        },

        returnedBrowserApi(data)
        {
            this.req.host_id = data.host_id;
            this.req.host_token = data.host_token;
            console.log('returned browser api ',data);
        },
        showErrorModal(error)
        {
            this.Error.showErrorModal(error);
            this.Loader.visible = false;
            this.Loader.text = 'Loading...';
        }

    },
    mounted() {
        this.getBrowserInfo();
    },
    components: {authtypemodal, confirmemail, mainloader, errormodal, infomodal}
});

