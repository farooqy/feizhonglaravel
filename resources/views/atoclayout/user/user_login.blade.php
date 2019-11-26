<div class="card" v-if="auth_type.Login.User">
    <div class="card-header">
        <h3 class="title">Log in as a buyer</h3>
    </div>
    <div class="card-body">
            <div id="lg1" class="tab-pane" >
                    <div class="login-form-container">
                        <div class="login-register-form">
                            <form action="#" method="post">

                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                            <input type="text" name="user-name" placeholder="Email"
                                            v-model="User.user_email">
                                    </div>
                                        
                                </div>
                                <div class="row mt-2">
                                        <div class="col-md-12 col-lg-12">
                                                <input type="password" name="user-password" placeholder="Password"
                                                v-model="User.password">
                                        </div>
                                       
                                </div>
                                <div class="row mt-3">
                                        <div class="col-md-12 col-lg-12">
                                                <button type="submit" @click.prevent="loginUser"
                                                class="btn btn-md btn-primary">Login</button>
                                        </div>
                                </div>
                                
                                <div class="row mt-2">
                                        <div class="col-md-12 col-lg-12">
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </div>
</div>