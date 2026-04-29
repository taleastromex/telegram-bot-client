<script lang="ts">
import { useUserStore } from './store/user'

export default {
    setup() {
        return { userStore: useUserStore() }
    },
    created() {
        const token = localStorage.getItem('token')
        this.userStore.setAccessToken(token)
    }
}
</script>

<template>
    <transition>
        <router-view />
    </transition>
</template>

<style scoped>

</style>
