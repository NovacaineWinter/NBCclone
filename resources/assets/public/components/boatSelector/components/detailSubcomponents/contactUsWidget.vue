		
<template>

    <div class="tile is-ancestor section infobite">
    	<router-link to="contact-us" tag="div" class="tile is-parent pointer">
    		<article class="tile is-child">
				<article class="message is-success">
	                <div class="message-header"><p>Want to know more?</p></div>
	                <div class="message-body">We love talking about boats and would love to discuss your ideas, please contact us <span class="button is-success is-pulled-right is-hover">Contact</span></div>
	            </article>
	        </article>	
    	</router-link>
    	
    </div>
   
</template>

<script>

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

        computed:{
        	someNumber(){
        		return 2+3;
        	},        	
        },

        data: function() {
		    return{
		        someDataOnThis:'',		        
		      }
	    },

	    props: [
		    'propsPassed'
	    ], */

    };
</script>



<style lang="scss">
    @import '~sass/variables';

</style>

		