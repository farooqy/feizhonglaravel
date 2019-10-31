@extends("atoclayout.profile")

@section("host_menu")

@include("atoclayout.user.user_menu")
@endsection

@section("body")

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
              Welcome  <span v-text="User.user_firstName+User.user_lastName">John</span>
            </h4>
            <p class="text-white mt-0 mb-5">
              This is your profile page.
              You can see the progress you've made with your work and
              manage your interactions with companies</p>
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
                    <img :src="User.user_profile" class=""
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
                  <span v-text="User.user_firstName+User.user_lastName"></span>
                  <span class="font-weight-light"></span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>
                  <span v-text="User.city+' '+User.country">Uknown address</span>
                </div>
                <div class="h5 mt-4">
                  <i class="fas fa-map mr-2"></i>
                  <span v-text="User.address"></span>
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>
                </div>
                <hr class="my-4">
                <div class="" v-text="User.about_me">
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
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">Telephone</label>
                        <input type="text" id="input-username"
                        class="form-control form-control-alternative"
                        placeholder="Username" v-model="User.user_phone">
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
                        placeholder="jesse@example.com" v-model="User.user_email">
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
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name"
                        class="form-control form-control-alternative"
                        placeholder="First name" v-model="User.user_firstName">
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
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name"
                        class="form-control form-control-alternative"
                        placeholder="Last name" v-model="User.user_lastName">
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
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address"
                        class="form-control form-control-alternative"
                        placeholder="Home Address" v-model="User.address" type="text">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Province/state</label>
                        <input id="input-address"
                        class="form-control form-control-alternative"
                        placeholder="Province or State" v-model="User.province_state" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city"
                        class="form-control form-control-alternative"
                        placeholder="City" v-model="User.city">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-country"
                        class="form-control form-control-alternative"
                        placeholder="Country" v-model="User.country">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <input type="number" id="input-postal-code"
                        class="form-control form-control-alternative"
                        placeholder="Postal code" v-model="User.postal_code">
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
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group focused">
                    <label>About Me</label>
                    <textarea rows="4"
                    class="form-control form-control-alternative"
                    placeholder="A few words about you ..."
                    v-model="User.about_me"></textarea>
                  </div>

                  <div class="row">
                    <div class="col-md-4 col-lg-4"></div>
                    <div class="col-md-4 col-lg-4">
                      <div class="btn btn-sm btn-primary" @click="updateAboutMe">
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

@endsection

@section("vuescript")
<script src="/js/user_profile.js"></script>
@endsection
