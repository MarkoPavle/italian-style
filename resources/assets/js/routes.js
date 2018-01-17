import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './components/home/Home.vue';

import Login from './components/auth/Login.vue';
import Logout from './components/auth/Logout.vue';
import Register from './components/auth/Register.vue';

import UserList from './components/users/UserList.vue';
import UserEdit from './components/users/UserEdit.vue';

export const router = new VueRouter({
    routes: [
        { path: "/home", component: Home, meta: { forAuth: true } },

        { path: "/login", component: Login, meta: { forVisitors: true } },
        { path: "/register", component: Register, meta: { forVisitors: true } },
        { path: "/logout", component: Logout, meta: { forAuth: true } },

        { path: "/users", component: UserList, meta: { forAuth: true } },
        { path: "/users/:id/edit", component: UserEdit, meta: { forAuth: true } },
    ],

    linkActiveClass: 'active'
});