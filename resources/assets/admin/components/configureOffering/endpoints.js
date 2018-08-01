/* setup the API routes for this component */


var endpoints = [];

endpoints.someEndpoint = '/some/endpoint/for/api';

endpoints.allData = '/vue/data/all-data';


endpoints.updateModels = '/vue/update';

endpoints.updatePrimaryImage = '/vue/update/primary-image';

endpoints.deleteImage = '/vue/update/delete-image';
endpoints.deleteFile = '/vue/update/delete-file';
endpoints.newImage = '/vue/update/new-image';
endpoints.newFile = '/vue/update/new-file';
endpoints.updateImage = '/vue/update/image';

endpoints.newInfobite = '/vue/update/new-infobite';
endpoints.deleteInfobite = '/vue/delete/infobite';


endpoints.stockBoats = '/vue/data/stock-boats';
endpoints.updateStockBoat = '';

export default endpoints;



//to import into a file use this snippet 
	/*import endpoints from '../endpoints.js';*/