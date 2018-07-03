		
<template>
	<div class="detailView">
		<section class="hero is-info is-medium">
			<div class="hero-body">
				<div class="container">
					<h1 class="title">
						{{ imported.chosen.detail.name }}
					</h1>
					<h2 class="subtitle">
						{{ imported.chosen.detail.short_description }}
					</h2>
				</div>
			</div>
			<div class="hero-foot">
				<nav class="tabs is-boxed">
					<div class="container">
						<ul>
							<li @click="$router.go(-1)" class="is-active"><a>Back</a></li>							
						</ul>
					</div>
				</nav>
			</div>
		</section>
		<div class="container detailContainer">

			<div class="header-for-detail is-fullwidth">
				
				<div class="tabs is-right navbar">
					<h1 class="title">{{ imported.chosen.detail.name }}</h1>
					<ul>
						<router-link to="/detail/downloads" tag="li" class="is-active navborder pointer"><span>Download Specification</span></router-link>
					</ul>
				</div> 
			</div>

			<div class="tabs is-toggle is-fullwidth squarewhitesection" style="margin-bottom:0px;">
				<ul>
					<router-link to="/detail" tag="li" exact><a><span>Overview</span></a></router-link>
					<router-link to="/detail/gallery" tag="li" exact><a><span>Gallery</span></a></router-link>
					<router-link to="/detail/downloads" tag="li" exact><a><span>Downloads</span></a></router-link>
					<router-link to="/book-a-visit" tag="li" class="visit-us" exact><a><span>Book a Visit</span></a></router-link>
				</ul>
			</div>
		
			<detail-overview v-if="$route.params.subsection!='downloads' && $route.params.subsection!='gallery'"></detail-overview>
			<detail-gallery v-if="$route.params.subsection=='gallery'"></detail-gallery>
			<detail-downloads v-if="$route.params.subsection=='downloads'"></detail-downloads>
		</div>
		
	</div>
	
</template>

<script>

    import boatSelector from '../sharedState.js';

    export default {

	    mounted() {
	       setTimeout(() => {
		        window.scrollTo(0, 0);
		    }, 100);
	    },
        data() {
		    return{
               imported:boatSelector,                
		      }
	    },
	    computed:{
	    	carouselImages(){
	    		return _.filter(this.imported.chosen.detail.images,{is_in_carousel:1});
	    	},
	    }

    };
</script>



<style lang="scss">
	@import '~sass/variables';
	
	.visit-us{
		background-color:$brand-success;
		a{
			span{
				color:$text-light;
			}		
		}
		a:hover{
			span{
				color:$text-dark;
			}
		}
		
	}
	
	
   .header-for-detail{
   		background-color:$brand-secondary;
   		min-height:100px;
   		h1{
   			padding:30px;
   			color:$text-light;
   		}
   }

   .detailView{ 
   		.squarewhitesection{
	   		background-color:$text-light;
	   }
	   .detailContainer{
	   		margin-top:20px;
	   		.tabs{
	   			ul{
	   				border:none;
	   			}
	   		}

	   		.title{
	   			padding:30px;
	   		}

	   		.navbar{
	   			z-index:0;
	   		}
	   }

	   .navbar{
			margin-right:2vw;			
		}

		.navborder{
			padding-top:30px;
			span{
				text-transform:uppercase;
				font-weight:300;
				font-size:12px;
				margin:20px;
			}

			span:hover{
				background-color:$text-light;
				color:$text-dark;			
			}
		}

	}


</style>

		