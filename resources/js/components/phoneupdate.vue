<template>
    <div class="modal" tabindex="-1" role="dialog" style="display:block;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Enter Verification code sent to your phone </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        @click="disMissAuthenticationModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Enter Code</label>
                        <input type="number" id="input-first-name" class="form-control form-control-alternative"
                            placeholder="Enter code" v-model="verification_code">
                    </div>
                    <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Enter password</label>
                        <input type="password" id="input-first-name" class="form-control form-control-alternative"
                            placeholder="Enter password" v-model="field_change_password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" @click="saveChanges">
                        Save
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        @click="disMissAuthenticationModal">Edit</button>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    module.exports = {
        data: function () {
            this.field_change_password = null;
            this.verification_code = null;
            return {
                'field_change_password': this.field_change_password
            }
        },
        methods: {
            disMissAuthenticationModal() {
                this.$emit('close-phone-modal');
            },
            saveChanges() {
                this.$emit('save-phone-changes', this.field_change_password, this.verification_code);
            }
        },
        props: ['verification_code'],

    }

</script>
