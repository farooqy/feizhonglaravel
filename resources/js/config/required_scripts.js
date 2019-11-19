require("../bootstrap");
import Company from "../Company.js";
import User from "../User.js";
import Guest from "../Guest.js";
import Status from "../Status.js";
import Product from "../Product.js";
import ServerRequest from "../ServerRequest";
import BargainModel from "../classes/BargainModel";

window.Company = Company;
window.User = User;
window.Guest = Guest;
window.Status = Status;
window.Product = Product;
window.ServerRequest = ServerRequest;
window.BargainModel = BargainModel;

window.Vue = require("vue");
Vue.use(require('vue-cookies'));
Vue.use(require('vue-faker'), {
    locale: 'zh_CN'
});
window.Axios = require('axios');