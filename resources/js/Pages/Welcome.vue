<template>
    <div
        class="p-8 mt-8 bg-white dark:bg-[#161615] rounded-xl shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] max-w-2xl mx-auto w-full border border-gray-200 dark:border-gray-800">
        <h1 class="text-2xl font-semibold mb-2 text-[#1b1b18] dark:text-[#EDEDEC]">Hello from Inertia! 🎉</h1>
        <p class="text-[#706f6c] dark:text-[#A1A09A]">Inertia.js and Vue 3 have been successfully installed and
            configured in your Laravel project using Vite.</p>
        <button @click="count++"
            class="mt-6 px-4 py-2 bg-[#F53003] hover:bg-[#d62802] text-white rounded font-medium transition-colors">
            Count is: {{ count }}
        </button>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const count = ref(0);
</script>
