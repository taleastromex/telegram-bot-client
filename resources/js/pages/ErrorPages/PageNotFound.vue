<script lang="ts">
export default {
    data() {
        return {
            hasToken: false
        }
    },
    created() {
        this.hasToken = !!localStorage.getItem('token')
    }
}
</script>

<template>
    <div class="w-full min-h-80 flex justify-around flex-col items-center p-10">
        <h1 class="text-white/80 text-4xl mt-5 mb-5">
            Page Not Found
        </h1>
        <div class="text-white/80">
            <router-link
                v-if="hasToken"
                :to="{name: 'dashboard'}"
            >
                Return to Dashboard Page
            </router-link>
            <a
                v-else
                href="/"
            >Return to Main Page</a>
        </div>
    </div>
</template>

<style scoped>

</style>
