<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: 'Edit',

    props: [
        'post'
    ],

    components: {
        Link
    },

    data() {
        return {
            id: this.post.id,
            title: this.post.title,
            content: this.post.content,
        }
    },

    methods: {
        update() {
            this.$inertia.patch(`/posts/${this.id}`, {title: this.title, content: this.content})
        }
    }
}
</script>

<template>
    <form @submit.prevent="update" class="w-50 m-auto">
        <h1 class="text-lg mb-2">Edit</h1>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input v-model="title" type="text" class="form-control w-50" id="title" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea v-model="content" class="form-control" rows="5" id="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary m-lg-2">Update</button>
        <Link :href="route('home')" type="submit" class="btn btn-danger">Cancel</Link>
    </form>
</template>

<style scoped>

</style>
