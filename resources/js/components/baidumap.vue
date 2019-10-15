<template>
  <baidu-map class="map" center="北京">
    <bm-map-type :map-types="['BMAP_NORMAL_MAP', 'BMAP_HYBRID_MAP']"
    anchor="BMAP_ANCHOR_TOP_LEFT"></bm-map-type>
  </baidu-map>
</template>

<style>
.bm-view , .map{
  width: 100%;
  height: 300px;
}
</style>


module.exports = {
  data: function(){
  console.log('child ready');
  return {'BaiduMap':1,'version':2}
  },
}
</script>
