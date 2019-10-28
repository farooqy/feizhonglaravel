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

          <!-- Comments -->

          <ul class="comments-list">
  					<li class="comment-item">
  						<div class="post__author author vcard inline-items">
  							<img src="olympus_assets/img/avatar10-sm.jpg" alt="author">

  							<div class="author-date">
  								<a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
  								<div class="post__date">
  									<time class="published" datetime="2017-03-24T18:18">
  										5 mins ago
  									</time>
  								</div>
  							</div>

  							<a href="#" class="more">
  								<svg class="olymp-three-dots-icon">
  									<use xlink:href="#olymp-three-dots-icon"></use>
  								</svg>
  							</a>

  						</div>

  						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

  						<a href="#" class="post-add-icon inline-items">
  							<i class="fas fa-thumbs-up"></i>
  							<span>8</span>
  						</a>
  						<a href="#" class="reply">
                <a href="#" class="post-add-icon inline-items">
                  <i class="fas fa-comment-alt"></i>
                  <span class="">Reply</span>
            		</a>
              </a>
  					</li>
  					<li class="comment-item has-children">
  						<div class="post__author author vcard inline-items">
  							<img src="olympus_assets/img/avatar5-sm.jpg" alt="author">

  							<div class="author-date">
  								<a class="h6 post__author-name fn" href="#">Green Goo Rock</a>
  								<div class="post__date">
  									<time class="published" datetime="2017-03-24T18:18">
  										1 hour ago
  									</time>
  								</div>
  							</div>

  							<a href="#" class="more">
  								<svg class="olymp-three-dots-icon">
  									<use xlink:href="#olymp-three-dots-icon"></use>
  								</svg>
  							</a>

  						</div>

  						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugiten, sed quia
  							consequuntur magni dolores eos qui ratione voluptatem sequi en lod nesciunt. Neque porro
  							quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit en lorem ipsum der.
  						</p>

  						<a href="#" class="post-add-icon inline-items">
  							<i class="fas fa-thumbs-up"></i>
  							<span>5</span>
  						</a>
			        <a href="#" class="reply"><i class="fas fa-reply-all"></i></a>

						  <ul class="children">
  							<li class="comment-item">
  								<div class="post__author author vcard inline-items">
  									<img src="olympus_assets/img/avatar8-sm.jpg" alt="author">

  									<div class="author-date">
  										<a class="h6 post__author-name fn" href="#">Diana Jameson</a>
  										<div class="post__date">
  											<time class="published" datetime="2017-03-24T18:18">
  												39 mins ago
  											</time>
  										</div>
  									</div>

  									<a href="#" class="more">
  										<svg class="olymp-three-dots-icon">
  											<use xlink:href="#olymp-three-dots-icon"></use>
  										</svg>
  									</a>

  								</div>

  								<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>

  								<a href="#" class="post-add-icon inline-items">
  										<i class="fas fa-thumbs-up"></i>
  									<span>2</span>
  								</a>
                </li>
  							<li class="comment-item">
  								<div class="post__author author vcard inline-items">
  									<img src="olympus_assets/img/avatar2-sm.jpg" alt="author">

  									<div class="author-date">
  										<a class="h6 post__author-name fn" href="#">Nicholas Grisom</a>
  										<div class="post__date">
  											<time class="published" datetime="2017-03-24T18:18">
  												24 mins ago
  											</time>
  										</div>
  									</div>

  									<a href="#" class="more">
  										<svg class="olymp-three-dots-icon">
  											<use xlink:href="#olymp-three-dots-icon"></use>
  										</svg>
  									</a>

  								</div>

  								<p>Excepteur sint occaecat cupidatat non proident.</p>

  								<a href="#" class="post-add-icon inline-items">
  									<i class="fas fa-thumbs-up"></i>
  									<span>0</span>
  								</a>
  							</li>
						</ul>

					  </li>

				</ul>

          <!-- End comments list -->

          <!-- Comment form -->
        <form class="comment-form inline-items">

				<div class="post__author author vcard inline-items">
					<img :src="host_profile" alt="author">

					<div class="form-group with-icon-right is-empty">
						<textarea class="form-control"
            placeholder="What do you think about this post?"
            v-model="in_comment_text" ></textarea>
						<div class="add-options-message">
							<a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
								<svg class="olymp-camera-icon">
									<use xlink:href="#olymp-camera-icon"></use>
								</svg>
							</a>
						</div>
					<span class="material-input"></span></div>
				</div>

				<button class="btn btn-md-2 btn-primary"
        @click.prevent="submitComment('product')"
        >Post Comment</button>
			</form>

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
          {{status_text | truncate( 150, '...')}}
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



        		<div class="comments-shared">
        			<a href="#" class="post-add-icon inline-items">
        				<i class="fas fa-thumbs-up"></i>
                <span class="">{{likes.length}}</span>
        			</a>

        			<a href="#" class="post-add-icon inline-items">
        				<i class="fas fa-reply-all"></i>
                <span>{{comments.length}}</span>
        			</a>
        		</div>


        	</div>



          <ul class="comments-list" v-for="comment in comments">
  					<li class="comment-item" :class="hasChildren(comment)">
  						<div class="post__author author vcard inline-items">
  							<img :src="getCommentProfile(comment)" alt="author">

  							<div class="author-date">
  								<a class="h6 post__author-name fn" href="#" >
                    {{getCommentName(comment)}}
                  </a>
  								<div class="post__date">
  									<time class="published" datetime="2017-03-24T18:18">
  										{{comment.created_at}}
  									</time>
  								</div>
  							</div>

  							<a href="#" class="more">
  								<svg class="olymp-three-dots-icon">
  									<use xlink:href="#olymp-three-dots-icon"></use>
  								</svg>
  							</a>

  						</div>

  						<p>
                {{comment.comment_text}}
              </p>

  						<a href="#" class="post-add-icon inline-items">
  							<i class="fas fa-thumbs-up"></i>
  							<span>{{comment.comment_replies.length}}</span>
  						</a>
              <a href="#" class="post-add-icon inline-items"
              :style="hasCommented(comment)">
                <i class="fas fa-comment-alt"></i>
                <span>{{comment.comment_replies.length}}</span>
          		</a>
              <a href="#" class="post-add-icon inline-items"
              @click.prevent="showCommentReplyBox(comment)">
                <span class="">Reply</span>
          		</a>
              <!-- comment children comments -->
              <ul class="children">
                <li class="comment-item" v-for="reply in comment.comment_replies">
                  <div class="post__author author vcard inline-items">
                    <img :src="getCommentProfile(reply)" alt="author">

                    <div class="author-date">
                      <a class="h6 post__author-name fn" href="#">
                        {{getCommentName(reply)}}
                      </a>
                      <div class="post__date">
                        <time class="published" datetime="2017-03-24T18:18">
                          {{reply.created_at}}
                        </time>
                      </div>
                    </div>
                  </div>

                  <p>
                    {{reply.comment_text}}
                  </p>
                  <a href="#" class="post-add-icon inline-items">
                      <i class="fas fa-thumbs-up"></i>
                    <span>2</span>
                  </a>
                </li>
              </ul>

              <!-- reply to comment form -->
              <div class="post-reply form-group" v-if="isLoggedIn()"
              v-show="isReplyTriggered(comment.id)">
                <textarea class="form-control" v-model="comment_reply"
                 placeholder="Reply to comment" style="resize: none;
                 width: 100%;" ></textarea>
                 <div class="inline-items right">
                   <button class="btn btn-primary"
                   @click.prevent="submitComment('comment', comment)">Reply </button>
                   <button class="btn btn-danger "
                   @click.prevent="resetReplyBox()">Cancel </button>
                 </div>
              </div>



  					</li>


          </ul>
              <!-- Comment form -->
          <form class="comment-form inline-items" v-if="isLoggedIn()">

    				<div class="post__author author vcard inline-items">
    					<img :src="host_profile" alt="author">

    					<div class="form-group with-icon-right is-empty">
    						<textarea class="form-control" v-model="in_comment_text"
                placeholder="What do you think about this post?"></textarea>
    						<div class="add-options-message">
    							<a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
    								<svg class="olymp-camera-icon">
    									<use xlink:href="#olymp-camera-icon"></use>
    								</svg>
    							</a>
    						</div>
    					<span class="material-input"></span></div>
    				</div>

    				<button class="btn btn-md-2 btn-primary"
            @click.prevent="submitComment('status')"  >Post Comment</button>
    			</form>

        </article>

</template>



<script>
module.exports = {
  data: function(){
    return {
      'postlist':1,
      'version':2,
      in_comment_text: this.comment_text,
      post_id: this.product_id === undefined ? this.status_id :
      this.product_id,
      post_token: this.product_token === undefined ? this.status_generated_token:
      this.product_token,
      comment_reply: null,
      show_reply_box: -1,
    }
  },
  props:[
  "post_type", "host_profile", "comment_text", "comments", "likes",
  "host_id", "host_token", "is_logged_in",

  "generated_token","product_currency", "product_description",
  "product_files", "product_token", "product_id", "product_name",
  "product_price", "product_unit", "product_company", "created_at",

  "status_image","status_text", "status_time",
  "status_id", "status_generated_token", "status_files", "uploaded_by_name",
  "uploaded_by_picture",
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
    },
    submitComment(type, comment=null)
    {
      var comment_text;
      if(type === "comment" && comment === null)
        return;
      else if(type === "comment")
      {
        this.post_id = comment.id;
        this.post_token = comment.comment_token;
        comment_text = this.comment_reply;
      }
      else
      {
        this.post_id = this.status_id ===  undefined ? this.product_id :
        this.status_id;
        this.post_token = this.status_generated_token;
        comment_text = this.in_comment_text;
    }
      this.$emit('submit-comment', type, this.post_id,
      this.post_token, comment_text);
    },
    getCommentProfile(comment)
    {
      if(comment.host_type === "comp")
        return comment.comp_profile.comp_logo;
      else
        return comment.person_profile.user_profile;
    },
    getCommentName(comment)
    {
      if(comment.host_type === "comp")
        return comment.comp_profile.comp_name;
      else
        return comment.person_profile.user_frname;
    },
    showCommentReplyBox(comment)
    {
      this.show_reply_box = comment.id;
    },
    isReplyTriggered(comment_id)
    {
      return this.show_reply_box === comment_id;
    },
    resetReplyBox()
    {
      this.show_reply_box = -1;
    },
    hasChildren(comment)
    {
      if(comment.comment_replies.length > 0)
        return 'has-children';

      return false;
    },
    hasCommented(comment)
    {
      if(comment.host_type === "comp")
      {
        if(comment.comp_profile.comp_token === this.host_token)
          return "color: #ff5e3a";
        else
          return 'text-decoration:none';
      }
      else
      {
        if(comment.person_profile.user_token === this.host_token)
          return "color: #ff5e3a";
        else
          return 'text-decoration:none';
      }
    },
    isLoggedIn()
    {
      return this.is_logged_in;
    }

  }
}
</script>
