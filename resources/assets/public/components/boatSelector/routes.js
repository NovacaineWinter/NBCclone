import routes from '../../setup/setupRoutes';

routes.push(
	
	{
		path:'/range',

		component: require('./views/range.vue')
	},
	{
		path:'/help-me-choose',

		component: require('./views/helpMeChoose.vue')
	},
	{
		path:'/detail',

		component: require('./views/detail.vue')
	},
	{
		path:'/detail/:subsection',

		component: require('./views/detail.vue')
	},
);