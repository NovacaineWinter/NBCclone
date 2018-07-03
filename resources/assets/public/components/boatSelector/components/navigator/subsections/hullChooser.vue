		
<template>
	<div class="panel-block">
		<div class="container">

	        <div class="tile is-vertical is-ancestor">

	            <div class="tile is-parent">
	                <article class="tile is-child notification is-warning">
	                    <p class="title">
	                    	Choose a Hull Style 
	                    	<router-link 
	                    		to="/help-me-choose" 
	                    		@click.native="helpChooseHull" 
	                    		class="button is-pulled-right">
	                    			Help me choose
	                    	</router-link></p>
	                </article>
	            </div>


	            <div class="tile">
	                
	                <detail-card v-for="info in shared.raw.hull_styles" @chosen="$emit('chosen',info)" :key="info.id" :info="info"></detail-card>

	            </div>    

	        </div> 
	     
	    </div>
    </div>
   
</template>

<script>

    import boatSelector from '../../../sharedState.js';

    export default {

        methods:{
        	helpChooseHull(){
        		this.shared.chosen.helpMeChoose.topic = 'Hull Style';
        		this.shared.chosen.helpMeChoose.items = this.shared.raw.hull_styles;
        			//unfiltered as no choices have been made as of yet...
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
   //@import "resources/assets/sass/variables.scss";

</style>

		