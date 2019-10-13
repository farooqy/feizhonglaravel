<template>

  <li class="inline-items">
    <div class="author-thumb">
      <img :src="company_logo" alt="author" style="height:35px; width:35px;">
    </div>
    <div class="notification-event">
      <a :href="'/comp/view/'+this.company_id+'/'+this.company_token" class="h6 notification-friend"
      v-text="company_name"></a>
      <span class="chat-message-item"> {{company_type}} / Bar</span>
    </div>
    <span class="notification-icon" data-toggle="tooltip" data-placement="top"
      data-original-title="View company">
      <a :href="'/comp/view/'+this.company_id+'/'+this.company_token">
        view
      </a>
    </span>

  </li>


</template>


<script>
module.exports = {
  data: function(){
  console.log('child ready');
  return {'postlist':1,'version':1}
  },
  props:["company_name","company_token", "company_id",
  "company_logo", "company_type"],
  filters: {
    truncate: function (text, length, suffix) {
            return text.substring(0, length) + suffix;
    },
  }
}
</script>
