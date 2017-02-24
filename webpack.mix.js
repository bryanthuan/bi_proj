var path = require('path')
const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
.extract(['vue','vue-router','axios','jquery','bootstrap-sass','dcjqaccordion','jquery.cookie','jquery.nicescroll','vue-echarts','vuex','echarts-liquidfill','vue-echarts/components/ECharts.vue','echarts/lib/chart/bar','echarts/lib/component/tooltip','echarts/theme/dark'])
.combine([
    'resources/assets/css/bootstrap-reset.css',
    'resources/assets/css/style.css',
    'resources/assets/css/style-responsive.css'
], 'public/css/app.css');

