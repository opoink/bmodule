define([
	'jquery',
	'vue-init'
], function($, vInit) {
	vInit.mount().then(res => {
		vInit.loadOtherComponents();
	});
});