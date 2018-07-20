import Vue from 'vue';

require('./routes.js');
require('./navbarItems.js');

	/* Stock Boat Selector */
	Vue.component('all-stock-boats', require('./components/selector/stockBoatSelectorComponent.vue'));
		//Subcomponents
		Vue.component('stock-boat-card', require('./components/selector/stockBoatSelectorCard.vue'));


	/*	Stock boat detail	*/
	Vue.component('stock-boat-detail', require('./components/detail/stockBoatDetailComponent.vue'));
		//subcomponents
		Vue.component('stock-detail-overview', require('./components/detail/subcomponents/stockOverview.vue'));
		Vue.component('stock-detail-gallery', require('./components/detail/subcomponents/stockGallery.vue'));
		Vue.component('stock-detail-downloads', require('./components/detail/subcomponents/stockDownloads.vue'));
		





