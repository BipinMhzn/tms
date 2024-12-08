<script>
import Layout from "@/Layouts/Layout.vue";

export default {
    layout: Layout
}
</script>

<script setup>
import {Head, Link} from "@inertiajs/vue3";

defineProps({
    movies: {
        type: Object
    }
})
</script>

<template>
    <Head title="Home"></Head>

    <!-- Main Content -->
    <div class="grid gap-8">
        <!-- Hero Section -->
        <section class="bg-white p-6 rounded-lg shadow-md mt-4">
            <h1 class="text-3xl font-bold text-gray-900">Welcome to Movie Tickets</h1>
            <p class="mt-4 text-gray-600">
                Your gateway to unforgettable cinematic experiences. Discover the latest movies, book tickets, and
                enjoy a seamless experience.
            </p>
        </section>

        <section class="bg-white p-6 rounded-lg shadow-md mt-4">
            <div class="flex">
                <div class="flex-1 w-64">
                    <h1 class="text-3xl font-bold text-gray-900">Recommended Movies</h1>
                </div>
                <div class="flex-none">
                    <Link class="text-blue-500 p-2 rounded-md hover:text-white hover:bg-indigo-500" href="/movies">
                        See all
                    </Link>
                </div>
            </div>

            <div class="mt-4">
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
        </section>

        <!-- Features Section -->
        <section class="bg-white p-6 rounded-lg shadow-md mt-4">
            <h2 class="text-2xl font-bold text-gray-900">Why Choose Us?</h2>
            <p class="mt-4 text-gray-600">Our platform provides an intuitive, hassle-free way to book your favorite
                movie tickets from anywhere.</p>
            <h2 class="text-2xl font-bold text-gray-900 mt-6">Exciting Features</h2>
            <p class="mt-4 text-gray-600">Exclusive discounts, real-time seat selection, and much more await
                you.</p>
        </section>
    </div>
</template>

<style scoped>

</style>
