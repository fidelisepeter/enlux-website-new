/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);


//Register Component

import HeaderLayout from '@/components/layout/Header';
import HeroLayout from '@/components/layout/Hero';
import FooterLayout from '@/components/layout/Footer';

import HomePage from '@/components/pages/Home';
import BlogPage from '@/components/pages/Blog';
import BlogDetailsPage from '@/components/pages/Blog-details';


Vue.component('header-layout', HeaderLayout);
Vue.component('footer-layout', FooterLayout);
Vue.component('hero', HeroLayout);

Vue.component('home-main', HomePage);
Vue.component('blog-main', BlogPage);
Vue.component('blog-details', BlogDetailsPage, {props: ['blogid']});

// Vue.component('blog-main', require('./components/pages/Blog.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App'
import Home from './views/Home'
import Blog from './views/Blog'
import NotFound from './views/404'
import BlogSingle from './views/Blog-single'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home
        },
        {
            path: '/blog',
            name: 'Blog',
            component: Blog
        },
        {
            path: '/blog/:blogid',
            name: 'blogdetails',
            component: BlogSingle
        },
        {
            // 404 Error Page
            path: '/:catchAll(.*)',
            name: 'NotFound',
            component: NotFound
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});

// const app = new Vue({
//     el: '#app',
// });
