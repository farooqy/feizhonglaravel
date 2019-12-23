@extends("atoclayout.profile")

@section("host_menu")
@include("atoclayout.comp.comp_menu")
@endsection

@section("body")

<error-modal v-if="Error.visible" v-bind="Error" v-on:close-error-modal="disMissErrorModel()"></error-modal>
<feature-plan v-bind="{Company: Company}" v-if="featurePlanPackage.visible"
v-on:close-featured-plan-model="disMissFeaturedPlanModel()"></feature-plan>
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
    
    <div class="row">
      <div class="col-md-3 col-lg-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Feature plan (limited time)</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ month</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Shown at home page</li>
              <li>Analytics of clicks</li>
              <li>Product showcase</li>
              <li>Reach more customers</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary" 
              @click.prevent="subscribeToFeaturePlan()">Subscribe for free</button>
          </div>
        </div>


      </div>
      <div class="col-md-3 col-lg-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Open Profile plan</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$60 <small class="text-muted">/ month</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Open company email</li>
              <li>Open company phone</li>
              <li>Click analytics</li>
              <li>Show company details</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary disabled">Coming soon</button>
          </div>
        </div>

      </div>

      <div class="col-md-3 col-lg-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Silver Company plan</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$300 <small class="text-muted">/ month</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Inquiry priority</li>
              <li>Customer details</li>
              <li>Click analytics</li>
              <li>Show company details</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary disabled">Coming soon</button>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>

@endsection

@section("vuescript")
<script src="/js/subscription.js"></script>
@endsection
