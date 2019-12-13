import Vue from 'vue';
import VueRouter from 'vue-router';

import Trip from '@/js/components/Trip'

Vue.use(VueRouter);

const router = new VueRouter({
	mode: 'history',
	routes: [
		{
			path: '/trip',
			name: 'trip',
			component: Trip
		}
	]
});

export default router;