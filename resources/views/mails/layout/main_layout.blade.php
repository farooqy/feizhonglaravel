<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your demand could not be met</title>

    @include('mails.bootstrap')
    @include('mails.mdbfooter')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-8 col-lg-8">
                <div class="row">
                        <img class="mx-auto mt-4 mb-3"  height="120"
                        src="https://atocchina.com/atoc_assets/images/logo_side_writting.png" />

                </div>
                <div class="row">

                    <div class="card mb-4" style="border-top: 5px solid #ff00bf; width:100%" >
                        <div class="card-body text-center">
                            <img class="mx-auto"  height="80"
                                src="https://maamul.drongo.tech/assets/images/brand/logo.png" /><br>
                            <h4 class="text-center">@yield('mail_title')</h4>
                        <h5 class="text-muted text-center">@php $time = now() @endphp {{$time}}</h5>

                            <hr />
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    @yield('mail_body')
                </div>

                <div class="row">

                    <!-- Footer -->
                    <footer class="page-footer font-small cyan darken-3" style="width:100%">

                        <!-- Footer Elements -->
                        <div class="container">

                            <!-- Grid row-->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-md-12 py-5">
                                    <div class="mb-5 flex-center">

                                    </div>
                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row-->

                        </div>
                        <!-- Footer Elements -->

                        <!-- Copyright -->
                        <div class="footer-copyright text-center py-3">© 2019 Copyright:
                            <a href="https://atoc.drongo.tech/"> AtoC — Africa to China</a>
                        </div>
                        <!-- Copyright -->

                    </footer>
                    <!-- Footer -->
                </div>
            </div>
            <div class="col-md-2 col-lg-2"></div>
        </div>

    </div>


</body>

</html>
