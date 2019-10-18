<template>

      <article class="hentry blog-post blog-post-v3">

					<div class="post-thumb">
						<img :src="product_files[0].file_url" alt="Product photo">
						<a href="#" class="post-category bg-blue-light">Product</a>
					</div>

					<div class="post-content">

						<div class="author-date">
							by
							<a class="h6 post__author-name fn" href="#">
                {{ product_company.comp_name }}
              </a>
							<div class="post__date">
								<time class="published" :datetime="created_at">
									{{created_at}}
								</time>
							</div>
						</div>

						<a href="#" class="h3 post-title">
              {{product_name}}
            </a>
						<p>
              {{product_description | truncate(45, "...")}}
						</p>

						<div class="post-additional-info inline-items">

							<i class="fas fa-money"></i>
							<div class="names-people-likes">
								{{ product_currency }} {{product_price }} / {{product_unit}}
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
  return {'postlist':1,'version':2}
  },
  props:["generated_token","product_currency", "product_description",
  "product_files", "status_generated_token", "product_id", "product_name",
  "product_price", "product_unit", "product_company", "created_at"],
  filters: {
    truncate: function (text, length, suffix) {
            return text.substring(0, length) + suffix;
    },
    addClassMorePhotos: function(url)
    {
      if(isLastPhoto(url))
        return "more-photos";
      return "invalidclass";
    },
  },
  methods: {

	  isLastPhoto: function(url)
	  {
	    var l = this.status_files.length;
	    if(l <= 1)
	      return false;
	    if(this.status_files[1].file_url === url && l > 2 )
	      return true;
	    return false;
	  },
	  addClassMorePhotos: function(url)
	  {
	    if(this.isLastPhoto(url))
	      return "more-photos";
	    return "";
	  },
		getStatusLink: function ()
		{
			return "/status/"+this.status_id+"/"+this.status_generated_token;
		}
  }
}
</script>
