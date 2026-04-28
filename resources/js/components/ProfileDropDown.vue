<script lang="ts">
import {defineComponent, PropType} from 'vue'

type MenuItem = {
    title: string
    link: string,
    action?: () => void
}

export default defineComponent({
    props: {
        list: {
            type: Array as PropType<MenuItem[]>,
            required: true
        }
    },
    data() {
        return {
            active: false,
        }
    },
    methods: {
        open() {
            this.active = true
        },
        close() {
            setTimeout(() => this.active = false, 150)
        },
    }
})
</script>

<template>
    <div class="ml-3 relative">
        <button @click="open" @focusout="close"
                class="flex relative max-w-xs items-center rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
            <span class=" -inset-1.5"></span>
            <span class="sr-only">Open user menu</span>
            <img
                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                alt="" class="size-8 rounded-full outline -outline-offset-1 outline-white/10"/>
        </button>

        <div v-show="active"
             class="absolute top-10 right-0 w-48 rounded-md bg-gray-800 py-1 outline-1 -outline-offset-1 outline-white/10 transition transition-discrete">
            <template v-for="item in list">
                <router-link v-if="! item.action"
                   :to="item.link"
                   class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:outline-hidden hover:bg-white/5">
                    {{ item.title }}
                </router-link>
                <button v-if="item.action"
                        @click="() => item.action()"
                        class="text-left cursor-pointer w-full block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:outline-hidden hover:bg-white/5">
                    {{ item.title }}
                </button>
            </template>
        </div>
    </div>
</template>

<style scoped>

</style>
