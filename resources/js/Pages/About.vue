<template>
    <Head>
        <title>{{ __("header_x_footer.about") }}</title>
        <meta property="og:type" content="website" />
        <meta property="og:title" :content="__('header_x_footer.about')" />
        <meta property="og:url" content="https://seven-lakes.tj/about/" />
        <meta property="og:image" content="https://seven-lakes.tj/logo.png" />
        <meta property="og:description" :content="__('about.description')" />
    </Head>

    <section class="bg-white">
        <div class="py-16">
            <div class="container m-auto px-6 md:px-12 xl:px-6 overflow-hidden">
                <div
                    class="space-y-6 md:space-y-0 md:flex md:flex-row-reverse md:gap-6 lg:items-center lg:gap-12"
                >
                    <div class="md:5/12 lg:w-5/12">
                        <h2 class="text-4xl text-gray-900 font-bold">
                            {{ __("header_x_footer.about") }}
                        </h2>
                        <p class="mt-6 text-gray-600">
                            {{ __("about.header") }}
                        </p>
                        <p class="mt-6 text-gray-600">
                            {{ __("about.description") }}
                        </p>
                    </div>
                    <div class="md:7/12 lg:w-6/12 md:mr-10">
                        <swiper
                            :effect="'cards'"
                            :grabCursor="true"
                            :modules="modules"
                            class="mySwiper"
                        >
                            <swiper-slide>
                                <img
                                    class="rounded-md h-72 md:h-full object-cover"
                                    src="../../img/track/1.jpg"
                                    alt="image"
                                    loading="lazy"
                                    width=""
                                    height=""
                            /></swiper-slide>
                            <swiper-slide>
                                <img
                                    class="rounded-md h-72 md:h-full object-cover"
                                    src="../../img/track/2.jpg"
                                    alt="image"
                                    loading="lazy"
                                    width=""
                                    height=""
                            /></swiper-slide>
                            <swiper-slide>
                                <img
                                    class="rounded-md h-72 md:h-full object-cover"
                                    src="../../img/track/3.jpg"
                                    alt="image"
                                    loading="lazy"
                                    width=""
                                    height=""
                            /></swiper-slide>
                            <swiper-slide>
                                <img
                                    class="rounded-md h-72 md:h-full object-cover"
                                    src="../../img/track/4.jpg"
                                    alt="image"
                                    loading="lazy"
                                    width=""
                                    height=""
                            /></swiper-slide>
                            <swiper-slide>
                                <img
                                    class="rounded-md h-72 md:h-full object-cover"
                                    src="../../img/track/5.jpg"
                                    alt="image"
                                    loading="lazy"
                                    width=""
                                    height=""
                            /></swiper-slide>
                            <swiper-slide>
                                <img
                                    class="rounded-md h-72 md:h-full object-cover"
                                    src="../../img/track/6.jpg"
                                    alt="image"
                                    loading="lazy"
                                    width=""
                                    height=""
                            /></swiper-slide>
                            <swiper-slide>
                                <img
                                    class="rounded-md h-72 md:h-full object-cover"
                                    src="../../img/track/7.jpg"
                                    alt="image"
                                    loading="lazy"
                                    width=""
                                    height=""
                            /></swiper-slide>
                            <swiper-slide>
                                <img
                                    class="rounded-md h-72 md:h-full object-cover"
                                    src="../../img/track/8.jpg"
                                    alt="image"
                                    loading="lazy"
                                    width=""
                                    height=""
                            /></swiper-slide>
                            <swiper-slide>
                                <img
                                    class="rounded-md h-72 md:h-full object-cover"
                                    src="../../img/track/9.jpg"
                                    alt="image"
                                    loading="lazy"
                                    width=""
                                    height=""
                            /></swiper-slide>
                        </swiper>
                    </div>
                </div>
                <p class="mt-6 text-gray-600">
                    {{ __("about.info") }}
                </p>
            </div>
        </div>

        <div class="container px-6 py-10 mx-auto bg-gray-900">
            <h1 class="text-2xl font-semibold text-white lg:text-3xl">
                {{ __("about.video_header_first") }} <br />
                {{ __("about.video_header_second") }}
                <span class="text-blue-500">
                    {{ __("about.video_header_third") }}</span
                >
            </h1>
            <video
                poster="../../img/hero.jpg"
                class="min-w-full mt-12 h-64 md:h-[450px] rounded-xl overflow-hidden"
                controls
            >
                <source src="../../img/about.mp4" type="video/mp4" />
                <p>Your browser doesn't support HTML5 video.</p>
            </video>
        </div>
    </section>
</template>
<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";

import "swiper/css";

import "swiper/css/effect-cards";

import { EffectCards } from "swiper/modules";

let modules = [EffectCards];
</script>
