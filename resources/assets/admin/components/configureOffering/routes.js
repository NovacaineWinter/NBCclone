import routes from '../../setup/setupRoutes';



routes.push(
	{
		path:'/dimensions',

		component: require('./views/dimensions.vue')
	},
	{
		path:'/hull-styles',

		component: require('./views/hullStyles.vue')
	},
	{
		path:'/models',

		component: require('./views/models.vue')
	},
	{
		path:'/trim-levels',

		component: require('./views/trimLevels.vue')
	},
	{
		path:'/stock-boats',

		component: require('./views/stockBoats.vue')
	},		
);

	
