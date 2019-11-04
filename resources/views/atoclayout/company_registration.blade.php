
<div id="comp_registration" class="tab-pane" :class="{'active':comp_registration}">
    <div class="login-form-container">
        <div class="login-register-form">
            <form action="/api/user/register" method="post"
            @submit.prevent="userRegistration">
                @csrf
                <formerror v-text="Company.error[0]"></formerror>
                <div class="row pl-4 mb-3 text-decoration-underline">
                  <!-- <h4><u>Company Registration Form</u></h4> -->
                </div>
                <div class="phases-container">

                  <div class="phase_one reg_phases"
                   :class="{'btn-primary': comp_basic_info}">1</div>
                   <div class="phase_one reg_phases"
                    :class="{'btn-primary': comp_addr_info}">2</div>
                  <div class="phase_one reg_phases "
                   :class="{'btn-primary': comp_type_info}">3</div>

                </div>
                <div class="row">
                  <input id="comp_logo" name="comp_logo" v-model="Company.comp_logo"
                  type="hidden"/>
                </div>
                <div class="row">
                  <div class="col-md-4 col-lg-4" ></div>
                  <img class="col-md-4 col-lg-4" :src="Company.company_logo"
                  height="100%" id="comp_logo_image" style="cursor:pointer;"
                  @click="$refs.comp_logo_uploader.click()" >
                    <div class="col-md-4"></div>
                </div>

                <div class="row mt-3" v-show="comp_phone_verification">
                  <div class="col-lg-12 col-md-12">
                    <div class="row">
                      <div class="col-sm-3 col-md-4 col-lg-4">
                        <select name="country_code" class="select_custom"
                        v-model="Company.country_code">
                          <option value="+86" selected>China + 86</option>
                          <option value="+252">Djibouti +253</option>
                          <option value="+251">Ethiopia +251</option>
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
                        <div class="col-sm-9 col-md-5 col-lg-5">
                          <input type="text" placeholder="86 1234 5678"
                          v-model="Company.company_phone"/>
                        </div>

                          <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="btn btn-secondary"
                             style="height:50px;
                            line-height:35px; cursor:pointer;"
                            @click="requestPhoneCode"
                            >
                              Get code
                            </div>
                          </div>
                    </div>

                    <div class="row">
                      <input type="number" class="input" v-model="Company.verification_code"
                      placeholder="Enter code" name="verification_code"/>
                    </div>
                    <div class="row">
                      <div class="btn btn-primary col-md-12 col-lg-12"
                      @click="stageOneRegistration">Next</div>
                    </div>

                  </div>
                </div>
                <div class="row mt-3" v-show="comp_basic_info">
                  <div class="col-lg-12 col-md-12">
                    <div class="row">
                      <input type="text"  placeholder="Company Email"
                      v-model="Company.company_email" name="company_email"/>
                    </div>
                    <div class="row">
                      <input type="text"  placeholder="Company Name"
                      v-model="Company.company_name" name="company_name"/>
                    </div>
                    <div class="row">
                      <input type="password" class="input" v-model="Company.company_password"
                      placeholder="Enter password" name="company_password"/>
                    </div>
                    <div class="row">
                      <input type="password" class="input" placeholder="Verify password"
                       name="company_password_verification"
                       v-model="Company.company_password_verification"/>
                    </div>
                    <div class="row">
                      <div class="btn btn-primary col-md-12 col-lg-12"
                      style="cursor:pointer;" @click="stageBasicInfo()">Next</div>
                    </div>
                  </div>

                </div>

                <div class="row mt-3" v-show="comp_addr_info">
                  <div class="col-lg-12 col-md-12">
                    <div class="row">
                      <input type="text"  placeholder="Company address one"
                      v-model="Company.company_address_one" name="company_addr_one"
                      class="col-md-6 col-lg-6"/>
                        <input type="text" class="col-md-6 col-lg-6" v-model="Company.company_address_two"
                        placeholder="Address two (optional)" name="company_addr_two"/>
                    </div>
                    <div class="row">
                      <input type="text"  placeholder="Company province"
                      v-model="Company.company_province" name="company_province"
                      class="col-md-6 col-lg-6"/>
                        <input type="text" class="col-md-6 col-lg-6" v-model="Company.company_city"
                        placeholder="City" name="company_city"/>
                    </div>
                    <div class="row">
                      <div class="btn btn-primary col-md-12 col-lg-12"
                      style="cursor:pointer;" @click="stageAddressInfo">Next</div>
                    </div>
                  </div>

                </div>

                <div class="row mt-3" v-show="comp_type_info">
                  <div class="col-lg-12 col-md-12">
                    <div class="row">
                      <select name="company_type" class="select_custom col-md-6 col-lg-6"
                      @change="updateSelect($event)" v-model="Company.company_type">
                          <option value="Aerospace industry" >Aerospace industry</option>
                          <option value="Agriculture" >Agriculture</option>
                          <option value="Beautify" >Beauty Products</option>
                          <option value="Chemical industry" >Chemical industry</option>
                          <option value="Computer industry" >Computer industry</option>
                          <option value="Construction industry" >Construction industry</option>
                          <option value="Defense industry">Defense industry</option>
                          <option value="Education industry" >Education industry</option>
                          <option value="Energy industry" >Energy industry</option>
                          <option value="Entertainment industry" >Entertainment industry</option>
                          <option value="Financial services industry" >Financial services industry</option>
                          <option value="Food production" >Food production</option>
                          <option value="Health care industry">Health care industry</option>
                          <option value="Hospitality industry" >Information industry</option>
                          <option value="Manufacturing">Manufacturing</option>
                          <option value="Mass media" >Mass media</option>
                          <option value="Mining" >Mining</option>
                          <option value="Telecommunications industry" >Telecommunications industry</option>
                          <option value="Transport industry">Transport industry</option>
                          <option value="Water industry" >Water industry</option>
                          <option value="Direct Selling industry" >Direct Selling industry</option>
                          <option value="Other" >Other</option>
                      </select>

                      <select  class="select_custom col-md-6 col-lg-6" name="comp_subtype"
                      v-model="Company.company_subtype">
                        <option v-for=" type in Company.types[selected_type]"
                        :value="type" v-text="type" >
                      </option>
                      </select>
                    </div>
                    <div class="row" v-show="customtype">
                      <input type="text" class="col-md-6 col-lg-6"
                      placeholder="Enter custom type"
                      v-model="Company.company_type"/>
                      <input type="text" class="col-md-6 col-lg-6"
                      placeholder="Enter custom sub type"
                      v-model="Company.company_subtype"/>
                    </div>
                    <div class="row mt-3">
                      <textarea class="textarea" placeholder="Company description"
                      name="company_description" v-model="Company.company_description">
                    </textarea>
                    </div>
                    <div class="row mt-3">
                      <input type="submit" class="btn" class="col-md-12 col-lg-12"
                      @click.prevent="submitRegistrationForm"
                      value="Finish Registration" style="background-color:green;"/>
                    </div>
                  </div>
                </div>
            </form>
            <form class="" method="post" action="" v-show="false">
              <input type="file" name="comp_logo_uploader" ref="comp_logo_uploader"
              @change="comp_logo_changed($event)">
            </form>
        </div>
    </div>
</div>



<div id="comp_login" class="tab-pane" :class="{'active':comp_login}">
    <div class="login-form-container">
        <div class="login-register-form">
            <form action="#" method="post">
              <div class="row pl-4">
                <h4><u>Company Login Form</u></h4>
              </div>

              <div class="row">
                <select class="select_custom col-md-4 col-lg-4">
                  <option value="+86" selected>China + 86</option>
                  <option value="+252">Djibouti +253</option>
                  <option value="+251">Ethiopia +251</option>
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
                <input class="input col-md-6 col-lg-6" placeholder="telephone"
                v-model="Company.company_phone" />
              </div>
              <div class="row">
                <input type="password" name="company_password" placeholder="Password"
                v-model="Company.company_password">
              </div>

                <div class="button-box">
                    <div class="login-toggle-btn">
                        <input type="checkbox">
                        <label>Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" @click.prevent="companyLogin">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
