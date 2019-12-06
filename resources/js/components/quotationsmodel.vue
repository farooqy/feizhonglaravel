<template>

    <!-- The quotation Modal -->
    <div id="myModal" class="modal" style="display:block;">

        <!-- Modal content -->

        <div class="modal-content"  style="width:70%">
            <div class="card">
                <div class="card-header">
                    Quotation details <span class="close-modal" @click.prevent="disMissQuotationModel">&times;</span>
                </div>
                <div class="row">
                    <div class="card-body col-md-3 col-lg-3" v-for="(Quotation, key) in list" v-bind:key="key">
                        <div class="card-header">
                            <h5 class="title">Quotations # {{key+1}}</h5>
                            
                        </div>
                        <div class="card-body">
                            <a  :href="getQuotationLink(Quotation)" target="_blank">
                                <img src="/img/pdf_icon.png" class="card-image" alt="" style="width:100%">
                            </a>
                            <div class="hint text-center">{{Quotation.Product.created_at}}</div>
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
                'child': 1,
                'version': 1,

            }
        },
        methods: {
            disMissQuotationModel() {
                this.showModel = false;
                this.$emit('close-quotation-modal');
            },
            getQuotationLink(Q)
            {
                console.log('link ',Q.Product.quotation_file)
                return Q.Product.quotation_file
            }

        },
        props: ["list"]
    }

</script>
