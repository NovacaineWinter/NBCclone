		
<template>
	<div id="contact-buttons">

		<router-link to="/range" tag="div" class="contact-button" @mouseover.native="showDesign" @mouseleave.native="hideDesign">
			<font-awesome-icon icon="pencil-alt" />
			<div class="contact-slideout" v-if="designSlideShow">Design my Boat</div>
		</router-link>

		<router-link to="/stock" tag="div" class="contact-button" @mouseenter.native="showStock" @mouseleave.native="hideStock">
			<font-awesome-icon icon="map-marker-alt" />			
			<div class="contact-slideout" v-if="stockSlideShow">Boats in stock</div>
		</router-link>

		<router-link to="/contact-us/tour" tag="div" class="contact-button" @mouseenter.native="showTour" @mouseleave.native="hideTour">
			<font-awesome-icon icon="store-alt" />			
			<div class="contact-slideout" v-if="tourSlideShow">Book a Tour</div>
		</router-link>

		<router-link to="/contact-us/question" tag="div" class="contact-button" @mouseenter.native="showContact" @mouseleave.native="hideContact">
			<font-awesome-icon icon="question-circle" />			
			<div class="contact-slideout" v-if="contactSlideShow">Ask a Question</div>
		</router-link>


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
            showContact(){
                this.contactSlideShow = true;
            },
            hideContact(){
                this.contactSlideShow = false;
        	},
            showDesign(){
                this.designSlideShow = true;
            },
            hideDesign(){
                this.designSlideShow = false;
        	},
            showTour(){
                this.tourSlideShow = true;
            },
            hideTour(){
                this.tourSlideShow = false;
        	},
            showStock(){
                this.stockSlideShow = true;
            },
            hideStock(){
                this.stockSlideShow = false;
        	}
        },
/*
        computed:{
        	someNumber(){
        		return 2+3;
        	},        	
        },
*/
        data: function() {
		    return{
		        contactSlideShow:false,	
		        designSlideShow:false,	 
		        tourSlideShow:false,
		        stockSlideShow:false,       
		      }
	    },
/*
	    props: [
		    'propsPassed'
	    ], */

    };
</script>



<style lang="scss">
    @import '~sass/variables';
	#contact-buttons{
		position:fixed;
		right:0;
		height:24vh;
		top:38vh;
		width:6vh;
		background-color:$text-light;
		color:$text-dark;
		z-index:5;
		margin:0px;
		padding:0px;
		border-top:1px solid $text-dark;
		border-left:1px solid $text-dark;
		.contact-button{
			position:relative;
			padding:0px;
			margin:0px;
			width:100%;
			height:6vh;
			text-align:center;
			font-size:2vh;
			line-height:6vh;		
			border-bottom:1px solid $text-dark;	
		}
		.contact-button:hover{
			background-color:$brand-primary;
			color:$text-light;
			cursor:pointer;
		}
	
		.contact-slideout{
			width:10vw;
			min-width:200px;
			height:6vh;
			position:absolute;
			top:0;
			right:6vh;
			background-color:$text-light;
			border:1px solid $text-dark;
			padding:1px;
			border-right:none;
			color:$text-dark;
		}

	}
</style>

		