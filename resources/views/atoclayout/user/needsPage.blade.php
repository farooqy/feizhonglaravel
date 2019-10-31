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
      <div class="card"style="width: -webkit-fill-available;">
          <div class="card-header">
              Posted needs
          </div>
          <div class="card-body">
              <table class="table">
                  <thead>
                      <th>
                          #
                      </th>
                      <th>
                           Name
                      </th>
                      <th>
                           Description
                      </th>
                      <th>
                          Quantity
                      </th>
                      <th>
                          Category
                      </th>
                      <th>
                          Valid until
                      </th>
                  </thead>
                  <tbody v-for="(need, key ) in user_needs">
                     <tr>
                         <td>
                             @{{key+1}}
                         </td>
                         <td v-text="need.product_name">

                         </td>
                         <td >
                             <span v-text="need.product_description"></span>
                         </td>
                         <td>
                             <span v-text="need.product_quantity" ></span>
                             <span v-text="need.product_measure_unit" ></span>
                         </td>
                         <td>
                             <span v-text="need.product_type" ></span> - 
                             <span v-text="need.product_sub_types" ></span>
                         </td>
                         <td v-text="need.product_valid_until">
                         </td>
                     </tr>
                  </tbody>
              </table>

          </div>
      </div>
  </div>
</div>

@endsection

@section("vuescript")
<script src="/js/user_profile.js"></script>
@endsection
