<main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">

  <div class="ui-block" v-if="isLoggedIn()">

    <!-- News Feed Form  -->

    <div class="news-feed-form" v-if="isCompany()">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active inline-items" data-toggle="tab" href="#status_form" role="tab" aria-expanded="true">

            <svg class="olymp-status-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-status-icon"></use></svg>

            <span>Status</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link inline-items" data-toggle="tab" href="#product_form" role="tab" aria-expanded="false">

            <svg class="olymp-multimedia-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-multimedia-icon"></use></svg>

            <span>Product</span>
          </a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">

        <div class="tab-pane" id="product_form" role="tabpanel" aria-expanded="true">
          <div class="card">
            <div class="card-header">
              Adding New Product
            </div>
            <div class="card-body">
              <form class="form" action="" method="post">
                <div class="form-goruplabel-floating ">
                  <label for="product_name" class="label">Product name</label>
                  <input type="text" placeholder="Product name"
                  v-model="Product.product_name"/>
                </div>
                <div class="form-group">
                  <textarea type="text" placeholder="Product description"
                  class="form-control" v-model="Product.product_description">
                  </textarea>
                </div>
                <div class="form-gorup">
                  <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <label for="product_name" class="label"> Price</label>
                        <input type="text" placeholder=" Price"
                         v-model="Product.product_price"/>
                    </div>
                    <div class="col-md-3 col-lg-3">
                      <label for="product_name" class="label">Currency</label>
                      <input type="text" placeholder="Currency"
                       v-model="Product.product_currency"/>
                    </div>
                    <div class="col-md-6 col-lg-6">
                      <label for="product_name" class="label">Measuring unit</label>
                      <input type="text" placeholder="Measuring unit i.e grams"
                       v-model="Product.product_unit"/>
                    </div>
                  </div>
                </div>
                <div class="form-group" v-show="false">
                  <input type="file" name="product_file" ref="product_file"
                  @change="prepareProductFile($event)">
                </div>
                <div class="form-group">
                  <img v-for="file in Product.product_files" :src="file.file_src"
                  class="post_image_preview" :alt="file.alt"
                  style="height:60px;width:60px;
                  background-image:url(olympus_assets/img/danger.png)"
                  @click="removeMe(file.index)"/>
                  <div class="">
                    <span class="hint">Click on the photo to remove it</span>
                  </div>
                </div>

                <div class="add-options-message">
                  <span @click.prevent="$refs.product_file.click()">
                  <i class="fas fa-camera pointer" style="font-size:30px;
                  cursor:pointer"
                  ></i></span>


                  <button class="btn btn-primary btn-md-2"
                  @click.prevent="prepareProduct()" >Post Product</button>

                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="tab-pane active" id="status_form" role="tabpanel" aria-expanded="true">
          <div class="card">
            <div class="card-header">Add New Post</div>
            <div class="card-body">
              <form>
                <div class="author-thumb">
                  <img :src="getHostProfile()" alt="author"
                  style="height:40px; width:40px">
                </div>
                <div class="form-group with-icon label-floating is-empty">
                  <label class="control-label">
                  </label>
                  <textarea class="form-control"
                  placeholder="Share customers with your product / company"
                  v-model="Status.status_content" ></textarea>
                </div>
                <div class="form-group" v-show="false">
                  <input type="file" name="status_file" ref="status_file"
                  @change="prepareStatusFile($event)">
                </div>
                <div class="form-group">
                  <img v-for="file in Status.status_files" :src="file.file_src"
                  class="post_image_preview" :alt="file.alt"
                  style="height:60px;width:60px;
                  background-image:url(olympus_assets/img/danger.png)"
                  @click="removeMe(file.index, 'status')"/>
                  <div class="">
                    <span class="hint">Click on the photo to remove it</span>
                  </div>
                </div>
                <div class="add-options-message">
                  <span @click.prevent="$refs.status_file.click()">
                  <i class="fas fa-camera pointer" style="font-size:30px;
                  cursor:pointer"
                  ></i></span>


                  <button class="btn btn-primary btn-md-2"
                  @click.prevent="preparePostStaus()">Post Status</button>

                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="news-feed-form" v-else="!isCompany()">

      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active inline-items" data-toggle="tab" href="#needForm" role="tab" aria-expanded="true">

            <svg class="olymp-status-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-status-icon"></use></svg>

            <span>Post need</span>
          </a>
        </li>
      </ul>


      <div class="tab-content">

        <div class="tab-pane active" id="needForm" role="tabpanel" aria-expanded="true">
          <div class="card">
            <div class="card-header">What do you need?</div>
            <div class="card-body">
              <div class="form-group">
                <label class="control-label">Product name</label>
                <input class="form-control" placeholder="Product name"
                v-model="needed_product.prod_name"/>
              </div>
              <div class=" row">
                  <div class="col-md-6 col-lg-6 col-xl-6">
                    <label class="control-label">Product Category</label>

                    <select name="company_type" class="select_custom"
                    style="height:60px;"
                    @change="updateSelect($event)" v-model="needed_product.prod_type">
                        <option value="Aerospace industry" selected >Aerospace industry</option>
                        <option value="Agriculture" >Agriculture</option>
                        <option value="Beautify" >Beauty Products</option>
                        <option value="Chemical industry" >Chemical industry</option>
                        <option value="Computer industry" >Computer industry</option>
                        <option value="Construction industry" >Construction industry</option>
                        <option value="Defense industry">Defense industry</option>
                        <option value="Education industry" >Education industry</option>
                        <option value="Energy industry" >Energy industry</option>
                        <option value="Entertainment industry" >Entertainment industry</option>
                        <option value="Financial services industry" >Financial services industry</option>
                        <option value="Food production" >Food production</option>
                        <option value="Health care industry">Health care industry</option>
                        <option value="Hospitality industry" >Information industry</option>
                        <option value="Manufacturing">Manufacturing</option>
                        <option value="Mass media" >Mass media</option>
                        <option value="Mining" >Mining</option>
                        <option value="Telecommunications industry" >Telecommunications industry</option>
                        <option value="Transport industry">Transport industry</option>
                        <option value="Water industry" >Water industry</option>
                        <option value="Direct Selling industry" >Direct Selling industry</option>
                        <option value="Other" >Other</option>
                    </select>
                  </div>
                  <div class="col-md-6 col-lg-6 col-xl-6">
                    <label class="control-label">Subcategory</label>
                    <select  class="select_custom" name="product_sub_types"
                    style="height:60px;" v-model="needed_product.prod_subtype">
                      <option v-for=" type in sub_type_value"
                      :value="type" v-text="type" >
                    </option>
                    </select>
                  </div>


                </div>
              <div class=" row" v-if="customtype">
                <div class="col-md-6 col-lg-6 col-xl-6">
                  <label class="label">Custom product type</label>
                  <input class="form-control" placeholder="Product Type"
                  v-model="needed_product.prod_type"/>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                  <label class="label">Custom product sub type</label>
                  <input class="form-control" placeholder="Product Type"
                  v-model="needed_product.prod_subtype"/>
                </div>
              </div>
              <div class="row">
                <label class="label" style="margin-left:15px;">Product description</label>
                <textarea class="textarea form-control"
                style="resize: none; border: thin solid gray; width: 100%;
                margin-left: 15px; margin-right: 15px;"
                placeholder="Product description"
                v-model="needed_product.prod_description"></textarea>
              </div>
              <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-6">
                  <label class="label">Quantity</label>
                  <input type="number" placeholder="Quantity"
                  v-model="needed_product.prod_quantity"/>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                  <label class="label">Measure unit</label>
                  <input type="text" placeholder="Unit"
                  v-model="needed_product.prod_measure_unit"/>
                </div>
              </div>
              <div class="row">
                <label class="label" style="margin-left:15px">Valid to date?</label>
                <input type="date" placeholder="Required Date"
                v-model="needed_product.prod_valid_until" style="margin-left:15px; margin-right:15px"/>
              </div>
              <div class="row mt-4">
                <button class="btn btn-primary" style="margin-left:15px"
                @click.prevent="userProductNeed()">
                  Request Product
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>

    <!-- ... end News Feed Form  -->
  </div>
  <div class="ui-block" v-else="!isLoggedIn()">
    <div class="card">
      <div class="card-header">
        LOGIN / REGISTER
      </div>
      <div class="card-body">
        In order to post status or product, first <br>
        <a href="/login" class="btn btn-primary">Login</a>

        <a href="/register" class="btn btn-success">Register</a>
      </div>
    </div>
  </div>


  <div class="ui-block">
      <productlist v-for="(statProd, key) in StatusList" v-bind="statProd"
      v-on:submit-comment="submitComment" 
      v-on:is-logged-in="isLoggedIn()"
      v-on:view-product-details="viewProductDetails"
      v-on:view-status-details="viewStatusDetails"></productlist>
  </div>
  <div class="ui-block">
      <viewpostdetails v-bind="product_modal.data" 
      v-if="product_modal.visible"
      v-on:close-postdetail-modal="disMissPostDetailsModal"
      v-on:toggle-bargain-model="toggleBargainModel"></viewpostdetails>
  </div>
  <div class="ui-block">
      <viewpostdetails v-bind="status_modal.data" 
      v-if="status_modal.visible"
      v-on:close-postdetail-modal="disMissPostDetailsModal"></viewpostdetails>
  </div>


    <!-- Load more icon -->
  <a id="load-more-button" href="#" class="btn btn-control btn-more"
  data-load-link="items-to-load.html" data-container="newsfeed-items-grid">
    <svg class="olymp-three-dots-icon">
      <use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
      </use>
    </svg>
  </a>

</main>

<!-- ... end Main Content -->


<!-- Left Sidebar -->

<aside class="col col-xl-3 order-xl-1 col-lg-6 order-lg-2
col-md-6 col-sm-12 col-12">


        <div class="ui-block">
          <div class="ui-block-title">
            <h6 class="title">Trending companies</h6>
            <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
          </div>

          <!-- W-Friend-Pages-Added -->

          <ul class="widget w-friend-pages-added notification-list friend-requests">
            <trendingcompanylist v-for="(comp, key) in trending_list"
            v-bind="comp" >
            </trendingcompanylist>
          </ul>

          <!-- .. end W-Friend-Pages-Added -->
        </div>

  <div class="ui-block">

    <!-- W-Weather -->

    <div class="widget w-wethear">
      <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

      <div class="wethear-now inline-items">
        <div class="temperature-sensor">64°</div>
        <div class="max-min-temperature">
          <span>58°</span>
          <span>76°</span>
        </div>

        <svg class="olymp-weather-partly-sunny-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons-weather.svg#olymp-weather-partly-sunny-icon"></use></svg>
      </div>

      <div class="wethear-now-description">
        <div class="climate">Partly Sunny</div>
        <span>Real Feel: <span>67°</span></span>
        <span>Chance of Rain: <span>49%</span></span>
      </div>

      <ul class="weekly-forecast">

        <li>
          <div class="day">sun</div>
          <svg class="olymp-weather-sunny-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons-weather.svg#olymp-weather-sunny-icon"></use></svg>

          <div class="temperature-sensor-day">60°</div>
        </li>

        <li>
          <div class="day">mon</div>
          <svg class="olymp-weather-partly-sunny-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons-weather.svg#olymp-weather-partly-sunny-icon"></use></svg>
          <div class="temperature-sensor-day">58°</div>
        </li>

        <li>
          <div class="day">tue</div>
          <svg class="olymp-weather-cloudy-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons-weather.svg#olymp-weather-cloudy-icon"></use></svg>

          <div class="temperature-sensor-day">67°</div>
        </li>

        <li>
          <div class="day">wed</div>
          <svg class="olymp-weather-rain-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons-weather.svg#olymp-weather-rain-icon"></use></svg>

          <div class="temperature-sensor-day">70°</div>
        </li>

        <li>
          <div class="day">thu</div>
          <svg class="olymp-weather-storm-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons-weather.svg#olymp-weather-storm-icon"></use></svg>

          <div class="temperature-sensor-day">58°</div>
        </li>

        <li>
          <div class="day">fri</div>
          <svg class="olymp-weather-snow-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons-weather.svg#olymp-weather-snow-icon"></use></svg>

          <div class="temperature-sensor-day">68°</div>
        </li>

        <li>
          <div class="day">sat</div>

          <svg class="olymp-weather-wind-icon-header"><use xlink:href="/olympus_assets/svg-icons/sprites/icons-weather.svg#olymp-weather-wind-icon-header"></use></svg>

          <div class="temperature-sensor-day">65°</div>
        </li>

      </ul>

      <div class="date-and-place">
        <h5 class="date" >Saturday, March 26th</h5>
        <div class="place" >Nanjing, China</div>
      </div>

    </div>

    <!-- W-Weather -->
  </div>

  <div class="ui-block">

    <!-- W-Calendar -->

    <div class="w-calendar calendar-container">
      <div class="calendar">
        <header>
          <h6 class="month">March 2017</h6>
          <a class="calendar-btn-prev fas fa-angle-left" href="#"></a>
          <a class="calendar-btn-next fas fa-angle-right" href="#"></a>
        </header>
        <table>
          <thead>
          <tr><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td><td>San</td></tr>
          </thead>
          <tbody>
          <tr>
            <td data-month="12" data-day="1">1</td>
            <td data-month="12" data-day="2" class="event-uncomplited event-complited">
              2
            </td>
            <td data-month="12" data-day="3">3</td>
            <td data-month="12" data-day="4">4</td>
            <td data-month="12" data-day="5">5</td>
            <td data-month="12" data-day="6">6</td>
            <td data-month="12" data-day="7">7</td>
          </tr>
          <tr>
            <td data-month="12" data-day="8">8</td>
            <td data-month="12" data-day="9">9</td>
            <td data-month="12" data-day="10" class="event-complited">10</td>
            <td data-month="12" data-day="11">11</td>
            <td data-month="12" data-day="12">12</td>
            <td data-month="12" data-day="13">13</td>
            <td data-month="12" data-day="14">14</td>
          </tr>
          <tr>
            <td data-month="12" data-day="15" class="event-complited-2">15</td>
            <td data-month="12" data-day="16">16</td>
            <td data-month="12" data-day="17">17</td>
            <td data-month="12" data-day="18">18</td>
            <td data-month="12" data-day="19">19</td>
            <td data-month="12" data-day="20">20</td>
            <td data-month="12" data-day="21">21</td>
          </tr>
          <tr>
            <td data-month="12" data-day="22">22</td>
            <td data-month="12" data-day="23">23</td>
            <td data-month="12" data-day="24">24</td>
            <td data-month="12" data-day="25">25</td>
            <td data-month="12" data-day="26">26</td>
            <td data-month="12" data-day="27">27</td>
            <td data-month="12" data-day="28" class="event-uncomplited">28</td>
          </tr>
          <tr>
            <td data-month="12" data-day="29">29</td>
            <td data-month="12" data-day="30">30</td>
            <td data-month="12" data-day="31">31</td>
          </tr>
          </tbody>
        </table>
        <div class="list">

          <div id="accordion-1" role="tablist" aria-multiselectable="true" class="day-event" data-month="12" data-day="2">
            <div class="ui-block-title ui-block-title-small">
              <h6 class="title">TODAY’S EVENTS</h6>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingOne-1">
                <div class="event-time">
                  <span class="circle"></span>
                  <time datetime="2004-07-24T18:18">9:00am</time>
                  <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1" aria-expanded="true" aria-controls="collapseOne-1">
                    Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                  </a>
                </h5>
              </div>

              <div id="collapseOne-1" class="collapse" role="tabpanel" >
                <div class="card-body">
                  Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
                </div>
                <div class="place inline-items">
                  <svg class="olymp-add-a-place-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
                  <span>Daydreamz Agency</span>
                </div>

                <ul class="friends-harmonic inline-items">
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic5.jpg" alt="friend">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic10.jpg" alt="friend">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic7.jpg" alt="friend">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic8.jpg" alt="friend">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic2.jpg" alt="friend">
                    </a>
                  </li>
                  <li class="with-text">
                    Will Assist
                  </li>
                </ul>
              </div>
            </div>

            <div class="card">
              <div class="card-header" role="tab" id="headingTwo-1">
                <div class="event-time">
                  <span class="circle"></span>
                  <time datetime="2004-07-24T18:18">9:00am</time>
                  <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo-1" aria-expanded="true" aria-controls="collapseTwo-1">
                    Send the new “Olympus” project files to the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                  </a>
                </h5>
              </div>

              <div id="collapseTwo-1" class="collapse" role="tabpanel">
                <div class="card-body">
                  Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
                </div>
              </div>

            </div>

            <div class="card">
              <div class="card-header" role="tab" id="headingThree-1">
                <div class="event-time">
                  <span class="circle"></span>
                  <time datetime="2004-07-24T18:18">6:30am</time>
                  <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
                <h5 class="mb-0">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false">
                    Take Querty to the Veterinarian
                  </a>
                </h5>
              </div>
              <div class="place inline-items">
                <svg class="olymp-add-a-place-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
                <span>Daydreamz Agency</span>
              </div>
            </div>

            <a href="#" class="check-all">Check all your Events</a>
          </div>

          <div id="accordion-2" role="tablist" aria-multiselectable="true" class="day-event" data-month="12" data-day="10">
            <div class="ui-block-title ui-block-title-small">
              <h6 class="title">TODAY’S EVENTS</h6>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingOne-2">
                <div class="event-time">
                  <span class="circle"></span>
                  <time datetime="2004-07-24T18:18">9:00am</time>
                  <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">
                    Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                  </a>
                </h5>
              </div>

              <div id="collapseOne-2" class="collapse" role="tabpanel">
                <div class="card-body">
                  Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
                </div>
                <div class="place inline-items">
                  <svg class="olymp-add-a-place-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
                  <span>Daydreamz Agency</span>
                </div>

                <ul class="friends-harmonic inline-items">
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic5.jpg" alt="friend">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic10.jpg" alt="friend">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic7.jpg" alt="friend">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic8.jpg" alt="friend">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic2.jpg" alt="friend">
                    </a>
                  </li>
                  <li class="with-text">
                    Will Assist
                  </li>
                </ul>
              </div>

            </div>

            <a href="#" class="check-all">Check all your Events</a>
          </div>

          <div id="accordion-3" role="tablist" aria-multiselectable="true" class="day-event" data-month="12" data-day="15">
            <div class="ui-block-title ui-block-title-small">
              <h6 class="title">TODAY’S EVENTS</h6>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingOne-3">
                <div class="event-time">
                  <span class="circle"></span>
                  <time datetime="2004-07-24T18:18">9:00am</time>
                  <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-3" aria-expanded="true" aria-controls="collapseOne-3">
                    Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                  </a>
                </h5>
              </div>

              <div id="collapseOne-3" class="collapse" role="tabpanel">
                <div class="card-body">
                  Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
                </div>

                <div class="place inline-items">
                  <svg class="olymp-add-a-place-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
                  <span>Daydreamz Agency</span>
                </div>

                <ul class="friends-harmonic inline-items">
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic5.jpg" alt="friend">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic10.jpg" alt="friend">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic7.jpg" alt="friend">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic8.jpg" alt="friend">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic2.jpg" alt="friend">
                    </a>
                  </li>
                  <li class="with-text">
                    Will Assist
                  </li>
                </ul>
              </div>

            </div>

            <div class="card">
              <div class="card-header" role="tab" id="headingTwo-3">
                <div class="event-time">
                  <span class="circle"></span>
                  <time datetime="2004-07-24T18:18">12:00pm</time>
                  <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo-3" aria-expanded="true" aria-controls="collapseTwo-3">
                    Send the new “Olympus” project files to the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                  </a>
                </h5>
              </div>

              <div id="collapseTwo-3" class="collapse" role="tabpanel" >
                <div class="card-body">
                  Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
                </div>
              </div>

            </div>

            <div class="card">
              <div class="card-header" role="tab" id="headingThree-3">
                <div class="event-time">
                  <span class="circle"></span>
                  <time datetime="2004-07-24T18:18">6:30pm</time>
                  <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
                <h5 class="mb-0">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#" aria-expanded="false">
                    Take Querty to the Veterinarian
                  </a>
                </h5>
              </div>
              <div class="place inline-items">
                <svg class="olymp-add-a-place-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
                <span>Daydreamz Agency</span>
              </div>
            </div>

            <a href="#" class="check-all">Check all your Events</a>
          </div>

          <div id="accordion-4" role="tablist" aria-multiselectable="true" class="day-event" data-month="12" data-day="28">
            <div class="ui-block-title ui-block-title-small">
              <h6 class="title">TODAY’S EVENTS</h6>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingOne-4">
                <div class="event-time">
                  <span class="circle"></span>
                  <time datetime="2004-07-24T18:18">9:00am</time>
                  <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
                </div>
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-4" aria-expanded="true" aria-controls="collapseOne-4">
                    Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
                  </a>
                </h5>
              </div>

              <div id="collapseOne-4" class="collapse" role="tabpanel" aria-labelledby="headingOne-4">
                <div class="card-body">
                  Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the new design project we have been working on. Cheers!
                </div>
                <div class="place inline-items">
                  <svg class="olymp-add-a-place-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
                  <span>Daydreamz Agency</span>
                </div>

                <ul class="friends-harmonic inline-items">
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic5.jpg" alt="friend">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic10.jpg" alt="friend">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic7.jpg" alt="friend">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic8.jpg" alt="friend">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="/olympus_assets/img/friend-harmonic2.jpg" alt="friend">
                    </a>
                  </li>
                  <li class="with-text">
                    Will Assist
                  </li>
                </ul>
              </div>

            </div>

            <a href="#" class="check-all">Check all your Events</a>
          </div>

        </div>
      </div>
    </div>

    <!-- ... end W-Calendar -->
  </div>

</aside>

<!-- ... end Left Sidebar -->


<!-- Right Sidebar -->

<aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-12">

  <div class="ui-block">

    <!-- W-Birthsday-Alert -->
    <div class="ui-block">
      <div class="ui-block-title">
        <h6 class="title">Menu</h6>
        <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
      </div>

      <div class="ui-block-content">

        
        <!-- Widget List -->
        
        <div class="widget w-list">
          <ul>
            <li >
              <a href="/" target="_blank"><i class="fas fa-home mr-3"></i> Home</a>
            </li>
            <li>

              <a href="/comp/needs" target="_blank" v-if="isCompany()"><i class="fab fa-connectdevelop mr-3"></i>View Demands</a>
              <a href="/user/needs" target="_blank" v-else><i class="fab fa-connectdevelop mr-3"></i>My Needs</a>
            </li>
            <li>
              <a href="/profile" target="_blank"><i class="fas fa-user mr-3"></i>Profile</a>
            </li>
            <li>
              <a href="https://atoc.drongo.tech" target="_blank"> <i class="far fa-address-card mr-3 "></i>About Us</i>
            </li>
          </ul>
        </div>
        
        <!-- ... end Widget List -->

      </div>

    </div>
    <div class="widget w-build-fav">
				
      <a href="#" class="more"><i class="fas fa-more"></i></a>
    
      <div class="widget-thumb">
        <img src="/img/growth_icon.png" alt="notebook" style="height:70px">
      </div>
    
      <div class="content">
        <strong><u><span v-text="Demands.demand_text">Company of the week</span></u></strong>
         <a href="#" class="h4 title" v-text="Demands.demand_title">Drongo LLC</a>
         <p v-text="Demands.number_demands+Demands.demand_served">Drongo LLC has served 123 Customers in 7 days</p>
      </div>
    </div>

    <!-- ... end W-Birthsday-Alert -->			</div>

  <div class="ui-block">
    <div class="ui-block-title">
      <h6 class="title">Suggested Companies</h6>
      <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
    </div>



    <!-- W-Action -->

    <ul class="widget w-friend-pages-added notification-list friend-requests">
      <trendingcompanylist v-for="comp in trending_list"
      v-bind="comp">
      </trendingcompanylist>

    </ul>

    <!-- ... end W-Action -->
  </div>

  <div class="ui-block">

    <div class="ui-block-title">
      <h6 class="title">Activity Feed</h6>
      <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
    </div>


    <!-- W-Activity-Feed -->

    <ul class="widget w-activity-feed notification-list">
      <!-- <li>
        <div class="author-thumb">
          <img src="/olympus_assets/img/avatar49-sm.jpg" alt="author">
        </div>
        <div class="notification-event">
          <a href="#" class="h6 notification-friend">Marina Polson</a> commented on Jason Mark’s <a href="#" class="notification-link">photo.</a>.
          <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 mins ago</time></span>
        </div>
      </li> -->
    </ul>

    <!-- .. end W-Activity-Feed -->
  </div>


  <div class="ui-block">


    <!-- W-Action -->

    <div class="widget w-action">

      <img src="/olympus_assets/img/logo.png" alt="Olympus">
      <div class="content">
        <h4 class="title">PACKAGE PLAN</h4>
        <span>COMING SOON WITH A NEW PACKAGE PLAN!</span>
        <a href="#" class="btn btn-bg-secondary btn-md">Read Here!</a>
      </div>
    </div>

    <!-- ... end W-Action -->
  </div>

</aside>

<!-- ... end Right Sidebar -->
