		
<template>
	
	<div class="tile is-parent">


	    <router-link tag="article" to="range" v-on:click.native="clickedCard" class="tile is-child notification pointer is-info box">
	        <p class="title">{{ hull.name }}</p>
	        <figure class="image is-4by3 nosquash"  v-bind:style="stylingRule"></figure>
	        <div class="button is-pulled-right">Explore More</div>
	    </router-link>


	</div>

</template>

<script>
    export default {

        methods:{
            clickedCard(target){
                this.$emit('hullChosen',this.hull);
            },
        },

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

		