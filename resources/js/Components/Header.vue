<template>
    <header
        :class="
            $page.component == 'Index'
                ? 'absolute bg-gray-900/50'
                : 'relative bg-gray-900'
        "
        class="absolute inset-x-0 top-0"
    >
        <nav
            class="flex items-center justify-between p-6 lg:px-8"
            aria-label="Global"
        >
            <div class="flex lg:flex-1">
                <Link href="/">
                    <ApplicationLogo class="h-14 w-auto" />
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
                    href=""
                    class="text-sm leading-6 text-white uppercase font-bold"
                >
                    {{ __("header.distance") }}</Link
                >
                <Link
                    href="/results"
                    class="text-sm leading-6 text-white uppercase font-bold"
                >
                    {{ __("header.results") }}</Link
                >
                <Link
                    href=""
                    class="text-sm leading-6 text-white uppercase font-bold"
                >
                    {{ __("header.race_organizers") }}</Link
                >
                <Link
                    href=""
                    class="text-sm leading-6 text-white uppercase font-bold"
                >
                    {{ __("header.participants") }}</Link
                >
                <Link
                    href="/about"
                    class="text-sm leading-6 text-white uppercase font-bold"
                >
                    {{ __("header.about") }}</Link
                >
            </div>

            <div
                class="hidden lg:flex lg:flex-1 items-center space-x-5 lg:justify-end"
            >
                <Link
                    href="/login"
                    class="text-sm font-bold uppercase leading-6 text-white"
                >
                    {{ __("header.registration") }}
                </Link>
                <SwitchLang />
            </div>
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
                    <button
                        type="button"
                        class="-m-2.5 rounded-md p-2.5 text-gray-700"
                        @click="mobileMenuOpen = false"
                    >
                        <span class="sr-only">Меню закрыть</span>
                        <XMarkIcon class="h-6 w-6" aria-hidden="true" />
                    </button>
                    <SwitchLang />
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <Link
                                href=""
                                class="-mx-3 block uppercase rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                            >
                                {{ __("header.distance") }}</Link
                            >
                            <Link
                                href="/results"
                                class="-mx-3 block uppercase rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                            >
                                {{ __("header.results") }}</Link
                            >
                            <Link
                                href=""
                                class="-mx-3 block uppercase rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                            >
                                {{ __("header.race_organizers") }}</Link
                            >
                            <Link
                                href=""
                                class="-mx-3 block uppercase rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                            >
                                {{ __("header.participants") }}</Link
                            >
                            <Link
                                href="/about"
                                class="-mx-3 block uppercase rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                            >
                                {{ __("header.about") }}</Link
                            >
                        </div>
                        <div class="py-6">
                            <Link
                                href="/login"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
                            >
                                {{ __("header.registration") }}</Link
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
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

const mobileMenuOpen = ref(false);
</script>
