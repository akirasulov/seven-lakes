<template>
    <div class="bg-white py-24 sm:py-32 border-b">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2
                    class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                >
                    Документы
                </h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">
                    Регистрация участников завершится 16 сентября 2023 в 17
                    часов 59 минут или по достижению лимита выделенных слотов
                    для регистрации на отдельные дистанции.
                </p>
            </div>
            <div
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-4"
            >
                <article
                    v-for="post in posts"
                    :key="post.id"
                    class="flex max-w-xl flex-col items-start justify-between"
                >
                    <a
                        href="#"
                        class="relative mt-8 flex items-center gap-x-4 hover:bg-slate-50 transition-colors duration-100 p-4 rounded-md cursor-pointer"
                    >
                        <img
                            :src="post.imageUrl"
                            alt=""
                            class="h-10 w-10 bg-gray-50"
                        />
                        <div class="text-sm leading-6">
                            <div class="font-semibold text-gray-900">
                                <p>
                                    <span class="absolute inset-0" />
                                    {{ post.name }}
                                </p>
                            </div>
                            <p class="text-blue-500 underline cursor-pointer">
                                Скачать
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
const posts = [
    {
        id: 1,
        name: "Положение регламет",
        link: "Co-Founder / CTO",
        imageUrl: fileImg,
    },
    {
        id: 2,
        name: "Публичная оферта",
        link: "Co-Founder / CTO",
        imageUrl: fileImg,
    },
    {
        id: 3,
        name: "Сертификат трассы",
        link: "Co-Founder / CTO",
        imageUrl: fileImg,
    },
    {
        id: 3,
        name: "Расписка о здоровье",
        link: "Co-Founder / CTO",
        imageUrl: fileImg,
    },
];
</script>
