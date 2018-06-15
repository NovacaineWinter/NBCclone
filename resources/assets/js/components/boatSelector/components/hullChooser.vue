		
<template>
	<div class="panel-block">
		<div class="container">

	        <div class="tile is-vertical is-ancestor">

	            <div class="tile is-parent">
	                <article class="tile is-child notification is-warning">
	                    <p class="title">Choose a Hull Style<router-link to="/help-me-choose-hull-style" class="button is-pulled-right">Help me choose</router-link></p>
	                </article>
	            </div>


	            <div class="tile">
	                
	                <hull-style-card v-for="hull in hullStyles" @hullChosen="$emit('hullChosen',hull)" :key="hull.id" v-bind:hull="hull">{{hull}}</hull-style-card>

	            </div>    

	        </div> 
	     
	    </div>
    </div>
   
</template>

<script>

    import endpoints from '../endpoints.js';

    import boatSelector from '../sharedState.js';

    export default {
        mounted() {            
            
            /*had to bind the this object to the promise function, seems like a ballache but its the only way of accessing this.hullStyles on mounting*/
            
            axios.get(endpoints.hullStyles)            
                .then(handleResponse.bind('data',this))

                .catch(function (error) {
                    console.log(error);            
                });

                function handleResponse(context,response){
                    /*context is an alias for this*/
                    context.hullStyles = response.data;
                }
        },



        data() {
		    return{
		        hullStyles:[],
                progress:boatSelector,                
		      }
	    },

    };
</script>



<style lang="scss">
    @import "resources/assets/sass/variables.scss";

</style>

		