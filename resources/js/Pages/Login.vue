<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post('/login', {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 p-6">
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg border border-gray-200">
            <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Đăng Nhập SaaS</h1>

            <form @submit.prevent="submit" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input v-model="form.email" type="email"
                        class="mt-1 w-full border border-gray-300 rounded-md p-2 text-black" required autofocus />
                    <div v-if="form.errors.email" class="text-red-500 text-xs mt-1">{{ form.errors.email }}</div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Mật khẩu</label>
                    <input v-model="form.password" type="password"
                        class="mt-1 w-full border border-gray-300 rounded-md p-2 text-black" required />
                    <div v-if="form.errors.password" class="text-red-500 text-xs mt-1">{{ form.errors.password }}</div>
                </div>

                <div class="flex items-center">
                    <input v-model="form.remember" type="checkbox" id="remember"
                        class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500" />
                    <label for="remember" class="ml-2 block text-sm text-gray-900">Ghi nhớ đăng nhập</label>
                </div>

                <button type="submit" :disabled="form.processing"
                    class="w-full bg-blue-600 text-white font-semibold p-2 rounded-md hover:bg-blue-700 disabled:opacity-50 transition">
                    {{ form.processing ? 'Đang xử lý...' : 'Đăng nhập' }}
                </button>
            </form>
        </div>
    </div>
</template>