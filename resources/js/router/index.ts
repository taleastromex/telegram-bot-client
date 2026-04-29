import { createRouter, createWebHistory } from "vue-router";
import { routes } from "./routes";
import { useUserStore } from "../store/user";

export const router = createRouter({
    history: createWebHistory(),
    routes,
})

router.beforeEach((to, from, next) => {
    const token = useUserStore().getAccessToken

    if (! token && to.meta.required_auth) {
        next({name: 'sign-in'})
    }

    document.title = to.meta.title as string;
    next()
});
