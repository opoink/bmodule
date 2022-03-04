define([
	'vue',
	'vue-init'
], function(Vue, vInit) {
	'use strict';

	let _component = Vue.component('admin-adminuser-index-index', {
		template: '<div id="bad_route"><h1>Page Not Found</h1><p>Sorry, but the page you were trying to view does not exist.</p></div>'
	});

	vInit.addRoute({path: '/admin/adminuser', component: _component});
});