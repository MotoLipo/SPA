<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: 'Create',

    props: [
        'errors'
    ],

    components: {
        Link
    },

    data() {
        return {
            title: '',
            content: '',
        }
    },

    methods: {
        store() {
            this.$inertia.post('/posts', {title: this.title, content: this.content})
        }
    }
}
</script>

<template>
    <form @submit.prevent="store" class="w-50 m-auto">
        <h1 class="text-lg mb-2">Create</h1>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input v-model="title" type="text" class="form-control w-50" id="title" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea v-model="content" class="form-control" rows="5" id="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary m-lg-2">Add</button>
        <Link :href="route('home')" type="submit" class="btn btn-danger">Cancel</Link>
    </form>
</template>

<style scoped>

</style>
