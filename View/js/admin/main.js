define([
	'jquery',
	'vue-init',
	'request'
], function($, vInit, req) {
	vInit.mount().then(res => {

		let url = '/opoink/bmodule/admin/vue/component/allcomponents';
		req.doRequest(url, '', 'GET').then(components => {
			components.forEach(component => {
				vInit.getComponent(component);
			});
		}).catch(error => {

		});
		
	});
});