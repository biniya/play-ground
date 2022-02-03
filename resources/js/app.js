require("./bootstrap");

import { createApp } from "vue";
import { createStore } from "vuex";

import App from "./App.vue";
import routes from "./routes.js";

// import VueSweetalert2 from 'vue-sweetalert2';
// import NavBar from "./components/navigation/NavBar.vue";

// const app = createApp({
//     components: {
//         'nav-bar': NavBar,
//     }
// })
// .use(routes, VueSweetalert2)
// .mount("#app");
const app = createApp(App);
app.config.globalProperties.$axios = axios;
app.use(routes);
app.mount("#app");
app.use(store);

// Create a new store instance.
const store = createStore({
    
    state() {
        user = null,
        isLoggedIn = false
    },
    //Commit and track state changes
    mutations: {
        login: (state, payload) => {
            state.user = payload;
        },
    },
    //access state(data)
    getters: {
        getUser() {
            return state.user;
        },
        getAuthStatus() {
            return state.isLoggedIn
        },
    },
});
export default {
    state, getters, mutations
}
