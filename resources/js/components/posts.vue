<template>
<div class="card mr-2 mt-3" style="width: 11rem;">
  <img class="card-img-top" :src="post_image" alt="Card image cap" height="130px">
  <div class="card-body">
    <div class=""><p class="card-text" >{{post_text | truncate(30, '...')}}</p></div>

  </div>
</div>
</template>

<script>
module.exports = {
  data: function(){
  console.log('child ready');
  return {'loader':1,'version':1}
  },
  props:["post_title","post_text", "post_image"],
  filters: {
    truncate: function (text, length, suffix) {
            return text.substring(0, length) + suffix;
    },
  }
}
</script>
