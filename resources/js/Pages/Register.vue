<script setup>
import { useForm } from '@inertiajs/vue3';

// Khởi tạo biến form để theo dõi input của người dùng
const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

// Hàm gọi API khi submit
const submit = () => {
    form.post('/register', {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100 p-6">
        <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-md">
            <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Đăng ký Tài Khoản</h1>

            <form @submit.prevent="submit" class="space-y-4">
                <div>
                    <label class="block text-sm text-gray-700">Họ và Tên</label>
                    <input v-model="form.name" type="text" class="mt-1 w-full border rounded p-2 text-black" required />
                    <div v-if="form.errors.name" class="text-red-500 text-xs mt-1">{{ form.errors.name }}</div>
                </div>

                <div>
                    <label class="block text-sm text-gray-700">Email</label>
                    <input v-model="form.email" type="email" class="mt-1 w-full border rounded p-2 text-black"
                        required />
                    <div v-if="form.errors.email" class="text-red-500 text-xs mt-1">{{ form.errors.email }}</div>
                </div>

                <div>
                    <label class="block text-sm text-gray-700">Mật khẩu</label>
                    <input v-model="form.password" type="password" class="mt-1 w-full border rounded p-2 text-black"
                        required />
                    <div v-if="form.errors.password" class="text-red-500 text-xs mt-1">{{ form.errors.password }}</div>
                </div>

                <div>
                    <label class="block text-sm text-gray-700">Xác nhận mật khẩu</label>
                    <input v-model="form.password_confirmation" type="password"
                        class="mt-1 w-full border rounded p-2 text-black" required />
                </div>

                <button type="submit" :disabled="form.processing"
                    class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700 disabled:opacity-50">
                    {{ form.processing ? 'Đang xử lý...' : 'Đăng ký' }}
                </button>
                <a href="/login" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Đăng nhập</a>
            </form>
        </div>
    </div>
</template>