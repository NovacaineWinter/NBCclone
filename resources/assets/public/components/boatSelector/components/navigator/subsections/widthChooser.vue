		
<template>
	<div class="panel-block">
		<div class="container">

	        <div class="tile is-vertical is-ancestor">

	            <div class="tile is-parent">
	                <article class="tile is-child notification is-warning">
	                    <p class="title">
	                    	Choose a Width 
<!-- 
	                    	<router-link 
	                    		to="/help-me-choose" 
	                    		@click.native="helpMeChoose" 
	                    		class="button is-pulled-right">
	                    			Help me choose
	                    	</router-link>
 -->
	                    </p>
	                </article>
	            </div>


	            <div class="tile">
	                
	                <number-card v-for="info in widths" @chosen="$emit('chosen',info)" :key="info.id" :info="info"></number-card>

	            </div>    

	        </div> 
	     
	    </div>
    </div>
   
</template>

<script>

    import boatSelector from '../../../sharedState.js';

    export default {
        mounted() {           

        },

        methods:{
        	helpMeChoose(){
        		this.shared.chosen.helpMeChoose.topic = 'Width';
        		this.shared.chosen.helpMeChoose.items = this.widths;
        	}
        },

        data() {
		    return{
                shared:boatSelector,                
		      }
	    },

	    computed:{

	    	widths(){
	    		let first 	= 	_.filter(this.shared.raw.configurations, {boat_model_id:this.shared.chosen.choices.boat_model.id});
	    		let second 	= 	_.uniqBy(first	,'width_id');	//removes the chaff - leaving only the unique widths
	    		let third 	=	_.map(second	,'width_id');	//this now results in an array of ids e.g [1,2] 
	    		let result =	[];
	    		third.forEach(collateWidths.bind('output',result).bind('allModels',this.shared.raw.beams));
	    		
	    		function collateWidths(output,allModels,idToFind){
	    			output.push(
	    				_.filter(allModels, {id:idToFind})[0]
	    			);	    			
	    		}

	    		return result;
	    	}
	    },

    };
</script>



<style lang="scss">
   // @import "resources/assets/sass/variables.scss";

</style>

		