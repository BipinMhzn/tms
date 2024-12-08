<script>
import Layout from "@/Layouts/Layout.vue";

export default {
    layout: Layout
}
</script>

<script setup>
import {Head} from "@inertiajs/vue3";
defineProps({
    movie: {
        type: Object
    }
})
</script>

<template>
    <Head :title="movie.title"></Head>
    <div>
        <img :src="movie.thumbnail_url" alt="">
        <div>{{ movie.title }}</div>

        <div>About the movie</div>
        <div>{{ movie.description }}</div>

        <table>
            <tr>
                <td>Released date</td>
                <td>{{movie.release_at}}</td>
            </tr>

            <tr>
                <td>Languages</td>
                <td>{{movie.languages}}</td>
            </tr>

            <tr>
                <td>Genre</td>
                <td>{{movie.genre}}</td>
            </tr>

            <tr>
                <td>Rating</td>
                <td>{{movie.rating}}</td>
            </tr>
        </table>
    </div>

    {{ movie }}
</template>

<style scoped>

</style>
