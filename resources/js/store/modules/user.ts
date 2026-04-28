import {ActionContext} from "vuex";

export default {
    state: {
        name: null,
        email: null,
        access_token: null,
    },
    mutations: {
        SET_NAME(state: any, name?: string) {
            state.name = name
        },
        SET_EMAIL(state: any, email?: string) {
            state.email = email
        },
        SET_ACCESS_TOKEN(state: any, token?: string) {
            state.access_token = token
        }
    },
    actions: {
        setUser(ctx: ActionContext<any, any>, user: {name?: string, email?: string}) {
            ctx.commit('SET_NAME', user.name)
            ctx.commit('SET_EMAIL', user.email)
        },
        setAccessToken(ctx: ActionContext<any, any>, token?: string) {
            ctx.commit('SET_ACCESS_TOKEN', token)
        }
    },
    getters: {
        getUser(state: any) {
            return { name: state.name, email: state.email };
        },
        getAccessToken: (state: any)=> state.access_token
    }
}
