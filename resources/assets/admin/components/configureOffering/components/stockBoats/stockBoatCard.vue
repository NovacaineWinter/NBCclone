		
<template>

	<div class="tile is-parent pointer"  >

	    <article 
	    	class="tile is-child notification pointer is-info box is-4by3 is-4 nosquash" 
	    	style="min-height:400px; min-width:400px;" 
	    	:style="'background-image:url('+primaryImage+')'">	    	
	    </article>

		<article class="tile is-child notification box">
	        <p class="title">{{ boat.title }}</p>
			<p class="subtitle">{{ boat.short_summary }}</p>
			<a class="button is-pulled-right" href="#editarea" v-smooth-scroll="{ duration: 1500}" @click="editbutton">Edit ></a>
		</article>

	</div> 
</template>

<script>

    //import endpoints from '../endpoints.js';   //relative path - beware

    export default {
    	/*
        mounted() {        	
            
            axios.post('/endpoint',{field:'value'})      
            .then(response => {alert(repsponse.data);})

            .catch(error => {alert(repsponse.data);});
        },
*/
        methods:{
            editbutton(){
                this.$emit('chosenStockBoat',this.boat);
            },
        },

        computed:{
        	primaryImage(){
        		let a = _.filter(this.boat.images, ['id',this.boat.primary_image_id]);
        		return a[0].src;
        	}	
        },
/*
        data: function() {
		    return{
		        someDataOnThis:'',		        
		      }
	    },
*/
	    props: [
		    'boat'
	    ], 

    };
</script>



<style lang="scss">
    @import '~sass/variables';

</style>

		