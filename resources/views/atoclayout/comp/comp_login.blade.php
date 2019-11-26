<div class="card" v-if="auth_type.Login.Company">
    <div class="card-header">
        <h3>Log in as a supplier</h3>
    </div>

    <div class="card-body">
        <div id="comp_login" class="tab-pane" :class="{'active':comp_login}">
            <div class="login-form-container">
                <div class="login-register-form">
                    <form action="#" method="post">
                        <div class="row pl-4">
                            <h4><u>Company Login Form</u></h4>
                        </div>

                        <div class="row ">
                            <div class="col-md-4 col-lg-4">
                                <select class=" " v-model="Company.country_code">
                                    <option value="+86" selected>China + 86</option>
                                    <option value="+244">Congo + 244</option>
                                    <option value="+252">Djibouti +253</option>
                                    <option value="+251">Ethiopia +251</option>
                                    <option value="+233">Ghana +233</option>
                                    <option value="+254">Kenya +254</option>
                                    <option value="+263">Mozambique +263</option>
                                    <option value="+264">Namibia +254</option>
                                    <option value="+234">Nigeria +234</option>
                                    <option value="+252">Somalia +252</option>
                                    <option value="+27">South Africa +27</option>
                                    <option value="+255">Tanzania +255</option>
                                    <option value="+260">Zambia +260</option>
                                    <option value="+263">Zimbabwe +263</option>
                                </select>
                            </div>

                            <div class="c col-md-6 col-lg-6">
                                <input class="input" placeholder="telephone" v-model="Company.company_phone" />
                            </div>

                        </div>
                        <div class="row  mt-4">
                            <div class="c col-md-12 col-lg-12">
                                <input type="password" name="company_password" placeholder="Password"
                                    v-model="Company.company_password">
                            </div>

                        </div>

                        <div class="row  mt-4">
                            <div class="col-md-12 col-lg-12">
                                <button @click.prevent="companyLogin" class="btn btn-md btn-primary ">Login</button>
                            </div>

                        </div>
                        <div class="row  mt-4">
                            <div class="c col-md-12 col-lg-12">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
