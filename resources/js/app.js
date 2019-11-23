
require('./bootstrap');

window.Vue = require('vue');

import store from './store/index'

//Vue.component('tasks',require('./components/Tasks.vue'))
Vue.component('task-form',require('./components/TaskForm.vue').default);
Vue.component('task-list', require('./components/TaskList.vue').default);


const app = new Vue({
    el: '#app',
    store
});
