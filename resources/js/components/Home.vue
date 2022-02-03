<template>
    <div class=" bg-zinc-200 p-8 rounded-md w-full">
        <h1 class="text-6xl flex justify-center">Home</h1>
        <div
            class="flex w-full px-5 py-3 border-b-2 border-gray-200 bg-g ray-100 text-left text-2xs rounded text-gray-600 tracking-wider"
        >
            <div
                class="w-1/2 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700"
            >
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                        Enchawet football .....
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Here are the teams all over the city -->
                </p>
                <a
                    class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    <router-link to="/register"
                        >Create account and add your team</router-link
                    >
                    <svg
                        class="ml-2 -mr-1 w-4 h-4"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </a>
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                        Enchawet football .....
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Here are the teams all over the city -->
                </p>
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                        Enchawet football .....
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Here are the teams all over the city -->
                </p>
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                        Enchawet football .....
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Here are the teams all over the city -->
                </p>
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                        Enchawet football .....
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Here are the teams all over the city -->
                </p>
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                        Enchawet football .....
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Here are the teams all over the city -->
                </p>

                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                        Enchawet football .....
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Here are the teams all over the city -->
                </p>
            </div>

            <div class="w-1/2 ml-5 flex flex-col">
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div
                        class="container flex flex-wrap justify-between items-center mx-auto"
                    >
                        <label
                            class=" text-gray-700 text-2xl font-bold mb-2 tracking-wider"
                        >
                            Teams
                        </label>
                    </div>
                    <div
                        class="inline-block min-w-full shadow rounded-lg overflow-hidden"
                    >
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Id
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Name
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Address
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Phone Number
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Role
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"
                                    >
                                        Details
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="team in teams" :key="team.id">
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        {{ team.id }}
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        {{ team.name }}
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        {{ team.address }}
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        {{ team.phone_number }}
                                    </td>
                                    <td
                                        class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                    >
                                        {{ team.role }}
                                    </td>
                                    <!-- <td>
                                    <button v-on:click="deleteTeam(team.id)">
                                        Delete
                                    </button>
                                </td> -->
                                    <td>
                                        <button class="px-10 py-6 border-b border-gray-200 bg-white text-sm">
                                            <router-link to="/detail"
                                                >Detail</router-link
                                            >
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                        <div
                class="w-1/2 ml-5 p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700"
            >
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                        Enchawet football .....
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    City Cup is Comming up on Feb 12
                </p>
                <a
                    class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                >
                    <router-link to="/register"
                        >Create account add your team and apply for cup</router-link
                    >
                    <svg
                        class="ml-2 -mr-1 w-4 h-4"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </a>
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                        Enchawet football .....
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Here are the teams all over the city 
                </p>
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                        Enchawet football .....
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Here are the teams all over the city -->
                </p>
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                        Enchawet football .....
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Here are the teams all over the city -->
                </p>
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                        Enchawet football .....
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Here are the teams all over the city -->
                </p>
                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                        Enchawet football .....
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Here are the teams all over the city -->
                </p>

                <a href="#">
                    <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                    >
                        Enchawet football .....
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    Here are the teams all over the city -->
                </p>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "Home",
    data() {
        return {
            teams: [],
        };
    },
    async mounted() {
        this.getAllTeams();
    },
    methods: {
        getAllTeams() {
            fetch("http://last.test:8000/api/teams")
                .then((response) => {
                    if (response.ok) {
                        return response.json();
                    }
                })
                .then((response) => {
                    const teams = [];
                    console.log(response.data);
                    for (const id in response) {
                        teams.push({
                            id: id,
                            name: response[id].name,
                            address: response[id].address,
                            phone_number: response[id].phone_number,
                            role: response[id].role,
                        });
                    }
                    this.teams = teams;
                });
        },
    },
};
</script>
