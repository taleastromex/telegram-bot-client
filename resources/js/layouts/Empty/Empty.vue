<script lang="ts">
import { mapGetters } from "vuex";

export default {
    computed: {
        ...mapGetters(['getAccessToken'])
    },
    created(): any {
        if (this.getAccessToken) {
            this.$router.push({name: 'dashboard'})
        }
    }
}
</script>

<template>
    <transition>
        <router-view/>
    </transition>
</template>

<style scoped>

</style>
