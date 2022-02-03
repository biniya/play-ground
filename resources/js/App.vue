<template>
    <nav
        class="pt-10 pb-5 bg-blue-900 border-gray-200 px-2 sm:px-4 py-2.5 rounded-b-lg dark:bg-gray-800"
    >
        <div
            class="container flex flex-wrap justify-between items-center mx-auto"
        >
            <!-- for logged-in user-->
            <div class="navbar-nav" v-if="isLoggedIn">
                <router-link to="/dashboard" class="nav-item nav-link"
                    >Dashboard</router-link
                >
                <!-- <a
                    class="nav-item nav-link"
                    style="cursor: pointer"
                    @click="logout"
                    >Logout</a
                > -->
                
                <button
                    class="ml-2 mr-2 pl-4 pr-4 block text-white bg-blue-700 rounded dark:text-white"
                >
                    <router-link to="/login" @click="logout">
                        Logout</router-link
                    >
                </button>
                <button
                    class="inline py-2 pr-4 pl-3 text-white bg-blue-700 rounded dark:text-white"
                >
                    <router-link to="/team-create"> Add</router-link>
                </button>
            </div>
            <!-- for non-logged user-->
            <div class="navbar-nav" v-else>
                <router-link
                    to="/"
                    class="px-2 py-2 ml-2 mr-2 pl-4 pr-4 inline text-white bg-blue-700 rounded dark:text-white"
                    >Home</router-link
                >
                <router-link
                    to="/login"
                    class="px-2 py-2 ml-2 mr-2 pl-4 pr-4 inline text-white bg-blue-700 rounded dark:text-white"
                    >login</router-link
                >
                <router-link
                    to="/register"
                    class="px-2 py-2 ml-2 mr-2 pl-4 pr-4 inline text-white bg-blue-700 rounded dark:text-white"
                    >Register
                </router-link>
                <router-link
                    to="/about"
                    class="px-2 py-2 ml-2 mr-2 pl-4 pr-4 inline text-white bg-blue-700 rounded dark:text-white"
                    >About
                </router-link>
            </div>
        </div>
    </nav>
    <br />
    <router-view />
</template>

<script>
export default {
    name: "App",
    data() {
        return {
            isLoggedIn: false,
        };
    },
    created() {
        if (window.Laravel.isLoggedin) {
            this.isLoggedIn = true;
        }
    },
    methods: {
        logout(e) {
            console.log("ss");
            e.preventDefault();
            this.$axios.get("/sanctum/csrf-cookie").then((response) => {
                this.$axios
                    .post("/api/logout")
                    .then((response) => {
                        if (response.data.success) {
                            window.location.href = "/";
                        } else {
                            console.log(response);
                        }
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
            });
        },
    },
};
</script>
