<main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">

    <div class="ui-block" v-if="isLoggedIn()">

        <!-- News Feed Form  -->

        <div class="news-feed-form" v-if="isCompany()">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active inline-items" data-toggle="tab" href="#top_companies" role="tab"
                        aria-expanded="true">

                        <svg class="olymp-status-icon">
                            <use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-status-icon"></use>
                        </svg>

                        <span>Top Companies</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link inline-items" data-toggle="tab" href="#status_form" role="tab"
                        aria-expanded="false">

                        <svg class="olymp-status-icon">
                            <use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-status-icon"></use>
                        </svg>

                        <span>Status</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link inline-items" data-toggle="tab" href="#product_form" role="tab"
                        aria-expanded="false">

                        <svg class="olymp-multimedia-icon">
                            <use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-multimedia-icon"></use>
                        </svg>

                        <span>Product</span>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->


            <div class="tab-content">

                @include('atoclayout.featured_companies')
                <div class="tab-pane" id="product_form" role="tabpanel" aria-expanded="false">
                    @include('atoclayout.comp.product_form')
                </div>

                <div class="tab-pane" id="status_form" role="tabpanel" aria-expanded="false">
                    <div class="card">
                        <div class="card-header">Post status</div>
                        @include('atoclayout.comp.status_form')
                    </div>
                </div>

            </div>
        </div>
        <div class="news-feed-form" v-else-if="!isCompany()">

            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active inline-items" data-toggle="tab" href="#top_companies" role="tab"
                        aria-expanded="true">

                        <svg class="olymp-status-icon">
                            <use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-status-icon"></use>
                        </svg>

                        <span>Top Companies</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link inline-items" data-toggle="tab" href="#needForm" role="tab" aria-expanded="true">

                        <svg class="olymp-status-icon">
                            <use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-status-icon"></use>
                        </svg>

                        <span>Post need</span>
                    </a>
                </li>
            </ul>


            <div class="tab-content">
                @include('atoclayout.featured_companies')
                <div class="tab-pane" id="needForm" role="tabpanel" aria-expanded="true">
                    @include('atoclayout.user.need_form')
                </div>
            </div>


        </div>


        <!-- ... end News Feed Form  -->
    </div>
    <div class="news-feed-form" v-else>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active inline-items" data-toggle="tab" href="#top_companies" role="tab"
                    aria-expanded="true">

                    <svg class="olymp-status-icon">
                        <use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-status-icon"></use>
                    </svg>

                    <span>Top Companies</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            @include('atoclayout.featured_companies')

        </div>
        <div class="ui-block">
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
    </div>



    <div class="ui-block">
        <productlist v-for="(statProd, skey) in StatusList" v-bind="statProd" v-on:submit-comment="submitComment"
            v-on:is-logged-in="isLoggedIn()" v-on:view-product-details="viewProductDetails" :key="skey"
            v-on:view-status-details="viewStatusDetails"></productlist>
    </div>
    <div class="ui-block">
        <viewpostdetails v-bind="product_modal.data" v-if="product_modal.visible"
            v-on:close-postdetail-modal="disMissPostDetailsModal" v-on:toggle-bargain-model="toggleBargainModel">
        </viewpostdetails>
    </div>
    <div class="ui-block">
        <viewpostdetails v-bind="status_modal.data" v-if="status_modal.visible"
            v-on:close-postdetail-modal="disMissPostDetailsModal"></viewpostdetails>
    </div>
    <div class="ui-block bargainmodel">
        <bargainmodel v-bind="BargainModel" v-if="BargainModel.visible"
            v-on:demand-quotation-ready="demandQuotationReady"
            v-on:close-quotation-modal="BargainModel.resetBargainModel()"></bargainmodel>
    </div>


    <!-- Load more icon -->
    <a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html"
        data-container="newsfeed-items-grid">
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
            <a href="#" class="more"><svg class="olymp-three-dots-icon">
                    <use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                </svg></a>
        </div>

        <!-- W-Friend-Pages-Added -->

        <ul class="widget w-friend-pages-added notification-list friend-requests">
            <trendingcompanylist v-for="(comp, key) in trending_list" v-bind="comp">
            </trendingcompanylist>
        </ul>

        <!-- .. end W-Friend-Pages-Added -->
    </div>

    <div class="ui-block">

        <!-- W-Weather -->

        <div class="widget w-wethear">
            <a href="#" class="more"><svg class="olymp-three-dots-icon">
                    <use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                </svg></a>

            <div class="wethear-now inline-items">
                <div class="temperature-sensor">64°</div>
                <div class="max-min-temperature">
                    <span>58°</span>
                    <span>76°</span>
                </div>

                <svg class="olymp-weather-partly-sunny-icon">
                    <use
                        xlink:href="/olympus_assets/svg-icons/sprites/icons-weather.svg#olymp-weather-partly-sunny-icon">
                    </use>
                </svg>
            </div>

            <div class="wethear-now-description">
                <div class="climate">Partly Sunny</div>
                <span>Real Feel: <span>67°</span></span>
                <span>Chance of Rain: <span>49%</span></span>
            </div>

            <ul class="weekly-forecast">

                <li>
                    <div class="day">sun</div>
                    <svg class="olymp-weather-sunny-icon">
                        <use xlink:href="/olympus_assets/svg-icons/sprites/icons-weather.svg#olymp-weather-sunny-icon">
                        </use>
                    </svg>

                    <div class="temperature-sensor-day">60°</div>
                </li>

                <li>
                    <div class="day">mon</div>
                    <svg class="olymp-weather-partly-sunny-icon">
                        <use
                            xlink:href="/olympus_assets/svg-icons/sprites/icons-weather.svg#olymp-weather-partly-sunny-icon">
                        </use>
                    </svg>
                    <div class="temperature-sensor-day">58°</div>
                </li>

                <li>
                    <div class="day">tue</div>
                    <svg class="olymp-weather-cloudy-icon">
                        <use xlink:href="/olympus_assets/svg-icons/sprites/icons-weather.svg#olymp-weather-cloudy-icon">
                        </use>
                    </svg>

                    <div class="temperature-sensor-day">67°</div>
                </li>

                <li>
                    <div class="day">wed</div>
                    <svg class="olymp-weather-rain-icon">
                        <use xlink:href="/olympus_assets/svg-icons/sprites/icons-weather.svg#olymp-weather-rain-icon">
                        </use>
                    </svg>

                    <div class="temperature-sensor-day">70°</div>
                </li>

                <li>
                    <div class="day">thu</div>
                    <svg class="olymp-weather-storm-icon">
                        <use xlink:href="/olympus_assets/svg-icons/sprites/icons-weather.svg#olymp-weather-storm-icon">
                        </use>
                    </svg>

                    <div class="temperature-sensor-day">58°</div>
                </li>

                <li>
                    <div class="day">fri</div>
                    <svg class="olymp-weather-snow-icon">
                        <use xlink:href="/olympus_assets/svg-icons/sprites/icons-weather.svg#olymp-weather-snow-icon">
                        </use>
                    </svg>

                    <div class="temperature-sensor-day">68°</div>
                </li>

                <li>
                    <div class="day">sat</div>

                    <svg class="olymp-weather-wind-icon-header">
                        <use
                            xlink:href="/olympus_assets/svg-icons/sprites/icons-weather.svg#olymp-weather-wind-icon-header">
                        </use>
                    </svg>

                    <div class="temperature-sensor-day">65°</div>
                </li>

            </ul>

            <div class="date-and-place">
                <h5 class="date">Saturday, March 26th</h5>
                <div class="place">Nanjing, China</div>
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
                        <tr>
                            <td>Mon</td>
                            <td>Tue</td>
                            <td>Wed</td>
                            <td>Thu</td>
                            <td>Fri</td>
                            <td>Sat</td>
                            <td>San</td>
                        </tr>
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

                    <div id="accordion-1" role="tablist" aria-multiselectable="true" class="day-event" data-month="12"
                        data-day="2">
                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">TODAY’S EVENTS</h6>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne-1">
                                <div class="event-time">
                                    <span class="circle"></span>
                                    <time datetime="2004-07-24T18:18">9:00am</time>
                                    <a href="#" class="more"><svg class="olymp-three-dots-icon">
                                            <use
                                                xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
                                            </use>
                                        </svg></a>
                                </div>
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-1"
                                        aria-expanded="true" aria-controls="collapseOne-1">
                                        Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon">
                                            <use
                                                xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon">
                                            </use>
                                        </svg>
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseOne-1" class="collapse" role="tabpanel">
                                <div class="card-body">
                                    Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a
                                    little more about the new design project we have been working on. Cheers!
                                </div>
                                <div class="place inline-items">
                                    <svg class="olymp-add-a-place-icon">
                                        <use
                                            xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-add-a-place-icon">
                                        </use>
                                    </svg>
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
                                    <a href="#" class="more"><svg class="olymp-three-dots-icon">
                                            <use
                                                xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
                                            </use>
                                        </svg></a>
                                </div>
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo-1"
                                        aria-expanded="true" aria-controls="collapseTwo-1">
                                        Send the new “Olympus” project files to the Agency<svg
                                            class="olymp-dropdown-arrow-icon">
                                            <use
                                                xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon">
                                            </use>
                                        </svg>
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseTwo-1" class="collapse" role="tabpanel">
                                <div class="card-body">
                                    Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a
                                    little more about the new design project we have been working on. Cheers!
                                </div>
                            </div>

                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree-1">
                                <div class="event-time">
                                    <span class="circle"></span>
                                    <time datetime="2004-07-24T18:18">6:30am</time>
                                    <a href="#" class="more"><svg class="olymp-three-dots-icon">
                                            <use
                                                xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
                                            </use>
                                        </svg></a>
                                </div>
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#"
                                        aria-expanded="false">
                                        Take Querty to the Veterinarian
                                    </a>
                                </h5>
                            </div>
                            <div class="place inline-items">
                                <svg class="olymp-add-a-place-icon">
                                    <use
                                        xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-add-a-place-icon">
                                    </use>
                                </svg>
                                <span>Daydreamz Agency</span>
                            </div>
                        </div>

                        <a href="#" class="check-all">Check all your Events</a>
                    </div>

                    <div id="accordion-2" role="tablist" aria-multiselectable="true" class="day-event" data-month="12"
                        data-day="10">
                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">TODAY’S EVENTS</h6>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne-2">
                                <div class="event-time">
                                    <span class="circle"></span>
                                    <time datetime="2004-07-24T18:18">9:00am</time>
                                    <a href="#" class="more"><svg class="olymp-three-dots-icon">
                                            <use
                                                xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
                                            </use>
                                        </svg></a>
                                </div>
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-2"
                                        aria-expanded="true" aria-controls="collapseOne-2">
                                        Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon">
                                            <use
                                                xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon">
                                            </use>
                                        </svg>
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseOne-2" class="collapse" role="tabpanel">
                                <div class="card-body">
                                    Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a
                                    little more about the new design project we have been working on. Cheers!
                                </div>
                                <div class="place inline-items">
                                    <svg class="olymp-add-a-place-icon">
                                        <use
                                            xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-add-a-place-icon">
                                        </use>
                                    </svg>
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

                    <div id="accordion-3" role="tablist" aria-multiselectable="true" class="day-event" data-month="12"
                        data-day="15">
                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">TODAY’S EVENTS</h6>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne-3">
                                <div class="event-time">
                                    <span class="circle"></span>
                                    <time datetime="2004-07-24T18:18">9:00am</time>
                                    <a href="#" class="more"><svg class="olymp-three-dots-icon">
                                            <use
                                                xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
                                            </use>
                                        </svg></a>
                                </div>
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-3"
                                        aria-expanded="true" aria-controls="collapseOne-3">
                                        Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon">
                                            <use
                                                xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon">
                                            </use>
                                        </svg>
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseOne-3" class="collapse" role="tabpanel">
                                <div class="card-body">
                                    Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a
                                    little more about the new design project we have been working on. Cheers!
                                </div>

                                <div class="place inline-items">
                                    <svg class="olymp-add-a-place-icon">
                                        <use
                                            xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-add-a-place-icon">
                                        </use>
                                    </svg>
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
                                    <a href="#" class="more"><svg class="olymp-three-dots-icon">
                                            <use
                                                xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
                                            </use>
                                        </svg></a>
                                </div>
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo-3"
                                        aria-expanded="true" aria-controls="collapseTwo-3">
                                        Send the new “Olympus” project files to the Agency<svg
                                            class="olymp-dropdown-arrow-icon">
                                            <use
                                                xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon">
                                            </use>
                                        </svg>
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseTwo-3" class="collapse" role="tabpanel">
                                <div class="card-body">
                                    Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a
                                    little more about the new design project we have been working on. Cheers!
                                </div>
                            </div>

                        </div>

                        <div class="card">
                            <div class="card-header" role="tab" id="headingThree-3">
                                <div class="event-time">
                                    <span class="circle"></span>
                                    <time datetime="2004-07-24T18:18">6:30pm</time>
                                    <a href="#" class="more"><svg class="olymp-three-dots-icon">
                                            <use
                                                xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
                                            </use>
                                        </svg></a>
                                </div>
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#"
                                        aria-expanded="false">
                                        Take Querty to the Veterinarian
                                    </a>
                                </h5>
                            </div>
                            <div class="place inline-items">
                                <svg class="olymp-add-a-place-icon">
                                    <use
                                        xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-add-a-place-icon">
                                    </use>
                                </svg>
                                <span>Daydreamz Agency</span>
                            </div>
                        </div>

                        <a href="#" class="check-all">Check all your Events</a>
                    </div>

                    <div id="accordion-4" role="tablist" aria-multiselectable="true" class="day-event" data-month="12"
                        data-day="28">
                        <div class="ui-block-title ui-block-title-small">
                            <h6 class="title">TODAY’S EVENTS</h6>
                        </div>
                        <div class="card">
                            <div class="card-header" role="tab" id="headingOne-4">
                                <div class="event-time">
                                    <span class="circle"></span>
                                    <time datetime="2004-07-24T18:18">9:00am</time>
                                    <a href="#" class="more"><svg class="olymp-three-dots-icon">
                                            <use
                                                xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon">
                                            </use>
                                        </svg></a>
                                </div>
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne-4"
                                        aria-expanded="true" aria-controls="collapseOne-4">
                                        Breakfast at the Agency<svg class="olymp-dropdown-arrow-icon">
                                            <use
                                                xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon">
                                            </use>
                                        </svg>
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseOne-4" class="collapse" role="tabpanel" aria-labelledby="headingOne-4">
                                <div class="card-body">
                                    Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a
                                    little more about the new design project we have been working on. Cheers!
                                </div>
                                <div class="place inline-items">
                                    <svg class="olymp-add-a-place-icon">
                                        <use
                                            xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-add-a-place-icon">
                                        </use>
                                    </svg>
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
                <a href="#" class="more"><svg class="olymp-three-dots-icon">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                    </svg></a>
            </div>

            <div class="ui-block-content">


                <!-- Widget List -->

                <div class="widget w-list">
                    <ul>
                        <li>
                            <a href="/" target="_blank"><i class="fas fa-home mr-3"></i> Home</a>
                        </li>
                        <li>

                            <a href="/comp/needs" target="_blank" v-if="isCompany()"><i
                                    class="fab fa-connectdevelop mr-3"></i>View Demands</a>
                            <a href="/user/needs" target="_blank" v-else><i class="fab fa-connectdevelop mr-3"></i>My
                                Needs</a>
                        </li>
                        <li>
                            <a href="/profile" target="_blank"><i class="fas fa-user mr-3"></i>Profile</a>
                        </li>
                        <li>
                            <a href="https://atoc.drongo.tech" target="_blank"> <i
                                    class="far fa-address-card mr-3 "></i>About Us</i>
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
                <p v-text="Demands.number_demands+Demands.demand_served">Drongo LLC has served 123 Customers in 7 days
                </p>
            </div>
        </div>

        <!-- ... end W-Birthsday-Alert -->
    </div>

    <div class="ui-block">
        <div class="ui-block-title">
            <h6 class="title">Suggested Companies</h6>
            <a href="#" class="more"><svg class="olymp-three-dots-icon">
                    <use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                </svg></a>
        </div>



        <!-- W-Action -->

        <ul class="widget w-friend-pages-added notification-list friend-requests">
            <trendingcompanylist v-for="comp in trending_list" v-bind="comp">
            </trendingcompanylist>

        </ul>

        <!-- ... end W-Action -->
    </div>

    <div class="ui-block">

        <div class="ui-block-title">
            <h6 class="title">Activity Feed</h6>
            <a href="#" class="more"><svg class="olymp-three-dots-icon">
                    <use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                </svg></a>
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
