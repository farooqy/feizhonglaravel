@extends("atoclayout.profile")

@section("host_menu")

@include("atoclayout.user.user_menu")
@endsection

@section("body")


<div class="container-fluid">
    <div class="row" style="background-color: #3f4257;height: 70px;">

    </div>
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
                      <th>
                          Action
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
                         <td>
                             <a class="btn btn-primary"
                             @click.prevent="getNeedMatches(need.id,need.need_token)">
                                 Get Companies
                             </a>
                         </td>
                     </tr>
                  </tbody>
              </table>

          </div>
      </div>
  </div>
</div>
<div class="">

    <userneeds v-bind="needs_modal" v-if="needs_modal.visible"></userneeds>
</div>
@endsection

@section("vuescript")
<script src="/js/user_profile.js"></script>
@endsection
