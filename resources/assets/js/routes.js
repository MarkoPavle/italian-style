import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

export const router = new VueRouter({
    routes: [
        { path: "/home", component: require('./components/home/Home.vue'), meta: { forAuth: true } },

        { path: "/login", component: require('./components/auth/Login.vue'), meta: { forVisitors: true } },
        { path: "/register", component: require('./components/auth/Register.vue'), meta: { forVisitors: true } },
        { path: "/logout", component: require('./components/auth/Logout.vue'), meta: { forAuth: true } },

        { path: "/users", component: require('./components/users/UserList.vue'), meta: { forAuth: true } },
        { path: "/users/create", component: require('./components/users/UserCreate.vue'), meta: { forAuth: true } },
        { path: "/users/:id/edit", component: require('./components/users/UserEdit.vue'), meta: { forAuth: true } },

        { path: "/categories", component: require('./components/categories/CategoryList.vue'), meta: { forAuth: true } },
        { path: "/categories/create", component: require('./components/categories/CategoryCreate.vue'), meta: { forAuth: true } },
        { path: "/categories/:id/edit", component: require('./components/categories/CategoryEdit.vue'), meta: { forAuth: true } },
    ],

    linkActiveClass: 'active'
});