<template>
<div class="card mr-2 mt-3" style="width: 11rem;">
  <img class="card-img-top" :src="post_image" alt="Card image cap" height="130px">
  <div class="card-body">
    <div class=""><p class="card-text" >{{truncate(post_text )}}</p></div>

  </div>
  <div class="card-footer" style=" font-size: 10px; text-align: center;
    height: 20px; line-height: 0px;">
    <span v-text="post_time"></span>
  </div>
</div>
</template>

<script>
module.exports = {
  data: function(){
  console.log('child ready');
  return {'loader':1,'version':1}
  },
  props:["post_title","post_text", "post_image", "post_time"],
  filters: {
    // truncate: function (text, length, suffix) {
    //         return text.substring(0, length) + suffix;
    // },
    },
    methods: {

        truncate(text)
        {
            if(text.length > 150)
                    return text.substring(0,150) + '...';
            return text;
        },
    }
}
</script>
