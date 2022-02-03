<template>
    <div class="flex justify-center max-w">
        <form class="p-6 rounded-lg shadow-lg bg-white mt-4">
            <h2 class="text-3xl text-center mt-6 mb-8">Add Team Information</h2>
            <div class="form-group mb-6 flex flex-col">
                <input
                    type="text"
                    name="name"
                    placeholder="Name"
                    class="px-3 py-3 mx-3 my-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-center"
                    v-model="team.name"
                />
                <input
                    type="text"
                    name="address"
                    placeholder="Address"
                    class="px-3 py-3 mx-3 my-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-center"
                    v-model="team.address"
                />
                <input
                    type="text"
                    name="phone_number"
                    placeholder="Phone Number"
                    class="px-3 py-3 mx-3 my-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-center"
                    v-model="team.phone_number"
                />
                <input
                    type="text"
                    name="role"
                    placeholder="Role"
                    class="px-3 py-3 mx-3 my-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-center"
                    v-model="team.role"
                />
                <textarea
                    type="text"
                    name="description"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    rows="3"
                    placeholder="Description"
                    v-model="team.description"
                ></textarea>
                <br />
                <button
                    type="button"
                    v-on:click="addTeam"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded content-center my-3"
                >
                    Add new Team
                </button>
            </div>
        </form>
    </div>
</template>
<script>
import axios from "axios";
export default {
    name: "TeamCreate",
    data() {
        return {
            team: {
                name: "",
                address: "",
                phone_number: "",
                role: "",
                description: "",
            },
        };
    },
    methods: {
        async addTeam() {
            console.warn(this.team);
            const result = await axios.post(
                "http://last.test:8000/api/teams",
                {
                    name: this.team.name,
                    address: this.team.address,
                    phone_number: this.team.phone_number,
                    role: this.team.role,
                    description: this.team.description,
                },
                // To clear form after submit
                (this.team = {})
            );
        },
    },
};
</script>
