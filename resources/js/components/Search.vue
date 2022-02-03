<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <input
                    type="text"
                    v-model.trim="search"
                    placeholder="Search team..."
                    @keyup="getAllTeams"
                /><br />
                <ul>
                    <li v-for="team in teams" :key="team.id">
                        {{ team.name }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "Search",
    data() {
        return {
            teams: [],
            search: "",
        };
    },
    methods: {
        getAllTeams() {
            fetch("http://last.test:8000/api/teams/")
                .then((response) => {
                    if (response.ok) {
                        return response.json();
                    }
                })
                .then((response) => {
                    if (this.search) {
                        this.teams = response.results.filter((teams) => {
                            teams.name
                                .toLowerCase()
                                .includes(this.search.toLowerCase())
                                }
                        );
                    } else {
                        this.teams = response.results;
                    }
                });
        },
    },
    created() { 
        this.getAllTeams();
    },
};
</script>
