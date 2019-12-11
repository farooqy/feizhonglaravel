
<template id="form_error">
  <div class="parent">
    <div class="child">I am error</div>
  </div>
</template>
export default {
  mounted() {
    alert('component ready');

  },
  component: "#form_error"
}
