<script setup>

import StatusPill from "@/Components/StatusPill.vue";

defineProps({
    cinemas: {
        type: Object,
        required: true,
    },
})
</script>

<template>
    <div class="flex p-2 my-4 place-items-center">
        <div class="basis-4/5 m-2"></div>
        <div class="basis-1/4 m-2">
            <input type="text" placeholder="Search here..." class="rounded-xl">
        </div>
        <div class="basis-1/4 m-2">
            Sort By
        </div>
        <div class="basis-1/4 m-2">
            Filter By
        </div>
    </div>
    <div class="p-2 my-4">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Location
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                    v-for="cinema in cinemas.data"
                >
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ cinema.title }}
                    </th>
                    <td class="px-6 py-4">
                        {{ cinema.location }}
                    </td>
                    <td class="px-6 py-4">
                        <StatusPill :title="cinema.status ? 'Published' : 'Unpublished'"
                                    :color="cinema.status ? 'bg-green-500' : 'bg-red-500'"></StatusPill>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                </tbody>
            </table>
            <div v-if="cinemas.data.length === 0" class="py-2 w-full text-center text-gray-500 dark:text-gray-300 border-b border-l border-r border-gray-300 rounded-b-lg">
                No data available
            </div>
        </div>
    </div>
    <div class="border border-gray-500 p-2 my-4 place-content-center text-center">
        <div class="flex flex-row place-content-center">
            <button class="p-2"><</button>
            <button class="p-2">1</button>
            <button class="p-2">2</button>
            <button class="p-2">3</button>
            <button class="p-2">...</button>
            <button class="p-2">15</button>
            <button class="p-2">16</button>
            <button class="p-2">></button>
            <div class="p-2">Per page:</div>
            <select>
                <option value="10">10</option>
                <option value="20" selected>20</option>
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="*">All</option>
            </select>
        </div>
    </div>
</template>

<style scoped>

</style>
