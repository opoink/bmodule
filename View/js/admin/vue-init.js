define([
	'jquery', 'vue', 'vue-router'
], function($, Vue, VueRouter) {
	return {
		vue: null,
		vueRouter: null,
		components: [],

		/**
		 * retreive page name like
		 * return string
		 */
		getPageName: function(){
			let path = this.vueRouter.history.current.path;

			path = path.split('/');
			if(path[0] == ''){
				path.splice(0,1);
			}

			let newPath = [];
			path.forEach((value, key) => {
				if(key <= 3) {
					newPath.push(value);
				}
			});

			if(newPath.length < 4){
				let n = 4 - newPath.length;
				for (let index = 0; index < n; index++) {
					newPath.push('index');
				}
			}

			return newPath.join('_');

		},


		mount: function(){
			return new Promise(resolve => {
				this.vueRouter = new VueRouter({
					mode: 'history',
					routes: []
				});
				Vue.use(VueRouter);
			
				new Vue({
					beforeMount: () => {
						this.getComponent(this.getPageName());
					},
					mounted: () => {
						$('#main_container').removeClass('d-none');
						resolve(true);	
					},
					router: this.vueRouter
				}).$mount('#main_container');
			});
		},
		addRoute: function(options) {
			this.vueRouter.addRoutes([options]);
		},
		getComponent: function(cName){
			require([
				'/opoink/bmodule/admin/vue/component/' + cName + '.js'
			], function(){});
		},
		loadOtherComponents: function(){
			console.log('loadOtherComponents loadOtherComponents');
		}
	};
});