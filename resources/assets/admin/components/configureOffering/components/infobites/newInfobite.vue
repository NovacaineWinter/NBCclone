
<template>
    <div class="modal is-active newInfobite">
        <div class="modal-background"></div>

        <div class="modal-content box section">

            <div class="level">
                <p class="title">New Infobite</p>
                <div class="button is-danger is-outlined is-pulled-right" @click="$emit('closeModal')">Cancel</div>
            </div>

            <div @keydown="theErrors.clear($event.target.name)">
            <!-- Title Input -->
                <input 
                    type="text" 
                    name="title" 
                    placeholder="title" 
                    class="input" 
                    :class="{'is-danger':theErrors.has('title'), 'is-info':!theErrors.has('title')}"
                    v-model="theTitle">
                <span v-if="theErrors.has('title')" class="help is-danger" v-text="theErrors.get('title')"></span>
            
            <!-- Description input -->
                <textarea 
                    name="description" 
                    class="textarea is-info"
                    :class="{'is-danger':theErrors.has('description'), 'is-info':!theErrors.has('description')}"
                    v-model="theDescription">
                </textarea>
                <span v-if="theErrors.has('description')" class="help is-danger" v-text="theErrors.get('description')"></span>


            </div><!--   End of keydown field areas -->

        <!-- File Input -->
            <div class="file">
                <label class="file-label">
                    <input class="file-input is-info" type="file" @change="fileChange">
                    <span class="file-cta">
                        <span class="file-label">
                            Choose an Image...
                        </span>
                    </span>
                    <span class="file-name">
                      
                    </span>
                </label>
            </div>
            <span v-if="theErrors.has('file')" class="help is-danger" v-text="theErrors.get('file')"></span>

        <!-- Submit -->
            <div class="button is-info is-outlined is-pulled-right" @click="createNewInfobite" :disabled="theErrors.any()">Create</div>


        </div>
        <button class="modal-close is-large" aria-label="close" @click="$emit('closeModal')" ></button>
    </div>
   
</template>

<script>
    import endpoints from '../../endpoints.js';   //relative path - beware
    import Errors from '../../../../setup/externalClasses.js';
    export default {
    	
        methods:{

            fileChange(event){
                this.theErrors.clear('file');                
                this.theFile = event.target.files[0];                               
            },
            
            createNewInfobite() {

                if(!this.theErrors.any()){

                    let bodyFormData = new FormData();

                    bodyFormData.append('title',this.theTitle);
                    bodyFormData.append('model',this.theModel);
                    bodyFormData.append('description',this.theDescription);
                    bodyFormData.append('target',this.theTarget.id);
                    bodyFormData.append('file',this.theFile);

                    axios.post(
                        endpoints.newInfobite,
                        bodyFormData,
                        { 
                            headers: {
                                'Content-Type': 'multipart/form-data' 
                            }
                        })
                        .then(response => {this.theTarget.infobites.push(response.data);this.$emit('closeModal');})
                        
                        .catch(error => {this.theErrors.record(error.response.data.errors);});
                }
            }
        },

        data: function() {
		    return{
                theErrors: new Errors,
		        theDescription:'',
                theTitle:'',
                theFile:{},
                theModel:this.modelname,
                theTarget:this.targetinfo                                
            }
	    },

	    props: [
            'modelname',
            'targetinfo'
	    ], 

    };
</script>



<style lang="scss">
    //@import '~sass/variables';
    .newInfobite{
        .modal-content{
            input,textarea,button{
                margin-top:20px;
                margin-bottom:20px;
            }
        }
    }
</style>

		