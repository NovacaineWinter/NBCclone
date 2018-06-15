import Vue from 'vue';

require('./routes.js');
require('./navbarItems.js');

/**/
/**/	/* Selectors */
/**/	Vue.component('standalone-hull-style-selector', require('./components/standaloneHullStyleSelector.vue'));
/**/	Vue.component('boat-selector', require('./components/masterBoatSelector.vue'));
/**/	Vue.component('help-me-choose-hull', require('./components/helpMeChooseHull.vue'));
/**/	Vue.component('hull-chooser', require('./components/hullChooser.vue'));
/**/	Vue.component('model-chooser', require('./components/modelChooser.vue'));
/**/
/**/	/* Cards */
/**/	Vue.component('hull-style-card-standalone', require('./subcomponents/hullStyleCardStandalone.vue'));
/**/	Vue.component('hull-style-card', require('./subcomponents/hullStyleCard.vue'));
/**/	Vue.component('model-card', require('./subcomponents/modelCard.vue'));
/**/	Vue.component('length-card', require('./subcomponents/lengthCard.vue'));
/**/	Vue.component('model-card', require('./subcomponents/modelCard.vue'));
/**/	Vue.component('width-card', require('./subcomponents/widthCard.vue'));
/**/

