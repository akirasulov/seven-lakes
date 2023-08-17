<template>
    <header
        :class="
            $page.component == 'Index'
                ? 'absolute bg-gray-900/50'
                : 'relative bg-gray-900'
        "
        class="absolute inset-x-0 top-0 z-50"
    >
        <nav
            class="flex items-center justify-between p-6 lg:px-8"
            aria-label="Global"
        >
            <div class="flex lg:flex-1">
                <Link href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">Логотип</span>
                    <img class="h-8 w-auto" src="../../img/logo.png" alt="" />
                </Link>
            </div>
            <div class="flex lg:hidden">
                <button
                    type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white"
                    @click="mobileMenuOpen = true"
                >
                    <span class="sr-only">Меню</span>
                    <Bars3Icon class="h-6 w-6" aria-hidden="true" />
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <Link
                    v-for="item in navigation"
                    :key="item.name"
                    :href="item.href"
                    class="text-sm leading-6 text-white uppercase font-bold"
                    >{{ item.name }}</Link
                >
            </div>

            <div class="hidden lg:flex lg:flex-1 items-center lg:justify-end">
                <Link
                    href="/login"
                    class="text-sm font-bold uppercase leading-6 text-white"
                    >Регистрация
                </Link>
            </div>
            <SwitchLang />
        </nav>
        <Dialog
            as="div"
            class="lg:hidden"
            @close="mobileMenuOpen = false"
            :open="mobileMenuOpen"
        >
            <div class="fixed inset-0 z-50" />
            <DialogPanel
                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
            >
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5 bg-gray-700">
                        <span class="sr-only">Логотип</span>
                        <img
                            class="h-8 w-auto"
                            src="../../img/logo.png"
                            alt=""
                        />
                    </a>
                    <button
                        type="button"
                        class="-m-2.5 rounded-md p-2.5 text-gray-700"
                        @click="mobileMenuOpen = false"
                    >
                        <span class="sr-only">Меню закрыть</span>
                        <XMarkIcon class="h-6 w-6" aria-hidden="true" />
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a
                                v-for="item in navigation"
                                :key="item.name"
                                :href="item.href"
                                class="-mx-3 block uppercase rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                >{{ item.name }}</a
                            >
                        </div>
                        <div class="py-6">
                            <a
                                href="/login"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                                >Регистрация</a
                            >
                        </div>
                    </div>
                </div>
            </DialogPanel>
        </Dialog>
    </header>
</template>

<script setup>
import { ref } from "vue";
import NavLink from "@/Components/NavLink.vue";
import SwitchLang from "@/Components/SwitchLang.vue";
import { Dialog, DialogPanel } from "@headlessui/vue";
import { Bars3Icon, XMarkIcon } from "@heroicons/vue/24/outline";

const navigation = [
    { name: "Дистанция", href: "#" },
    { name: "Результаты", href: "/results" },
    { name: "Организаторы забега", href: "#" },
    { name: "Участникам", href: "#" },
];

const mobileMenuOpen = ref(false);
</script>
