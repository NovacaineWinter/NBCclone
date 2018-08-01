		
<template>
    <section class="configureModelComplete" id="configureModelCompleteID">
    <section style="background-color:#cccccc;margin: 0px -24px;">&nbsp;</section>
    <section class="section">
        <p class="has-text-centered title">Hull Style</p>
            <select v-model="imported.modelToEdit.hull_style_id" @change="saveData">
                <option disabled value="">Please select one</option>
                <option v-for="hull in imported.raw.hull_styles" :key="hull.id" :value="hull.id">{{ hull.name }}</option>
            </select>

    </section>
    <!-- Description Manager -->
    <section class="section">
        <p class="title has-text-centered">Descriptions</p>

            <div class="level">
                <h1 class="title">Editing: {{ imported.modelToEdit.name }}</h1>
                <div class="button is-pulled-right" @click="$emit('pleaseExit','1');">Exit</div>
            </div>
            
            <div class="">
                <h1>name:</h1>
                <input @input="saveData" type="text" v-model="imported.modelToEdit.name">
            </div>
            <div class="columns">
                <div class="column">
                    <p class="subtitle">Comparison:</p>
                    <textarea @input="saveData" v-model="imported.modelToEdit.comparison"></textarea>
                </div>
                <div class="column">
                    <p class="subtitle">Short Summary:</p>
                    <textarea @input="saveData" v-model="imported.modelToEdit.short_description"></textarea>
                </div>
                <div class="column">
                    <p class="subtitle">Description:</p>
                    <textarea @input="saveData" v-model="imported.modelToEdit.long_description"></textarea>
                </div>
            </div>
        </section>
    
    <section style="background-color:#cccccc;margin: 0px -24px;">&nbsp;</section> 
    
    <!-- Image Manager -->
    <section class="section">
        <p class="title has-text-centered">Images</p>
        <div class="columns is-multiline">

            <div class="column is-one-quarter imagepicker" v-for="image in imported.modelToEdit.images">
                <div class="card" v-bind:class="{ 'primary-image-card': image.id == imported.modelToEdit.primary_image_id}">
                    <header class="card-header">
                        <p v-if="image.id == imported.modelToEdit.primary_image_id" class="card-header-title has-text-centered" style="display:block;">
                            Primary
                        </p>        
                    </header>

                    <div class="card-image card-content">
                        <figure class="image is-4by3 nosquash" :style="'background-image:url('+image.src +')'">
                            <!-- <img :src="image.src" alt="image">   -->                      
                        </figure>
                        <input type="radio" @input="saveData" class="invisibleInput" :id="image.id" name="primaryImage" :value="image.id" v-model="imported.modelToEdit.primary_image_id" />
                    </div>

                    <footer class="card-footer" v-show="image.id != imported.modelToEdit.primary_image_id">
                        <label class="imagelabel" :for="image.id">
                            <a  class="card-footer-item primary-button half-card-button">Make Primary</a>
                        </label>
                        <a class="card-footer-item half-card-button delete-button" @click="deleteImage(image.id)">Delete</a>
                    </footer>

                    <footer class="card-footer" v-show="image.id != imported.modelToEdit.primary_image_id">
                        <a class="card-footer-item">
                            In Carousel?&nbsp;
                            <input type="checkbox" @change="saveImage(image.id)" v-model="image.is_in_carousel">
                        </a>
                    </footer>

                </div>
            </div>



            <div class="column is-one-quarter">
                <div class="button is-child" @click="newImageModalOpen=true">Add New Image +</div>  
            </div>
        </div>
    </section>



<!-- File Upload -->
    <section style="background-color:#cccccc;margin: 0px -24px;">&nbsp;</section> 
    
    <section class="section">
        <div class="columns has-text-centered">
            <div class="column is-4">&nbsp;</div>
            <div class="column is-4">
                <p class="title">Files &amp; Downloads</p>
                <a class="button is-info is-outlined" @click="newFileModalOpen=true">+ Add new file</a>

                 <table class="table is-striped is-fullwidth">
                    <thead>
                        <tr>
                            <th>Document</th>
                            <th></th>
                            <th></th>                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="doc in imported.modelToEdit.files">
                            <td>{{doc.description}}</td>
                            <td><a class="button is-primary is-outlined" :href="doc.src">Download</a></td>
                            <td><a class="button is-danger is-outlined" @click="deleteFile(doc.id)">Delete</a></td>
                        </tr>
                    </tbody>
                </table>


            </div>
            <div class="column is-4">&nbsp;</div>
        </div>
    </section>



    <section style="background-color:#cccccc;margin: 0px -24px;">&nbsp;</section> 


    <section class="section">
        <manage-info-bites :targetinfo="this.imported.modelToEdit" modelname="model"></manage-info-bites>
    </section>


    <save-successful-banner v-if="successfullySaved" @enough="successfullySaved=false"></save-successful-banner>
    <save-unsuccessful-banner v-if="unsuccessfullySaved" @enough="unsuccessfullySaved=false"></save-unsuccessful-banner>

    <new-image-modal 
        v-if="newImageModalOpen" 
        @closeModal="newImageModalOpen=false" 
        targetModel="model" 
        :targetInfo="imported.modelToEdit"
        @imageUploadOk="imageUploaded"
        @imageUploadNotOk="imageNotUploaded">        
    </new-image-modal>

    <new-file-modal
        v-if="newFileModalOpen" 
        @closeModal="newFileModalOpen=false" 
        targetModel="model" 
        :targetInfo="imported.modelToEdit"
        @fileUploadOk="fileUploaded"
        @fileUploadNotOk="fileNotUploaded">        
    </new-file-modal>

    </section>
</template>


<script>

    import endpoints from '../../endpoints.js';
    import shared from '../../sharedState.js';
    import _ from 'lodash';

    export default {

        methods:{

            saveData: _.debounce(function() {this.save();}, 1000),

            save(){
                axios.get(endpoints.updateModels, {
                    params: {
                        model:'model',
                        target: this.targetData,
                        desc:this.description
                      }                    
                  })            
                .then(this.saveSuccessful)

                .catch(this.saveUnsuccessful);        
            },
            saveSuccessful() {
                this.successfullySaved=true;
            },
            saveUnsuccessful() {
                this.unsuccessfullySaved=true;
            },

            deleteImage(target){
                if(confirm('Delete Image?')){

                    axios.get(endpoints.deleteImage, {
                        params: {
                            target_img:target,
                          }                    
                      })            
                    .then(this.imageDeleted(target))

                    .catch(this.saveUnsuccessful); 


                }
            },


            saveImage(img_id){
                let img =_.filter(this.imported.modelToEdit.images,{id:img_id})[0];
                axios.get(endpoints.updateImage, {
                    params: {
                        target:img,
                      }                    
                  })            
                .then(this.saveSuccessful)

                .catch(this.saveUnsuccessful);     
            },

            imageDeleted(target){
                this.imported.modelToEdit.images=_.reject(this.imported.modelToEdit.images, ['id', target]);
                this.saveSuccessful;
            },



            fileDeleted(target){
                this.imported.modelToEdit.files=_.reject(this.imported.modelToEdit.files, ['id', target]);
                this.saveSuccessful;
            },
            deleteFile(target){
                if(confirm('Delete File?')){

                    axios.get(endpoints.deleteFile, {
                        params: {
                            target_file:target,
                          }                    
                      })            
                    .then(this.fileDeleted(target))

                    .catch(this.saveUnsuccessful);
                }
            },
            fileUploaded(newFile){
                this.imported.modelToEdit.files.push(newFile);               
                this.newFileModalOpen = false;
                this.saveSuccessful();
            },
            fileNotUploaded(){
                this.newFileModalOpen = false;
                this.saveUnsuccessful();
            },



            changedPrimaryImage(id){
                axios.get(endpoints.updatePrimaryImage, {
                    params: {
                        model:'hull',
                        image_id:id,
                        target: this.targetData,
                      }                    
                  })            
                .then(this.saveSuccessful)

                .catch(this.saveUnsuccessful);     
            },

            imageUploaded(newImage){
                this.imported.modelToEdit.images.push(newImage);               
                this.newImageModalOpen = false;
                this.saveSuccessful();
            },
            imageNotUploaded(){
                this.newImageModalOpen = false;
                this.saveUnsuccessful();
            },

            
        },

        computed:{
        	targetData(){
                return {
                    id:this.imported.modelToEdit.id,
                    comparison:this.imported.modelToEdit.comparison,
                    name:this.imported.modelToEdit.name,
                    long_description:this.imported.modelToEdit.long_description,
                    short_description:this.imported.modelToEdit.short_description,
                    hull_style_id:this.imported.modelToEdit.hull_style_id,
                    primary_image_id:this.imported.modelToEdit.primary_image_id,
                }                
        	},        	
        },

        data: function() {
		    return{
		        imported:shared,
                successfullySaved:false,
                unsuccessfullySaved:false, 
                newImageModalOpen:false,      
                newFileModalOpen:false                    
		      }
	    },
/*
	    props: [
		    'propsPassed'
	    ], */

    };
</script>



<style lang="scss">
    @import '~sass/variables';
    .configureModelComplete{
        textarea{
            width:100%;
            height:300px;
        }


        .imagepicker{
            .invisibleInput{
                visibility:hidden;
            }
            
            .card{
                width:100%;
            }
            .primary-image-card{
                background-color: $brand-success;
            }

            .delete-button{
                background-color: $brand-danger;  
                color:$text-light; 
                cursor:pointer;               
            }
            .primary-button{
                background-color: $brand-warning;  
                color:$text-dark;
                cursor:pointer;
            }

        }

    }
</style>

		