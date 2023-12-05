<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-body-secondary">© 2023 Company, Inc</p>

            <Link :href="route('home')" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="/images/home.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
            </Link>
        </footer>
    </div>
</template>

<style scoped>

</style>
