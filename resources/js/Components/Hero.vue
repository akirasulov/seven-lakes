<template>
    <div class="relative h-screen isolate px-6 pt-14 lg:px-8">
        <img
            :src="hero"
            alt="hero image"
            loading="lazy"
            class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center"
        />

        <section class="pt-60">
            <div class="mx-auto max-w-2xl">
                <div class="text-center">
                    <h1
                        class="text-4xl font-bold tracking-tight text-white sm:text-6xl"
                    >
                        <Countdown />
                    </h1>
                    <p class="mt-6 text-lg leading-8 text-white">
                        {{ __("hero.description") }}
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <Link
                            href="/form"
                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                        >
                            {{ __("hero.participate") }}</Link
                        >
                        <Link
                            href="/about"
                            class="text-sm font-semibold leading-6 text-white"
                        >
                            {{ __("hero.about") }}
                            <span aria-hidden="true">→</span></Link
                        >
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import { ref } from "vue";
import hero from "../../img/hero.jpg";
import Countdown from "@/Components/Countdown.vue";
</script>
