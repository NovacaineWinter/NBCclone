<template>
	<div id="footer">
		<section class="hero is-info">
			<div class="hero-body">
				<div class="container">
					<h1 class="title has-text-centered">Follow Us</h1>
					<div class="columns socialicons">
						<a href="https://twitter.com/nottsboatco" class="column has-text-centered">
							<font-awesome-icon :icon="['fab', 'twitter']" />
							<h6>Twitter</h6>
						</a>
						<a href="https://www.instagram.com/nottinghamboatco/" tag="div" class="column has-text-centered">
							<font-awesome-icon :icon="['fab', 'instagram']" />
							<h6>Instagram</h6>
						</a>
						<a href="https://www.facebook.com/NottinghamBoatCompany/" tag="div" class="column has-text-centered">							
							<font-awesome-icon :icon="['fab', 'facebook-square']" />
							<h6>Facebook</h6>
						</a>
						<a href="https://www.linkedin.com/company/nottingham-boat-company-ltd" tag="div" class="column has-text-centered">							
							<font-awesome-icon :icon="['fab', 'linkedin']" />
							<h6>LinkedIn</h6>
						</a>
						<a href="https://www.youtube.com/channel/UCCGotk6RgMnVvZIgjfS9lSw" tag="div" class="column has-text-centered">							
							<font-awesome-icon :icon="['fab', 'youtube']" />
							<h6>YouTube</h6>
						</a>
					</div>
				</div>
			</div>
		</section>

		<section class="hero is-medium is-bold is-branded">
			<div class="hero-body">
				<div class="container">

					<div class="columns">
						<div class="column">
							<h2 class="subtitle">Nottingham Boat Co LTD</h2>
							<ul>
								<router-link tag="li" to="/" class="navbar-item" exact><span>Home</span></router-link>
					            <router-link tag="li" to="/data-protection" class="navbar-item" exact><span>Data Protection</span></router-link>
					            <router-link tag="li" to="/cookie-policy" class="navbar-item" exact><span>Cookie Policy</span></router-link>            
					            <router-link tag="li" to="/settings" class="navbar-item" exact><span>Settings</span></router-link> 
					            <router-link tag="li" to="/terms-of-business" class="navbar-item" exact><span>Terms of Business</span></router-link> 
			            	</ul>
			            </div>
			            <!-- 
			            						<div class="column">
			            							<h2 class="subtitle">Models</h2>
			            							<ul>
			            								<router-link tag="li" to="/models/1" class="navbar-item" exact><span>Galaxy</span></router-link>
			            					            <router-link tag="li" to="/models/2" class="navbar-item" exact><span>Jupiter</span></router-link>
			            					            <router-link tag="li" to="/models/3" class="navbar-item" exact><span>Neptune</span></router-link>            
			            					            <router-link tag="li" to="/models/4" class="navbar-item" exact><span>Atlas</span></router-link>
			            					            <router-link tag="li" to="/models/5" class="navbar-item" exact><span>Cygnet</span></router-link>
			            					            <router-link tag="li" to="/models/6" class="navbar-item" exact><span>Swan</span></router-link>
			            					            <router-link tag="li" to="/models/7" class="navbar-item" exact><span>Dynasty</span></router-link> 
			            	</ul>
			            						</div>
			             -->
						<div class="column">
							<h2 class="subtitle">About</h2>
							<ul>
								<router-link tag="li" to="/" class="navbar-item" exact><span>Home</span></router-link>
					            <router-link tag="li" to="/about-us" class="navbar-item" exact><span>About Us</span></router-link>
					            <router-link tag="li" to="/contact-us" class="navbar-item" exact><span>Contact Us</span></router-link>            
					            <!-- <router-link tag="li" to="/settings" class="navbar-item" exact><span>About Life Afloat</span></router-link> -->
					            <router-link tag="li" to="/range" class="navbar-item" exact><span>Choose your ideal boat</span></router-link> 
			            	</ul>
						</div>
					</div>
					
				</div>
			</div>
		</section>
		<div class="navbar">
	        <div class="navbar-start container">
	            <router-link to="/" class="navbar-item" exact><span>&copy; Nottingham Boat Co LTD {{ (new Date()).getFullYear() }}</span></router-link>
	        </div>
		</div>
	</div>
</template>

<style lang="scss">
    @import '~sass/variables';
	#footer{
	    .navbar-item{
	    	span{
	        	cursor:pointer;
	    	}

	    }
	    .socialicons .column{
	    	font-size:50px;
	    	h6{
	    		font-size:20px;
	    	}
	    }
	}
</style>

		