<template>

    <!-- The Modal -->
    <div id="myModal" class="modal" style="display:block;">

        <!-- Modal content -->

        <div class="modal-content">
            <div class="error-header">
                <h4 style="color:red">Error! <span class="close-modal" @click.prevent="disMissErrorModel">&times;</span></h4>
            </div>
            <div class="">
                <p v-text="error_text"></p>
            </div>

        </div>

    </div>
</template>

<script>
    module.exports = {
        data: function() {
            console.log('child ready');
            return {
                'child': 1,
                'version': 1,

            }
        },
        methods: {
            disMissErrorModel() {
                this.showModel = false;
                this.$emit('close-error-modal');
            }

        },
        props: ["error_text"]
    }
</script>
