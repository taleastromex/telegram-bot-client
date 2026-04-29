<script lang="ts">
import authCase from "../../useCases/authCase";

export default {
    data() {
        return {
            email: '',
            password: '',
            error: '',
            on_submit: false,
        }
    },
    methods: {
        onSubmit(event: SubmitEvent) {
            event.preventDefault()

            authCase.signIn(this.email, this.password)
                .catch((e) => {
                    this.on_submit = false

                    if (e.data.message) {
                        this.error = e.data.message
                    } else {
                        this.error = 'Somethings went wrong'
                    }

                    console.log(e)
                })

            return false
        }
    }
}
</script>

<template>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <!--            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company" class="mx-auto h-10 w-auto" />-->
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">
                Sign in to your account
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form
                action="#"
                method="POST"
                class="space-y-6"
                @submit="onSubmit"
            >
                <div>
                    <label
                        for="email"
                        class="block text-sm/6 font-medium text-gray-100"
                    >Email address</label>
                    <div class="mt-2">
                        <input
                            id="email"
                            v-model="email"
                            type="email"
                            name="email"
                            required
                            autocomplete="email"
                            class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
                        >
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label
                            for="password"
                            class="block text-sm/6 font-medium text-gray-100"
                        >Password</label>
                        <div class="text-sm">
                            <a
                                href="#"
                                class="font-semibold text-indigo-400 hover:text-indigo-300"
                            >Forgot password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input
                            id="password"
                            v-model="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
                        >
                    </div>
                </div>

                <div>
                    <div
                        v-if="error.length > 0"
                        class="text-sm/6 font-medium text-red-600 mb-3"
                    >
                        {{ error }}
                    </div>
                    <button
                        type="submit"
                        :disabled="on_submit"
                        :class="{'disabled:bg-gray-300 text-gray-900': on_submit, 'text-white bg-indigo-500 hover:bg-indigo-400 focus-visible:outline-indigo-500': !on_submit}"
                        class="flex w-full justify-center rounded-md px-3 py-1.5 text-sm/6 font-semibold focus-visible:outline-2 focus-visible:outline-offset-2"
                    >
                        Sign in
                    </button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-400">
                Not a member?
                <router-link
                    :to="{name: 'sign-up'}"
                    :class="'font-semibold text-indigo-400 hover:text-indigo-300'"
                >
                    Sign
                    up
                </router-link>
            </p>
        </div>
    </div>
</template>

<style scoped>

</style>
