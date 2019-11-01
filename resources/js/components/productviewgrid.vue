<template>
<article class="hentry blog-post blog-post-v3" style="border-bottom: thin solid;display: block;
  padding-top:25px">

    <div class="post__author author vcard inline-items" style="margin-left: 25px;">
        <img :src="product_company.comp_logo" alt="company logo">

        <div class="author-date">
            <a class="h6 post__author-name fn" href="">
                <h6> {{product_company.comp_name}} </h6>
            </a>
            Posted <a :href="getStatusLink()">product</a>
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
</template>

<script>
module.exports = {
    data: function() {
        return {
            'postlist': 1,
            'version': 2,
            // in_comment_text: this.comment_text,
            // post_id: this.product_id === undefined ? this.status_id : this.product_id,
            // post_token: this.product_token === undefined ? this.status_generated_token : this.product_token,

        }
    },
    props: [
        "generated_token", "product_currency", "product_description",
        "product_files", "product_token", "product_id", "product_name",
        "product_price", "product_unit", "product_company", "created_at",
    ],
    filters: {
        truncate: function(text, length, suffix) {
            return text.substring(0, length) + suffix;
        },
        addClassMorePhotos: function(url) {
            if (isLastPhoto(url))
                return "more-photos";
            return "invalidclass";
        },
    },
    methods: {

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
