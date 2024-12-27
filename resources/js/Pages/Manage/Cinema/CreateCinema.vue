<script setup>
import {reactive, ref} from "vue";
import {useForm} from "@inertiajs/vue3";
import ToastMessage from "@/Components/ToastMessage.vue";

const props = defineProps({
    showForm: {
        type: Boolean,
        required: true,
    },
    errors: {
        type: Object,
    }
});

const emits = defineEmits(['hideForm']);

const cinemaForm = useForm({
    title: '',
    description: '',
    location: '',
    thumbnail: null,
    status: false,
})

const imagePreview = ref(null);

const toast = reactive({
    visible: false,
    message: null,
    type: null,
})

const handleFileUpload = (event) => {
    const file = event.target.files[0];
    console.log(file);
    if (file) {
        cinemaForm.thumbnail = file;
        imagePreview.value = URL.createObjectURL(file);
    }
}

const resetCinemaForm = () => {
    emits('hideForm');
    cinemaForm.reset();
    cinemaForm.clearErrors();
    imagePreview.value = null;
}

const submitAddCinemaForm = () => {
    cinemaForm.post('/manage/cinemas', {
        onSuccess: () => {
            resetCinemaForm();
            showToast('success', 'Cinema created successfully.')
        },
        onError: () => {
            showToast('warning', 'Some errors found.');
        }
    });
}

const showToast = (type, message) => {
    toast.visible = true;
    toast.type = type;
    toast.message = message;
    setTimeout(() => {
        toast.visible = false;
    }, 3000);
}
</script>

<template>
    <ToastMessage v-if="toast.visible" :message="toast.message" :iconType="toast.type"
    ></ToastMessage>
    <!--        Overlay to block background interaction-->
    <div v-show="showForm" class="fixed top-0 left-0 z-30 w-full h-full bg-gray-100 opacity-50"></div>
    <!--        Sliding Form-->
    <div v-show="showForm"
         class="fixed top-0 right-0 z-40 w-1/3 max-w-[500px] h-full bg-white shadow-lg border-l border-gray-300 dark:bg-gray-800 transition-transform duration-500 transform overflow-y-auto">
        <div class="p-4">
            <h2 class="flex-auto text-2xl form-semibold mb-2 dark:text-white">New Cinema</h2>
            <div class="border border-b mb-4"></div>
            <form @submit.prevent="submitAddCinemaForm">
                <div class="mb-4">
                    <label class="pb-2" for="title">Title</label>
                    <input type="text" v-model="cinemaForm.title"
                           class="w-full p-2 border border-gray-300 rounded-md hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600"
                           name="title"/>
                    <div v-if="cinemaForm.errors.title" v-text="cinemaForm.errors.title"
                         class="text-red-500 text-xs mt-1"></div>
                </div>

                <div class="mb-4">
                    <label class="pb-2" for="description">Description</label>
                    <textarea type="text" v-model="cinemaForm.description"
                              class="w-full p-2 border border-gray-300 rounded-md h-56 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600"
                              name="description"/>
                    <div v-if="cinemaForm.errors.description" v-text="cinemaForm.errors.description"
                         class="text-red-500 text-xs mt-1"></div>
                </div>

                <div class="mb-4">
                    <label class="pb-2" for="location">Location</label>
                    <input type="text" v-model="cinemaForm.location"
                           class="w-full p-2 border border-gray-300 rounded-md hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600"
                           name="location"/>
                    <div v-if="cinemaForm.errors.location" v-text="cinemaForm.errors.location"
                         class="text-red-500 text-xs mt-1"></div>
                </div>

                <div class="mb-4">
                    <label class="pb-2" for="thumbnail">Thumbnail</label>
                    <div class="pb-2 rounded-md">
                        <input type="file" @change="handleFileUpload" accept="image/*" name="thumbnail" class="hidden" ref="fileInput"/>
                        <div
                            class="flex items-center justify-center border-2 border-dashed border-gray-300 rounded-md cursor-pointer p-4 h-32 hover:bg-gray-50 dark:bg-gray-700 dark:hover:bg-gray-600"
                            @click="$refs.fileInput.click()"
                        >
                            <span v-if="!imagePreview" class="text-gray-500">Click to upload thumbnail</span>
                            <div v-if="imagePreview">
                                <img
                                    :src="imagePreview"
                                    alt="Image Preview"
                                    class="w-full h-28 object-cover rounded-md"
                                />
                            </div>
                        </div>
                    </div>
                    <div v-if="cinemaForm.errors.thumbnail" v-text="cinemaForm.errors.thumbnail"
                         class="text-red-500 text-xs mt-1"></div>
                </div>

                <div class="mb-4">
                    <label class="pb-2" for="status">Status</label>
                    <br>
                    <label class="inline-flex items-center me-5 cursor-pointer">
                        <input type="checkbox" v-model="cinemaForm.status" class="sr-only peer" name="status">
                        <div
                            class="relative w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-teal-300 dark:peer-focus:ring-teal-800 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-teal-600"></div>
                        <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">{{
                                cinemaForm.status ? 'Published' : 'Unpublished'
                            }}</span>
                    </label>
                    <div v-if="cinemaForm.errors.status" v-text="cinemaForm.errors.status"
                         class="text-red-500 text-xs mt-1"></div>
                </div>

                <div class="border border-b mb-4"></div>

                <div class="flex flex-row ">
                    <button type="submit"
                            class="w-full py-2 m-2 mr-4 bg-gray-500 text-white rounded-md hover:bg-gray-600"
                            :disabled="cinemaForm.processing"
                    >Save
                    </button>
                    <button
                        type="reset"
                        @click="resetCinemaForm"
                        class="w-full py-2 m-2 ml-4 bg-red-500 text-white rounded-md hover:bg-red-600"
                        :disabled="cinemaForm.processing"
                    >Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>

<style scoped>

</style>
