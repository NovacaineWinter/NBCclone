		
<template>

    <div class="section squarewhitesection">
        <h1 class="has-text-centered title">Gallery</h1>

        <div class="columns is-multiline">
            <div class="column is-4" v-for="image in target.images">
                <div class="card" @click="launchPopover(image)">
                    <div class="card-image">
                        <figure class="image is-4by3 nosquash" :style="stylingRule(image)"></figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal is-active" v-if="modalShowing">
            <div class="modal-background" @click="modalShowing=false"></div>
                <div class="modal-content">
                    <img :src="selectedImage.src" alt="selectedImage.description">
                </div>
            <button class="modal-close is-large" @click="modalShowing=false" aria-label="close"></button>
        </div>
    </div>

    
</template>
<script>
    import stockTarget from '../../../sharedState.js';
    
    export default {

        methods:{
            launchPopover(image){
                this.selectedImage =image,
                this.modalShowing = true 
            },
            stylingRule(image){
                return "background-image:url('"+image.src+"');";
            }
        },


        data: function() {
            return{
                target:stockTarget.info, 
                selectedImage:'',      
                modalShowing:false     
              }
        },


    };
</script>


<style lang="scss">
    @import '~sass/variables';

</style>