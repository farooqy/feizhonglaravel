<div class="card">
    <div class="card-header">What do you need?</div>
    <div class="card-body">
        <div class="form-group">
            <label class="control-label">Product name</label>
            <input class="form-control" placeholder="Product name" v-model="needed_product.prod_name" />
        </div>
        <div class=" row">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <label class="control-label">Product Category</label>

                <select name="company_type" class="select_custom" style="height:60px;" @change="updateSelect($event)"
                    v-model="needed_product.prod_type">
                    <option value="Aerospace industry" selected>Aerospace industry</option>
                    <option value="Agriculture">Agriculture</option>
                    <option value="Beautify">Beauty Products</option>
                    <option value="Chemical industry">Chemical industry</option>
                    <option value="Computer industry">Computer industry</option>
                    <option value="Construction industry">Construction industry</option>
                    <option value="Defense industry">Defense industry</option>
                    <option value="Education industry">Education industry</option>
                    <option value="Energy industry">Energy industry</option>
                    <option value="Entertainment industry">Entertainment industry</option>
                    <option value="Financial services industry">Financial services industry</option>
                    <option value="Food production">Food production</option>
                    <option value="Health care industry">Health care industry</option>
                    <option value="Hospitality industry">Information industry</option>
                    <option value="Manufacturing">Manufacturing</option>
                    <option value="Mass media">Mass media</option>
                    <option value="Mining">Mining</option>
                    <option value="Telecommunications industry">Telecommunications industry</option>
                    <option value="Transport industry">Transport industry</option>
                    <option value="Water industry">Water industry</option>
                    <option value="Direct Selling industry">Direct Selling industry</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <label class="control-label">Subcategory</label>
                <select class="select_custom" name="product_sub_types" style="height:60px;"
                    v-model="needed_product.prod_subtype">
                    <option v-for=" type in sub_type_value" :value="type" v-text="type">
                    </option>
                </select>
            </div>


        </div>
        <div class=" row" v-if="customtype">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <label class="label">Custom product type</label>
                <input class="form-control" placeholder="Product Type" v-model="needed_product.prod_type" />
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <label class="label">Custom product sub type</label>
                <input class="form-control" placeholder="Product Type" v-model="needed_product.prod_subtype" />
            </div>
        </div>
        <div class="row">
            <label class="label" style="margin-left:15px;">Product description</label>
            <textarea class="textarea form-control"
                style="resize: none; border: thin solid gray; width: 100%;margin-left: 15px; margin-right: 15px;"
                placeholder="Product description" v-model="needed_product.prod_description"></textarea>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <label class="label">Quantity</label>
                <input type="number" placeholder="Quantity" v-model="needed_product.prod_quantity" />
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <label class="label">Measure unit</label>
                <input type="text" placeholder="Unit" v-model="needed_product.prod_measure_unit" />
            </div>
        </div>
        <div class="row">
            <label class="label" style="margin-left:15px">
                You have any photos of the product??
            </label>
            <input type="file" ref="need_image" @change.prevent="prepareNeedImage($event)"
                style="margin-left:15px; margin-right:15px; display:none" />

        </div>
        <div class="row ml-1">
            <img v-for="file in needed_product.need_images" :src="file.file_url" class="post_image_preview"
                :alt="file.alt" style="height:60px;width:60px;background-image:url(olympus_assets/img/danger.png)"
                @click.prevent="removeMe(file.index, 'need')" />
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <span class="hint">Click on the photo to remove it</span>
            </div>

        </div>
        <div class="row mb-3">
            <button @click.prevent="$refs.need_image.click()" class="ml-3 btn btn-primary">
                <i class="fas fa-camera pointer" style=""></i> Add Photo
            </button>
        </div>
        <div class="row">
            <label class="label" style="margin-left:15px">When do you need?</label>
            <input type="date" placeholder="Required Date" v-model="needed_product.prod_valid_until"
                style="margin-left:15px; margin-right:15px" />
        </div>

        <div class="row mt-4">
            <button class="btn btn-primary" style="margin-left:15px" @click.prevent="userProductNeed()"
                :disabled="requestLoading">
                Request Product
            </button>
        </div>
    </div>
</div>
