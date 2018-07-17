		
<template>
	<nav class="panel section boatselector">

<h3 class="panel-heading">
	Select a Boat
</h3>

	<!-- Hull Style -->

		<div class="panel-block" v-show="shared.chosen.choices.hull_style!='' && shared.chosen.choices.active_selector!='hull'">

				<div class="column is-11"><h3>Hull Style&nbsp;:&nbsp;<span>{{ shared.chosen.choices.hull_style.name }}</span></h3></div>

				<div class="column is-1">
					<div class="button" @click="editHull">Edit ></div>
				</div>
		</div>			

		<hull-chooser v-show="shared.chosen.choices.active_selector=='hull'" class="panel-heading" @chosen="hullChosen"></hull-chooser>

				
	<!-- Model -->
		
		<div class="panel-block" v-show="shared.chosen.choices.boat_model!='' && shared.chosen.choices.active_selector!='model'">

				<div class="column is-11"><h3>Model&nbsp;:&nbsp;<span>{{ shared.chosen.choices.boat_model.name }}</span></h3></div>

				<div class="column is-1">
					<div class="button" @click="editModel">Edit ></div>
				</div>
		</div>			

		<model-chooser v-show="shared.chosen.choices.active_selector=='model'" @chosen="modelChosen"></model-chooser>

	
	<!-- Width -->

		<div class="panel-block" v-show="shared.chosen.choices.beam!='' && shared.chosen.choices.active_selector!='beam'">

				<div class="column is-11"><h3>Width&nbsp;:&nbsp;<span>{{ shared.chosen.choices.beam.feet }}</span></h3></div>

				<div class="column is-1">
					<div class="button" @click="editBeam">Edit ></div>
				</div>
		</div>			

		<width-chooser v-show="shared.chosen.choices.active_selector=='beam'" @chosen="beamChosen"></width-chooser>

	<!-- Length -->

		<div class="panel-block" v-show="shared.chosen.choices.loa!='' && shared.chosen.choices.active_selector!='loa'">

				<div class="column is-11"><h3>Length&nbsp;:&nbsp;<span>{{ shared.chosen.choices.loa.feet }}</span></h3></div>

				<div class="column is-1">
					<div class="button" @click="editLoa">Edit ></div>
				</div>
		</div>			

		<length-chooser v-show="shared.chosen.choices.active_selector=='loa'" @chosen="loaChosen"></length-chooser>	

	<!-- Trim Level -->

		<div class="panel-block" v-show="shared.chosen.choices.trim_level!='' && shared.chosen.choices.active_selector!='trim'">

				<div class="column is-11"><h3>Trim Level&nbsp;:&nbsp;<span>{{ shared.chosen.choices.trim_level.name }}</span></h3></div>

				<div class="column is-1">
					<div class="button" @click="editTrim">Edit ></div>
				</div>
		</div>			

		<trim-chooser v-show="shared.chosen.choices.active_selector=='trim'" @chosen="trimChosen"></trim-chooser>	


	</nav>
</template>

<script>

    import endpoints from '../../endpoints.js';

    import boatSelector from '../../sharedState.js';

    export default {

        mounted() {        	
        	this.loadContent();
            this.identifyNextChoice();            
        },

        methods:{

        	editHull(){
				this.shared.chosen.choices.hull_style=false;
				this.shared.chosen.choices.boat_model=false;
				this.shared.chosen.choices.beam=false;
				this.shared.chosen.choices.loa=false;
				this.shared.chosen.choices.trim_level=false;
				this.identifyNextChoice();
			},
        	editModel(){
				this.shared.chosen.choices.boat_model=false;
				this.shared.chosen.choices.beam=false;
				this.shared.chosen.choices.loa=false;
				this.shared.chosen.choices.trim_level=false;
				this.identifyNextChoice();
			},
			editBeam(){
				this.shared.chosen.choices.beam=false;
				this.shared.chosen.choices.loa=false;
				this.shared.chosen.choices.trim_level=false;
				this.identifyNextChoice();
			},
			editLoa(){
				this.shared.chosen.choices.loa=false;
				this.shared.chosen.choices.trim_level=false;
				this.identifyNextChoice();
			},
			editTrim(){
				this.shared.chosen.choices.trim_level=false;
				this.identifyNextChoice();
			},

            identifyNextChoice(){
                if (!this.shared.chosen.choices.hull_style){

                	this.shared.chosen.choices.active_selector='hull';

                }else if(!this.shared.chosen.choices.boat_model){

                	this.shared.chosen.choices.active_selector='model';

                }else if(!this.shared.chosen.choices.beam){

                	this.shared.chosen.choices.active_selector='beam';

                }else if(!this.shared.chosen.choices.loa){

                	this.shared.chosen.choices.active_selector='loa';

                }else if(!this.shared.chosen.choices.trim_level){

                	this.shared.chosen.choices.active_selector='trim';

                }else{
                	this.shared.chosen.choices.active_selector='finished';
                	this.shared.chosen.configuration_complete = true;
                	//alert('finished config');
                	this.shared.chosen.detail = this.shared.chosen.choices.boat_model;

                	if(!this.shared.chosen.suppressForward){
                		this.$router.push('/detail');
               		}
               	}
            },



        	hullChosen(hull){

        		this.shared.chosen.choices.hull_style=hull;	//at this stage, hull only incldues hull.models
        		this.identifyNextChoice();
        	},

        	modelChosen(model){
        		this.shared.chosen.choices.boat_model=model;
        		this.identifyNextChoice();
        	},
        	beamChosen(beam){
        		this.shared.chosen.choices.beam=beam;
        		this.identifyNextChoice();
        	},
        	loaChosen(loa){
        		this.shared.chosen.choices.loa=loa;
        		this.identifyNextChoice();
        	},
        	trimChosen(trim){
        		this.shared.chosen.choices.trim_level=trim;
        		this.shared.chosen.suppressForward = false;
        		this.identifyNextChoice();
        	},

        	loadContent(){

        		axios.get(endpoints.allData)            
	                .then(handleResponse.bind('data',this))

	                .catch(function (error) {
	                    console.log(error);            
	                });

	                function handleResponse(context,response){
	                    /*context is an alias for this*/
	                    context.shared.raw = response.data;
	                }
        		
        	},

        },

        data: function() {
		    return{		    	
		        shared:boatSelector,	   
		      }
	    },	 	
    };
</script>



<style lang="scss">

   @import '~sass/variables';
	.boatselector{
		width:100%;
	}
</style>

		