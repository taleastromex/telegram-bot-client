<script lang="ts">
import {mapActions} from "vuex";

export default {
    methods: {
        ...mapActions(['setAccessToken'])
    },
    created() {
        const token = localStorage.getItem('token')
        this.setAccessToken(token)
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
