<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: 'Show',

    props: [
        'post'
    ],

    components: {
        Link
    },

    methods: {
        store() {
            this.$inertia.post('/posts', {title: this.title, content: this.content})
        },
        destroy(id) {
            this.$inertia.delete(`/posts/${id}`)
        }
    }
}
</script>

<template>
    <div class="w-50 m-auto">
        <h1 class="text-lg mb-2">Show</h1>
        <div class="mb-3">
            <span>Title: {{ post.title }}</span>
        </div>
        <div class="mb-3">
            <span>Content: {{ post.content }}</span>
        </div>
        <Link :href="route('posts.edit', post.id)" type="submit" class="btn btn-primary">Edit</Link>
        <div @click="destroy(post.id)" class="btn btn-danger m-lg-2">Delete</div>
        <Link :href="route('home')" type="submit" class="btn btn-outline-secondary">Back</Link>
    </div>
</template>

<style scoped>

</style>
