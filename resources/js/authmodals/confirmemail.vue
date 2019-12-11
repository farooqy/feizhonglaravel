<template>
    <div class="modal fade show" id="main-popup-search" tabindex="-1" role="dialog" aria-labelledby="main-popup-search"
        style="padding-right: 14px;background-color:#379cf396; display: block;" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered window-popup main-popup-search" role="document">
            <div class="modal-content">
                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close" @click="disMissModal()">
                    <svg class="olymp-close-icon">
                        <use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use>
                    </svg>
                </a>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title">Confirm your email address!</h3>
                        </div>
                        <div class="card-body">
                            This email address will be used for sending you informations 
                            regarding your account. <br><br>
                            A verification code will also be sent to this email to proceed to the next step.
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8 col-lg-8">
                                    <input class="input " :value="email" disabled
                                    style="border: 3px solid #0d7218; background-color: #e4e7e5;
                                    color: black; font-weight: 800; font-size: x-large;  height: 40px;" />
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 col-lg-4">
                                    <button class="btn btn-md btn-green" style="width:100%" @click="confirmEmail()">Confirm</button>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <button class="btn btn-md btn-danger" style="width:100%" @click="disMissModal()">Edit Email</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data: function(){
        return {
            name: 'confirm email modal',
            version: 1,

        }
    },
    methods: {
        disMissModal()
        {
            this.$emit('toggle-confirm-modal');
        },
        confirmEmail()
        {
            this.$emit('confirm-confirm-modal')
        }
    },
    props: ["email"]
}
</script>
