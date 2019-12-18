@extends("atoclayout.profile")

@section("host_menu")
@include("atoclayout.comp.comp_menu")
@endsection

@section("body")


<div class="header d-flex align-items-center"
style="min-height: 80px; background-image: url('/atoc_assets/images/black-handshake.jpg');
 background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8"></span>
  <!-- Header container -->
</div>

<div class="card">
  <div class="card-header"></div>
  <div class="card-body">
    
  </div>
</div>

@endsection

@section("vuescript")
<script src="/js/comp_profile.js"></script>
@endsection
