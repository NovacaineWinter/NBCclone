import './bootstrap';

import router from './router';


/*
*	Init vue
*/ 
const app = new Vue({
    el: '#app',
    data: {    
    acceptedCookies:false,	
    },
    router: router,

});

