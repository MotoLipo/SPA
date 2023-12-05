<script setup>
import Footer from "./Footer.vue";
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="d-flex flex-column min-vh-100">
        <header>
            <nav class="navbar">
                <div class="container-fluid">
                    <Link class="navbar-brand align-items-center d-flex" :href="route('home')">
                        <img src="/images/home.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
                        Home
                    </Link>
                </div>
            </nav>
        </header>
        <div class="wrapper flex-grow-1">
            <slot />
        </div>
        <Footer></Footer>
    </div>
</template>

<style scoped>

</style>
