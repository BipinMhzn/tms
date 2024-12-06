<script setup>
import {Head, Link, router} from "@inertiajs/vue3";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";

defineProps({
    title: {
        type: String
    },
    canLogin: {
        type: Boolean
    },
    canRegister: {
        type: Boolean
    },
    auth: {
        type: Object
    }
})

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <Head :title="title"></Head>
    <!-- Navigation Bar -->
    <nav class="bg-white shadow p-4">
        <div class="flex">
            <div class="flex-1 w-64 border-black">
                <a href="/" class="font-bold text-xl text-indigo-800">Movie Tickets</a>
            </div>

            <div v-if="auth.user">
                <Dropdown>
                    <template #trigger>
                        <div class="flex-none w-44">
                            <div class="inline-flex rounded-md">
                                <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 transition ease-in-out duration-150">
                                    {{ auth.user.name }}
                                    <svg class="ms-2 -me-0.5 size-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </template>

                    <template #content>
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            Manage Account
                        </div>

                        <DropdownLink :href="route('profile.show')">
                            Profile
                        </DropdownLink>

                        <DropdownLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                            API Tokens
                        </DropdownLink>

                        <div class="border-t border-gray-200"/>

                        <!-- Authentication -->
                        <form @submit.prevent="logout">
                            <DropdownLink as="button">
                                Log Out
                            </DropdownLink>
                        </form>
                    </template>

                </Dropdown>
            </div>

            <div v-else class="inline-flex">
                <div class="flex-none w-20">
                    <Link href="login"
                          class="text-indigo-600 hover:text-white hover:bg-indigo-600 px-3 pt-2 pb-3 rounded-md text-sm font-medium">
                        Sign In
                    </Link>
                </div>
                <div class="flex-none w-20">
                    <Link href="register"
                          class="text-indigo-600 hover:text-white hover:bg-indigo-600 px-3 pt-2 pb-3 rounded-md text-sm font-medium">
                        Register
                    </Link>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto mt-5 px-4 sm:px-6 lg:px-8">
        <slot/>
    </main>
    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-4 mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-sm">© 2024 Movie Tickets. All rights reserved.</p>
            <p class="text-sm mt-2"><a href="#privacy" class="underline">Privacy Policy</a> •
                <a href="#terms"
                   class="underline">Terms
                    of Service</a></p>
        </div>
    </footer>
</template>

<style scoped>

</style>
