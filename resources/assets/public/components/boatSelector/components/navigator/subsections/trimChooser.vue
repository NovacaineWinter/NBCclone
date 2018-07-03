		
<template>
	<div class="panel-block">
		<div class="container">

	        <div class="tile is-vertical is-ancestor">

	            <div class="tile is-parent">
	                <article class="tile is-child notification is-warning">
	                    <p class="title">
	                    	Choose a Trim Level
	                    	<router-link 
	                    		to="/help-me-choose" 
	                    		@click.native="helpMeChoose" 
	                    		class="button is-pulled-right">
	                    			Help me choose
	                    	</router-link></p>
	                </article>
	            </div>


	            <div class="tile">
	                
	                <detail-card v-for="info in trimLevels" @chosen="$emit('chosen',info)" :key="info.id" :info="info"></detail-card>

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
        		this.shared.chosen.helpMeChoose.topic = 'Trim Level';
        		this.shared.chosen.helpMeChoose.items = this.trimLevels;
        	}
        },

        data() {
		    return{
                shared:boatSelector,                
		      }
	    },

	    computed:{

	    	trimLevels(){
	    		let first 	= 	_.filter(this.shared.raw.configurations, {
	    			boat_model_id:this.shared.chosen.choices.boat_model.id,
	    			width_id:this.shared.chosen.choices.beam.id,
	    			length_id:this.shared.chosen.choices.loa.id
	    		});
	    		let second 	= 	_.uniqBy(first	,'trim_level_id');	//removes the chaff - leaving only the unique widths
	    		let third 	=	_.map(second	,'trim_level_id');	//this now results in an array of ids e.g [1,2] 
	    		let result =	[];
	    		third.forEach(collateWidths.bind('output',result).bind('allTrimLevels',this.shared.raw.trim_levels));
	    		
	    		function collateWidths(output,allTrimLevels,idToFind){
	    			output.push(
	    				_.filter(allTrimLevels, {id:idToFind})[0]
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

		