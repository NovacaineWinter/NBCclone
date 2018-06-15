		
<template>
	<nav class="panel section boatselector">

		<h3 class="panel-heading">
			Select a Boat
		</h3>
		

		<!-- Hull Style -->


			<div class="panel-block" v-show="progress.hull!='' && progress.activeSelector!='hull'">

					<div class="column is-11"><h3>Hull Style&nbsp;:&nbsp;<span>{{ progress.hull.name }}</span></h3></div>

					<div class="column is-1">
						<div class="button" @click="editHull">Edit ></div>
					</div>
			</div>			

			<hull-chooser v-show="progress.activeSelector=='hull'" @hullChosen="hullChosen"></hull-chooser>


				
		<!-- Model -->


			<div class="panel-block" v-show="progress.model!='' && progress.activeSelector!='model'">

					<div class="column is-11"><h3>Model&nbsp;:&nbsp;<span>{{ progress.model.name }}</span></h3></div>

					<div class="column is-1">
						<div class="button" @click="editModel">Edit ></div>
					</div>
			</div>			

			<model-chooser v-show="progress.activeSelector=='model'" @modelChosen="modelChosen"></model-chooser>

		



		
		<div class="panel-block">
			<button class="button is-link is-outlined is-fullwidth">
				reset all filters
			</button>
		</div>
	</nav>
</template>

<script>

    import endpoints from '../endpoints.js';

    import boatSelector from '../sharedState.js';

    export default {

        mounted() {        	
            this.identifyNextChoice();            
        },

        methods:{

        	editHull(){
				this.progress.hull='';
				this.progress.model='';
				this.progress.beam='';
				this.progress.loa='';
				this.progress.trim='';
				this.identifyNextChoice();
			},
        	editModel(){
				this.progress.model='';
				this.progress.beam='';
				this.progress.loa='';
				this.progress.trim='';
				this.identifyNextChoice();
			},
			editBeam(){
				this.progress.beam='';
				this.progress.loa='';
				this.progress.trim='';
				this.identifyNextChoice();
			},
			editLoa(){
				this.progress.loa='';
				this.progress.trim='';
				this.identifyNextChoice();
			},
			editTrim(){
				this.progress.trim='';
				this.identifyNextChoice();
			},

            identifyNextChoice(){
                if (this.progress.hull==''){

                	this.progress.activeSelector='hull';

                }else if(this.progress.model==''){

                	this.progress.activeSelector='model';

                }else if(this.progress.beam==''){

                	this.progress.activeSelector='beam';

                }else if(this.progress.loa==''){

                	this.progress.activeSelector='loa';

                }else if(this.progress.trim==''){

                	this.progress.activeSelector='trim';

                }else{
                	alert('finished config');
                }
            },

        	hullChosen(hull){
        		this.progress.hull=hull;
        		this.identifyNextChoice();
        	},
        	modelChosen(model){
        		this.progress.model=model;
        		this.identifyNextChoice();
        	},
        	beamChosen(beam){
        		this.progress.beam=beam;
        		this.identifyNextChoice();
        	},
        	loaChosen(loa){
        		this.progress.loa=loa;
        		this.identifyNextChoice();
        	},
        	trimChosen(trim){
        		this.progress.trim=trim;
        		this.identifyNextChoice();
        	},

        	loadContent(){

        		axios.get(endpoints.boatSelectorCompleteData)            
	                .then(handleResponse.bind('data',this))

	                .catch(function (error) {
	                    console.log(error);            
	                });

	                function handleResponse(context,response){
	                    /*context is an alias for this*/
	                    context.progress.info = response.data;
	                }
        		
        	},

        },

        data: function() {
		    return{		    	
		        progress:boatSelector,	        
		      }
	    },	  	
    };
</script>



<style lang="scss">
    @import "resources/assets/sass/variables.scss";
	.boatselector{
		width:100%;
	}
</style>

		