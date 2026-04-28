import { createRouter, createWebHistory } from "vue-router";
import { routes } from "./routes";
import store from "../store";

export const router = createRouter({
    history: createWebHistory(),
    routes,
})

router.beforeEach((to, from, next) => {
    const token = store.getters['getAccessToken']

    if (! token && to.meta.required_auth) {
        next({name: 'sign-in'})
    }

    document.title = to.meta.title;
    next()
});
