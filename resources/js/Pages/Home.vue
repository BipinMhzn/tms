<script>
import Layout from "@/Layouts/Layout.vue";

export default {
    layout: Layout
}
</script>

<script setup>
import {Head, Link} from "@inertiajs/vue3";
import Layout from "@/Layouts/Layout.vue";
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
                    <Link class="w-full">
                        <div>
                            <img
                                class="rounded-lg"
                                src="https://assets-in.bmscdn.com/discovery-catalog/events/tr:w-400,h-600,bg-CCCCCC:w-400.0,h-660.0,cm-pad_resize,bg-000000,fo-top:l-image,i-discovery-catalog@@icons@@like_202006280402.png,lx-24,ly-617,w-29,l-end:l-text,ie-Mk0gTGlrZXM%3D,fs-29,co-FFFFFF,ly-612,lx-70,pa-8_0_0_0,l-end/et00356724-txsuklqlke-portrait.jpg"
                                alt="">
                        </div>
                        <div
                            class="mt-4 text-xl font-bold text-gray-900 overflow-hidden whitespace-nowrap max-w-full truncate">
                            Pushpa 2: The Rule
                        </div>
                        <div class="text-gray-600">
                            UA
                        </div>
                        <div class="text-gray-600 overflow-hidden whitespace-nowrap truncate max-w-full">
                            Telugu, Hindi, Bengali, Malayalam, Kannada
                        </div>
                    </Link>

                    <Link class="w-full">
                        <div>
                            <img
                                class="rounded-lg"
                                src="https://assets-in.bmscdn.com/discovery-catalog/events/tr:w-400,h-600,bg-CCCCCC:w-400.0,h-660.0,cm-pad_resize,bg-000000,fo-top:l-image,i-discovery-catalog@@icons@@star-icon-202203010609.png,lx-24,ly-615,w-29,l-end:l-text,ie-OC40LzEwICA2LjhLIFZvdGVz,fs-29,co-FFFFFF,ly-612,lx-70,pa-8_0_0_0,l-end/et00387901-zzezpljyvq-portrait.jpg"
                                alt="">
                        </div>
                        <div
                            class="mt-4 text-xl font-bold text-gray-900 overflow-hidden whitespace-nowrap max-w-full truncate">
                            Moana 2
                        </div>
                        <div class="text-gray-600">
                            U
                        </div>
                        <div class="text-gray-600 overflow-hidden whitespace-nowrap truncate max-w-full">
                            English
                        </div>
                    </Link>
                    <Link class="w-full">
                        <div>
                            <img
                                class="rounded-lg"
                                src="https://assets-in.bmscdn.com/discovery-catalog/events/tr:w-400,h-600,bg-CCCCCC:w-400.0,h-660.0,cm-pad_resize,bg-000000,fo-top:l-image,i-discovery-catalog@@icons@@star-icon-202203010609.png,lx-24,ly-615,w-29,l-end:l-text,ie-OC41LzEwICAzMy45SyBWb3Rlcw%3D%3D,fs-29,co-FFFFFF,ly-612,lx-70,pa-8_0_0_0,l-end/et00383800-tegpdzfdaf-portrait.jpg"
                                alt="">
                        </div>
                        <div
                            class="mt-4 text-xl font-bold text-gray-900 overflow-hidden whitespace-nowrap max-w-full truncate">
                            The Sabarmati Report
                        </div>
                        <div class="text-gray-600">
                            UA
                        </div>
                        <div class="text-gray-600 overflow-hidden whitespace-nowrap truncate max-w-full">
                            Hindi
                        </div>
                    </Link>

                    <Link class="w-full">
                        <div>
                            <img
                                class="rounded-lg"
                                src="https://assets-in.bmscdn.com/discovery-catalog/events/tr:w-400,h-600,bg-CCCCCC:w-400.0,h-660.0,cm-pad_resize,bg-000000,fo-top:l-image,i-discovery-catalog@@icons@@star-icon-202203010609.png,lx-24,ly-615,w-29,l-end:l-text,ie-OS4yLzEwICA1LjlLIFZvdGVz,fs-29,co-FFFFFF,ly-612,lx-70,pa-8_0_0_0,l-end/et00417142-ylxjreqdxh-portrait.jpg"
                                alt="">
                        </div>
                        <div
                            class="mt-4 text-xl font-bold text-gray-900 overflow-hidden whitespace-nowrap max-w-full truncate">
                            Dharmarakshak Mahaveer Chhatrapati Sambhaji Maharaj
                        </div>
                        <div class="text-gray-600">
                            UA
                        </div>
                        <div class="text-gray-600 overflow-hidden whitespace-nowrap truncate max-w-full">
                            Marathi
                        </div>
                    </Link>
                    <Link class="w-full">
                        <div>
                            <img
                                class="rounded-lg"
                                src="https://assets-in.bmscdn.com/discovery-catalog/events/tr:w-400,h-600,bg-CCCCCC:w-400.0,h-660.0,cm-pad_resize,bg-000000,fo-top:l-image,i-discovery-catalog@@icons@@like_202006280402.png,lx-24,ly-617,w-29,l-end:l-text,ie-Mk0gTGlrZXM%3D,fs-29,co-FFFFFF,ly-612,lx-70,pa-8_0_0_0,l-end/et00356724-txsuklqlke-portrait.jpg"
                                alt="">
                        </div>
                        <div
                            class="mt-4 text-xl font-bold text-gray-900 overflow-hidden whitespace-nowrap max-w-full truncate">
                            Pushpa 2: The Rule
                        </div>
                        <div class="text-gray-600">
                            UA
                        </div>
                        <div class="text-gray-600 overflow-hidden whitespace-nowrap truncate max-w-full">
                            Telugu, Hindi, Bengali, Malayalam, Kannada
                        </div>
                    </Link>

                    <Link class="w-full">
                        <div>
                            <img
                                class="rounded-lg"
                                src="https://assets-in.bmscdn.com/discovery-catalog/events/tr:w-400,h-600,bg-CCCCCC:w-400.0,h-660.0,cm-pad_resize,bg-000000,fo-top:l-image,i-discovery-catalog@@icons@@star-icon-202203010609.png,lx-24,ly-615,w-29,l-end:l-text,ie-OC40LzEwICA2LjhLIFZvdGVz,fs-29,co-FFFFFF,ly-612,lx-70,pa-8_0_0_0,l-end/et00387901-zzezpljyvq-portrait.jpg"
                                alt="">
                        </div>
                        <div
                            class="mt-4 text-xl font-bold text-gray-900 overflow-hidden whitespace-nowrap max-w-full truncate">
                            Moana 2
                        </div>
                        <div class="text-gray-600">
                            U
                        </div>
                        <div class="text-gray-600 overflow-hidden whitespace-nowrap truncate max-w-full">
                            English
                        </div>
                    </Link>
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
