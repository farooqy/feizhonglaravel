<template>
<div class="spinner-border text-primary" role="status">
<span class="sr-only">Loading...</span>
</div>
</template>

<script>
module.exports = {
  data: function(){
  console.log('child ready');
  return {'loader':1,'version':1}
  },
  props: ["showLoader"]
}
</script>
