		
<template>
	<section>
		<h1 class="title has-text-centered">Generic Infobites</h1>

	    <section class="section">
	        <manage-info-bites :targetinfo="imported.raw.generic[0]" modelname="generic"></manage-info-bites>
	    </section>
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

		