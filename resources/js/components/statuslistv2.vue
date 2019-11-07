<template>
	<article class="hentry post">

		<div class="post__author author vcard inline-items">
			<img :src="uploaded_by_picture" alt="author">

			<div class="author-date">
				<a class="h6 post__author-name fn" href="">{{uploaded_by_name}}</a>
				Posted <a :href="getStatusLink()">Status</a>
				<div class="post__date">
					<time class="published" :datetime="status_time">
						{{status_time}}
					</time>
				</div>
			</div>

			<div class="more"><svg class="olymp-three-dots-icon">
					<use xlink:href="#olymp-three-dots-icon"></use>
				</svg>
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
			{{truncate(status_text)}}
		</p>

		<div class="post-block-photo js-zoom-gallery">

			<a v-for="file in status_files.slice(0,2)" :href="file.file_url" class="half-width" :class="addClassMorePhotos(file.file_url)">
				<img :src="file.file_url" alt="photo">
				<span class="h2" v-show="isLastPhoto(file.file_url)"> +
					{{status_files.length - 2}}
				</span>
			</a>
		</div>

		<div class="post-additional-info inline-items">
			<div class="comments-shared">
				<a href="#" class="post-add-icon inline-items">
					<i class="fas fa-thumbs-up"></i>
					<span>0</span>
				</a>

				<a href="#" class="post-add-icon inline-items">
					<a href="#" class="post-add-icon inline-items">
						<i class="fas fa-eye"></i>
						<span>0</span>
					</a>
				</a>
			</div>


		</div>


	</article>
</template>

<script>
	module.exports = {
		data: function() {
			console.log('child ready');
			return {
				'postlist': 1,
				'version': 2
			}
		},
		props: ["status_image", "status_text", "status_time",
			"status_id", "status_generated_token", "status_files", "uploaded_by_name",
			"uploaded_by_picture"
		],
		filters: {
			// truncate: function(text, length, suffix) {
			// 	return text.substring(0, length) + suffix;
			// },
			addClassMorePhotos: function(url) {
				if (isLastPhoto(url))
					return "more-photos";
				return "invalidclass";
			},
		},
		methods: {

	        truncate(text)
	        {
	            if(text.length > 150)
	                    return text.substring(0,150) + '...';
	            return text;
	        },
			isLastPhoto: function(url) {
				var l = this.status_files.length;
				if (l <= 1)
					return false;
				if (this.status_files[1].file_url === url && l > 2)
					return true;
				return false;
			},
			addClassMorePhotos: function(url) {
				if (this.isLastPhoto(url))
					return "more-photos";
				return "";
			},
			getStatusLink: function() {
				return "/status/" + this.status_id + "/" + this.status_generated_token;
			}
		}
	}
</script>
