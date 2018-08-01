import Vue from 'vue';

require('./routes.js');
require('./navbarItems.js');


/*Vue.component('', require('./components/comp.vue'));*/

Vue.component('dashboard-home', require('./components/dashboardHomeComponent.vue'));


Vue.component('configure-hull', require('./components/configureHullStyle/configureHullComplete.vue'));
Vue.component('hull-style-card', require('./components/configureHullStyle/configureHullStyleCard.vue'));


Vue.component('configure-model', require('./components/configureModel/configureModelComplete.vue'));
Vue.component('model-style-card', require('./components/configureModel/configureModelCard.vue'));


Vue.component('configure-trim', require('./components/configureTrimLevel/configureTrimLevelComplete.vue'));
Vue.component('trim-level-card', require('./components/configureTrimLevel/configureTrimLevelCard.vue'));

Vue.component('save-successful-banner', require('./components/saveSuccessfulBanner.vue'));
Vue.component('save-unsuccessful-banner', require('./components/saveUnsuccessfulBanner.vue'));
Vue.component('new-image-modal', require('./components/newImageModal.vue'));
Vue.component('new-file-modal', require('./components/newFileModal.vue'));


Vue.component('info-bite', require('./components/infobites/infobite.vue'));
Vue.component('new-infobite-modal', require('./components/infobites/newInfobite.vue'));
Vue.component('manage-info-bites', require('./components/infobites/manageInfobites.vue'));


Vue.component('stock-boat-card', require('./components/stockBoats/stockBoatCard.vue'));
Vue.component('configure-stock-boat', require('./components/stockBoats/configureStockBoat.vue'));