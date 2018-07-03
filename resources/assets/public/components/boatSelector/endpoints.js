/* setup the API routes for this component */


var endpoints = [];

endpoints.someEndpoint = '/some/endpoint/for/api';


//endpoint to populate all data for the boat selector
endpoints.allData = '/vue/data/all-data';





/*		Below is probably un-needed now but leaving it here for now...  */

/*Hull  Styles*/
/**/
/**/	endpoints.hullStyles = '/vue/data/hull-styles';
/**/	
/**/
/**//*	Needs to return the following data structure as a minimum		*/
/**//*		response.name												*/
/**//*		response.id													*/
/**//*		response.img	<-path for the image resource				*/
/**//*		response.models	<- array of models for that hullstyle       */	
/**/
/**/		endpoints.chosenHull ='/vue/data/chosen-hull';	
/**/		
/**//*		This needs to add in hull.models.widths		
/**/
/* * * * * * */







export default endpoints;


/*import endpoints from '../endpoints.js';*/