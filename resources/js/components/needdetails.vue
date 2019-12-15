<template>
    <div id="myModal" class="modal" style="display:block;">

        <!-- Modal content -->

        <div class="modal-content" style="width: 60%;">
            <div class="error-header">
                <h4 style="">Demand Details!
                    <span class="close-modal" @click.prevent="disMissNeedModal()">&times;</span>
                </h4>
            </div>
            <div class="">
                <div class="card">
                    <div clss="card-header">
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <label class="label" style="width:100%">Product name</label>
                                    <input disabled :value="product_name" class="input"
                                        style="width:100%"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12 col-lg-12">
                                    <label class="label">Product Description</label>
                                    <textarea disabled value="Product Description"
                                    style="width:100%;resize:none">{{product_description}}</textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 col-lg-6">
                                    <label class="label">Product type</label>
                                    <input disabled :value="product_type" />
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label class="label">Product subtype</label>
                                    <input disabled :value="product_sub_types" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 col-lg-6">
                                    <label class="label" style="width:100%">Quantity</label>
                                    <input disabled :value="product_quantity+' '+product_measure_unit" class="input"
                                        style="width:100%"/>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label class="label">Valid until</label>
                                    <input disabled :value="product_valid_until" />
                                </div>
                            </div>
                            <div class="row mt-3">
                                <img v-for="(image, ikey) in need_images" :key="ikey" :src="image.file_url" alt=""
                                    height="100px" width="110px" style="border:thin solid gray; margin:7px">
                            </div>
                            <hr />
                            <div class="row ml-3">
                                <h4><u>Customer details</u></h4>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <label class="label" style="width:100%">customer name</label>
                                    <input disabled :value="need_user_data.user_fname+' '+need_user_data.user_sname"
                                     class="input"
                                        style="width:100%"/>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 col-lg-6">
                                    <label class="label" style="width:100%">Email</label>
                                    <input disabled :value="need_user_data.user_email" class="input"
                                        style="width:100%"/>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <label class="label">Phone</label>
                                    <input disabled :value="need_user_data.user_phone" />
                                </div>
                            </div>
                            <div class="row mt-3" v-if="need_user_data.user_location">
                                <div class="col-md-12 col-lg-12">
                                    <label class="label" style="width:100%">Address</label>
                                    <input disabled :value="need_user_data.user_location.address" class="input"
                                        style="width:100%"/>
                                </div>
                            </div>
                            <div class="row mt-3" v-if="need_user_data.user_location">
                                <div class="col-md-12 col-lg-12">
                                    <label class="label" style="width:100%">Country</label>
                                    <input disabled :value="need_user_data.user_location.city+' ,'+
                                        need_user_data.user_location.province_state+', '+
                                        need_user_data.user_location.country"
                                            style="width:100%"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</template>

<script type="text/javascript">
    module.exports = {
        data: function() {
            return {
                name: 'need details',
                version: 1
            };
        },
        methods: {
            disMissNeedModal()
            {
                return this.$emit('close-comp-match-modal');
            }
        },
        props: ["product_name", "product_description", "product_quantity",
                "product_measure_unit", "product_type", "product_sub_types",
                "product_valid_until", "need_user_data", "need_images"],
    }
</script>
