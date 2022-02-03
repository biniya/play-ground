<template>
    <div
        class="min-w-screen min-h-screen bg-white-900 flex items-center justify-center px-5 py-5"
    >
        <div
            class="bg-gray-100 text-gray-500 rounded-3xl shadow-2xl w-full overflow-hidden"
            style="max-width: 1000px"
        >
            <div class="md:flex justify-center w-full">
                <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                <div class="alert alert-danger" role="alert" v-if="error !== null">
                    {{ error }}
                </div>
                    <div class="text-center mb-10">
                        <h1 class="font-bold text-3xl text-gray-900">
                            REGISTER
                        </h1>
                    </div>
                    <div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-5">
                                <label for="" class="text-xs font-semibold px-1"
                                    >Name</label
                                >

                                <div class="flex">
                                    <div
                                        class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"
                                    >
                                        <i
                                            class="mdi mdi-account-outline text-gray-400 text-lg"
                                        ></i>
                                    </div>
                                    <input
                                        type="text"
                                        class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                        placeholder="Enter Your Name"
                                        v-model="name"
                                    />
                                </div>
                            </div>
                            <!-- <div class="w-1/2 px-3 mb-5">
                                <label for="" class="text-xs font-semibold px-1"
                                    >Last name</label
                                >
                                <div class="flex">
                                    <div
                                        class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"
                                    >
                                        <i
                                            class="mdi mdi-account-outline text-gray-400 text-lg"
                                        ></i>
                                    </div>
                                    <input
                                        type="text"
                                        class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                        placeholder="Smith"
                                    />
                                </div>
                            </div> -->
                        </div>
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
                                        v-model="email" required
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
                                        v-model="password" required
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
                                    REGISTER NOW
                                </button>

                                <button
                                    class="block max-w-xs mx-auto mt-2 bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold"
                                >
                                    <p>Alredy registerd:</p>
                                    <p class="pt-2">
                                        <router-link to="/login">
                                            LOGIN</router-link
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

    <!-- BUY ME A BEER AND HELP SUPPORT OPEN-SOURCE RESOURCES -->
    <!-- <div
        class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10"
    >
        <div>
            <a
                title="Buy me a beer"
                href="https://www.buymeacoffee.com/scottwindon"
                target="_blank"
                class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12"
            >
                <img
                    class="object-cover object-center w-full h-full rounded-full"
                    src="https://i.pinimg.com/originals/60/fd/e8/60fde811b6be57094e0abc69d9c2622a.jpg"
                />
            </a>
        </div>
    </div> -->
</template>
<script>
export default {
    name: "Register",
    data() {
        return {
            name: "",
            email: "",
            password: "",
            error: null,
            
        };
    },
    
    methods: {
        handleSubmit(e) {
            e.preventDefault()
            if (this.password.length > 0) {
                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post('api/register', {
                        name: this.name,
                        email: this.email,
                        password: this.password
                    })
                        .then(response => {
                            if (response.data.success) {
                                window.location.href = "/login"
                            } else {
                                this.error = response.data.message
                            }
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
                })
            }
        }
        // OLD REGISTER FUNCTION        l
        // async signUp() {
        //     let result = await axios
        //         .post("http://last.test:8000/api/register", {
        //             name: this.name,
        //             email: this.email,
        //             password: this.password,

        //         })
        //         // .catch((error) => {
        //         //     console.log(error.reponse); // logs an object to the console
        //         //     // Do something with error data
        //         // });
        //         console.warn(result);
        //         if(result.status==201)
        //        {
        //            this.$router.push({name:'Add'})
        //        }
        // },
    },
     beforeRouteEnter(to, from, next) {
        if (window.Laravel.isLoggedin) {
            return next('dashboard');
        }
        next();
    }
};
</script>
