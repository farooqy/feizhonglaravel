<template>

      <article class="hentry blog-post blog-post-v3">

					<div class="post-thumb">
						<img src="img/post1.jpg" alt="photo">
						<a href="#" class="post-category bg-blue-light">THE COMMUNITY</a>
					</div>

					<div class="post-content">

						<div class="author-date">
							by
							<a class="h6 post__author-name fn" href="#">Maddy Simmons</a>
							<div class="post__date">
								<time class="published" datetime="2017-03-24T18:18">
									- 7 hours ago
								</time>
							</div>
						</div>

						<a href="#" class="h3 post-title">Here’s the Featured Urban photo of August! </a>
						<p>Here’s a photo from last month’s photoshoot. We had a lot of fun doing it and got really
							awesome shots for the new summer catalog.
						</p>

						<div class="post-additional-info inline-items">

							<ul class="friends-harmonic">
								<li>
									<a href="#">
										<img src="img/icon-chat27.png" alt="icon">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/icon-chat2.png" alt="icon">
									</a>
								</li>
							</ul>
							<div class="names-people-likes">
								26
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
  props:["status_image","status_text", "status_time",
  "status_id", "status_generated_token", "status_files", "uploaded_by_name",
  "uploaded_by_picture"],
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
