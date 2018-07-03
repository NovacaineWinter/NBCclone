<template>
	
	<div class="tile is-parent detailcard">


	    <article @click="$emit('chosen',info)" class="tile is-child notification pointer is-info box card">
			<header class="card-header">
				<p class="title">{{ info.name }}</p>
			</header>
	    		

	        <div class="card-image">
        		<figure class="image is-4by3 nosquash"  v-bind:style="stylingRule"></figure>
	        </div>

	        <div class="card-content">
	        	<div class="content has-text-centered">{{ info.short_description }}</div>
	        </div>
			
			<footer class="card-footer">
				<router-link to="detail" class="card-footer-item view-detail-button" @click.native.stop="setDetail"><span>MORE DETAIL</span></router-link>
				<a class="card-footer-item view-detail-button"><span>CHOOSE</span></a>
			</footer>	        
	        

	    </article>


	</div>

</template>

<script>

	import boatSelector from '../../../sharedState.js';


    export default {
        computed:{
        	
        	primaryImage(){
        		let a = _.filter(this.info.images, ['id',this.info.primary_image_id]);
        		if(a.length > 0){
        			return a[0].src;
        		}else{
        			return 0;
        		}
        		
        	},
        	stylingRule(){
        		return "background-image:url('"+this.primaryImage+"');";
        	}
        },
     	
     	methods:{
     		setDetail(){
     			this.shared.chosen.detail = this.info;
     		}
     	},

     	data() {
		    return{
               shared:boatSelector,                
		      }
	    },

	    props: [
	        'info',
	    ],


    };
</script>



<style lang="scss">
	@import '~sass/variables';
	.detailcard{ 
		max-width:35%;
		.tile.is-child{
			padding:0px;
			.title{
				padding: 20px 0px 20px 0px;
				margin:auto;
			}
		}
		.card-footer{
			position:absolute;
			left:0;
			right:0;
			bottom:0;	

			.view-detail-button{
				background-color:$brand-secondary;
				text-decoration:none;
				span{
					padding:6px;
					border:1px solid $brand-primary;
					font-size: 14px;
					letter-spacing: .1rem;
					text-transform: uppercase;
				}
			}
			.view-detail-button:hover{
				background-color:$text-light;
				color:$text-dark;
			}
			
		}
		.card-content{
			margin-bottom:60px;
		}

	}
</style>

		