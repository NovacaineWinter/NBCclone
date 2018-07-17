		
<template>


    <div class="tile is-ancestor section infobite">

    	<div v-if="index%2==1" class="tile is-4 is-parent">
    		<article class="tile is-child is-primary">
				<div class="card">
					<div class="card-image">
						<figure class="image is-4by3 nosquash" :style="stylingrule"></figure>
					</div>
				</div>
    		</article>
    	</div>

    	<div class="tile is-parent is-8">
    		<article class="tile is-child is-primary">
				<article class="message is-info">
	                <div class="message-header"><p>{{ infobite.title }}</p></div>
	                <div class="message-body">{{ infobite.description }}</div>
	            </article>
	        </article>
    	</div>	

    	<div v-if="index%2==0" class="tile is-4 is-parent">
    		<article class="tile is-child is-primary">
				<div class="card">
					<div class="card-image">
						<figure class="image is-4by3 nosquash" :style="stylingrule"></figure>
					</div>
				</div>
    		</article>
    	</div>
    </div>

   
</template>

<script>

    //import endpoints from '../endpoints.js';   //relative path - beware

    export default {
    	
        mounted() {        	
            
         console.log();
        },
/*
        methods:{
            myMethod(){
                console.log('my method triggered');
            },
        },
*/
        computed:{
        	imageSrc(){
        		return _.filter(this.infobite.file_connection,['is_image',1])[0].src;
        	},  

            stylingrule(){
                return "background-image:url('"+this.imageSrc+"')";
            },      	
        },
/*
        data: function() {
		    return{
		        someDataOnThis:'',		        
		      }
	    },
*/
	    props: [
		    'infobite',
		    'index'
	    ], 

    };
</script>



<style lang="scss">
    @import '~sass/variables';
    .infobite{
    	border-bottom:1px solid $text-dark;
    }
</style>

		