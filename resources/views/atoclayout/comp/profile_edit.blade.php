<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
style="min-height: 600px; background-image: url('/atoc_assets/images/black-handshake.jpg');
 background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
    <div class="row">
      <div class="col-lg-7 col-md-10">
        <h4 class="display-2 text-white" style="font-size:30px">
          Welcome  <span v-text="Company.company_name">John</span>
        </h4>
        <p class="text-white mt-0 mb-5">
          This is your profile page.
          You can see the progress you've made with your work and
          manage your enquries</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt--9">
  <div class="row">
    <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
      <div class="card card-profile shadow">
        <div class="row justify-content-center">
          <div class="col-lg-3 order-lg-2">
            <div class="card-profile-image">
                <img :src="Company.company_logo" class=""
                @click="$refs.logo_uploader.click()" style="cursor:pointer">
            </div>
          </div>
        </div>
        <div class="row" v-show="false">
          <input type="file" ref="logo_uploader" name="logo_uploader"
          @change="updateUserLogo($event)" v-modal="updatedProfile"/>
        </div>
        <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
        </div>
        <div class="card-body pt-0 pt-md-4">
          <div class="row">
            <div class="col">
              <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                <div>
                  <span class="heading">
                    <i class="fas fa-star"></i> <br>1/10
                  </span>
                  <span class="description">Rate</span>
                </div>
                <div>
                  <span class="heading">
                    <i class="fas fa-users"></i><br>10
                  </span>
                  <span class="description">Interactions</span>
                </div>
                <div>
                  <span class="heading">
                    <i class="fas fa-comments"></i><br>12
                  </span>
                  <span class="description">Comments</span>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <h3>
              <span v-text="Company.company_name"></span>
              <span class="font-weight-light"></span>
            </h3>
            <div class="h5 font-weight-300">
              <i class="ni location_pin mr-2"></i>
              <span v-text="Company.city+' '+Company.Province">Uknown address</span>
            </div>
            <div class="h5 mt-4">
              <i class="fas fa-map mr-2"></i>
              <span v-text="Company.company_address_one"></span>
            </div>
            <div>
              <i class="ni education_hat mr-2"></i>
            </div>
            <hr class="my-4">
            <div class="" v-text="Company.company_description">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-8 order-xl-1">
      <div class="card bg-secondary shadow">
        <div class="card-header bg-white border-0">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">My account</h3>
            </div>
            <div class="col-4 text-right">
            </div>
          </div>
        </div>
        <div class="card-body" style=" background-color: #ffffffe8;">
          <form>
            <h6 class="heading-small text-muted mb-4">Company information</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-5">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-username">Telephone</label>
                    <input type="text" id="input-username"
                    class="form-control form-control-alternative"
                    placeholder="Company phone" v-model="Company.company_phone">
                  </div>
                </div>
                <div class="col-lg-1 mt-5 ml--3" style="cursor:pointer;"
                @click="updateInfo('2')">
                  <span class="">
                    <i class="fas fa-user-edit"></i>
                  </span>
                </div>


                <div class="col-lg-5">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Email address</label>
                    <input type="email" id="input-email"
                    class="form-control form-control-alternative"
                    placeholder="jesse@example.com" v-model="Company.company_email">
                  </div>
                </div>

                <div class="col-lg-1 mt-5 ml--3" style="cursor:pointer;"
                @click="updateInfo('3')">
                  <span class="">
                    <i class="fas fa-user-edit"></i>
                  </span>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-5">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-first-name">Company name</label>
                    <input type="text" id="input-first-name"
                    class="form-control form-control-alternative"
                    placeholder="Company name" v-model="Company.company_name">
                  </div>
                </div>

                <div class="col-lg-1 mt-5 ml--3" style="cursor:pointer;"
                @click="updateInfo('0')">
                  <span class="">
                    <i class="fas fa-user-edit"></i>
                  </span>
                </div>
                <div class="col-lg-5">
                  <div class="form-group focused">
                  </div>
                </div>

                <div class="col-lg-1 mt-5 ml--3" style="cursor:pointer;"
                @click="updateInfo('1')">
                  <span class="">
                    <i class="fas fa-user-edit"></i>
                  </span>
                </div>
              </div>
            </div>
            <hr class="my-4">
            <!-- Address -->
            <h6 class="heading-small text-muted mb-4">Contact information</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-address">Address One</label>
                    <input id="input-address"
                    class="form-control form-control-alternative"
                    placeholder="Address one" v-model="Company.company_address_one" type="text">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-address">Address two</label>
                    <input id="input-address"
                    class="form-control form-control-alternative"
                    placeholder="Address two" v-model="Company.company_address_two" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-city">Province</label>
                    <input type="text" id="input-city"
                    class="form-control form-control-alternative"
                    placeholder="Province" v-model="Company.company_province">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group focused">
                    <label class="form-control-label" for="input-country">City</label>
                    <input type="text" id="input-country"
                    class="form-control form-control-alternative"
                    placeholder="City" v-model="Company.company_city">
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-country">Postal code</label>
                    <input type="number" id="input-postal-code"
                    class="form-control form-control-alternative"
                    placeholder="Postal code" v-model="Company.postal_code">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4 col-lg-4"></div>
                <div class="col-md-4 col-lg-4">
                  <div class="btn btn-sm btn-primary" @click="updateAddress">
                    Update Address
                  </div>
                </div>
                <div class="col-md-4 col-lg-4"></div>
              </div>

            </div>
            <hr class="my-4">
            <!-- Description -->
            <h6 class="heading-small text-muted mb-4">Company Description</h6>
            <div class="pl-lg-4">
              <div class="form-group focused">
                <label>Company Description</label>
                <textarea rows="4"
                class="form-control form-control-alternative"
                placeholder="A few words about Company ..."
                v-model="Company.company_description"></textarea>
              </div>

              <div class="row">
                <div class="col-md-4 col-lg-4"></div>
                <div class="col-md-4 col-lg-4">
                  <div class="btn btn-sm btn-primary" @click="updateCompanyDescription">
                    Update
                  </div>
                </div>
                <div class="col-md-4 col-lg-4"></div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
