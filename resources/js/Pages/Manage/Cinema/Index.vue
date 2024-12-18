<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout
}
</script>

<script setup>
import {Head} from "@inertiajs/vue3";
import {onBeforeMount, ref} from "vue";
import CreateCinema from "@/Pages/Manage/Cinema/CreateCinema.vue";
import ListCinema from "@/Pages/Manage/Cinema/ListCinema.vue";

const props = defineProps({
    cinemas: {
        type: Object,
        required: true,
    },
    errors: {
        type: Object,
        required: false,
    },
    showAdd: {
        required: false,
        default: false,
    },
});

const addCinemaForm = ref(false);

onBeforeMount(() => {
    if (props.showAdd) {
        addCinemaForm.value = props.showAdd;
    }
})

const toggleAddCinemaForm = () => {
    addCinemaForm.value = !addCinemaForm.value;
    if (addCinemaForm.value) {
        document.body.style.overflow = 'hidden';
    } else {
        document.body.style.overflow = '';
    }
}

//Edit Cinema
</script>

<template>
    <Head title="Manage Cinema"></Head>
    <div class="items-center">
        <div class="flex justify-between p-2 my-4">
            <h1 class="text-3xl font-bold">Cinemas</h1>
            <button
                @click="toggleAddCinemaForm"
                class="min-w-20 p-0 m-0 font-medium text-center bg-gray-200 hover:bg-gray-300 dark:bg-gray-500 hover:dark:bg-gray-600 rounded-lg">
                <span class="text-xl mr-1">+</span>
                <span>New</span>
            </button>
        </div>

        <CreateCinema :showForm="addCinemaForm" @hideForm="toggleAddCinemaForm()"></CreateCinema>
        <ListCinema :cinemas="cinemas"></ListCinema>
    </div>
</template>

<style scoped>

</style>
