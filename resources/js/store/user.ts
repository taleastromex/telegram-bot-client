import { defineStore } from 'pinia'

interface UserState {
    name: string | null
    email: string | null
    access_token: string | null
}

export const useUserStore = defineStore('user', {
    state: (): UserState => ({
        name: null,
        email: null,
        access_token: null,
    }),
    getters: {
        getUser: (state) => ({ name: state.name, email: state.email }),
        getAccessToken: (state) => state.access_token,
    },
    actions: {
        setUser(user: { name?: string; email?: string }) {
            this.name = user.name ?? null
            this.email = user.email ?? null
        },
        setAccessToken(token: string | null) {
            this.access_token = token
        },
    },
})
