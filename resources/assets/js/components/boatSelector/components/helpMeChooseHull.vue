		
<template>
<section class="container section whitecontainer">

        <div class="tile is-vertical is-ancestor">

            <div class="tile is-parent">
                <article class="tile is-child notification is-warning">
                    <p class="title">How To Choose a Hull Style</p>
                    <p class="subtitle">Each style of hull has its own unique characteristics, find out which one is perfect for you.</p>
                </article>
            </div>


            <div class="tile">
                <!-- <hull-option-summary v-for="hull in hulls" tag="hull.id"></hull-option-summary> -->
                <boat-selector></boat-selector>
            </div>
            

            <div class="tile is-parent">
                <router-link tag="article" to="/contact" class="tile is-child notification is-warning box">
                    <p class="title">Still Unsure? Get in touch with us</p>
                    <p class="subtitle">The friendly team here have unrivalled experience in boating and will be more than happy to guide you.</p>
                    <div class="button is-pulled-right">Contact Us ></div>
                </router-link>
            </div> 

        </div> 
     
    </section>

</template>

<script>

    import endpoints from '../endpoints.js';

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
              }
        },

    };
</script>



<style lang="scss">
    @import "resources/assets/sass/variables.scss";

</style>

		