<template>
    <div class="flex flex-col min-h-screen">
        <Header />
        <Banner />
        <div>
            <transition
                enter-active-class="ease-out duration-200"
                enter-from-class="transform opacity-0 scale-95"
                enter-to-class="transform opacity-100 scale-200"
                leave-active-class="ease-in duration-250"
                leave-from-class="transform opacity-100 scale-100"
                leave-to-class="transform opacity-0 scale-95"
                appear
            >
                <section :key="$page.url">
                    <slot />
                </section>
            </transition>
        </div>

        <Footer class="mt-auto" />
    </div>
</template>

<script setup>
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
import Banner from "@/Components/Banner.vue";
</script>
