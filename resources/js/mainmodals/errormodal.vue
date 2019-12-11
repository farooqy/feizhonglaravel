<template>
    <div class="modal fade show" id="main-popup-search" tabindex="-1" role="dialog" aria-labelledby="main-popup-search" 
    style="display: block; padding-right: 14px;background-color:rgba(5, 5, 5, 0.87)" aria-modal="true">
	<div class="modal-dialog modal-dialog-centered window-popup main-popup-search" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close" @click="disMissErroModal()">
				<svg class="olymp-close-icon"><use xlink:href="/olympus_assets/svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-body">
				
                <div class="card">
                    <div class="card-header"><h3  style="color:red">{{error_title}}</h3></div>
                    <div class="card-body" style="color: red;font-size: 20px;">
                        {{error_text}}
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
</template>
<script>
export default {
    data: function (){
        return {
            name: 'error modal',
            version: 1,
        }
    },
    methods: {
        disMissErroModal()
        {
            this.$emit('close-error-modal')
        }
    },
    props: ["error_title", "error_text", "visible"]
}
</script>