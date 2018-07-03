		
<template>
	<div>
		<h1 class="has-text-centered title">Configure Hull Styles</h1>
		
		<hull-style-card 
			v-for="info in this.imported.raw.hull_styles" 
			:key="info.id" 
			:info="info"
			@chosenHullToEdit="chosenHull">			
		</hull-style-card>
		<div id="editarea"></div>
		<configure-hull v-if="imported.hullToEdit!=''" @pleaseExit="imported.hullToEdit=''"></configure-hull>

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
        	chosenHull(target){
        		this.imported.hullToEdit = target;
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

		