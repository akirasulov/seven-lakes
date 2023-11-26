<script setup>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";

import "swiper/css/pagination";

// import required modules
import { Autoplay } from "swiper/modules";

let modules = [Autoplay];

let swiperOption = {
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 20,
        },

        796: {
            slidesPerView: 2,
            spaceBetween: 30,
        },

        1229: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },
};
</script>

<template>
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <h2
                class="text-center text-lg font-semibold leading-8 text-gray-900"
            >
                {{ __("attachs.partners_header") }}
            </h2>
            <swiper
                :breakpoints="swiperOption.breakpoints"
                :navigation="false"
                :loop="true"
                :autoplay="{
                    delay: 1000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                    reverseDirection: true,
                }"
                :modules="modules"
                class="mySwiper mt-10"
            >
                <swiper-slide
                    ><a href="https://avrang.tj/" target="_blank">
                        <img
                            class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                            src="../../img/partners/avrang.svg"
                            alt="avrang"
                            width="158"
                            height="48"
                        /> </a
                ></swiper-slide>
                <swiper-slide>
                    <a href="https://siyoma.tj/" target="_blank">
                        <img
                            class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                            src="../../img/partners/siyoma.png"
                            alt="siyoma"
                            width="158"
                            height="48"
                        /> </a></swiper-slide
                ><swiper-slide>
                    <a href="https://sayri-buston.tj/ru/" target="_blank">
                        <img
                            class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                            src="../../img/partners/sayri_buston.png"
                            alt="sayri-buston"
                            width="158"
                            height="48"
                        /> </a
                ></swiper-slide>
                <swiper-slide>
                    <a
                        href="https://ztda-tourism.tj/en/home-2/"
                        target="_blank"
                    >
                        <img
                            class="col-span-2 max-h-16 w-full object-contain lg:col-span-1"
                            src="../../img/partners/zerafshan.jpg"
                            alt="zerafshan"
                            width="158"
                            height="48"
                        /> </a></swiper-slide
                ><swiper-slide>
                    <a href="http://fezsughd.tj/" target="_blank">
                        <img
                            class="col-span-2 max-h-16 w-full object-contain lg:col-span-1"
                            src="../../img/partners/sughd_fez.png"
                            alt="fezsughd"
                            width="158"
                            height="48"
                        /> </a
                ></swiper-slide>
            </swiper>
            <div
                class="mx-auto mt-10 flex space-x-6 justify-center max-w-lg items-center gap-x-8 gap-y-10 sm:max-w-xl sm:gap-x-10 lg:mx-0 lg:max-w-none"
            ></div>
        </div>
    </div>
</template>
