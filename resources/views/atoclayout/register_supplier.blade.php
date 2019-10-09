<!doctype html>
<html class="no-js" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield("pageTitle")</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/atoc_assets/images/favicon.png">

    <!-- CSS -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/atoc_assets/css/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/atoc_assets/css/vendor/line-awesome.css">
    <link rel="stylesheet" href="/atoc_assets/css/vendor/themify.css">
    <!-- Other CSS -->
    <link rel="stylesheet" href="/atoc_assets/css/plugins/animate.css">
    <link rel="stylesheet" href="/atoc_assets/css/plugins/owl-carousel.css">
    <link rel="stylesheet" href="/atoc_assets/css/plugins/slick.css">
    <link rel="stylesheet" href="/atoc_assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="/atoc_assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="/atoc_assets/css/style.css">
    <link rel="stylesheet" href="/css/app.css">

</head>

<body>
    <div class="main-wrapper"  id="app" >
      <div class="loaderHolder" v-show="showLoader" >
        <loader>

        </loader>
      </div>
      <errormodal v-show="errorModal" v-on:hide-error-model="hideErrorModal"
      v-bind="errorObject"></errormodal>

      <popmodel v-on:hide-modal="continueVerificationCode"  v-show="showPopModel"  v-bind="modal_content"></popmodel>
        <div class="breadcrumb-area bg-img" style="background-image:url(/atoc_assets/images/nairobi_bk.jpg);
         height:50vh; width:100vw; background-size:100% contain;">
            <div class="container" style="background-color: rgba(255,255,255,0.7);position: absolute;
            top: 0px;left: 0px;right: 0px;height: inherit;">
                <div class="breadcrumb-content text-center">
                  <div class="logo">
                    <img src="/atoc_assets/images/logo/logo-1.png">
                  </div>
                    <h2>Login or Register</h2>
                    <ul>
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li class="active">Register </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="registration_for_who center" style="text-align:center; margin-top:10vh;">
          <button class="btn" :class="{'btn-primary': comp_registration | comp_login,
          'btn-secondary': user_registration | user_login}"
          style="height:45px; "
          @click.prevent="showTab('supplier')">
            I am a supplier
          </button>
            <button class="btn" :class="{'btn-secondary': comp_registration | comp_login,
            'btn-primary': user_registration | user_login}"
            style="height:45px;"
            @click.prevent="showTab('buyer')" >
              I am a buyer
            </button>
        </div>
        <div class="login-register-area pt-85 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                        <div class="login-register-wrapper">
                            <div class="login-register-tab-list nav">
                                <a data-toggle="tab" href="#"
                                @click.prevent="showPanel('login')"
                                :class="{'active': user_login | comp_login}"
                                 >
                                    <h4> login </h4>
                                </a>
                                <a :class="{'active': user_registration | comp_registration}"
                                 data-toggle="tab"
                                href="#"
                                @click.prevent="showPanel('register')">
                                    <h4> register </h4>
                                </a>
                            </div>
                            <div class="tab-content">
                                <div id="lg1" class="tab-pane" :class="{'active':user_login}">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="#" method="post">
                                                <input type="text" name="user-name" placeholder="Email">
                                                <input type="password" name="user-password" placeholder="Password">
                                                <div class="button-box">
                                                    <div class="login-toggle-btn">
                                                        <input type="checkbox">
                                                        <label>Remember me</label>
                                                        <a href="#">Forgot Password?</a>
                                                    </div>
                                                    <button type="submit">Login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="lg2" class="tab-pane" :class="{'active':user_registration}">
                                    <div class="login-form-container">
                                        <div class="login-register-form">
                                            <form action="/api/user/register" method="post"
                                            @submit.prevent="userRegistration">
                                                @csrf
                                                <formerror v-text="User.error[0]"></formerror>
                                                <formerror v-show="User.error.user_lastName"
                                                    v-text="User.error.user_lastName"></formerror>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="user_firstName" class="required">First Name</label>
                                                            <input type="text" id="first-name"
                                                            v-model="User.user_firstName"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="user_lastName" class="required">Last Name</label>
                                                            <input type="text" id="last-name"
                                                            v-model="User.user_lastName"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <formerror v-show="User.error.user_email"
                                                  v-text="User.error.user_email"></formerror>
                                                <input type="text" name="user_email" placeholder="Email"
                                                v-model="User.user_email">

                                                <formerror v-show="User.error.user_phone"
                                                  v-text="User.error.user_phone"></formerror>
                                                <div class="row">
                                                   <div class="col-lg-2">
                                                        <input type="text" name="area-code" placeholder="+86">
                                                    </div>
                                                    <div class="col-lg-10">
                                                    <input type="text" name="user_phone" placeholder="Phone"
                                                    v-model="User.user_phone">
                                                    </div>
                                                </div>
                                                <formerror v-show="User.error.password"
                                                  v-text="User.error.password"></formerror>
                                                <input type="password" name="password" placeholder="Password"
                                                v-model="User.password">
                                                <input name="password-confirmation" placeholder="Confirm password" type="password"
                                                v-model="User.password_confirmation">
                                                <div class="button-box">
                                                    <button type="submit">Register</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @include("atoclayout.company_registration")
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="footer-area section-padding-2 bg-bluegray pt-80">
            <div class="container-fluid">
                <div class="footer-top pb-40">
                    <div class="row">
                        <div class="col-lg-3 col-md-8 col-12 col-sm-12">
                            <div class="footer-widget mb-30">
                                <a href="#"><img src="/atoc_assets/images/logo/logo-1.png" alt="logo"></a>
                                <div class="footer-about">
                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6 col-sm-6">
                            <div class="footer-widget mb-30 ml-55">
                                <div class="footer-title-3">
                                    <h3>Company</h3>
                                </div>
                                <div class="footer-list-3">
                                    <ul>
                                        <li><a href="about-us.html">About US</a></li>
                                        <li><a href="blog.html">Blogs</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 col-sm-6">
                            <div class="footer-widget mb-30 footer-ngtv-mrg1">
                                <div class="footer-title-3">
                                    <h3>Product</h3>
                                </div>
                                <div class="footer-list-3">
                                    <ul>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Features</a></li>
                                        <li><a href="#">Customers</a></li>
                                        <li><a href="#">Demos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 col-sm-6">
                            <div class="footer-widget mb-30 ml-35">
                                <div class="footer-title-3">
                                    <h3>Helps</h3>
                                </div>
                                <div class="footer-list-3">
                                    <ul>
                                        <li><a href="#">Introduction</a></li>
                                        <li><a href="#">Feedback</a></li>
                                        <li><a href="#">Referrals</a></li>
                                        <li><a href="#">Network Status</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 col-sm-6">
                            <div class="footer-widget mb-30 ml-135">
                                <div class="footer-title-3">
                                    <h3>Follow us</h3>
                                </div>
                                <div class="footer-list-3">
                                    <ul>
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Telegram</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom pt-40 border-top-1">

                    <div class="copyright-3 text-center pb-50">
                        <p>Copyright © <a href="#">AtoC</a>. All Right Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="/atoc_assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- Modernizer JS -->
    <script src="/atoc_assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper JS -->
    <script src="/atoc_assets/js/vendor/popper.js"></script>
    <!-- Bootstrap JS -->
    <script src="/atoc_assets/js/vendor/bootstrap.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="/atoc_assets/js/plugins/countdown.js"></script>
    <script src="/atoc_assets/js/plugins/counterup.js"></script>
    <script src="/atoc_assets/js/plugins/images-loaded.js"></script>
    <script src="/atoc_assets/js/plugins/isotope.js"></script>
    <script src="/atoc_assets/js/plugins/instafeed.js"></script>
    <script src="/atoc_assets/js/plugins/jquery-ui.js"></script>
    <script src="/atoc_assets/js/plugins/jquery-ui-touch-punch.js"></script>
    <script src="/atoc_assets/js/plugins/magnific-popup.js"></script>
    <script src="/atoc_assets/js/plugins/owl-carousel.js"></script>
    <script src="/atoc_assets/js/plugins/scrollup.js"></script>
    <script src="/atoc_assets/js/plugins/waypoints.js"></script>
    <script src="/atoc_assets/js/plugins/slick.js"></script>
    <script src="/atoc_assets/js/plugins/wow.js"></script>
    <script src="/atoc_assets/js/plugins/textillate.js"></script>
    <script src="/atoc_assets/js/plugins/elevatezoom.js"></script>
    <script src="/atoc_assets/js/plugins/sticky-sidebar.js"></script>
    <script src="/atoc_assets/js/plugins/smoothscroll.js"></script>
    <!-- Main JS -->
    <script src="/atoc_assets/js/main.js"></script>
    <script src="/js/registration.js"></script>
</body>

</html>
