		
<template>

	<div class="tile is-parent pointer"  @click="$emit('chosenHullToEdit',info);">

	    <article 
	    	class="tile is-child notification pointer is-info box is-4by3 is-4 nosquash" 
	    	style="min-height:400px; min-width:400px;" 
	    	:style="'background-image:url('+primaryImage+')'">	    	
	    </article>

		<article class="tile is-child notification box">
	        <p class="title">{{ data.name }}</p>
			<p class="subtitle">{{ data.comparison }}</p>
			<a v-if="data.id != imported.hullToEdit.id" class="button is-pulled-right" href="#editarea" v-smooth-scroll="{ duration: 1500}">Edit ></a>
		</article>

	</div>
   
</template>

<script>

    //import endpoints from '../endpoints.js';   //relative path - beware
	import shared from '../../sharedState.js';
    export default {
    	
        methods:{
           /* myMethod(){
                console.log('my method triggered');
            },*/
        },
		
        computed:{
			primaryImage(){
        		let a = _.filter(this.info.images, ['id',this.info.primary_image_id]);
        		return a[0].src;
        	}
      	
        },

        data: function() {
		    return{
		        data:this.info,	
		        imported:shared,	        
		      }
	    },

	    props: [
		    'info'
	    ],

    };
</script>



<style lang="scss">
	@import '~sass/variables';

</style>

		