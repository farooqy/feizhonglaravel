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
          Welcome  <span v-text="Company.company_name">John</span>
        </h4>
        <p class="text-white mt-0 mb-5">
          This is your profile page.
          You can see the progress you've made with your work and
          manage your enquries</p>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid mt--9">
  <div class="row">
    <div class="col-md - 8 col-lg-8">
      <form class="card bg-white">
        <div class="card-header">
          Add new post
        </div>
        <div class="card-body">
          <div class="row">
            <textarea v-model="post_text" class="textarea col-md-8 col-lg-8"
            rows="3" style="resize:none; height:80px"></textarea>
            <div class="col-md-4 col-lg-4">
              <img v-for="image in post_images" :src="image" height="45px"/>
            </div>

          </div>
          <div class="row mt-1">
            <i class="fas fa-cloud-upload-alt ml-2" style="font-size:40px"></i>
            <button class="btn btn-primary ml-3">Post Status</button>
          </div>
        </div>

      </form>
    </div>
  </div>
  <div class="row mt-6">
    <div class="card col-xl-12 col-md-12 col-md-12" >
      <div class="card-header">Your posts</div>
      <div class="card-body" >
        <div class="row" style="">
          <posts v-for="post in user_posts" v-bind="post"></posts>
        </div>
      </div>
    </div>
  </div>
</div>
