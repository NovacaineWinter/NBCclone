		
<template>
<div class="modal is-active box">
	<div class="modal-background"></div>
	<div class="modal-content box">
		<h1>New File</h1>
		<input type="file" class="form-control" @change="fileChange">
		<input type="text" v-model="description" placeholder="Description..">
		<div class="button is-info is-outlined" @click="uploadFile">Upload</div>
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
            }, 

            uploadFile(){
            	let bodyFormData = new FormData();

				bodyFormData.append('file',this.attachment.file);
				bodyFormData.append('model',this.theModel);
				bodyFormData.append('target',this.theInfo.id);
				bodyFormData.append('desc',this.description);

				axios.post(
				    endpoints.newFile,
				    bodyFormData,
				    { 
				    	headers: {
				    		'Content-Type': 'multipart/form-data' 
				    	}
				    })
				    .then(hasBeenSuccess.bind('data',this))
				    
				    .catch(notBeenSuccess.bind('data',this));

				    function hasBeenSuccess(context,response){
				    	context.$emit('fileUploadOk',response.data);
				    }
				    function notBeenSuccess(context,response){
				    	context.$emit('fileUploadNotOk');
				    }
            }
        },


        data: function() {
		    return{
		        attachment:{file: null},
		       	theInfo:this.targetInfo,
		        theModel:this.targetModel,
		        description:''
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

		