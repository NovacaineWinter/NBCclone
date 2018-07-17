		
<template>
	
	<div class="tile is-parent numbercard">

	    <article @click="$emit('chosen',info)" class="tile is-child notification pointer is-info box">
	        <p class="title">{{ info.name }}</p>
	        <figure><h2>{{ info.feet }}</h2></figure>	 
	    </article>

	</div>

</template>

<script>
    export default {       
     
	    props: [
	        'info',
	    ],

    };
</script>

<style lang="scss">
	.numbercard{
		max-width:25%;
	}
</style>
