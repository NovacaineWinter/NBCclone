		
<template>
	<div style="margin-top:-69px" id="homeview">
		<a href="#firstSection" v-smooth-scroll="{ duration: 1000, offset: -85 }">		
			<span class="icon" id="downarrow">
				<i class="fas fa-arrow-circle-down has-text-centered"></i>
			</span>	
		</a>
		<section class="hero is-fullheight" id="homebanner">


			<div class="hero-body">
				<div class="container">				

					<div class="tile is-ancestor">

						<div class="tile is-parent">
							<div class="tile is-child has-text-centered misty">
								<h1>WELCOME TO NOTTINGHAM BOAT CO</h1>							
							</div>
						</div>


						<div class="tile is-4 is-vertical is-parent">

							<router-link tag="div" class="tile is-child box is-info button" to="/range"><p>Explore Our Range</p></router-link>					

							<router-link tag="div" class="tile is-child box button" to="/stock"><p>View Boats In Stock</p></router-link>

						</div>
						
					</div>								
					
				</div>
			</div>			
		</section>
		<section>
			<div class="container section whitecontainer" id="firstSection">
				<p class="has-text-centered subtitle">TRUST, INTEGRITY AND QUALITY</p>
				<div class="columns">					
					<div class="column has-text-centered"><img src="/img/partners/logos/bmf.jpg" alt="BMF logo" class="trustlogos"></div>
					<div class="column has-text-centered"><img src="img/partners/logos/promarine.jpg" alt="promarine logo" class="trustlogos"></div>
					<div class="column has-text-centered"><img src="/img/partners/logos/bmf2.jpg" alt="BMF logo 2" class="trustlogos"></div>
					<div class="column has-text-centered"><img src="/img/partners/logos/cba.jpg" alt="CBA logo" class="trustlogos"></div>
					<div class="column has-text-centered"><img src="/img/partners/logos/assistinsurance.jpg" alt="BMF logo " class="trustlogos"></div>
					<div class="column has-text-centered"><img src="/img/partners/logos/crt.png" alt="CRT logo " class="trustlogos"></div>
				</div>		
			</div>
		</section>


		

		<section class="container section whitecontainer">


			<div class="tile is-ancestor">

				<div class="tile is-parent">
					<article class="tile is-child">
						<router-link tag="div" class="card hoverable full-height" to="/stock">

							<div class="card-image">
								<figure class="image is-4by3">
									<img src="/img/stock1.jpg" alt="Placeholder image">
								</figure>
							</div>

							<div class="card-content">
								<div class="media">			
									<div class="media-content">
										<p class="title">In Stock Now</p>				
									</div>
								</div>

								<div class="content">
									Want to start your new lifestyle on the water right away? Explore our exclusive range of boats currently in stock >
									
								</div>
							</div>

						</router-link>
					</article>
				</div>

				<div class="tile is-parent">
					<article class="tile is-child">

						<router-link tag="div" class="card hoverable full-height" to="/range">

							<div class="card-image">
								<figure class="image is-4by3">
									<img src="/img/range.jpg" alt="photo of river at sunset">								
								</figure>
							</div>
							<div class="card-content">
								<div class="media">			
									<div class="media-content">
										<p class="title">Our Range Of Boats</p>				
									</div>
								</div>
								<div class="content">
									<!-- The exquisite lifestyle onboard a luxury boat is one of the best kept secrets, find out all the reasons why you should get get out on the water	> -->
									Explore our range of amazing boats. Built to your exacting specifications, you can be sure to find your ideal boat here >
								</div>
							</div>

						</router-link>
						

					</article>
				</div>

				<div class="tile is-parent">
					<article class="tile is-child">				        
						<router-link tag="div" class="card hoverable full-height" to="/contact-us">

							<div class="card-image">
								<figure class="image is-4by3">
									<img src="/img/unit.jpg" alt="Placeholder image">
								</figure>
							</div>

							<div class="card-content">
								<div class="media">			
									<div class="media-content">
										<p class="title">Visit us for a factory tour</p>				
									</div>
								</div>

								<div class="content">
									We would love to welcome you to our site and show you the amazing technology and craftsmanship we use.								
								</div>
							</div>

						</router-link>
					</article>
				</div>



			</div>			
		</section>


<hull-widget></hull-widget>
		<!-- <section class="container section whitecontainer">
			<div>
		
		
				<div class="tile is-ancestor">
		
					<div class="tile is-vertical is-8">
		
						<div class="tile is-parent">
							<article class="tile is-child notification is-warning">
								<p class="title">Our Most Popular Boats</p>
								<p class="subtitle">Each built to exacting specification</p>
							</article>
						</div>
		
		
						<div class="tile">
							<div class="tile is-parent">
								<router-link tag="article" to="/models/1" class="tile is-child notification is-info box">
									<p class="title">Jupiter</p>
									<p class="subtitle">Barge</p>
									<figure class="image is-4by3 nosquash"  style="background-image:url('/img/jupiter.jpg')"></figure>
									<div class="button is-pulled-right">Explore More</div>
								</router-link>
							</div>
		
							<div class="tile is-parent">	
								<router-link tag="article" to="/models/2" class="tile is-child notification is-info box">				        
									<p class="title">Neptune</p>
									<p class="subtitle">Barge</p>
									<figure class="image is-4by3 nosquash" style="background-image:url('/img/neptune1.jpg')"></figure>
									<div class="button is-pulled-right">Explore More</div>
								</router-link>
							</div>
		
						</div>
						<div class="tile">
		
							<div class="tile is-parent">
								<router-link tag="article" to="/models/3" class="tile is-child notification is-info box">
									<p class="title">Atlas</p>
									<p class="subtitle">Barge</p>
									<figure class="image is-4by3 nosquash" style="background-image:url('/img/atlas.jpeg')"></figure>
									<div class="button is-pulled-right">Explore More</div>
								</router-link>
							</div>
		
							<div class="tile is-parent">
								<router-link tag="article" to="/models/4" class="tile is-child notification is-info box">
									<p class="title">Galaxy</p>
									<p class="subtitle">Widebeam</p>
									<figure class="image is-4by3 nosquash"  style="background-image:url('/img/galaxy1.jpg')"></figure>
									<div class="button is-pulled-right">Explore More</div>
								</router-link>
							</div>
		
						</div>
		
		
						<div class="tile is-parent">
							<router-link tag="article" to="/models" class="tile is-child notification is-warning box">
								<p class="title">Let us help you find the ideal boat</p>
								<p class="subtitle">Use our interactive selector tool to choose the right boat for you, set your budget, your style and see your options</p>
								<div class="button is-pulled-right">Find My Ideal Boat ></div>
							</router-link>
						</div>
					</div>
		
		
					<div class="tile is-parent is-vertical">
		
						<router-link tag="article" to="/models/5" class="tile is-child notification is-info box">
							<p class="title">Dynasty</p>
							<p class="subtitle">narrowboat</p>
							<figure class="image is-4by3 nosquash"  style="background-image:url('/img/dynasty1.jpg')"></figure>
							<div class="button is-pulled-right">Explore More</div>
						</router-link>
		
						<router-link tag="article" to="/models/6" class="tile is-child notification is-info box">
							<p class="title">Cygnet</p>
							<p class="subtitle">Narrowboat</p>
							<figure class="image is-4by3 nosquash"  style="background-image:url('/img/cygnet1.jpg')"></figure>
							<div class="button is-pulled-right">Explore More</div>
						</router-link>
		
						<router-link tag="article" to="/models/7" class="tile is-child notification is-info box">
							<p class="title">Swan</p>
							<p class="subtitle">Narrowboat</p>
							<figure class="image is-4by3 nosquash"  style="background-image:url('/img/swan1.jpg')"></figure>
							<div class="button is-pulled-right">Explore More</div>
						</router-link>
		
					</div>
		
				</div>
			
			</div>
		</section> -->
		
		<div class="container whitecontainer">
			<div class="section">	
				<div class="columns">					
					<div class="column">
					
						<div 
							class="fb-page" 
							data-href="https://www.facebook.com/NottinghamBoatCompany/" 
							data-tabs="timeline" 
							data-small-header="false" 
							data-adapt-container-width="true" 
							data-hide-cover="false" 
							data-show-facepile="true">
								<blockquote cite="https://www.facebook.com/NottinghamBoatCompany/" class="fb-xfbml-parse-ignore">
									<a href="https://www.facebook.com/NottinghamBoatCompany/">Nottingham Boat Company</a>
								</blockquote>
						</div>

					</div>
					<div class="column is-8">
						<contact-form></contact-form>
					</div>
				</div>

			</div>
		</div>


	</div>


	

</template>

<script>
    export default {
        mounted() {
           setTimeout(() => {
		        window.scrollTo(0, 0);
		    }, 100);
        },
        /*
        methods:{
            beenClicked(){
                console.log('click');
            },
        },

        data: function() {
		    return{
		        url:'http://nbc.wip/img/partners/logos/bmf.jpg',
		        
		      }
	    },*/

    };
</script>



<style lang="scss">

	@import '~sass/variables';

	
	#downarrow{
		position: absolute;
		top: 75vh;
		left: 48vw;
		font-size: 10vw;
		color: $text-light;
	}

	.full-height{
		height:100%;
	}
	

	.trustlogos{
		max-height:90px;
	}
	
	#homeview .tile .button{
		margin-top:20px;
	}

	#homebanner{
		background-image:url('http://nottinghamboatco.com/img/home1.jpg');
		background-size:cover;
		background-position:center;
		text-transform:uppercase;

		.misty{
			background-color:rgba(255,255,255,0.2);
			border-radius:$button-border-radius;
			padding: 1.2vw 0px;
		}
		h1{
			font-size:3.5vw;
			color:$text-light;
			text-shadow: 3px 3px $text-dark;
			border-top:3px solid $text-dark;
			border-bottom:3px solid $text-dark;
			line-height:1;
			
		}
		p{
			padding:1.2vw;
			font-weight:600;
		}
		

	}
</style>

		