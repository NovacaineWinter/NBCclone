		
<template>
	<div>
		<h1 class="has-text-centered title">Manage Stock Boats</h1>
		
		<stock-boat-card 
			v-for="boat in this.stockBoats" 
			:key="boat.id" 
			:boat="boat"
			@chosenStockBoat="chosenStockBoat">			
		</stock-boat-card>
		<div id="editarea"></div>
		<configure-stock-boat v-if="boatToEdit!=''" :toEdit="boatToEdit" @pleaseExit="boatToEdit=''"></configure-stock-boat>
   </div>
</template>

<script>

    import endpoints from '../endpoints.js';   //relative path - beware

    export default {

        mounted() {        	
            
            axios.get(endpoints.stockBoats)      
            .then(response => {this.stockBoats = response.data})

            .catch(error => {alert(error);});
        },

        methods:{
            chosenStockBoat(boat){
                this.boatToEdit = boat;
            },
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
		        stockBoats:{},
		        boatToEdit:''		        
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

</style>

		