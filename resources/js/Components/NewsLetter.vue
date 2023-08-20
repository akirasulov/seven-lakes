<template>
    <div
        class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32"
    >
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2"
            >
                <div
                    v-motion
                    :initial="{
                        opacity: 0,
                        y: 100,
                    }"
                    :enter="{
                        opacity: 1,
                        y: 0,
                    }"
                    class="max-w-xl lg:max-w-lg"
                >
                    <h2
                        class="text-3xl font-bold tracking-tight text-center md:text-left text-white sm:text-4xl"
                    >
                        {{ __("newsletter.header") }}
                    </h2>
                    <p class="mt-4 text-lg leading-8 text-gray-300">
                        {{ __("newsletter.description") }}
                    </p>
                </div>
                <dl
                    v-motion-slide-visible-bottom
                    class="grid grid-cols-2 gap-x-8 gap-y-10 sm:grid-cols-3 lg:pt-2"
                >
                    <div class="flex flex-col items-start">
                        <div
                            class="rounded-md bg-white/5 p-2 ring-1 ring-white/10"
                        >
                            <MapPinIcon
                                class="h-6 w-6 text-white"
                                aria-hidden="true"
                            />
                        </div>
                        <dt class="mt-4 font-semibold text-white">
                            {{ __("newsletter.location") }}
                        </dt>
                        <dd class="mt-2 leading-7 text-gray-400">
                            {{ __("newsletter.city") }}
                        </dd>
                    </div>
                    <div class="flex flex-col items-start">
                        <div
                            class="rounded-md bg-white/5 p-2 ring-1 ring-white/10"
                        >
                            <CalendarDaysIcon
                                class="h-6 w-6 text-white"
                                aria-hidden="true"
                            />
                        </div>
                        <dt class="mt-4 font-semibold text-white">
                            {{ __("newsletter.date") }}
                        </dt>
                        <dd class="mt-2 leading-7 text-gray-400">
                            {{ __("newsletter.day") }}
                        </dd>
                    </div>
                    <div class="flex flex-col items-start">
                        <div
                            class="rounded-md bg-white/5 p-2 ring-1 ring-white/10"
                        >
                            <ClockIcon
                                class="h-6 w-6 text-white"
                                aria-hidden="true"
                            />
                        </div>
                        <dt class="mt-4 font-semibold text-white">
                            {{ __("newsletter.day_time") }}
                        </dt>
                        <dd class="mt-2 leading-7 text-gray-400">
                            {{ __("newsletter.time") }}
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
        <div class="flex justify-center px-4 mt-24">
            <iframe
                class="md:w-1/2 w-full h-80 rounded-md"
                src="https://www.youtube.com/embed/7PQRNutqdTo?controls=0"
            >
            </iframe>
        </div>
        <div
            class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6"
            aria-hidden="true"
        >
            <div
                class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                style="
                    clip-path: polygon(
                        74.1% 44.1%,
                        100% 61.6%,
                        97.5% 26.9%,
                        85.5% 0.1%,
                        80.7% 2%,
                        72.5% 32.5%,
                        60.2% 62.4%,
                        52.4% 68.1%,
                        47.5% 58.3%,
                        45.2% 34.5%,
                        27.5% 76.7%,
                        0.1% 64.9%,
                        17.9% 100%,
                        27.6% 76.8%,
                        76.1% 97.7%,
                        74.1% 44.1%
                    );
                "
            />
        </div>
    </div>
</template>

<script setup>
import {
    CalendarDaysIcon,
    MapPinIcon,
    ClockIcon,
} from "@heroicons/vue/24/outline";
</script>
