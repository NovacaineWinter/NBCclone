<template>

    <div class="section squarewhitesection">
        <h1 class="has-text-centered title">Gallery</h1>

        <div class="columns is-multiline">
            <div class="column is-4" v-for="image in imported.chosen.detail.images">
                <div class="card" @click="launchPopover(image)">
                    <div class="card-image">
                        <figure class="image is-4by3" :style="stylingRule(image)"></figure>
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
    import boatSelector from '../../sharedState.js';
    //import endpoints from '../endpoints.js';   //relative path - beware

    export default {
        /*
        mounted() {         
            
            axios.get(endpoints.someEndpoint)            
                .then(handleResponse.bind('data',this))

                .catch(function (error) {
                    console.log(error);            
                });

                function handleResponse(context,response){
                    //context is an alias for 'this'
                    context.someDataOnThis = response.data;
                }
        },
    */
        methods:{
            launchPopover(image){
                this.selectedImage =image,
                this.modalShowing = true 
            },
            stylingRule(image){
                return "background-image:url('"+image.src+"');";
            }
        },

/*
        computed:{
            someNumber(){
                return 2+3;
            },          
        },
*/

        data: function() {
            return{
                imported:boatSelector, 
                selectedImage:'',      
                modalShowing:false     
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

</style>