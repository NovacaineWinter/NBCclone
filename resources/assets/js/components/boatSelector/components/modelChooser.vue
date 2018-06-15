		
<template>
	<div class="panel-block">
		<div class="container">

	        <div class="tile is-vertical is-ancestor">

	            <div class="tile is-parent">
	                <article class="tile is-child notification is-warning">
	                    <p class="title">Choose a Model<router-link to="/help-me-choose-model" class="button is-pulled-right">Help me choose</router-link></p>
	                </article>
	            </div>


	            <div class="tile">
	                
	                <model-card v-for="model in models" @modelChosen="$emit('modelChosen',hull)" :key="model.id" :model="model">{{hull}}</model-card>

	            </div>    

	        </div> 
	     
	    </div>
    </div>
   
</template>

<script>


    import boatSelector from '../sharedState.js';

    export default {


        data() {
		    return{
		        models:boatSelector.info.models,  

		      }
	    },

    };
</script>



<style lang="scss">
    @import "resources/assets/sass/variables.scss";

</style>

		