/*var boatSelector = {
	hull:'',
	model:'',
	beam:'',
	loa:'',
	trim:'',
	activeSelector:'',
	info:{},
	helpChoosedata:{},
	helpChooseTitle:'',
	detailtarget:{}
};
*/

var boatSelector = {
	raw:{
		configurations:{},
		hull_styles:{},
		boat_models:{},
		beams:{},
		loas:{},
		trim_levels:{}
	},
	toRender:{
		hull_styles:{},
		boat_models:{},
		beams:{},
		loas:{},
		trim_levels:{}
	},
	chosen:{
		detail:'singleObject',
		helpMeChoose:{
			items:{},
			topic:''
		},
		choices:{
			hull_style:false,
			boat_model:false,
			beam:false,
			loa:false,
			trim_level:false,
			active_selector:''
		}
	}
}


//required to have beam and loa as .width and .length are methods

export default boatSelector;