<template>
    <div class="bg-white py-24 sm:py-32 border-b">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2
                    class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                >
                    {{ __("attachs.header") }}
                </h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">
                    {{ __("attachs.description") }}
                </p>
            </div>
            <div
                v-motion-slide-visible-once-bottom
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-4"
            >
                <article
                    class="flex max-w-xl flex-col items-start justify-between"
                >
                    <a
                        href="/reglament.pdf"
                        class="relative mt-8 flex items-center gap-x-4 hover:bg-slate-50 transition-colors duration-100 p-4 rounded-md cursor-pointer"
                    >
                        <img
                            :src="fileImg"
                            alt=""
                            class="h-10 w-10 bg-gray-50"
                        />
                        <div class="text-sm leading-6">
                            <div class="font-semibold text-gray-900">
                                <p>
                                    <span class="absolute inset-0" />
                                    {{ __("attachs.first") }}
                                </p>
                            </div>
                            <p class="text-blue-500 underline cursor-pointer">
                                {{ __("attachs.download") }}
                            </p>
                        </div>
                    </a>
                </article>
                <article
                    class="flex max-w-xl flex-col items-start justify-between"
                >
                    <a
                        href="/reglament.pdf"
                        class="relative mt-8 flex items-center gap-x-4 hover:bg-slate-50 transition-colors duration-100 p-4 rounded-md cursor-pointer"
                    >
                        <img
                            :src="fileImg"
                            alt=""
                            class="h-10 w-10 bg-gray-50"
                        />
                        <div class="text-sm leading-6">
                            <div class="font-semibold text-gray-900">
                                <p>
                                    <span class="absolute inset-0" />
                                    {{ __("attachs.second") }}
                                </p>
                            </div>
                            <p class="text-blue-500 underline cursor-pointer">
                                {{ __("attachs.download") }}
                            </p>
                        </div>
                    </a>
                </article>
                <article
                    class="flex max-w-xl flex-col items-start justify-between"
                >
                    <a
                        href="/reglament.pdf"
                        class="relative mt-8 flex items-center gap-x-4 hover:bg-slate-50 transition-colors duration-100 p-4 rounded-md cursor-pointer"
                    >
                        <img
                            :src="fileImg"
                            alt=""
                            class="h-10 w-10 bg-gray-50"
                        />
                        <div class="text-sm leading-6">
                            <div class="font-semibold text-gray-900">
                                <p>
                                    <span class="absolute inset-0" />
                                    {{ __("attachs.third") }}
                                </p>
                            </div>
                            <p class="text-blue-500 underline cursor-pointer">
                                {{ __("attachs.download") }}
                            </p>
                        </div>
                    </a>
                </article>
                <article
                    class="flex max-w-xl flex-col items-start justify-between"
                >
                    <a
                        href="/reglament.pdf"
                        class="relative mt-8 flex items-center gap-x-4 hover:bg-slate-50 transition-colors duration-100 p-4 rounded-md cursor-pointer"
                    >
                        <img
                            :src="fileImg"
                            alt=""
                            class="h-10 w-10 bg-gray-50"
                        />
                        <div class="text-sm leading-6">
                            <div class="font-semibold text-gray-900">
                                <p>
                                    <span class="absolute inset-0" />
                                    {{ __("attachs.fourth") }}
                                </p>
                            </div>
                            <p class="text-blue-500 underline cursor-pointer">
                                {{ __("attachs.download") }}
                            </p>
                        </div>
                    </a>
                </article>
            </div>
        </div>
    </div>
</template>

<script setup>
import fileImg from "../../img/file.svg";
</script>
