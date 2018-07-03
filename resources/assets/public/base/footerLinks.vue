<template>
	<div id="footer">
		<section class="hero is-medium is-bold is-branded">
			<div class="hero-body">
				<div class="container">

					<div class="columns">
						<div class="column">
							<h2 class="subtitle">Nottingham Boat Co LTD</h2>
							<ul>
								<router-link tag="li" to="/" class="navbar-item" exact><span>Home</span></router-link>
					            <router-link tag="li" to="/dataprotection" class="navbar-item" exact><span>Data Protection</span></router-link>
					            <router-link tag="li" to="/cookiePolicy" class="navbar-item" exact><span>Cookie Policy</span></router-link>            
					            <router-link tag="li" to="/settings" class="navbar-item" exact><span>Settings</span></router-link> 
			            	</ul>
			            </div>
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
						<div class="column">
							<h2 class="subtitle">About</h2>
							<ul>
								<router-link tag="li" to="/" class="navbar-item" exact><span>Home</span></router-link>
					            <router-link tag="li" to="/aboutus" class="navbar-item" exact><span>About Us</span></router-link>
					            <router-link tag="li" to="/contact" class="navbar-item" exact><span>Contact Us</span></router-link>            
					            <router-link tag="li" to="/settings" class="navbar-item" exact><span>About Life Afloat</span></router-link>
					            <router-link tag="li" to="/models" class="navbar-item" exact><span>Choose your ideal boat</span></router-link> 
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