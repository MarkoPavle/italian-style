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

        { path: "/posts", component: require('./components/posts/PostList.vue'), meta: { forAuth: true } },
        { path: "/posts/create", component: require('./components/posts/PostCreate.vue'), meta: { forAuth: true } },
        { path: "/posts/:id/edit", component: require('./components/posts/PostEdit.vue'), meta: { forAuth: true } },

        { path: "/settings/:id/edit", component: require('./components/settings/SettingEdit.vue'), meta: { forAuth: true } },

        { path: "/themes", component: require('./components/themes/ThemeList.vue'), meta: { forAuth: true } },
        { path: "/themes/create", component: require('./components/themes/ThemeCreate.vue'), meta: { forAuth: true } },
        { path: "/themes/:id/edit", component: require('./components/themes/ThemeEdit.vue'), meta: { forAuth: true } },

        { path: "/menus", component: require('./components/menus/MenuList.vue'), meta: { forAuth: true } },
        { path: "/menus/create", component: require('./components/menus/MenuCreate.vue'), meta: { forAuth: true } },
        { path: "/menus/:id/edit", component: require('./components/menus/MenuEdit.vue'), meta: { forAuth: true } },

        { path: "/menu-links/:id/edit", component: require('./components/menuLinks/MenuLinks.vue'), meta: { forAuth: true } },
    ],

    linkActiveClass: 'active'
});