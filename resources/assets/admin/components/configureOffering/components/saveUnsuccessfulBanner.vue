		
<template>
<div id="dataNotSavedBanner">
	<div class="container">
		<p class="subtitle">There was a problem saving the data, your changes were not stored.</p>
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
    };
</script>



<style lang="scss">
    @import '~sass/variables';
    #dataNotSavedBanner{
    	position:fixed;
    	width:100vw;
    	height:70px;
    	left:0;
    	bottom:0;
    	background-color:$brand-danger;
    	.subtitle{
    		padding-top:25px;
    	}
    }

</style>

		