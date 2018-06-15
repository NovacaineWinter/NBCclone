/* setup the API routes for this component */


var endpoints = [];

endpoints.someEndpoint = '/some/endpoint/for/api';


/*Hull  Styles*/
/**/
/**/	endpoints.hullStyles = '/vue/info/hullstyles';
/**/
/**/
/**//*	Needs to return the following data structure as a minimum		*/
/**//*		response.name												*/
/**//*		response.id													*/
/**//*		response.img	<-path for the image resource				*/
/**/
/* * * * * * */






/*Boat Selector - Master*/
/**/	
/**/	endpoints.boatSelectorCompleteData = '/vue/info/boat-selector-all-info';
/**/
/**//*	Needs to return the following data structure as a minimum		*/
/**//*		response.hulls.id											*/
/**//*		response.hulls.name
/**//*		response.hulls.img
/**//*		
/**//*
/**//*		response.models.id
/**//*		response.models.name
/**//*		response.models.img
/**//*
/**//*
/**//*		response.													*/





export default endpoints;


/*import endpoints from '../endpoints.js';*/