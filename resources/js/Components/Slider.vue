<template>
    <div
        class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32"
    >
        <section class="sm:px-10">
            <swiper
                :breakpoints="swiperOption.breakpoints"
                :pagination="{
                    type: 'progressbar',
                }"
                :navigation="true"
                :loop="true"
                :modules="modules"
                class="mySwiper"
            >
                <swiper-slide class="h-screen">
                    <img
                        class="w-full h-full object-contain rounded-md"
                        src="../../img/2023/1.jpg"
                    />
                </swiper-slide>
                <swiper-slide class="h-screen">
                    <img
                        class="w-full h-full object-contain rounded-md"
                        src="../../img/2023/2.jpg"
                    />
                </swiper-slide>
                <swiper-slide class="h-screen">
                    <img
                        class="w-full h-full object-contain rounded-md"
                        src="../../img/2023/3.jpg"
                    />
                </swiper-slide>
                <swiper-slide class="h-screen">
                    <img
                        class="w-full h-full object-contain rounded-md"
                        src="../../img/2023/4.jpg"
                    />
                </swiper-slide>
                <swiper-slide class="h-screen">
                    <img
                        class="w-full h-full object-contain rounded-md"
                        src="../../img/2023/5.jpg"
                    />
                </swiper-slide>
                <swiper-slide class="h-screen">
                    <img
                        class="w-full h-full object-contain rounded-md"
                        src="../../img/2023/6.jpg"
                    />
                </swiper-slide>
                <swiper-slide class="h-screen">
                    <img
                        class="w-full h-full object-contain rounded-md"
                        src="../../img/2023/7.jpg"
                    />
                </swiper-slide>
                <!-- <swiper-slide class="h-screen">
                    <img
                        class="w-full h-screen object-contain rounded-md"
                        src="../../img/2023/8.jpg"
                    />
                </swiper-slide>
                <swiper-slide class="h-screen">
                    <img
                        class="w-full h-screen object-contain rounded-md"
                        src="../../img/2023/9.jpg"
                    />
                </swiper-slide>
                <swiper-slide class="h-screen">
                    <img
                        class="w-full h-screen object-contain rounded-md"
                        src="../../img/2023/10.jpg"
                    />
                </swiper-slide>
                <swiper-slide class="h-screen">
                    <img
                        class="w-full h-screen object-contain rounded-md"
                        src="../../img/2023/11.jpg"
                    />
                </swiper-slide> -->
            </swiper>
        </section>
    </div>
</template>
<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/effect-fade";
import "swiper/css/navigation";
import "swiper/css/pagination";

import { Navigation, Pagination, Autoplay } from "swiper/modules";

let modules = [Autoplay, Navigation, Pagination];
let swiperOption = {
    breakpoints: {
        320: {
            slidesPerView: 1.3,
            spaceBetween: 20,
        },

        796: {
            slidesPerView: 1.8,
            spaceBetween: 30,
        },

        1229: {
            slidesPerView: 3.2,
            spaceBetween: 50,
        },
    },
};
</script>
