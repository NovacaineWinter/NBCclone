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


Vue.component('info-bites', require('./components/infobites/infobite.vue'));
Vue.component('new-info-bite', require('./components/infobites/newInfobite.vue'));
Vue.component('manage-info-bites', require('./components/infobites/manageInfobites.vue'));
