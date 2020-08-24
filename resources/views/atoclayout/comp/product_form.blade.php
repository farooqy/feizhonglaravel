<div class="card">
    <div class="card-header">
        Adding New Product
    </div>
    <div class="card-body">
        <div class="row">
            <img :src="getHostProfile()" alt="" class="mb-3" style="width:50px; border-radius:50%;">
            <span class="mt-2 ml-2">
                @{{shortenName(getHostName())}}
            </span>
        </div>
        <div class="row">
            <input type="text" placeholder="Product name" style="with:100%;border: thin solid darkgrey;"
                class="mt-1 m-b-1" v-model="Product.product_name">
        </div>
        <div class="row">
            <textarea type="text" placeholder="Product description" class="mt-1 mb-1"
                style="resize: none;border: thin solid darkgrey;width: 100%; padding:10px; border-radius:5px;"
                v-model="Product.product_description"></textarea>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="row">
                    <input type="text" placeholder=" Price" v-model="Product.product_price"
                        style="with:100%;border: thin solid darkgrey;" class="mt-1 mb-1" />
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="row">
                    <input type="text" placeholder="Measuring unit i.e grams" v-model="Product.product_unit"
                        style="with:100%;border: thin solid darkgrey;" class="mt-1 mb-1" />
                </div>
            </div>
        </div>
        <div class="row" v-show="false">
            <input type="file" name="product_file" ref="product_file" @change="prepareProductFile($event)">
        </div>
        <div class="row mt-1 mb-1">
            <img v-for="file in Product.product_files" :src="file.file_src" class="post_image_preview" :alt="file.alt"
                style="height:60px;width:60px;background-image:url(olympus_assets/img/danger.png)"
                @click="removeMe(file.index)" />
        </div>
        <div class="row" v-if="Product.product_files.length > 0">
            <span class="hint">Click on the photo to remove it</span>
        </div>
        <div class="row">
            <button @click.prevent="$refs.product_file.click()" class="btn btn-secondary">
                <i class="fas fa-camera pointer" style="font-size:30px;cursor:pointer"></i>
            </button>


            <button :class="requestLoading ? 'btn btn-secondary ml-1 ':'btn btn-primary ml-1 '"
                @click.prevent="prepareProduct()">
                Post Product
                <span class="spinner-border text-light" role="status" v-if="requestLoading">
                    <span class="sr-only">Loading...</span>
                </span>
            </button>
        </div>
        {{-- <form class="form" action="" method="post">
            <div class="form-goruplabel-floating ">
                <label for="product_name" class="label">Product name</label>
                <input type="text" placeholder="Product name" v-model="Product.product_name" />
            </div>
            <div class="form-group">
                <textarea type="text" placeholder="Product description" class="form-control"
                    v-model="Product.product_description"></textarea>
            </div>
            <div class="form-gorup">
                <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <label for="product_name" class="label"> Price</label>
                        <input type="text" placeholder=" Price" v-model="Product.product_price" />
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <label for="product_name" class="label">Currency</label>
                        <input type="text" placeholder="Currency" v-model="Product.product_currency" />
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <label for="product_name" class="label">Measuring unit</label>
                        <input type="text" placeholder="Measuring unit i.e grams" v-model="Product.product_unit" />
                    </div>
                </div>
            </div>
            <div class="form-group" v-show="false">
                <input type="file" name="product_file" ref="product_file" @change="prepareProductFile($event)">
            </div>
            <div class="form-group">
                <img v-for="file in Product.product_files" :src="file.file_src" class="post_image_preview"
                    :alt="file.alt" style="height:60px;width:60px;background-image:url(olympus_assets/img/danger.png)"
                    @click="removeMe(file.index)" />
                <div class="">
                    <span class="hint">Click on the photo to remove it</span>
                </div>
            </div>

            <div class="add-options-message">
                <span @click.prevent="$refs.product_file.click()">
                    <i class="fas fa-camera pointer" style="font-size:30px;cursor:pointer"></i>
                </span>


                <button class="btn btn-primary btn-md-2" @click.prevent="prepareProduct()">Post
                    Product</button>

            </div>
        </form> --}}
    </div>
</div>
