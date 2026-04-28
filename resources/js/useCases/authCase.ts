import user from "../requests/modules/user";
import {router} from "../router";
import store from "../store";

export default {
    signIn(email: string, password: string) {
        return new Promise((resolve, reject) =>
            user.singIn({email, password})
                .then(({data: response}) => {
                    const token = response.data.access_token

                    localStorage.setItem('token', token)
                    store.dispatch('setAccessToken', token)
                        .then(() => router.push({name: 'dashboard'}))

                    resolve(token)
                })
                .catch(({ response }) => reject(response))
        )
    },
    signUp(payload: {email: string, name: string, password: string, password_confirmation: string}) {
        return new Promise((resolve, reject) =>
            user.signUp(payload)
                .then(({data: response}) => {
                    const token = response.data.access_token

                    localStorage.setItem('token', token)
                    store.dispatch('setAccessToken', token)
                        .then(() => router.push({name: 'dashboard'}))

                    resolve(token)
                })
                .catch(({ response }) => reject(response))
        )
    },
    signOut() {
        return new Promise((resolve, reject) =>
            user.signOut()
                .then(() => {
                    localStorage.removeItem('token')
                    store.dispatch('setAccessToken', null)
                        .then(() => router.push({name: 'sign-in'}))

                    resolve(true)
                })
                .catch(({ response }) => reject(response))
        )
    }
}
