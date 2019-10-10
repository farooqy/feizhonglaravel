<template>
<div class="modal" tabindex="-1" role="dialog" style="display:block;" >
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title"> Error </h5>
      <button type="button" class="close" data-dismiss="modal"
      aria-label="Close" @click="disMissErrorModel">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body" >
      <p v-text="error_text"></p>
    </div>
  </div>
</div>
</div>
</template>

<script>
module.exports = {
  data: function(){
  console.log('child ready');
  return {'child':1,'version':1}
  },
  methods: {
    disMissErrorModel()
    {
      this.$emit('close-error-modal');
    }
  },
  props: ["error_text"]
}
</script>
