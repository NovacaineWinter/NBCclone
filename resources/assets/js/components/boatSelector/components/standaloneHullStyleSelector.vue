	
<template>

    <section class="container section whitecontainer">

        <div class="tile is-vertical is-ancestor">

            <div class="tile is-parent">
                <article class="tile is-child notification is-warning">
                    <p class="title">Our Range Of Styles</p>
                    <p class="subtitle">Each exquisitely tailored to suit your needs<router-link to="/help-me-choose-hull-style" class="button is-pulled-right">Help me choose</router-link></p>

                </article>
            </div>


            <div class="tile">
                
                <hull-style-card-standalone v-for="hull in hullStyles" @hullChosen="hullChosen" :key="hull.id" v-bind:hull="hull">{{hull}}</hull-style-card-standalone>

            </div>
            

            <div class="tile is-parent">
                <router-link tag="article" to="/models" class="tile is-child notification is-warning box">
                    <p class="title">Can't decide? Let us help you find the ideal boat</p>
                    <p class="subtitle">Use our interactive selector tool to choose the right boat for you, set your budget, your style and see your options</p>
                    <div class="button is-pulled-right">Find My Ideal Boat ></div>
                </router-link>
            </div> 

        </div> 
     
    </section>
   
</template>


<script>

    import endpoints from '../endpoints.js';

    import boatSelector from '../sharedState.js';

    export default {
        mounted() {
            
            boatSelector.activeSelector='';
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

        methods:{
            hullChosen(hull){
                boatSelector.hull=hull;
            },
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
    @import "../../../../sass/variables.scss";

</style>

		