<div class="card" v-if="auth_type.Register.User">
    <div class="card-header">
        <h3 class="title">
            Registering as a buyer
        </h3>
    </div>

    <div class="card-body">
        <div id="lg2" class="tab-pane" >
            <div class="login-form-container">
                <div class="login-register-form">
                    <form action="/api/user/register" method="post" >
                        @csrf

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <label for="user_firstName" class="required">First Name</label>
                                    <input type="text" id="first-name" v-model="User.user_firstName" placeholder="Enter first name"/>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input-item">
                                    <label for="user_lastName" class="required">Last Name</label>
                                    <input type="text" id="last-name" v-model="User.user_lastName" placeholder="Enter last name" />
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12 col-lg-12">
                                    <input type="text" name="user_email" placeholder="Email" v-model="User.user_email"
                                    class="">
                            </div>
                            
                        </div>
                        


                        <div class="row mt-2">
                            <div class="col-lg-4">
                                <input type="text" name="area-code" placeholder="+86">
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="user_phone" placeholder="Phone" v-model="User.user_phone">
                            </div>
                        </div>

                        <div class="row mt-2">
                                <div class="col-md-12 col-lg-12">
                                        <input type="password" name="password" placeholder="Password" v-model="User.password">
                                </div>
                            
                        </div>
                        <div class="row mt-2">
                                <div class="col-md-12 col-lg-12">
                                        <input name="password-confirmation" placeholder="Confirm password" type="password"
                                        v-model="User.password_confirmation">
                                </div>
                            
                        </div>
                        
                        
                        <div class="row mt-2">
                                <div class="col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-md btn-primary col-lg-12 col-md-12"
                                         @click.prevent="UserRegistration()">Register</button>
                                </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
