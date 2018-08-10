		
<template>
	<div>
		<contact-buttons></contact-buttons>
		<cookie-banner></cookie-banner>
		<nav class="navbar is-fixed-top"  role="navigation" aria-label="main navigation">

	

		<div class="smallstuff">
			<div class="hamburger-button" @click="toggleHamburger">
				<i class="fas fa-bars"></i>
				<div class="hamburger-panel panel" v-show="showHamburger">				
				   	<router-link 
				   		v-for="(item, index) in items" 
				   		:key="index" 
				   		class="panel-block"
				   		:to="item.uri" 
				   		aria-hidden="true"
				   		tag="a"
				   		exact>
				   			{{ item.text }}
				   	</router-link>	        
			   </div>
		   </div>
	   </div>
		


			<!-- <div class="navbar-menu"> -->
			    <div class="navbar-end bigstuff">
			        <div class="navbar-start bigstuff">

			        	<router-link  
			        		v-for="(item, index) in items"
			        		:class="item.bold ? 'navbar-item navborder' : 'navbar-item'" 	        		 
			        		:key="index" 
			        		v-bind:to="item.uri" 
			        		tag="span"
			        		exact>
			        			<span>{{ item.text }}</span>
			        	</router-link>	

			        </div>
			    </div>  
			<!-- </div> -->

		</nav>
	</div>

   
</template>

<script>

    import navbarItems from '../setup/navbarItems';

    export default {

        methods:{
            sortItems(items){
                return items.sort(this.sortFunction);
            },
            sortFunction(a,b){
            	if (a['position'] === b['position']) {
			        return 0;
			    }
			    else {
			        return (a['position'] < b['position']) ? -1 : 1;
			    }
            },
            toggleHamburger(){
            	if(this.showHamburger == 1){
            		this.showHamburger = 0;
            	}else{
            		this.showHamburger = 1;	
            	}
            }

        },

        data: function() {
		    return{
		       items:this.sortItems(navbarItems),	
		       showHamburger:0        
		      }
	    },
    };
</script>



<style lang="scss">
	@import '~sass/variables';


	.navbar, .navbar-menu, .navbar-start, .navbar-end{
		-webkit-box-align: stretch;
		-ms-flex-align: stretch;
		align-items: stretch;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;	
	}


	.navbar{
		font-family:'lato','sans-serif';
		background-color:$brand-secondary;
		color:$text-light;		
		height:69px;

		
		.navbar-item{
			color:$text-light;	
			font-size:12px;		
			letter-spacing: .1rem;
			text-transform:uppercase;
			cursor:pointer;
			
			//stuff to force display of navbar across all screen widths
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
		}
	
		.navbar-item.is-active{
			color:$link-active-light;
		}

		 .navbar-item:hover{
			background-color:$text-light;
			color:$text-dark;
		} 
		.navborder span{
			border: 1px solid $brand-primary;
			padding: 10px 25px;
		}

	}

	
	//override some quirk of Bulma that messes with the z-index
	.navbar.is-fixed-top{
		z-index:2;
	}

	.hamburger-button{
		position: absolute;
		right: 10px;
		font-size: 30px;
		top: 10px;
		cursor:pointer;
	}
	.hamburger-panel{
		width: 300px;
		max-width: 50vw;
		position: absolute;
		right: -10px;
		top: 59px;
		background-color: $text-light;
		.panel-block:hover{
			background-color:$brand-primary;
			color:$text-light;
		}
	}

	@media only screen and (max-width: $medium-screen) {
		.navbar-end{
			position: absolute;
			right: 0;
			top: 6px;
		}

		#logoimg{
			max-width:100%;
			width:160px;
		}

	}
</style>

		