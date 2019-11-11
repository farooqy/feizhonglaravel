<template>

    <!-- The Modal -->
    <div id="myModal" class="modal" style="display:block;">

        <!-- Modal content -->

        <div class="modal-content" style="width:50vw">
            <div class="error-header">
                <h4 style="color:red">Details <span class="close-modal" @click.prevent="disMissModal">&times;</span>
                </h4>

            </div>
            <div class="card">
                <div class="card-header">
                    Posted by <span v-text="product_company.comp_name"></span>
                    <span class="ml-3" v-text="created_at"></span>
                </div>
                <div class="card-body">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" :data-slide-to="key" :class="isActive(key)"
                                v-for="(file, key) in product_files" v-bind:key="key"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item " :class="isActive(key)" v-for="(file, key) in product_files"
                                v-bind:key="key">
                                <img :src="file.file_url" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <div class="">
                        <div class="mt-3 row">
                            <div class="col-md-8 col-lg-8">
                                <label class="label">Product name:</label>
                                <input class="input disabled" disabled :value="product_name" />
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <label class="label">Bargain?</label>
                                <input class="input btn btn-primary" type="submit"
                                    value="Generate Quotation" style="height:60px"/>
                                
                            </div>
                        </div>
                        <div class="mt-3" style="display:flex">
                            <div class="col-md-6 col-lg-6">
                                <label class="label">Product Price:</label>
                                <input :value="product_price+' '+product_currency" class="input disabled" disabled>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <label class="label">Product Measure Unit:</label>
                                <input class="input disabled" disabled :value="product_unit" />
                            </div>

                        </div>
                        <div class="mt-3">
                            <div class="col-md-12 col-lg-12">
                                <label class="label">Product Description:</label>
                                <p v-text="product_description" style="border: thin solid gray; padding: 10px; 
                                    background-color: aliceblue;"></p>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-12 col-lg-12 mt-3 p-3" >
                        <h3><strong><u>Comments</u></strong></h3>
                        <ul class="comments-list" v-for="(comment,key) in comments" v-bind:key="key" style="border:thin solid gray">
                        <li class="comment-item" :class="hasChildren(comment)" style="background-color: aliceblue;">
                            <div class="post__author author vcard inline-items">
                                <img :src="getCommentProfile(comment)" alt="author">

                                <div class="author-date">
                                    <a class="h6 post__author-name fn" href="#">
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
                            <a href="#" class="post-add-icon inline-items" :style="hasCommented(comment)">
                                <i class="fas fa-comment-alt"></i>
                                <span>{{comment.comment_replies.length}}</span>
                            </a>
                            <a href="#" class="post-add-icon inline-items"
                                @click.prevent="showCommentReplyBox(comment)">
                                <span class="">Reply</span>
                            </a>
                            <!-- comment children comments -->
                            <ul class="children">
                                <li class="comment-item" v-for="(reply,key) in comment.comment_replies"
                                    style="background-color: aliceblue;" v-bind:key="key">
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
                                        <span>0</span>
                                    </a>
                                </li>
                            </ul>

                            <!-- reply to comment form -->
                            <div class="post-reply form-group" v-if="isLoggedIn()"
                                v-show="isReplyTriggered(comment.id)">
                                <textarea class="form-control" v-model="comment_reply" placeholder="Reply to comment"
                                    style="resize: none;
                        width: 100%;"></textarea>
                                <div class="inline-items right">
                                    <button class="btn btn-primary"
                                        @click.prevent="submitComment('comment', comment)">Reply </button>
                                    <button class="btn btn-danger " @click.prevent="resetReplyBox()">Cancel </button>
                                </div>
                            </div>



                        </li>


                        </ul>
                    </div>

                </div>
            </div>

        </div>

    </div>
</template>

<script>
    module.exports = {
        data: function () {
            console.log('child ready');
            return {
                'child': 1,
                'version': 1,
                in_comment_text: this.comment_text,
                post_id: this.product_id === undefined ? this.status_id : this.product_id,
                post_token: this.product_token === undefined ? this.status_generated_token : this.product_token,
                comment_reply: null,
                show_reply_box: -1,
                in_comments : this.comments

            }
        },
        methods: {
            disMissModal() {
                this.showModel = false;
                this.$emit('close-postdetail-modal');
            },
            isStatusStatus() {
                return this.post_type === "status";
            },
            isStatusProduct() {
                return this.post_type === "product";
            },
            isActive(key) {
                return (key === 0 ? "active" : '');
            },
            hasChildren(comment) {
                if (comment.comment_replies.length > 0)
                    return 'has-children';

                return false;
            },
            getCommentProfile(comment) {
                if (comment.host_type === "comp")
                    return comment.comp_profile.comp_logo;
                else
                    return comment.person_profile.user_profile;
            },
            getCommentName(comment) {
                if (comment.host_type === "comp")
                    return comment.comp_profile.comp_name;
                else
                    return comment.person_profile.user_fname+' '+
                            comment.person_profile.user_sname;
            },
            hasCommented(comment) {
                if (comment.host_type === "comp") {
                    if (comment.comp_profile.comp_token === this.host_token)
                        return "color: #ff5e3a";
                    else
                        return 'text-decoration:none';
                } else {
                    if (comment.person_profile.user_token === this.host_token)
                        return "color: #ff5e3a";
                    else
                        return 'text-decoration:none';
                }
            },
            isLoggedIn() {
                return this.is_logged_in;
            },
            submitComment(type, comment=null) {
                var comment_text;
                if (this.in_comment_text === null && this.comment_reply === null)
                    return;
                else if(type === "comment" && comment === null)
                    return;
                else if (type === "comment") {
                    this.post_id = comment.id;
                    this.post_token = comment.comment_token;
                    comment_text = this.comment_reply;
                } else {
                    this.post_id = this.status_id === undefined ? this.product_id :
                        this.status_id;
                    this.post_token = this.status_generated_token === undefined ?
                    this.generated_token : this.status_generated_token;
                    comment_text = this.in_comment_text;
                }
                if(type === "comment")
                    this.$emit('submit-comment', type, this.post_id,
                        this.post_token, comment_text, this.clearCommentReplyText);
                else {
                    this.$emit('submit-comment', type, this.post_id,
                        this.post_token, comment_text, this.clearCommentText);
                }
            },
            clearCommentReplyText(data)
            {
                var i=0;
                for(i=0; i < this.in_comments.length; i++)
                {
                    if(this.in_comments[i].comment_token === data.status_token)
                        this.in_comments[i].comment_replies.push(data);
                }

                this.comment_reply = null;
            },
            showCommentReplyBox(comment) {
                this.show_reply_box = comment.id;
            },
            isReplyTriggered(comment_id) {
                return this.show_reply_box === comment_id;
            },
            resetReplyBox() {
                this.show_reply_box = -1;
            },

        },
        props: [
            "post_type", "host_profile", "comment_text", "comments", "likes",
            "host_id", "host_token", "is_logged_in",

            "generated_token", "product_currency", "product_description",
            "product_files", "product_token", "product_id", "product_name",
            "product_price", "product_unit", "product_company", "created_at",

            "status_image", "status_text", "status_time",
            "status_id", "status_generated_token", "status_files", "uploaded_by_name",
            "uploaded_by_picture", "uploaded_by_company"
        ]
    }

</script>
