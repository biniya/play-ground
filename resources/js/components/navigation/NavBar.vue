<template>
    <nav
        class="bg-blue-900 border-gray-200 px-2 sm:px-4 py-2.5 rounded-b-lg dark:bg-gray-800"
    >
        <div
            class="container flex flex-wrap justify-between items-center mx-auto"
        >
            <a href="#" class="flex">
                <span
                    class="text-white self-center text-lg font-semibold whitespace-nowrap dark:text-white"
                    >Enchawet</span
                >
            </a>
            <div class="flex md:order-2">
                <!-- <div class="hidden relative mr-3 md:mr-0 md:block">
                    <div
                        class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                    >
                        <svg
                            class="w-5 h-5 text-gray-500"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </div>
                    <input
                        type="text"
                        class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search..."
                    />
                </div> -->
                <button
                    class="px-2 py-2 ml-2 mr-2 pl-4 pr-4 block text-white bg-blue-700 rounded dark:text-white"
                >
                    <router-link to="/register"> SignUp</router-link>
                </button>
                <button
                    class="ml-2 mr-2 pl-4 pr-4 block text-white bg-blue-700 rounded dark:text-white"
                >
                    <router-link to="/login"> Login</router-link>
                </button>

                <button
                    class="ml-2 mr-2 pl-4 pr-4 block text-white bg-blue-700 rounded dark:text-white"
                    
                >
                    <router-link to="/login" v-on:click="logout">
                        Logout</router-link
                    >
                </button>

                <button
                    data-collapse-toggle="mobile-menu-3"
                    type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-3"
                    aria-expanded="false"
                >
                    <span class="sr-only">Open main menu</span>
                    <svg
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                    <svg
                        class="hidden w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>
            </div>
            <div
                class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1"
                id="mobile-menu-3"
            >
                <ul
                    class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium"
                >
                    <li>
                        <button
                            class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded dark:text-white"
                        >
                            <router-link to="/"> Home</router-link>
                        </button>
                    </li>
                    <li>
                        <button
                            class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded dark:text-white"
                        >
                            <router-link to="/team-create"> Add</router-link>
                        </button>
                    </li>
                    <li>
                        <button
                            class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded dark:text-white"
                        >
                            <router-link to="/show"> Teams</router-link>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>
<script>
export default {
    name: "NavBar",
    data() {
        return {
            name: "",
        //  isLoggedIn: true,
        };
    },
    methods: {
      
        logout() {
            axios.post("http://last.test:8000/api/logout");
            if (result.status == 200) {
                localStorage.clear(auth_token);
                this.$router.push({ name: "Login" });
            }
            // else {
            //     this.isLoggedIn = true;
            // }
        },
        // logged() {
        //     this.isLoggedIn = false;
        // }
    },
};
</script>
