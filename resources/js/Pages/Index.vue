<script>
import {Link} from "@inertiajs/vue3";

export default {
    name: 'Index',

    props: [
        'posts'
    ],

    components: {
        Link
    },

    methods: {
        destroy(id) {
            this.$inertia.delete(`/posts/${id}`)
        }
    }
}
</script>

<template>
    <div class="py-3 px-2 d-flex flex-wrap gap-3 mb-5 justify-content-center">
        <template v-if="posts">
            <div v-for="post in posts" class="card-block">
                <Link :href="route('posts.show', post.id)" class="text-decoration-none text-black">
                    <div class="card h-100" role="button">
                        <div class="card-body">
                            <h5 class="card-title">{{ post.title }}</h5>
                            <p class="card-text">{{ post.content }}</p>
                        </div>
                        <div class="card-footer text-body-secondary d-flex justify-content-between">
                            <div>{{ post.created_at }}</div>
                            <i @click.stop.prevent="destroy(post.id)" class="bi bi-trash3 destroy-icons"></i>
                        </div>
                    </div>
                </Link>
            </div>
        </template>
        <div class="card card-block card-add">
            <Link :href="route('posts.create')"
                  class="text-decoration-none text-center h-100 d-flex align-items-center justify-content-center">
                <i class="bi bi-plus-square text-black"></i>
            </Link>
        </div>
    </div>
</template>

<style scoped>

</style>
