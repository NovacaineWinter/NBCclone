		
<template>
    <section class="container section whitecontainer">

        <div class="tile is-vertical is-ancestor">
            
            <div class="tile is-parent">
                <article class="tile is-child notification is-warning">
                    <p class="title">How To Choose a {{this.shared.chosen.helpMeChoose.topic}}</p>
                    <p class="subtitle">Each has its own unique characteristics, find out which one is perfect for you. <router-link class="is-pulled-right button" to="range">Return</router-link></p>
                </article>
            </div>


            <div class="tile is-vertical">
                <help-me-choose-card 
                    v-for="info in shared.chosen.helpMeChoose.items" 
                    @selected="optionSelected"  
                    :info="info" 
                    :key="info.id">
                </help-me-choose-card>
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

    import endpoints from '../../endpoints.js';

    import boatSelector from '../../sharedState.js';

    export default {

        methods:{
            optionSelected(data){
                if(this.shared.chosen.helpMeChoose.topic =='Hull Style'){
                    this.shared.chosen.choices.hull_style = data;
                }else if(this.shared.chosen.helpMeChoose.topic =='Model'){
                    this.shared.chosen.choices.boat_model = data;
                }else if(this.shared.chosen.helpMeChoose.topic =='Width'){
                    this.shared.chosen.choices.beam = data;
                }else if(this.shared.chosen.helpMeChoose.topic =='Length'){
                    this.shared.chosen.choices.loa = data;
                }else if(this.shared.chosen.helpMeChoose.topic =='Trim Level'){
                    this.shared.chosen.choices.trim_level = data;
                    /* this means an exact configuration has been decided upon */
                }
            }
        }, 
       
        data() {
            return{ 
                shared:boatSelector,               
              }
        },

    };
</script>
