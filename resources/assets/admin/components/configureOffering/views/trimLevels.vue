		
<template>
	<div>
		<h1 class="has-text-centered title">Configure Trim Levels</h1>
		
		<trim-level-card 
			v-for="info in this.imported.raw.trim_levels" 
			:key="info.id" 
			:info="info"
			@chosenTrimLevelToEdit="chosenTrim">			
		</trim-level-card>
		
		<div id="editarea"></div>
		<configure-trim v-if="imported.trimToEdit!=''" @pleaseExit="imported.trimToEdit=''"></configure-trim>

		<!-- <new-hull-style-modal v-if="imported.newHullModal"></new-hull-style-modal> -->
	</div>
</template>

<script>

    import endpoints from '../endpoints.js';
	import shared from '../sharedState.js';

    export default {

        mounted() {        	
            
            this.loadContent();
        },

        methods:{
         	loadContent(){

        		axios.get(endpoints.allData)            
	                .then(handleResponse.bind('data',this))

	                .catch(function (error) {
	                    console.log(error);            
	                });

	                function handleResponse(context,response){
	                    /*context is an alias for this*/
	                    context.imported.raw = response.data;
	                }        		
        	},
        	chosenTrim(target){
        		this.imported.trimToEdit = target;
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
		        imported:shared,		        
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

		