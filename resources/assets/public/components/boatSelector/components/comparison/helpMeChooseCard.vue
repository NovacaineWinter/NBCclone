<template>
	
	<div class="tile is-parent">

		<article 
	    	class="tile is-child pointer nosquash" 
	    	style="min-height:400px; min-width:400px;" 
	    	:style="'background-image:url('+primaryImage+')'">	    	
	    </article>

	    <router-link to="range" tag="article" @click.native="$emit('selected',info)" class="tile is-child notification pointer box">
	        <p class="title">{{ info.name }}</p>
			<p class="subtitle">{{ info.comparison }}</p>
			<div class="button is-pulled-right">Select ></div>
		</router-link>
	    </article>

	</div>

</template>

<script>
    export default {

	    props: [
	        'info',
	    ],

	    computed:{

        	primaryImage(){
        		let a = _.filter(this.info.images, ['id',this.info.primary_image_id]);
        		return a[0].src;
        	}

        },

    };
</script>

		