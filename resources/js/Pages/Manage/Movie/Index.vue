<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout
}
</script>
<script setup>

</script>

<template>
    <div class="items-center">
        <div class="flex border border-gray-500 p-2 my-4">
            <div class="basis-4/5 text-xl">Title</div>
            <div class="basis-1/4">New movie</div>
        </div>
        <div class="flex border border-gray-500 p-2 my-4 place-items-center">
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
        <div class="border border-gray-500 p-2 my-4">
            Movie list
            <table class="table-auto">
                <thead>
                <tr>
                    <th>Song</th>
                    <th>Artist</th>
                    <th>Year</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                    <td>Malcolm Lockyer</td>
                    <td>1961</td>
                </tr>
                <tr>
                    <td>Witchy Woman</td>
                    <td>The Eagles</td>
                    <td>1972</td>
                </tr>
                <tr>
                    <td>Shining Star</td>
                    <td>Earth, Wind, and Fire</td>
                    <td>1975</td>
                </tr>
                </tbody>
            </table>        </div>
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
    </div>
</template>

<style scoped>

</style>
