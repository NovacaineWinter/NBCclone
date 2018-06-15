		
<template>
	
	<div class="tile is-parent">


	    <article @click="$emit('hullChosen',hull)" class="tile is-child notification pointer is-info box">
	        <p class="title">{{ hull.name }}</p>
	        <figure class="image is-4by3 nosquash"  v-bind:style="stylingRule"></figure>
	        <div class="button is-pulled-right">Explore More</div>
	    </article>


	</div>

</template>

<script>
    export default {
        computed:{
        	stylingRule(){
        		return "background-image:url('"+this.hull.img+"')";
        	},
        },
     
	    props: [
	        'hull',
	    ],

    };
</script>



<style lang="scss">
    @import "../../../../sass/variables.scss";

</style>

		