<template>
    <div class="bg-white p-8 rounded-md w-full">
        <div>
            <h2 class="text-3xl mt-6 mb-8">
                <!-- Hello, {{ user.name }} Welcome to Teams page -->
                Hellp and welcome to Teams page
            </h2>
            <!-- <button v-on:click="userInfo">Show user info</button> -->
        </div>
        <div
            class="w-full px-5 py-3 border-b-2 border-gray-200 bg-g ray-100 text-left text-2xs rounded text-gray-600 tracking-wider"
        >
            <div class="content-center">
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div
                        class="container flex flex-wrap justify-between items-center mx-auto"
                    >
                        <label
                            class="ml-5 text-gray-700 text-2xl font-bold mb-2 tracking-wider"
                        >
                            Teams
                        </label>
                        <input
                            class="m mb-2 w-60 px-5 py-3 border-b-2 border-black shadow-lg outline-none text-left text-2xs rounded text-gray-600 tracking-widest"
                            placeholder="Search team by address"
                            v-model="search"
                        />
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
                                <tr
                                    v-for="team in filteredTeams"
                                    :key="team.id"
                                >
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
                                        <button
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                        >
                                            <router-link to="/detail"
                                                >Detail</router-link
                                            >
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                            <!-- <tr v-if="nodata">
                                <td
                                    class="px-5 py-5 border-b border-gray-200 bg-white text-sm"
                                >
                                    No Data Found
                                </td>
                            </tr> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";
// import Swal from "sweetalert2";
import Post from "./child/Post.vue";
export default {
    name: "Show",
    data() {
        return {
            search: "",
            teams: [],
            // user: [],
        };
    },
    components: {
        Post,
    },
    async mounted() {
        this.getAllTeams();
    },

    methods: {
        // async userInfo() {
        //     await axios.get("http://last.test:8000/api/profile").then((response) => {
        //         console.log(response.data);
        //     });
        // },
        // async deleteTeam(id) {
        //     let result = await axios.delete(
        //         "http://last.test:8000/api/teams/" + id
        //     );
        //     console.warn(result);
        //     if (result.status == 200) {
        //         this.getAllTeams();
        //     }
        // },
        getAllTeams() {
            fetch("/api/teams")
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
    computed: {
        filteredTeams() {
            return this.teams.filter((team) =>
                team.address.includes(this.search)
            );
        },
    },
    // created() {
    //     axios
    //         .get("http://last.test:8000/api/profile")
    //         .then(({ response }) => this.user.fill(response));
    // },
};
</script>
