

    <div class="tab-pane active" id="top_companies" role="tabpanel" aria-expanded="true">
      <div class="card">
        <div class="card-header" v-if="isCompany()"> You want your company at the front page?
          <a href="/comp/subscription" class="btn btn-success "target="_blank">
            <h5 style="color: white;height: 19px;line-height: 25px;">Yes,put my company at the front page</h5>
          </a>
        </div>
        <div class="card-body">

            <div id="topCompaniesCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#topCompaniesCarousel" :data-slide-to="ckey" :class="{'active': ckey ===0}"
                  v-for="(comp, ckey) in featuredCompanies"></li>
                  <li data-target="#topCompaniesCarousel" :data-slide-to="ckey+1"></li>
                  <li data-target="#topCompaniesCarousel" :data-slide-to="ckey+2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item " v-for="(comp, ckey) in featuredCompanies" :key="ckey"
                   @click.prevent="" :class="{'active': ckey === 0}">
                    <img class="d-block w-100" :src="comp.plan_uploads.file_url" :alt="comp.comp_data.comp_name">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/atoc_assets/images/featured_image_2.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="/atoc_assets/images/featured_image_3.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#topCompaniesCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#topCompaniesCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>

        </div>
      </div>
    </div>