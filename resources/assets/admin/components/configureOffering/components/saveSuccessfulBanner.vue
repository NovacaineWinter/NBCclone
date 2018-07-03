		
<template>
<div id="dataSavedBanner">
	<div class="container">
		<p class="subtitle">&#10004;   Data Saved ...</p>
	</div>
</div>
   
</template>

<script>

    //import endpoints from '../endpoints.js';   //relative path - beware

    export default {
    	mounted() {            
            setTimeout(this.closeBanner,3000);  
          
        },
        

        methods:{
            closeBanner(){
                this.$emit('enough',true);
            },
        },
        /*
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
    #dataSavedBanner{
    	position:fixed;
    	width:100vw;
    	height:70px;
    	left:0;
    	bottom:0;
    	background-color:$brand-success;
    	.subtitle{
    		padding-top:25px;
    	}
    }

</style>

		