<script lang="ts">
import authCase from "../../useCases/authCase";

export default {
    data() {
        return {
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
            errors: {
                name: '',
                email: '',
                password: '',
                password_confirmation: ''
            },
            on_submit: false,
        }
    },
    created() {},
    methods: {
        onSubmit(event: SubmitEvent) {
            event.preventDefault()
            this.on_submit = true

            const payload = {
                name: this.name,
                email: this.email,
                password: this.password,
                password_confirmation: this.password_confirmation
            }

            authCase.signUp(payload)
                .catch((e) => {
                    this.on_submit = false
                    if (e.data.errors) {
                        const errors = e.data.errors
                        for (let key in errors) {
                            (this.errors as Record<string, string>)[key] = errors[key][0]
                        }
                    }
                })

            return false
        }
    }
}
</script>

<template>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-white">
                Create your account
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
                        for="name"
                        class="block text-sm/6 font-medium text-gray-100"
                        :class="{'text-gray-100': errors.name.length <= 0, 'text-red-600': errors.name.length > 0}"
                    >
                        Name
                    </label>
                    <div class="mt-2">
                        <input
                            id="name"
                            v-model="name"
                            :disabled="on_submit"
                            type="text"
                            name="name"
                            required
                            class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
                        >
                    </div>
                    <span
                        v-if="errors.name.length > 0"
                        class="text-sm/6 font-medium text-red-600"
                    >
                        {{ errors.name }}
                    </span>
                </div>

                <div>
                    <label
                        for="email"
                        class="block text-sm/6 font-medium"
                        :class="{'text-gray-100': errors.email.length <= 0, 'text-red-600': errors.email.length > 0}"
                    >
                        Email address
                    </label>
                    <div class="mt-2">
                        <input
                            id="email"
                            v-model="email"
                            :disabled="on_submit"
                            type="email"
                            name="email"
                            required
                            class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
                        >
                    </div>
                    <span
                        v-if="errors.email.length > 0"
                        class="text-sm/6 font-medium text-red-600"
                    >
                        {{ errors.email }}
                    </span>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label
                            for="password"
                            class="block text-sm/6 font-medium"
                            :class="{'text-gray-100': errors.password.length <= 0, 'text-red-600': errors.password.length > 0}"
                        >
                            Password
                        </label>
                    </div>
                    <div class="mt-2">
                        <input
                            id="password"
                            v-model="password"
                            :disabled="on_submit"
                            type="password"
                            name="password"
                            required
                            class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
                        >
                    </div>
                    <span
                        v-if="errors.password.length > 0"
                        class="text-sm/6 font-medium text-red-600"
                    >
                        {{ errors.password }}
                    </span>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label
                            for="password_confirmation"
                            class="block text-sm/6 font-medium"
                            :class="{'text-gray-100': errors.password.length <= 0, 'text-red-600': errors.password.length > 0}"
                        >
                            Password Confirmation
                        </label>
                    </div>
                    <div class="mt-2">
                        <input
                            id="password_confirmation"
                            v-model="password_confirmation"
                            :disabled="on_submit"
                            type="password"
                            name="password_confirmation"
                            required
                            class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
                        >
                    </div>
                    <span
                        v-if="errors.password.length > 0"
                        class="text-sm/6 font-medium text-red-600"
                    >
                        {{ errors.password }}
                    </span>
                </div>

                <div>
                    <button
                        type="submit"
                        :disabled="on_submit"
                        :class="{'disabled:bg-gray-300 text-gray-900': on_submit, 'text-white bg-indigo-500 hover:bg-indigo-400 focus-visible:outline-indigo-500': !on_submit}"
                        class="flex w-full justify-center rounded-md px-3 py-1.5 text-sm/6 font-semibold focus-visible:outline-2 focus-visible:outline-offset-2"
                    >
                        Sign up
                    </button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-400">
                Already have an account?
                <router-link
                    :to="{name: 'sign-in'}"
                    :class="'font-semibold text-indigo-400 hover:text-indigo-300'"
                >
                    Sign in
                </router-link>
            </p>
        </div>
    </div>
</template>

<style scoped>

</style>
