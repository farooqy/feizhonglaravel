<template>
  <div >
  	<div class="row mb-3">
  		<div class="col-md-6 col-lg-6">
  			<label for="company_email"  class="label ml-2">
  				Company email <i class="fas fa-envelope ml-2"></i>
  			</label>
  			<input type="text" class="disabled" disabled
  			:value="company_email"/>
  		</div>
  		<div class="col-md-6 col-lg-6">
  			<label for="company_phone"  class="label ml-2">
  				Company Phone <i class="fas fa-phone ml-2"></i>
  			</label>
  			<input type="text" class="disabled" disabled
  			:value="company_phone"/>
  		</div>

  	</div>
  	<div class="row mb-3">
  		<div class="col-md-6 col-lg-6">
  			<label for="company_email"  class="label ml-2">
  				Company type<i class="fas fa-clone ml-2"></i>
  			</label>
  			<input type="text" class="disabled" disabled
  			:value="company_type"/>
  		</div>
  		<div class="col-md-6 col-lg-6">
  			<label for="company_email"  class="label ml-2">
  				Company Sub-type <i class="fas fa-paste ml-2"></i>
  			</label>
  			<input type="text" class="disabled" disabled
  			:value="company_subtype"/>
  		</div>

  	</div>

  </div>
</template>


<script>
module.exports = {
  data: function(){
  console.log('child ready');
  return {'companylist':1,'version':1}
  },
  props:["company_email","company_phone", "company_type",
  "company_subtype"],
  filters: {
    truncate: function (text, length, suffix) {
            return text.substring(0, length) + suffix;
    },
  },
}
</script>
