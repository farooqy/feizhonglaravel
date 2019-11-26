<!DOCTYPE html>
<html lang="en">

<head>

    <title>AtoC - Africa to China</title>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Main Font -->
    <script src="/olympus_assets/js/libs/webfontloader.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        WebFont.load({
            google: {
                families: ['Roboto:300,400,500,700:latin']
            }
        });

    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/olympus_assets/Bootstrap/dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="/olympus_assets/Bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/olympus_assets/Bootstrap/dist/css/bootstrap-grid.css" <!-- Main Styles
        CSS -->
    <link rel="stylesheet" type="text/css" href="/olympus_assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="/olympus_assets/css/fonts.min.css">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">



</head>

<body class="landing-page">


    <!-- Preloader -->

    <div id="hellopreloader">
        <div class="preloader">
            <svg width="45" height="45" stroke="#fff">
                <g fill="none" fill-rule="evenodd" stroke-width="2" transform="translate(1 1)">
                    <circle cx="22" cy="22" r="6" stroke="none">
                        <animate attributeName="r" begin="1.5s" calcMode="linear" dur="3s" repeatCount="indefinite"
                            values="6;22" />
                        <animate attributeName="stroke-opacity" begin="1.5s" calcMode="linear" dur="3s"
                            repeatCount="indefinite" values="1;0" />
                        <animate attributeName="stroke-width" begin="1.5s" calcMode="linear" dur="3s"
                            repeatCount="indefinite" values="2;0" />
                    </circle>
                    <circle cx="22" cy="22" r="6" stroke="none">
                        <animate attributeName="r" begin="3s" calcMode="linear" dur="3s" repeatCount="indefinite"
                            values="6;22" />
                        <animate attributeName="stroke-opacity" begin="3s" calcMode="linear" dur="3s"
                            repeatCount="indefinite" values="1;0" />
                        <animate attributeName="stroke-width" begin="3s" calcMode="linear" dur="3s"
                            repeatCount="indefinite" values="2;0" />
                    </circle>
                    <circle cx="22" cy="22" r="8">
                        <animate attributeName="r" begin="0s" calcMode="linear" dur="1.5s" repeatCount="indefinite"
                            values="6;1;2;3;4;5;6" />
                    </circle>
                </g>
            </svg>

            <div class="text">Loading ...</div>
        </div>
    </div>

    <!-- ... end Preloader -->
    <div class="" style="background-color: rgba(35, 33, 48, 0.95);background-position: 0 0;
background-repeat: repeat;-webkit-animation: sidedownscroll 30s linear infinite;
animation: sidedownscroll 30s linear infinite;background-size: auto;
position: absolute;top: 0;bottom: 0;left: 0;right: 0;"></div>


    <!-- Header Standard Landing  -->

    <div class="header--standard header--standard-landing" id="header--standard" style="z-index:0">
        <div class="container">
            <div class="header--standard-wrap">

                <a href="/olympus_assets/#" class="logo" style="width:150px">
                    <div class="img-wrap">
                        <img src="/atoc_assets/images/logo_side_writting.png" alt="Olympus">
                        <img src="/olympus_assets/img/logo-colored-small.png" alt="Olympus" class="logo-colored">
                    </div>
                    <div class="title-block">

                    </div>
                </a>

                <a href="#" class="open-responsive-menu js-open-responsive-menu">
                    <svg class="olymp-menu-icon">
                        <use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-menu-icon"></use>
                    </svg>
                </a>


            </div>
        </div>
    </div>

    <!-- ... end Header Standard Landing  -->
    <div class="header-spacer--standard"></div>

    <div class="container" id="App">
        <infomodal v-bind="Success" v-if="Success.visible" v-on:close-info-modal="Success.resetSuccessModal()"></infomodal>
        <errormodal v-bind="Error" v-if="Error.visible" v-on:close-error-modal="Error.resetErrorModal()"></errormodal>
        <mainloader v-bind="Loader" v-if="Loader.visible" ></mainloader>
        <authtypemodal v-if="auth_type.visible" v-on:toggle-type-modal="showAuthType" 
        v-on:toggle-auth-modal="auth_type.visible = false"></authtypemodal>
        <confirmemail v-bind="confirmEmail.data" v-if="confirmEmail.visible" v-on:confirm-confirm-modal="confirmEmailAddress" 
        v-on:toggle-confirm-modal="confirmEmail.visible = false" ></confirmemail>
        <div class="row display-flex">
            <div class="col col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="landing-content">
                    <h1>Welcome to the Bridge Between Africa and China</h1>
                    <p>
                        We are the best and biggest platform connecting Africa and China!
                    </p>
                    
                </div>
                <div class="row">
                    <a href="#" class="btn btn-md btn-border c-orange active col-md-5 col-lg-5"
                     @click.prevent="toggleAuthType(0)">Register</a>
                    <a href="#" class="btn btn-md btn-border c-orange active col-md-5 col-lg-5"
                    @click.prevent="toggleAuthType(1)">Login</a>
                </div>
            </div>

            <div class="col col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12">

                <!-- Login-Registration Form  -->

                @include('atoclayout.comp.comp_register')
                @include('atoclayout.comp.comp_login')

                @include('atoclayout.user.user_registration')
                @include('atoclayout.user.user_login')
                

                <!-- ... end Login-Registration Form  -->
            </div>
        </div>
    </div>

    <!-- Window-popup Restore Password -->

    <div class="modal fade" id="restore-password" tabindex="-1" role="dialog" aria-labelledby="restore-password"
        aria-hidden="true">
        <div class="modal-dialog window-popup restore-password-popup" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon">
                        <use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
                    </svg>
                </a>

                <div class="modal-header">
                    <h6 class="title">Restore your Password</h6>
                </div>

                <div class="modal-body">
                    <form method="get">
                        <p>Enter your email and click the send code button. You’ll receive a code in your email. Please
                            use that
                            code below to change the old password for a new one.
                        </p>
                        <div class="form-group label-floating">
                            <label class="control-label">Your Email</label>
                            <input class="form-control" placeholder="" type="email" value="james-spiegel@yourmail.com">
                        </div>
                        <button class="btn btn-purple btn-lg full-width">Send me the Code</button>
                        <div class="form-group label-floating">
                            <label class="control-label">Enter the Code</label>
                            <input class="form-control" placeholder="" type="text" value="">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Your New Password</label>
                            <input class="form-control" placeholder="" type="password" value="olympus">
                        </div>
                        <button class="btn btn-primary btn-lg full-width">Change your Password!</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- ... end Window-popup Restore Password -->


    <!-- Window Popup Main Search -->


    <!-- ... end Window Popup Main Search -->

    <!-- JS Scripts -->
    <script src="/olympus_assets/js/jQuery/jquery-3.4.1.js"></script>
    <script src="/olympus_assets/js/libs/jquery.appear.js"></script>
    <script src="/olympus_assets/js/libs/jquery.mousewheel.js"></script>
    <script src="/olympus_assets/js/libs/perfect-scrollbar.js"></script>
    <script src="/olympus_assets/js/libs/jquery.matchHeight.js"></script>
    <script src="/olympus_assets/js/libs/svgxuse.js"></script>
    <script src="/olympus_assets/js/libs/imagesloaded.pkgd.js"></script>
    <script src="/olympus_assets/js/libs/Headroom.js"></script>
    <script src="/olympus_assets/js/libs/velocity.js"></script>
    <script src="/olympus_assets/js/libs/ScrollMagic.js"></script>
    <script src="/olympus_assets/js/libs/jquery.waypoints.js"></script>
    <script src="/olympus_assets/js/libs/jquery.countTo.js"></script>
    <script src="/olympus_assets/js/libs/popper.min.js"></script>
    <script src="/olympus_assets/js/libs/material.min.js"></script>
    <script src="/olympus_assets/js/libs/bootstrap-select.js"></script>
    <script src="/olympus_assets/js/libs/smooth-scroll.js"></script>
    <script src="/olympus_assets/js/libs/selectize.js"></script>
    <script src="/olympus_assets/js/libs/swiper.jquery.js"></script>
    <script src="/olympus_assets/js/libs/moment.js"></script>
    <script src="/olympus_assets/js/libs/daterangepicker.js"></script>
    <script src="/olympus_assets/js/libs/fullcalendar.js"></script>
    <script src="/olympus_assets/js/libs/isotope.pkgd.js"></script>
    <script src="/olympus_assets/js/libs/ajax-pagination.js"></script>
    <script src="/olympus_assets/js/libs/Chart.js"></script>
    <script src="/olympus_assets/js/libs/chartjs-plugin-deferred.js"></script>
    <script src="/olympus_assets/js/libs/circle-progress.js"></script>
    <script src="/olympus_assets/js/libs/loader.js"></script>
    <script src="/olympus_assets/js/libs/run-chart.js"></script>
    <script src="/olympus_assets/js/libs/jquery.magnific-popup.js"></script>
    <script src="/olympus_assets/js/libs/jquery.gifplayer.js"></script>
    <script src="/olympus_assets/js/libs/mediaelement-and-player.js"></script>
    <script src="/olympus_assets/js/libs/mediaelement-playlist-plugin.min.js"></script>
    <script src="/olympus_assets/js/libs/ion.rangeSlider.js"></script>

    <script src="/olympus_assets/js/main.js"></script>
    <script src="/olympus_assets/js/libs-init/libs-init.js"></script>
    <script defer src="/olympus_assets/fonts/fontawesome-all.js"></script>

    <script src="/olympus_assets/Bootstrap/dist/js/bootstrap.bundle.js"></script>


    <script src="/js/new_registration.js"></script>

</body>

</html>
