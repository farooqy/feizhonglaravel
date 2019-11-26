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

                        <div class="row">
                            <div class="c col-md-12 col-lg-12">
                                    <input type="email" name="company_password" placeholder="Email address"
                                        v-model="Company.company_email">
                            </div>
                        </div>
                        <div class="row  mt-4">
                            <div class="col-md-12 col-lg-12">
                                <input type="password" name="company_password" placeholder="Password"
                                    v-model="Company.company_password">
                            </div>

                        </div>

                        <div class="row  mt-4">
                            <div class="col-md-12 col-lg-12">
                                <button @click.prevent="companyLogin()" class="btn btn-md btn-primary ">Login</button>
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
