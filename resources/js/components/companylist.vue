<template>

    <!-- Post -->

    <article class="hentry blog-post col-md-4 col-lg-4"
    style="border-top: thin solid gray;padding-top: 9px;">

      <div class="post-thumb">
        <img :src="comp_logo" alt="photo" >
      </div>

      <div class="post-content">
        <a :href="getCategoryLink()" class="post-category bg-blue-light"
        style="fon-size:20px">
          {{comp_type}}
        </a>
        <a :href="getCompLink()" class="h4 post-title">
          {{comp_name}} </a>


        <div class="post-additional-info inline-items">

          <ul class="friends-harmonic">
            <li>
              <a href="#">
                <img src="/olympus_assets/img/icon-chat27.png" alt="icon">
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/olympus_assets/img/icon-chat2.png" alt="icon">
              </a>
            </li>
          </ul>
          <div class="names-people-likes">
            26
          </div>

          <div class="comments-shared">
            <a href="#" class="post-add-icon inline-items">
              <svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
              <span>0</span>
            </a>
          </div>

        </div>
      </div>

    </article>

</template>


<script>
module.exports = {
  data: function(){
  console.log('child ready');
  return {'companylist':1,'version':1}
  },
  props:["comp_name","comp_logo", "comp_type","is_verified",
  "comp_rate", "comp_id", "comp_token"],
  filters: {
    truncate: function (text, length, suffix) {
            return text.substring(0, length) + suffix;
    },
  },
  methods: {
    getCategoryLink()
    {
      return "/comp/category/"+this.comp_type;
    },
    getCompLink()
    {
      return "/comp/view/"+this.comp_id+"/"+this.comp_token;
    }
  }
}
</script>
