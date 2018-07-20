	
<template>

    <section class="container section whitecontainer">

        <div class="tile is-vertical is-ancestor">

            <div class="tile is-parent">
                <article class="tile is-child notification is-warning">
                    <p class="title">Our Range Of Styles</p>
                    <p class="subtitle">Each exquisitely tailored to suit your needs
                        <router-link 
                            to="/help-me-choose" 
                            @click.native="helpChooseHull" 
                            class="button is-pulled-right">
                                Help me choose
                        </router-link></p>

                </article>
            </div>


            <div class="tile">



                <detail-card 
                    v-for="info in shared.raw.hull_styles" 
                    @chosen="hullChosen" 
                    :key="info.id" 
                    :info="info">
                </detail-card>

            </div>
            

            <div class="tile is-parent">
                <router-link tag="article" to="/contact-us" class="tile is-child notification is-warning box">
                    <p class="title">Can't decide? Let us help you find the ideal boat</p>
                    <p class="subtitle">Contact Us - we love talking about boats and would love to help you find your perfect match</p>
                    <div class="button is-pulled-right">Contact Us></div>
                </router-link>
            </div> 

        </div> 
     
    </section>
   
</template>


<script>

    import endpoints from '../../endpoints.js';
    import boatSelector from '../../sharedState.js';

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
                    context.shared.raw.hull_styles = response.data;
                }
        },

        methods:{
            hullChosen(hull){
                this.shared.chosen.choices.hull_style=hull;
                this.$router.push('/range');
            },
            helpChooseHull(){
                this.shared.chosen.helpMeChoose.topic = 'Hull Style';
                this.shared.chosen.helpMeChoose.items = this.shared.raw.hull_styles;
            }
        },

        data() {
		    return{
                shared:boatSelector,                
		      }
	    },

    };
</script>
