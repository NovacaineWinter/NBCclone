import routes from '../../setup/setupRoutes';




routes.push(
	{
		path:'/data-protection',

		component: require('./views/dataProtection.vue')
	},

	{
		path:'/cookie-policy',

		component: require('./views/cookiePolicy.vue')
	},
	{
		path:'/settings',

		component: require('./views/settings.vue')
	},
	/*{
		path:'/terms-of-business',

		component: require('./views/termsAndConditions.vue')
	},		*/
);

