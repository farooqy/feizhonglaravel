<template>

    <!-- The Modal -->
    <div id="myModal" class="modal" style="display:block;">

        <!-- Modal content -->

        <div class="modal-content" style="width:60%">
            <div class="card">
                <div class="card-header">
                    <h3 class="title">
                        Product quotation <span class="close-modal" @click.prevent="disMissDemandModal">&times;</span>
                    </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price/Unit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">{{product.product_name}}</th>
                                    <td> {{product.product_description}} </td>
                                    <td> {{product.product_currency}} {{product.product_price}} per
                                        {{product.product_unit}} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            Add quotation details.
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="label">How much (quanity) do you need ? </label>
                                <div class="" style="display:flex">
                                    <input type="number" class="form-control col-md-8 col-lg-8"
                                        placeholder="Enter quantity" v-model="demand_quantity">
                                    <input type="text" disabled :value="product.product_unit"
                                        class="form-control disabled col-md-4 col-lg-4" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label">How much do you want to pay for each {{product.product_unit}} ?
                                </label>
                                <div class="" style="display:flex">
                                    <input type="number" class="form-control col-md-8 col-lg-8"
                                        placeholder="Enter Price" v-model="demand_price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label">Do you want to describe more about your demand ? </label>
                                <textarea type="number" class="form-control" placeholder="Additional description?"
                                    v-model="demand_description"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="label">How do you plan to pay ? </label>
                                <select name="" id="" v-model="payment_method">
                                    <option value="Cheque">Cheque</option>
                                    <option value="Wire Transfer">Wire Transfer</option>
                                    <option value="Wechat Pay">Wechat Pay</option>
                                    <option value="AliPay">AliPay</option>
                                </select>
                            </div>
                            <div class="form-group" v-if="Error.visible">
                                <label class="label">{{Error.error_title}} </label>
                                <p class="danger text-danger">{{Error.error_text}}</p>
                            </div>
                            <div class="form-group" v-if="Success.visible">
                                <label class="label">{{Success.success_title}} </label>
                                <p class="success text-success">{{Success.success_text}}</p>
                            </div>
                            <div class="form-group" v-if="quotation_file.visible">
                                <a :href="getQuotationUrl()" target="_blank">
                                    <img src="/img/pdf_icon.png" style="height:30px"> View Quotation file
                                </a>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success " @click.prevent="sendDemandQuotation()"
                                    :disabled="in_isLoading">
                                    Send quotation <span :class="isLoadingRequest()" role="status"></span>
                                </button>
                            </div>
                        </div>
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
                child: 1,
                version: 1,
                demand_quantity: null,
                demand_price: this.product.product_price,
                demand_description: null,
                payment_method: "Cheque",
                in_isLoading: this.isLoading,

            }
        },
        methods: {
            disMissDemandModal() {
                this.showModel = false;
                this.$emit('close-quotation-modal');
            },
            sendDemandQuotation() {
                this.$emit('demand-quotation-ready', this.demand_price, this.demand_quantity, this.payment_method,
                    this.demand_description, this.product.product_id, this.product.product_token, this.product
                    .product_type);
                this.in_isLoading = true;
            },
            isLoadingRequest() {
                if (this.in_isLoading)
                    return 'spinner-border text-ligh ';
                return '';
            },
            getQuotationUrl()
            {
                return this.quotation_file.url;
                this.in_isLoading = false;
            }

        },
        props: ["product", "Error", "Success", "isLoading", "quotation_file"],
        watch: {
            'isLoading': function (oldvalue, newvalue) {
                this.in_isLoading = this.isLoading;
            }
        }
    }

</script>
