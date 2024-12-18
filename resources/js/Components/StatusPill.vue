<script setup>

defineProps({
    title: {
        type: String,
        required: true,
    },
    color: {
        type: String,
        required: true
    }
})
</script>

<template>
    <div class="flex items-center">
        <div class="h-2.5 w-2.5 rounded-full me-2" :class="color"></div>
        {{ title }}
    </div>
</template>

<style scoped>

</style>
