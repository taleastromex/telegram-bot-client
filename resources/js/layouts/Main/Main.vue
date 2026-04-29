<script lang="ts">
import user from "../../requests/modules/user";
import { useUserStore } from '../../store/user'
import Header from "../../components/Header.vue";
import Navigation from "../../components/Navigation.vue";

export default {
    components: {Navigation, Header},
    setup() {
        return { userStore: useUserStore() }
    },
    created() {
        if (! this.userStore.getUser.name) {
            user.me()
                .then(({data: response}) => {
                    this.userStore.setUser({
                        name: response.name,
                        email: response.email
                    })
                })
                .catch((e) => {
                    console.log(e)
                    this.$router.push({name: 'sign-in'})
                })
        }
    }
}
</script>

<template>
    <div class="min-h-full">
        <Navigation />

        <Header />
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <transition>
                    <router-view />
                </transition>
            </div>
        </main>
    </div>
</template>

<style scoped>

</style>
