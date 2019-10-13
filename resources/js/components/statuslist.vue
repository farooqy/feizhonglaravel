<template>
<div class="photo-album-item-wrap col-md-6 col-lg-6 mt-2">
  <div class="photo-album-item" data-mh="album-item" >
      <div class="photo-item">
        <img :src="status_image" alt="photo">
        <div class="overlay overlay-dark"></div>
        <a href="#" class="more">
          <svg class="olymp-three-dots-icon">
            <use xlink:href="#olymp-three-dots-icon"></use>
          </svg>
        </a>
        <a href="#" class="post-add-icon">
          <svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
          <span>324</span>
        </a>
        <a href="#" data-toggle="modal" data-target="#open-photo-popup-v2" class="  full-block"></a>
      </div>

      <div class="content">
        <a href="#" class="title h5" > {{status_text | truncate(15, '...')}} </a>
        <span class="sub-title" v-text="status_time"></span>
      </div>

    </div>
</div>
</template>

<script>
module.exports = {
  data: function(){
  console.log('child ready');
  return {'postlist':1,'version':1}
  },
  props:["status_image","status_text", "status_time",
  "status_id", "status_token"],
  filters: {
    truncate: function (text, length, suffix) {
            return text.substring(0, length) + suffix;
    },
  }
}
</script>
