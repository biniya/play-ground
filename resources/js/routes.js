import { createRouter, createWebHistory } from "vue-router";

import TeamCreate from "./components/TeamCreate.vue";
import Search from "./components/Search.vue";
import Show from "./components/Show.vue";
import Detail from "./components/Detail.vue";
import Register from "./components/Auth/Register.vue";
import Home from "./components/Home.vue";
import Login from "./components/Auth/Login.vue";
import About from "./components/About.vue";
import Dashboard from "./components/Dashboard.vue";

const routes = [
    {
        name: "Home",
        component: Home,
        path: "/",
    },
    {
        name: "Register",
        component: Register,
        path: "/register",
    },
    {
        name: "Login",
        component: Login,
        path: "/login",
        meta: {
            requiresGuest: true,
        },
    },
    {
        name: "TeamCreate",
        component: TeamCreate,
        path: "/team-create",
    },
    {
        name: "Show",
        component: Show,
        path: "/show",
        meta: {
            requiresLogin: true,
        },
    },
    {
        name: "Search",
        component: Search,
        path: "/search",
    },
    {
        name: "Detail",
        component: Detail,
        path: "/detail",
        meta: {
            requiresLogin: true
        }
    },
    {
        name: "About",
        component: About,
        path: "/about",
    },
    {
        name: "Dashboard",
        component: Dashboard,
        path: "/dashboard",
    },
];

export default createRouter({
    history: createWebHistory(),
    routes,
});
