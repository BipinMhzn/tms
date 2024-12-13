<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout
}
</script>

<script setup>

defineProps({
   cinemas: {
       type: Object,
       required: true,
   },
});
</script>

<template>
 Cinema Hello
</template>

<style scoped>

</style>
