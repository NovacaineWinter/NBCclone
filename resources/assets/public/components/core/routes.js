import routes from '../../setup/setupRoutes';




routes.push(
	{
		path:'/dataprotection',

		component: require('./views/dataProtection.vue')
	},

	{
		path:'/cookiePolicy',

		component: require('./views/cookiePolicy.vue')
	},
	{
		path:'/settings',

		component: require('./views/settings.vue')
	},		
);

