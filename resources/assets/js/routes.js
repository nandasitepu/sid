import VueRouter from 'vue-router';

let routes = [

    // HOME PAGE VUE Components
    {
        path: '/example',
        component: require('./components/Example.vue')
    }



];

export default new VueRouter({
    mode: 'history',
    hashbang: false,
    linkActiveClass: 'active',
    saveScrollPosition: true,
    routes
});