<script>
import Layout from "@/Layouts/Layout.vue";

export default {
    layout: Layout
}
</script>
<script setup>
import ApiTokenManager from '@/Pages/API/Partials/ApiTokenManager.vue';

defineProps({
    tokens: Array,
    availablePermissions: Array,
    defaultPermissions: Array,
});
</script>

<template>
        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <ApiTokenManager
                    :tokens="tokens"
                    :available-permissions="availablePermissions"
                    :default-permissions="defaultPermissions"
                />
            </div>
        </div>
</template>
