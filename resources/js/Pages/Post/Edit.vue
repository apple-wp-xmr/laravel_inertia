<template>
    <h1 class="text-lg mb-8">Edit</h1>
    <div class="mb-2">
        <Link :href="route('post.index')" class="text-sm text-sky-500">
            Back
        </Link>
    </div>

    <form @submit.prevent="update">
        <div class="mb-4">
            <input
                class="w-full rounded-full border-gray-300"
                v-model="title"
                type="text"
                placeholder="title"
            />
        </div>
        <div class="mb-4">
            <textarea
                class="w-full rounded-full border-gray-300"
                v-model="content"
                placeholder="content"
            ></textarea>
        </div>
        <div>
            <button
                class="ml-auto hover:bg-white hover:text-sky-500 block p-2 w-32 border border-sky-500 bg-sky-500 rounded-full text-center text-white"
                type="submit"
            >
                Update
            </button>
        </div>
    </form>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
export default {
    name: "Create",
    layout: MainLayout,
    components: {
        Link,
    },
    props: ["post"],
    data() {
        return {
            id: this.post.id,
            title: this.post.title,
            content: this.post.content,
        };
    },
    methods: {
        update() {
            this.$inertia.patch(`/posts/${this.id}`, {
                title: this.title,
                content: this.content,
            });
        },
    },
};
</script>

<style scoped></style>
