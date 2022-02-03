<template>
    <div
        class="min-w-screen min-h-screen bg-white-900 flex items-center justify-center px-5 py-5"
    >
        <div
            class="bg-gray-100 text-gray-500 rounded-3xl shadow-2xl w-full overflow-hidden"
            style="max-width: 1000px"
        >
            <div class="md:flex justify-center w-full">
                <div
                    class="alert alert-danger"
                    role="alert"
                    v-if="error !== null"
                >
                    {{ error }}
                </div>
                <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                    <div class="text-center mb-10">
                        <h1 class="font-bold text-3xl text-gray-900">LOGIN</h1>
                    </div>
                    <div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-5">
                                <label for="" class="text-xs font-semibold px-1"
                                    >Email</label
                                >
                                <div class="flex">
                                    <div
                                        class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"
                                    >
                                        <i
                                            class="mdi mdi-email-outline text-gray-400 text-lg"
                                        ></i>
                                    </div>
                                    <input
                                        type="email"
                                        class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                        placeholder="Enter Your Email"
                                        v-model="email"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-12">
                                <label for="" class="text-xs font-semibold px-1"
                                    >Password</label
                                >
                                <div class="flex">
                                    <div
                                        class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"
                                    >
                                        <i
                                            class="mdi mdi-lock-outline text-gray-400 text-lg"
                                        ></i>
                                    </div>
                                    <input
                                        type="password"
                                        class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                        placeholder="************"
                                        v-model="password"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-5">
                                <button
                                    class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold"
                                    type="submit"
                                    v-on:click="handleSubmit"
                                >
                                    LOGIN
                                </button>

                                <button
                                    class="block max-w-xs mx-auto mt-2 bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold"
                                >
                                    <p>If you are not registerd:</p>
                                    <p class="pt-2">
                                        <router-link to="/register">
                                            Register</router-link
                                        >
                                    </p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
// import Swal from "sweetalert2";
export default {
    name: "Login",
    data() {
        // return {
        //     form: {
        //         email: "",
        //         password: "",
        //     },
        // };
        return {
            email: "",
            password: "",
            error: null,
        };
    },
    methods: {
        handleSubmit(e) {
            e.preventDefault();
            if (this.password.length > 0) {
                this.$axios.get("/sanctum/csrf-cookie").then((response) => {
                    this.$axios
                        .post("api/login", {
                            email: this.email,
                            password: this.password,
                        })
                        .then((response) => {
                            console.log(response.data);
                            if (response.data.success) {
                                // this.$router.go("/dashboard");
                                this.$router.push({ name: "Show" });
                            } else {
                                this.error = response.data.message;
                            }
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
                });
            }
        },
        // OLD LOGIN
        // login_user() {
        //     axios
        //         .post("http://last.test:8000/api/login", this.form)
        //         .then((resp) => {
        //             console.log(resp["data"]["status"]);
        //             //this.loadlist();
        //             //reset form
        //             this.form.email = "";
        //             this.form.password = "";
        //             if (resp["data"]["status"] == "error") {
        //                 Swal.fire({
        //                     title: "OPPS",
        //                     text: "error",
        //                     icon: "warning",
        //                 });
        //             } else {
        //                 Swal.fire({
        //                     title: "resp.email",
        //                     text: "You have been logged-in successfully",
        //                     icon: "success",
        //                 });
        //                 this.$router.push({ name: "Show" });
        //             }
        //         })
        //         .catch((e) => {
        //             console.log(e);
        //             Swal.fire({
        //                 title: "Hurry",
        //                 text: e,
        //                 icon: "warning",
        //             });
        //         });
        // },
    },
    beforeRouteEnter(to, from, next) {
        if (window.Laravel.isLoggedin) {
            return next("Show");
        }
        next();
    },
};
</script>
