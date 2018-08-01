		
<template>

    <div class="section squarewhitesection">                
        <p class="has-text-centered title">Overview</p>    
        <div class="columns">
            <div class="column">
                <carousel :per-page="2" :navigationEnabled="true">
                    <slide v-for="source in carouselImages" :key="source.id">
                        <img :src="source.src" alt="img" style="max-height:400px;">
                    </slide>    
                </carousel>                     
            </div>
        </div>
        <div class="columns infobites">
            <div class="column has-text-centered" v-html="imported.chosen.detail.long_description"></div>
        </div>
        
        <a :href="imported.chosen.detail.virtual_tour" v-if="hasTour">
            <section  class="hero is-info pointer" style="margin: 0px -24px;">
                <div class="hero-body">
                    <div class="infobites columns">
                        <div class="column">                        
                            <h1 class="title">Virtual Tour</h1>
                            <h2 class="subtitle" style="padding-left:30px">Take a virtual tour  ></h2>        
                        </div>
                        <div class="column" style="position:relative">    
                            <div class="button is-success" style="position: absolute;right: 0;bottom: 0; padding:30px">Take Tour</div>                    
                        </div>
                    </div>
                </div>
            </section>
        </a>


        <div class="infobites">
            <info-bite v-for="(infobite,index) in imported.chosen.detail.infobites" :index="index" :infobite="infobite" :key="infobite.id"></info-bite>
            <contact-us></contact-us>
        </div>  


            
        
    </div>
</template>

<script>
    import boatSelector from '../../sharedState.js';
    //import endpoints from '../endpoints.js';   //relative path - beware

    export default {
    	/*
        mounted() {        	
            
            axios.get(endpoints.someEndpoint)            
                .then(handleResponse.bind('data',this))

                .catch(function (error) {
                    console.log(error);            
                });

                function handleResponse(context,response){
                    //context is an alias for 'this'
                    context.someDataOnThis = response.data;
                }
        },

        methods:{
            myMethod(){
                console.log('my method triggered');
            },
        },
*/
        computed:{
        	carouselImages(){
                return _.filter(this.imported.chosen.detail.images,{is_in_carousel:1});
            },  
            hasTour(){
                if(this.imported.chosen.detail.virtual_tour){
                    if(this.imported.chosen.detail.virtual_tour != 0){
                        return true;
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            }     	
        },

        data: function() {
		    return{
		        imported:boatSelector,		        
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

    .infobites{
        max-width:1000px;
        margin:auto;
    }

</style>

		