<template>
    <h1 class="text-lg mb-8">Post</h1>
    <div class="mb-2">
        <Link :href="route('post.index')" class="text-sm text-sky-500">
            back
        </Link>
    </div>
    <div v-if="post">
        <div class="mb-3 border-t border-gray-300 pt-2">
            <div>id: {{ post.id }}</div>
            <div>title: {{ post.title }}</div>
            <div>content: {{ post.content }}</div>
            <div class="text-sm text-right">{{ post.date }}</div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    name: "index",
    layout: MainLayout,
    props: ["post"],
    components: {
        Link,
    },
};
</script>

<style scoped></style>
