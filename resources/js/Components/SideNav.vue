<script setup>

import {Link} from "@inertiajs/vue3";

defineProps({
    menuItems: {
        type: Object,
        required: true,
        default: []
    }
})

</script>

<template>
    <aside id="logo-sidebar"
           class="fixed top-0 left-0 z-10 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
           aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li v-for="item in menuItems">
                    <Link :href="item.path"
                          class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group"
                          :class="{'bg-gray-300 hover:bg-gray-300 dark:bg-gray-700': $page.component == item.component}">
                        <span v-html="item.svgIcon"></span>
                        <span class="ms-3">{{ item.title }}</span>
                    </Link>
                </li>
            </ul>
        </div>
    </aside>
</template>

<style scoped>

</style>
