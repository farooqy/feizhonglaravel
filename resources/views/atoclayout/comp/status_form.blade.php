<div class="card-body">
    <div class="card-header">
        Post status
    </div>
    <div class="card-body">
        <div class="row">
            <img :src="getHostProfile()" alt="" class="mb-3" 
            style="width:50px; border-radius:50%;"> 
            <span class="mt-2 ml-2">
                @{{shortenName(getHostName())}}
            </span>
        </div>
        <div class="row">
            <textarea name="" id="" rows="3" class="postStatusTextArea"  
            placeholder="Share your product or company info with your customers" v-model="Status.status_content"
            style="resize: none;border: thin solid darkgrey;width: 100%; padding:10px;"></textarea>
        </div>
        <div class="row" v-show="false">
             <input type="file" name="status_file" ref="status_file" @change.prevent="prepareStatusFile($event)">
        </div>
        <div class="row">
             <img v-for="file in Status.status_files" :src="file.file_src" class="post_image_preview" :alt="file.alt"
                style="height:60px;width:60px;background-image:url(olympus_assets/img/danger.png); border:thin solid gray"
                @click.prevent="removeMe(file.index, 'status')" />
            
        </div>
        <div class="row" v-if="Status.status_files.length > 0">
            <span class="hint">* click on the image to remove</span>
        </div>
        <div class="row mt-3 ml-1">
            <button @click.prevent="$refs.status_file.click()" class="btn btn-secondary mr-1">
                <i class="fas fa-camera pointer" style="font-size:30px;cursor:pointer"></i>
            </button>
            <button :class="requestLoading ? 'btn btn-secondary' : 'btn btn-primary'" @click.prevent="preparePostStaus()">Post
                Status
                <span class="spinner-border text-light" role="status" v-if="requestLoading">
                    <span class="sr-only">Loading...</span>
                </span>
            </button>

        </div>
    </div>
    {{-- <form>
        <div class="author-thumb">
            <img :src="getHostProfile()" alt="author" style="" class="compProfilePostStatusThubmnail">
        </div>
        <div class="form-group with-icon label-floating is-empty">
            <label class="control-label">
            </label>
            <textarea class="form-control" placeholder="Share customers with your product / company"
                v-model="Status.status_content"></textarea>
        </div>
        <div class="form-group" v-show="false">
            <input type="file" name="status_file" ref="status_file" @change.prevent="prepareStatusFile($event)">
        </div>
        <div class="form-group">
            <img v-for="file in Status.status_files" :src="file.file_src" class="post_image_preview" :alt="file.alt"
                style="height:60px;width:60px;background-image:url(olympus_assets/img/danger.png)"
                @click.prevent="removeMe(file.index, 'status')" />
            <div class="">
                <span class="hint">Click on the photo to remove it</span>
            </div>
        </div>
        <div class="add-options-message">
            <span @click.prevent="$refs.status_file.click()">
                <i class="fas fa-camera pointer" style="font-size:30px;cursor:pointer"></i>
            </span>


            <button class="btn btn-primary btn-md-2" @click.prevent="preparePostStaus()">Post
                Status</button>

        </div>

    </form> --}}
</div>
