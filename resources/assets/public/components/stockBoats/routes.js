import routes from '../../setup/setupRoutes';


routes.push(
	{
		path:'/stock',

		component: require('./views/stock.vue')
	},
	{
		path:'/stock/detail',

		component: require('./views/stockDetail.vue')
	},	
	{
		path:'/stock/detail/:subsection',

		component: require('./views/stockDetail.vue')
	},	
);

