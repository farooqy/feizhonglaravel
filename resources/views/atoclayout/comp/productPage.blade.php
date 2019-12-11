@extends("atoclayout.profile")

@section("host_menu")
@include("atoclayout.comp.comp_menu")
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


  <div class="card col-xl-12 col-md-12 col-md-12" >
    <div class="card-header">Your Products</div>
    <div class="card-body" >
      <div class="row" style="">
        <productlist v-for="product in productList" v-bind="product"></productlist>
      </div>
    </div>
  </div>

@endsection

@section("vuescript")
<script src="/js/comp_profile.js"></script>
@endsection
