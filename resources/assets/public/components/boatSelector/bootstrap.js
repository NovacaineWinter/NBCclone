import Vue from 'vue';

require('./routes.js');
require('./navbarItems.js');


/* Main Range Navigator */
	//Main Component
	Vue.component('boat-selector', require('./components/navigator/rangeNavigator.vue'));
	//Sub Components
		//cards
		Vue.component('detail-card', require('./components/navigator/cards/detailCard.vue'));
		Vue.component('number-card', require('./components/navigator/cards/numberCard.vue'));
		//sections
		Vue.component('hull-chooser', require('./components/navigator/subsections/hullChooser.vue'));
		Vue.component('model-chooser', require('./components/navigator/subsections/modelChooser.vue'));
		Vue.component('width-chooser', require('./components/navigator/subsections/widthChooser.vue'));
		Vue.component('length-chooser', require('./components/navigator/subsections/lengthChooser.vue'));
		Vue.component('trim-chooser', require('./components/navigator/subsections/trimChooser.vue'));



/* Hull Widget - standalone selector for the homepage */
	//Main component
	Vue.component('hull-widget', require('./components/hullWidget/hullWidgetComponent.vue'));
	//Sub components
	//Vue.component('hull-widet-card', require('./components/hullWidget/hullWidgetCard.vue'));



/* Comparison - The "help me choose" part */
	//Main Component
	Vue.component('help-me-choose', require('./components/comparison/helpMeChooseComponent.vue'));
	//sub components
	Vue.component('help-me-choose-card', require('./components/comparison/helpMeChooseCard.vue'));


/* Detail page components */

Vue.component('detail-overview', require('./components/detailSubcomponents/detailOverview.vue'));
Vue.component('detail-downloads', require('./components/detailSubcomponents/detailDownloads.vue'));
Vue.component('detail-gallery', require('./components/detailSubcomponents/detailGallery.vue'));
Vue.component('info-bite', require('./components/detailSubcomponents/infobite.vue'));

Vue.component('contact-us', require('./components/detailSubcomponents/contactUsWidget.vue'));
