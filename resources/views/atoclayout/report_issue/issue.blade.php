@extends("atoclayout.profile")

@section("host_menu")
@if($_COOKIE["host_type"] ==="normal")
@include("atoclayout.user.user_menu")
@else
@include("atoclayout.comp.comp_menu")
@endif
@endsection

@section("body")


@if($_COOKIE["host_type"] ==="normal")
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
@else
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
          Welcome  <span v-text="Company.comp_name">John</span>
        </h4>
        <p class="text-white mt-0 mb-5">
          This is your profile page.
          You can see the progress you've made with your work and
          manage your interactions with companies</p>
      </div>
    </div>
  </div>
</div>
@endif


@include('atoclayout.error.comingsoon')

@endsection

@section("vuescript")
@if($_COOKIE["host_type"] === "normal")
<script src="/js/user_profile.js"></script>
@else
<script src="/js/comp_profile.js"></script>
@endif
@endsection
