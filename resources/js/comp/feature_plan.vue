<template>

    <div class="modal bd-example-modal-lg" style="display:block"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="width:100%">
                
                <div class="modal-header">
                    
                    Feature plan for companies
                    <span class="close-modal" @click="disMissModal()"> X </span>
                </div>
                <div class="modal-body">

                    <div class="card">
                        <div class="card-header">
                            Upload an image/video to display.
                        </div>
                        <div class="card-body">
                            <div class="text-center" v-if="Error.visible">
                                <div class="alert alert-danger">
                                    {{Error.error_text}}
                                </div>
                            </div>
                            <div class="text-center" v-if="Success.visible">
                                <div class="alert alert-success">
                                    {{Success.success_text}}
                                </div>
                            </div>
                            <div class="text-center">
                                <img :src="file.src" alt="" v-if="file.type === 0" height="150px">
                                <video :src="file.src" v-else height="150px" controls></video>
                            </div>
                            <div class="text-center mt-2 mb-2">
                                <button class="btn btn-success" @click.prevent="$refs.uploaderTrigger.click()">
                                    <span v-if="!file.default">Change file</span>
                                    <span v-else>+ Add file </span>
                                </button>
                            </div>
                        </div>
                        <div class="card-footer mb-2 text-center">
                            <form action="">
                                <input class="input" type="file" style="display:none" 
                                @change.prevent="uploadFile($event)" ref="uploaderTrigger" />
                                <button class="btn btn-primary "
                                 @click.prevent="uploadFeaturePlan()">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            Plan details
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <h4><strong>What can I get from this plan?</strong></h4>
                                <p>
                                    Feature plan allows your company to be showcased and displayed
                                    at the front page of the platform. This allows you to have 
                                    far outreach to the buyers coming to visit our platform. 
                                </p>
                            </div>
                            <div class="row">
                                <h4><strong>How much do I pay ?</strong></h4>
                                <p>
                                    As of now this plan is free for limited time. 
                                </p>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="modal-footer">
                    
                    
                </div>

            </div>
        </div>
    </div>

    <!-- <div class="modal bd-example-modal-lg" tabindex="-1" role="dialog" style="display:block;">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                
            </div>
        </div>
    </div> -->


</template>

<script>
    import Server from "../ServerRequest";
    import Error from "../classes/Error";
    import Success from "../classes/Success";
    export default {
        data() {
            return {
                name: 'feature plan',
                version: 1,
                Server: new Server(),
                Error: new Error(),
                Success: new Success(),
                file: {
                    src: "/atoc_assets/images/upload_logo_icon.jpg",
                    type: 0,
                    default: 1
                },
            }
        },
        methods: {
            uploadFile(event) {
                this.Error = new Error();
                this.Success = new Success();
                console.log('event is ', event);
                var file = event.target.files[0];
                if (!this.isValidFile(file.type)) {
                    this.Error.error_text = "Invalid file, only image or video is allowed";
                    this.Error.visible = true;
                    return;
                }
                this.file.type = this.isImage(file.type) === true ? 0 : 1
                var req = new FormData();
                req.append('comp_id', this.Company.guest_id);
                req.append('comp_token', this.Company.guest_token);
                req.append('file_src', file);
                req.append('file_type', this.file.type);

                this.Server.setRequest(req);
                this.Server.previewFile(event.target, this.previewFile);
            },
            previewFile(file) {
                this.file.src = file.target.result;
                this.file.default = false;
            },
            uploadFeaturePlan() {

                this.Server.serverRequest('/api/comp/package/new/featured', this.featureDone, this.showError);
            },
            featureDone(data) {
                this.Success.success_text = data[0];
                this.Success.visible = true;
            },
            showError(error) {
                this.Error.error_text = error;
                this.Error.visible = true;
            },
            isValidFile(type) {
                if (this.isImage(type) || this.isVideo(type))
                    return true;
                return false;
            },
            isImage(type) {
                switch (type) {
                    case "image/jpeg":
                        return true;
                    case "image/jpg":
                        return true;
                    case "image/png":
                        return true;
                    default:
                        return false;
                }
            },
            isVideo(type) {
                switch (type) {
                    case "video/mp4":
                        return true;
                    case "video/mpeg4":
                        return true;
                    case "video/webm":
                        return true;
                    default:
                        return false;
                }
            },
            disMissModal() {
                this.$emit('close-featured-plan-model');
            },
        },
        props: ["Company"]
    }

</script>
