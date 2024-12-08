<script>
import Layout from "@/Layouts/Layout.vue";

export default {
    layout: Layout,
}
</script>

<script setup>
import {Head, Link} from "@inertiajs/vue3";

defineProps({
    movies: {
        type: Object,
        default: {}
    }
})

</script>

<template>
    <Head title="Movies"></Head>
    <div class="mt-4">
        <div class="shadow p-4">
            <div class="text-3xl font-bold mb-4">
                Now Showing
            </div>
            <div class="grid grid-cols-4 gap-6">
                <div v-for="movie in movies">
                    <Link class="w-full" :href="route('movies.detail', [movie.id])">
                        <div>
                            <img
                                class="rounded-lg"
                                :src="movie.thumbnail_url">
                        </div>
                        <div class="mt-4 text-xl font-bold text-gray-900 overflow-hidden whitespace-nowrap max-w-full truncate">
                            {{ movie.title }}
                        </div>
                        <div class="text-gray-600">
                            {{ movie.rating }}
                        </div>
                        <div class="text-gray-600 overflow-hidden whitespace-nowrap truncate max-w-full">
                            {{ movie.languages }}
                        </div>
                    </Link>
                </div>
            </div>
        </div>

        <div class="mt-8 shadow p-4">
            <div class="text-3xl font-bold mb-4">
                Upcoming Movies
            </div>
            <div class="grid grid-cols-4 gap-6">
                <div v-for="movie in movies">
                    <Link class="w-full">
                        <div>
                            <img
                                class="rounded-lg"
                                src="https://assets-in.bmscdn.com/discovery-catalog/events/tr:w-400,h-600,bg-CCCCCC:w-400.0,h-660.0,cm-pad_resize,bg-000000,fo-top:l-image,i-discovery-catalog@@icons@@star-icon-202203010609.png,lx-24,ly-615,w-29,l-end:l-text,ie-OC40LzEwICA2LjhLIFZvdGVz,fs-29,co-FFFFFF,ly-612,lx-70,pa-8_0_0_0,l-end/et00387901-zzezpljyvq-portrait.jpg"
                                alt="">
                        </div>
                        <div class="mt-4 text-xl font-bold text-gray-900 overflow-hidden whitespace-nowrap max-w-full truncate">
                            {{ movie.title }}
                        </div>
                        <div class="text-gray-600">
                            {{ movie.rating }}
                        </div>
                        <div class="text-gray-600 overflow-hidden whitespace-nowrap truncate max-w-full">
                            {{ movie.languages }}
                        </div>
                    </Link>
                </div>
            </div>
        </div>
    </div>

</template>

<style scoped>

</style>
