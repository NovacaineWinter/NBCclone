		
<template>

    <section class="container section whitecontainer">

        <div class="tile is-vertical is-ancestor">
			<boat-selector></boat-selector>
		</div>	
	</section>

</template>


<script>

	 export default {

	    mounted() {
	       setTimeout(() => {
		        window.scrollTo(0, 0);
		    }, 100);
	    },

	};

</script>