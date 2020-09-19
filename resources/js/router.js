import Vue from 'vue';
import Router from 'vue-router';
import Home from './views/Home.vue';
import Productos from './views/Productos.vue';

Vue.use(Router);

const routes = [
	{
		path: '/',
		name: 'welcome',
		component: Home		
	},
	{
		path: '/productos',
		name: 'productos',
		component: Productos

	}
]

const router = new Router({
	routes: routes,
	linkActiveClass: 'active'
})

export default router;