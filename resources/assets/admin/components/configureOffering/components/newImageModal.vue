		
<template>
<div class="modal is-active box">
	<div class="modal-background"></div>
	<div class="modal-content box">
		<h1>new image</h1>
		<input type="file" class="form-control" @change="fileChange">
	</div>
	<button class="modal-close is-large" @click="$emit('closeModal')" aria-label="close"></button>
</div>	
   
</template>

<script>

    import endpoints from '../endpoints.js';   //relative path - beware

    export default {

        methods:{
            fileChange(event){
                this.attachment.file = event.target.files[0];

                let bodyFormData = new FormData();

				bodyFormData.append('file',this.attachment.file);
				bodyFormData.append('model',this.theModel);
				bodyFormData.append('target',this.theInfo.id);

				axios.post(
				    endpoints.newImage,
				    bodyFormData,
				    { 
				    	headers: {
				    		'Content-Type': 'multipart/form-data' 
				    	}
				    })
				    .then(hasBeenSuccess.bind('data',this))
				    
				    .catch(notBeenSuccess.bind('data',this));

				    function hasBeenSuccess(context,response){
				    	context.$emit('imageUploadOk',response.data);
				    }
				    function notBeenSuccess(context,response){
				    	context.$emit('imageUploadOk');
				    }
            }, 
        },


        data: function() {
		    return{
		        attachment:{file: null},
		       	theInfo:this.targetInfo,
		        theModel:this.targetModel,
		      }
	    },

	    props: [
		    'targetInfo',
		    'targetModel',
	    ], 

    };
</script>



<style lang="scss">
    @import '~sass/variables';

</style>

		