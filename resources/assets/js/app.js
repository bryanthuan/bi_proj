
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./scripts');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


//import store from './store/store';

import ECharts from 'vue-echarts/components/ECharts.vue'

Vue.component('chart', ECharts);

import mainchart from './components/mainChart';

const app = new Vue({
    el: '#app',
//    store,
    // created() {
    //     store.dispatch('fetchData');
    // },
    components:{
        mainchart
    }
});



