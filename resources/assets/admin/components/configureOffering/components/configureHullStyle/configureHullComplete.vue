	
<template>
    <section class="configureHullComplete" id="configureHullCompleteID">
    <section style="background-color:#cccccc;margin: 0px -24px;">&nbsp;</section>    
    <div class="button is-pulled-right" @click="$emit('pleaseExit','1');">Exit</div>    
    
    

    
    <!-- Description Manager -->
    <section class="section">
        <p class="title has-text-centered">Descriptions</p>
        <div class="level">
            <h1 class="title">Editing: {{ imported.hullToEdit.name }}</h1>
            
        </div>
        
        <div class="">
            <h1>name:</h1>
            <input @input="saveData" type="text" v-model="imported.hullToEdit.name">
        </div>
        <div class="columns">
            <div class="column">
                <p class="subtitle">Comparison:</p>
                <textarea @input="saveData" v-model="imported.hullToEdit.comparison"></textarea>
            </div>
            <div class="column">
                <p class="subtitle">Short Summary:</p>
                <textarea @input="saveData" v-model="imported.hullToEdit.short_description"></textarea>
            </div>
            <div class="column">
                <p class="subtitle">Description:</p>
                <textarea @input="saveData" v-model="imported.hullToEdit.long_description"></textarea>
            </div>
        </div>
    </section>


    
    <!-- Image Manager -->
    <section class="section">
        <p class="title has-text-centered">Images</p>
        <div class="columns is-multiline">

            <div class="column is-one-quarter imagepicker" v-for="image in imported.hullToEdit.images">
                <div class="card" v-bind:class="{ 'primary-image-card': image.id == imported.hullToEdit.primary_image_id}">
                    <header class="card-header">
                        <p v-if="image.id == imported.hullToEdit.primary_image_id" class="card-header-title has-text-centered" style="display:block;">
                            Primary
                        </p>        
                    </header>

                    <div class="card-image card-content">
                        <figure class="image is-4by3 nosquash" :style="'background-image:url('+image.src +')'">
                            <!-- <img :src="image.src" alt="image">   -->                      
                        </figure>
                        <input type="radio" @input="saveData" class="invisibleInput" :id="image.id" name="primaryImage" :value="image.id" v-model="imported.hullToEdit.primary_image_id" />
                    </div>


                    <footer class="card-footer" v-show="image.id != imported.hullToEdit.primary_image_id">
                        <label class="imagelabel" :for="image.id">
                            <a  class="card-footer-item primary-button">Make Primary</a>
                        </label>
                        <a class="card-footer-item delete-button" @click="deleteImage(image.id)">Delete</a>                        
                    </footer>

                    <footer class="card-footer" v-show="image.id != imported.hullToEdit.primary_image_id">
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


    <section class="section">
        <info-bites :targetinfo="this.imported.hullToEdit" modelname="hull"></info-bites>
    </section>

    <save-successful-banner v-if="successfullySaved" @enough="successfullySaved=false"></save-successful-banner>
    <save-unsuccessful-banner v-if="unsuccessfullySaved" @enough="unsuccessfullySaved=false"></save-unsuccessful-banner>

    <new-image-modal 
        v-if="newImageModalOpen" 
        @closeModal="newImageModalOpen=false" 
        targetModel="hull" 
        :targetInfo="imported.hullToEdit"
        @imageUploadOk="imageUploaded"
        @imageUploadNotOk="imageNotUploaded">        
    </new-image-modal>

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
                        model:'hull',
                        target: this.targetData,
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
                let img =_.filter(this.imported.hullToEdit.images,{id:img_id})[0];
                axios.get(endpoints.updateImage, {
                    params: {
                        target:img,
                      }                    
                  })            
                .then(this.saveSuccessful)

                .catch(this.saveUnsuccessful);     
            },

            imageDeleted(target){
                this.imported.hullToEdit.images=_.reject(this.imported.hullToEdit.images, ['id', target]);
                this.saveSuccessful;
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
                this.imported.hullToEdit.images.push(newImage);               
                this.newImageModalOpen = false;
                this.saveSuccessful();
            },
            imageNotUploaded(){
                this.newImageModalOpen = false;
                this.saveUnsuccessful();
            }
            
        },

        computed:{
        	targetData(){
                return {
                    id:this.imported.hullToEdit.id,
                    comparison:this.imported.hullToEdit.comparison,
                    name:this.imported.hullToEdit.name,
                    long_description:this.imported.hullToEdit.long_description,
                    short_description:this.imported.hullToEdit.short_description,
                    primary_image_id:this.imported.hullToEdit.primary_image_id,
                }                
        	},        	
        },

        data: function() {
		    return{
		        imported:shared,
                successfullySaved:false,
                unsuccessfullySaved:false, 
                newImageModalOpen:false,                          
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
    .configureHullComplete{
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

		