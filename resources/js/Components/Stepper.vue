<template>
    <section>
        <div
            v-motion-slide-visible-once-bottom
            class="md:lg:xl:px-40 border-t border-b py-10 md:py-20 bg-opacity-10"
        >
            <div
                class="grid grid-cols-1 md:lg:xl:grid-cols-4 group bg-white shadow-xl shadow-neutral-100 md:border"
            >
                <div
                    class="p-10 flex flex-col items-center justify-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer"
                >
                    <p class="text-2xl font-medium text-slate-700 mt-3">
                        <span class="text-green-600 text-3xl">7</span>
                        {{ __("steps.header") }}
                    </p>
                    <p class="mt-2 text-lg font-base text-slate-700">
                        {{ __("steps.description") }}
                    </p>
                </div>

                <div
                    class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer"
                >
                    <div class="flex items-center justify-center -space-x-36">
                        <div>
                            <img
                                class="w-14 h-14"
                                src="../../img/1.svg"
                                alt=""
                            />
                        </div>
                        <div
                            class="px-8 py-5 text-4xl rounded-full bg-green-100 text-green-900 shadow-lg shadow-green-200 mix-blend-normal"
                        >
                            1
                        </div>
                    </div>
                    <p class="text-lg text-slate-700 mt-3">
                        {{ __("steps.first") }}
                    </p>
                </div>

                <div
                    class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer"
                >
                    <div class="flex items-center justify-center -space-x-40">
                        <div>
                            <img
                                class="w-16 h-16"
                                src="../../img/2.svg"
                                alt=""
                            />
                        </div>
                        <div
                            class="px-8 py-5 text-4xl rounded-full bg-green-200 text-green-800 shadow-lg shadow-green-200 mix-blend-normal"
                        >
                            2
                        </div>
                    </div>
                    <p class="text-lg text-slate-700 mt-3">
                        {{ __("steps.second") }}
                    </p>
                </div>

                <div
                    class="p-10 flex flex-col items-center text-center group md:lg:xl:border-b hover:bg-slate-50 cursor-pointer"
                >
                    <div class="flex items-center justify-center -space-x-40">
                        <div>
                            <img
                                class="w-16 h-16"
                                src="../../img/3.svg"
                                alt=""
                            />
                        </div>
                        <div
                            class="px-8 py-5 text-4xl rounded-full bg-green-300 text-green-700 shadow-lg shadow-green-200 mix-blend-normal"
                        >
                            3
                        </div>
                    </div>
                    <p class="text-lg text-slate-700 mt-3">
                        {{ __("steps.third") }}
                    </p>
                </div>

                <div
                    class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r hover:bg-slate-50 cursor-pointer"
                >
                    <div class="flex items-center justify-center -space-x-40">
                        <div>
                            <img
                                class="w-16 h-16"
                                src="../../img/4.svg"
                                alt=""
                            />
                        </div>
                        <div
                            class="px-8 py-5 text-4xl rounded-full bg-green-400 text-white shadow-lg shadow-green-200 mix-blend-normal"
                        >
                            4
                        </div>
                    </div>
                    <p class="text-lg text-slate-700 mt-3">
                        {{ __("steps.fourth") }}
                    </p>
                </div>

                <div
                    class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r hover:bg-slate-50 cursor-pointer"
                >
                    <div class="flex items-center justify-center -space-x-40">
                        <div>
                            <img
                                class="w-16 h-16"
                                src="../../img/5.svg"
                                alt=""
                            />
                        </div>
                        <div
                            class="px-8 py-5 text-4xl rounded-full bg-green-500 text-white shadow-lg shadow-green-200 mix-blend-normal"
                        >
                            5
                        </div>
                    </div>
                    <p class="text-lg text-slate-700 mt-3">
                        {{ __("steps.fiveth") }}
                    </p>
                </div>

                <div
                    class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r hover:bg-slate-50 cursor-pointer"
                >
                    <div class="flex items-center justify-center -space-x-40">
                        <div>
                            <img
                                class="w-16 h-16"
                                src="../../img/6.svg"
                                alt=""
                            />
                        </div>
                        <div
                            class="px-8 py-5 text-4xl rounded-full bg-green-600 text-white shadow-lg shadow-green-200 mix-blend-normal"
                        >
                            6
                        </div>
                    </div>
                    <p class="text-lg text-slate-700 mt-3">
                        {{ __("steps.sixth") }}
                    </p>
                </div>

                <div
                    class="p-10 flex flex-col items-center text-center group hover:bg-slate-50 cursor-pointer"
                >
                    <div class="flex items-center justify-center -space-x-40">
                        <div>
                            <img
                                class="w-16 h-16"
                                src="../../img/7.svg"
                                alt=""
                            />
                        </div>
                        <div
                            class="px-8 py-5 text-4xl rounded-full bg-green-700 text-white shadow-lg shadow-green-200 mix-blend-normal"
                        >
                            7
                        </div>
                    </div>

                    <p class="text-lg text-slate-700 mt-3">
                        {{ __("steps.seventh") }}
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup></script>
