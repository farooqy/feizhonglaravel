<template>

      <article class="hentry blog-post blog-post-v3"
      v-if="isStatusProduct()"
      style="border-bottom: thin solid;display: block;
      padding-top:25px">

        <div class="post__author author vcard inline-items"
        style="margin-left: 25px;">
          <img :src="product_company.comp_logo" alt="company logo">

          <div class="author-date">
            <a class="h6 post__author-name fn" href="">
              <h6> {{product_company.comp_name}} </h6>
            </a>
            Posted  <a :href="getStatusLink()">product</a>
            <div class="post__date">
              <time class="published" :datetime="created_at">
                {{" at "+created_at}}
              </time>
            </div>
          </div>

          </div>
        </div>
        <div style="display: flex;margin-bottom: 15px;padding-left: 25px;">
  				<div class="post-thumb">
  					<img :src="product_files[0].file_url" alt="Product photo">
  					<a href="#" class="post-category bg-blue-light">Product</a>
  				</div>

  				<div class="post-content">
  					<a href="#" class="h3 post-title">
              {{product_name}}
            </a>
  					<p>
              {{product_description | truncate(45, "...")}}
  					</p>

  					<div class="post-additional-info inline-items">


  						<div class="names-people-likes">
                <a href="#" class="post-add-icon inline-items">
               </a>
               <b><u>
  							{{ product_currency }} {{product_price }} / {{product_unit}}

                </u></b>
              </div>

  			     <div class="comments-shared">
  							<a href="#" class="post-add-icon inline-items">
  								<i class="fas fa-eye"></i>
  								<span>0</span>
  							</a>
  						</div>

  					   </div>
  					</div>
          </div>
				</article>
        <article class="hentry post" v-else="isStatusStatus()">

        	<div class="post__author author vcard inline-items">
        		<img :src="uploaded_by_picture" alt="author">

        		<div class="author-date">
        			<a class="h6 post__author-name fn" href="">{{uploaded_by_name}}</a>
              Posted  <a :href="getStatusLink()">status</a>
        			<div class="post__date">
        				<time class="published" :datetime="status_time">
        					{{status_time}}
        				</time>
        			</div>
        		</div>

        		<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="#olymp-three-dots-icon"></use></svg>
        			<ul class="more-dropdown">
        				<li>
        					<a href="#">Edit Post</a>
        				</li>
        				<li>
        					<a href="#">Delete Post</a>
        				</li>
        				<li>
        					<a href="#">Turn Off Notifications</a>
        				</li>
        				<li>
        					<a href="#">Select as Featured</a>
        				</li>
        			</ul>
        		</div>

        	</div>

        	<p>
          {{status_text}}
        	</p>

        	<div class="post-block-photo js-zoom-gallery">

        		<a v-for="file in status_files.slice(0,2)"
            :href="file.file_url" class="half-width"
            :class="addClassMorePhotos(file.file_url)">
              <img :src="file.file_url" alt="photo">
              <span class="h2" v-show="isLastPhoto(file.file_url)"> +
              {{status_files.length - 2}}
              </span>
            </a>
        	</div>

        	<div class="post-additional-info inline-items">

        		<a href="#" class="post-add-icon inline-items">
        			<svg class="olymp-heart-icon"><use xlink:href="#olymp-heart-icon"></use></svg>
        			<span>15</span>
        		</a>

        		<div class="comments-shared">
        			<a href="#" class="post-add-icon inline-items">
        				<svg class="olymp-speech-balloon-icon"><use xlink:href="#olymp-speech-balloon-icon"></use></svg>
        				<span>0</span>
        			</a>

        			<a href="#" class="post-add-icon inline-items">
        				<svg class="olymp-share-icon"><use xlink:href="#olymp-share-icon"></use></svg>
        				<span>16</span>
        			</a>
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
  props:[
  "post_type",

  "generated_token","product_currency", "product_description",
  "product_files", "status_generated_token", "product_id", "product_name",
  "product_price", "product_unit", "product_company", "created_at",

  "status_image","status_text", "status_time",
  "status_id", "status_generated_token", "status_files", "uploaded_by_name",
  "uploaded_by_picture"
  ],
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
		},
    isStatusStatus()
    {
      return this.post_type === "status";
    },
    isStatusProduct()
    {
      return this.post_type === "product";
    }

  }
}
</script>
