<template>
    <Head :title="__('header_x_footer.about')" />
    <div class="py-16 bg-white">
        <div class="container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div
                class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-12"
            >
                <div class="md:5/12 lg:w-5/12">
                    <img
                        src="../../img/run.jpg"
                        alt="image"
                        loading="lazy"
                        width=""
                        height=""
                    />
                </div>
                <div class="md:7/12 lg:w-6/12">
                    <h2 class="text-2xl text-gray-900 font-bold md:text-4xl">
                        {{ __("header_x_footer.about") }}
                    </h2>
                    <p class="mt-6 text-gray-600">
                        {{ __("about.header") }}
                    </p>
                    <p class="mt-6 text-gray-600">
                        {{ __("about.description") }}
                    </p>
                </div>
            </div>
            <p class="mt-6 text-gray-600">
                {{ __("about.info") }}
            </p>
        </div>
    </div>
</template>

<script setup></script>

<style lang="scss" scoped></style>
