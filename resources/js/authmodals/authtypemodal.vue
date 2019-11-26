<template>
    <div class="modal fade show" id="update-header-photo" tabindex="-1" role="dialog"
        aria-labelledby="update-header-photo" style="padding-right: 14px; display: block; background-color:#379cf396"
        aria-modal="true">
        <div class="modal-dialog window-popup update-header-photo" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close" @click="disMissModal()">
                    <svg class="olymp-close-icon">
                        <use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
                    </svg>
                </a>

                <div class="modal-header">
                    <h6 class="title">What are you looking for?</h6>
                </div>

                <div class="modal-body">
                    <a href="#" class="upload-photo-item" @click="toggleType(1)">
                        <h6>I am customer</h6>
                        <div class="author-thumb mt-4">
                            <img src="/olympus_assets/img/badge11.png" alt="author">
                        </div>

                        <h6>looking for suppliers to buy from!</h6>
                    </a>

                    <a href="#" class="upload-photo-item" data-toggle="modal" @click="toggleType(0)">
                        <h6>I am supplier</h6>
                        <div class="author-thumb mt-4">
                            <img src="/olympus_assets/img/badge7.png" alt="author">
                        </div>

                        <h6>looking for customers to sell to!</h6>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data: function(){
        return {
            name: 'auth type modal',
            version: 1,
        }
    },
    mounted() {

    },
    methods: {
        disMissModal()
        {
            this.$emit('toggle-auth-modal');
        },
        toggleType(type)
        {
            this.$emit('toggle-type-modal', type);
        }
    },
    props: []
}
</script>