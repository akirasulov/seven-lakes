<template>
    <Transition duration="550" name="nested">
        <div
            v-if="y > 430"
            class="fixed group z-10 flex justify-center items-center bottom-0 right-4 top-0"
        >
            <button
                type="button"
                class="relative animate-pulse group-hover:animate-none rounded-md text-green-600 group-hover:text-green-400 focus:outline-none focus:ring-2 focus:ring-green-700"
                @click="open = true"
            >
                <span class="absolute -inset-2.5" />
                <span class="sr-only">Close panel</span>
                <ClipboardIcon class="h-6 w-6" aria-hidden="true" />
            </button>
            <!-- <p
                class="group-hover:opacity-100 text-xs group-hover:block absolute right-4 -translate-y-8 hidden duration-150 opacity-0 bg-white border p-2 rounded-md text-gray-700 transition-opacity"
            >
                Участвовать
            </p> -->
        </div>
    </Transition>
    <TransitionRoot as="template" :show="open">
        <Dialog as="div" class="relative z-10" @close="open = false">
            <TransitionChild
                as="template"
                enter="ease-in-out duration-500"
                enter-from="opacity-0"
                enter-to="opacity-100"
                leave="ease-in-out duration-500"
                leave-from="opacity-100"
                leave-to="opacity-0"
            >
                <div
                    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                />
            </TransitionChild>

            <div class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div
                        class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10"
                    >
                        <TransitionChild
                            as="template"
                            enter="transform transition ease-in-out duration-500 sm:duration-700"
                            enter-from="translate-x-full"
                            enter-to="translate-x-0"
                            leave="transform transition ease-in-out duration-500 sm:duration-700"
                            leave-from="translate-x-0"
                            leave-to="translate-x-full"
                        >
                            <DialogPanel
                                class="pointer-events-auto relative w-screen max-w-md"
                            >
                                <TransitionChild
                                    as="template"
                                    enter="ease-in-out duration-500"
                                    enter-from="opacity-0"
                                    enter-to="opacity-100"
                                    leave="ease-in-out duration-500"
                                    leave-from="opacity-100"
                                    leave-to="opacity-0"
                                >
                                    <div
                                        class="absolute flex justify-center items-center bottom-0 left-0 top-0 -ml-8 pr-2 pt-4 sm:-ml-10 sm:pr-4"
                                    >
                                        <button
                                            type="button"
                                            class="relative rounded-md text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white"
                                            @click="open = false"
                                        >
                                            <span class="absolute -inset-2.5" />
                                            <span class="sr-only"
                                                >Close panel</span
                                            >
                                            <ChevronDoubleRightIcon
                                                class="h-6 w-6"
                                                aria-hidden="true"
                                            />
                                        </button>
                                    </div>
                                </TransitionChild>
                                <div
                                    class="flex h-full flex-col overflow-y-scroll bg-white py-6 shadow-xl"
                                >
                                    <div class="px-4 sm:px-6">
                                        <DialogTitle
                                            class="text-base font-semibold leading-6 text-gray-900"
                                            >Заявка на участие</DialogTitle
                                        >
                                    </div>
                                    <div class="relative flex-1 px-4 sm:px-6">
                                        <div
                                            class="isolate bg-white px-6 py-24 lg:px-8"
                                        >
                                            <div
                                                class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
                                                aria-hidden="true"
                                            >
                                                <div
                                                    class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
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
                                            <div
                                                class="mx-auto max-w-2xl text-center"
                                            >
                                                <h2
                                                    class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl"
                                                >
                                                    Регистрация
                                                </h2>
                                                <p
                                                    class="mt-2 text-lg leading-8 text-gray-600"
                                                >
                                                    Горный Полумарафон 7 Озёр
                                                </p>
                                            </div>
                                            <form
                                                action="#"
                                                method="POST"
                                                class="mx-auto mt-16 max-w-xl sm:mt-20"
                                            >
                                                <div
                                                    class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2"
                                                >
                                                    <div>
                                                        <label
                                                            for="first-name"
                                                            class="block text-sm font-semibold leading-6 text-gray-900"
                                                            >Имя *</label
                                                        >
                                                        <div class="mt-2.5">
                                                            <input
                                                                type="text"
                                                                name="first-name"
                                                                id="first-name"
                                                                autocomplete="given-name"
                                                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label
                                                            for="last-name"
                                                            class="block text-sm font-semibold leading-6 text-gray-900"
                                                            >Фамилия *</label
                                                        >
                                                        <div class="mt-2.5">
                                                            <input
                                                                type="text"
                                                                name="last-name"
                                                                id="last-name"
                                                                autocomplete="family-name"
                                                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-2">
                                                        <label
                                                            for="company"
                                                            class="block text-sm font-semibold leading-6 text-gray-900"
                                                            >Экстренный контакт
                                                            *</label
                                                        >
                                                        <div class="mt-2.5">
                                                            <input
                                                                type="text"
                                                                name="company"
                                                                id="company"
                                                                autocomplete="organization"
                                                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-2">
                                                        <label
                                                            for="email"
                                                            class="block text-sm font-semibold leading-6 text-gray-900"
                                                            >E-mail *</label
                                                        >
                                                        <div class="mt-2.5">
                                                            <input
                                                                type="email"
                                                                name="email"
                                                                id="email"
                                                                autocomplete="email"
                                                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="sm:col-span-2">
                                                        <label
                                                            for="phone-number"
                                                            class="block text-sm font-semibold leading-6 text-gray-900"
                                                            >Пол*</label
                                                        >

                                                        <select
                                                            id="countries"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2.5"
                                                        >
                                                            <option selected>
                                                                Выберите пол
                                                            </option>
                                                            <option value="US">
                                                                Женщина
                                                            </option>
                                                            <option value="CA">
                                                                Мужчина
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="sm:col-span-2">
                                                        <label
                                                            for="phone-number"
                                                            class="block text-sm font-semibold leading-6 text-gray-900"
                                                            >Номер
                                                            телефона*</label
                                                        >
                                                        <div
                                                            class="relative mt-2.5"
                                                        >
                                                            <input
                                                                type="tel"
                                                                name="phone-number"
                                                                id="phone-number"
                                                                autocomplete="tel"
                                                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-10">
                                                    <button
                                                        type="submit"
                                                        class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                                    >
                                                        Участвовать
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </DialogPanel>
                        </TransitionChild>
                    </div>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>

<script setup>
import { ref } from "vue";
import {
    Dialog,
    DialogPanel,
    DialogTitle,
    TransitionChild,
    TransitionRoot,
} from "@headlessui/vue";
import {
    ClipboardIcon,
    ChevronDoubleRightIcon,
    ChevronDownIcon,
} from "@heroicons/vue/24/outline";
import { useWindowScroll } from "@vueuse/core";

const agreed = ref(false);
const { y } = useWindowScroll();
const open = ref(false);
</script>
