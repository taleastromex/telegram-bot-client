import api from "../api";

const user = {
    singIn(data: any /**TODO: SignInData */) {
        return api.post('/sign-in', data)
    },
    signUp(data: any /**TODO: SignUnData */) {
        return api.post('/sign-up', data)
    },
    signOut() {
        return api.post('/sign-out')
    },
    me() {
        return api.get('/user')
    }
}

export default user
