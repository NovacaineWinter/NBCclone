		
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
            <div class="column has-text-centered" v-html="target.long_description"></div>
        </div>

        <div class="infobites">
            <info-bite v-for="(infobite,index) in target.infobites" :index="index" :infobite="infobite" :key="infobite.id"></info-bite>
            <contact-us></contact-us>
        </div>  


            
        
    </div>
</template>

<script>
    import stockTarget from '../../../sharedState.js';
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
                return _.filter(this.target.images,{is_in_carousel:1});
            },       	
        },

        data: function() {
		    return{
		        target:stockTarget.info,		        
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

		