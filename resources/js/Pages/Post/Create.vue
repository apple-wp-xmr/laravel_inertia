<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-8">Create</h1>
        <form @submit.prevent="store">
            <div><input v-model="title" type="text" placeholder="title" /></div>
            <div>
                <textarea v-model="content" placeholder="content"></textarea>
            </div>
            <div>
                <button
                    class="hover:bg-white hover:text-sky-500 block p-2 w-32 border border-sky-500 bg-sky-500 rounded-full text-center text-white"
                    type="submit"
                >
                    Store
                </button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: "Create",
    data() {
        return {
            title: "",
            content: "",
        };
    },
    methods: {
        store() {
            this.$inertia.post("/posts", {});
        },
    },
};
</script>

<style scoped></style>
