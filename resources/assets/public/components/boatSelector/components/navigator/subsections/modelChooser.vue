		
<template>
	<div class="panel-block">
		<div class="container">

	        <div class="tile is-vertical is-ancestor">

	            <div class="tile is-parent">
	                <article class="tile is-child notification is-warning">
	                    <p class="title">Choose a Model
	                    	<router-link 
	                    		to="/help-me-choose" 
	                    		@click.native="helpChooseModel" 
	                    		class="button is-pulled-right">
	                    			Help me choose
	                    	</router-link></p>
	                </article>
	            </div>


	            <div class="tile">
	                <detail-card v-for="info in models" @chosen="$emit('chosen',info)" :key="info.id" :info="info"></detail-card>
	            </div>    

	        </div> 
	     
	    </div>
    </div>
   
</template>

<script>


    import boatSelector from '../../../sharedState.js';

    export default {

		methods:{
        	helpChooseModel(){
        		this.shared.chosen.helpMeChoose.topic = 'Model';
        		this.shared.chosen.helpMeChoose.items = this.models;
        	}
        },

        computed:{
        	models(){
        		return _.filter(this.shared.raw.boat_models, ['hull_style_id',this.shared.chosen.choices.hull_style.id]);
        	}
        },
        data() {
		    return{  
		        shared:boatSelector,
		      }
	    },

    };
</script>



<style lang="scss">
    @import "resources/assets/sass/variables.scss";

</style>

		