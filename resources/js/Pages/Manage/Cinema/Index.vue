<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout
}
</script>

<script setup>
import {Head} from "@inertiajs/vue3";
import {onBeforeMount, onMounted, ref} from "vue";
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
        console.log(props.showAdd);
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
        <div class="flex p-2 my-4">
            <h1 class="basis-11/12 text-3xl font-bold">Cinemas</h1>
            <button
                @click="toggleAddCinemaForm"
                class="basis-32 font-medium rounded-lg place-items-center bg-gray-100 hover:bg-gray-200 focus:bg-gray-200 dark:text-gray-800">
                New Cinema
            </button>
        </div>

        <CreateCinema :showForm="addCinemaForm" @hideForm="toggleAddCinemaForm()"></CreateCinema>
        <ListCinema :cinemas="cinemas"></ListCinema>
    </div>
</template>

<style scoped>

</style>
