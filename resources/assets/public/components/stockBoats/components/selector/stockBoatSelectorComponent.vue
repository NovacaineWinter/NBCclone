		
<template>
	<div class="container">
     <section class="section">
         <div class="columns is-multiline">
             <stock-boat-card v-for="boat in stock_boats" @chosen="setTargetStockBoat" :boat="boat" :key="boat.id"></stock-boat-card>
         </div>
     </section>           
     
    </div>
   
</template>

<script>

    import endpoints from '../../endpoints.js';  
    import stockTarget from '../../sharedState.js';


    export default {
    	
        mounted() {        	
            
            axios.get(endpoints.allStockBoats)            
                .then(response => {this.stock_boats = response.data})

                .catch(error => {console.log(error.error)});               
        },

        methods:{
            setTargetStockBoat(boat){
                this.theTarget.info=boat;
                this.$router.push('/stock/detail');
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
                stock_boats:{},
                theTarget:stockTarget		        
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

		