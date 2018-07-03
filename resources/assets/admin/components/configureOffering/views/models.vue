<template>

	<section class="section">
		<h1 class="has-text-centered title">Configure Models</h1>
		
		<model-style-card 
			v-for="info in this.imported.raw.boat_models" 
			:key="info.id" 
			:info="info"
			@chosenModelToEdit="chosenModel">			
		</model-style-card>
		<div id="editarea"></div>
		<configure-model v-if="imported.modelToEdit!=''" @pleaseExit="imported.modelToEdit=''"></configure-model>
		
	</section>

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
        	chosenModel(target){
        		this.imported.modelToEdit = target;
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
