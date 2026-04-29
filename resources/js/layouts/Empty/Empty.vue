<script lang="ts">
import { useUserStore } from '../../store/user'

export default {
    setup() {
        return { userStore: useUserStore() }
    },
    created(): any {
        if (this.userStore.getAccessToken) {
            this.$router.push({name: 'dashboard'})
        }
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
