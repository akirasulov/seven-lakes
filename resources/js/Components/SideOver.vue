<template>
    <Transition duration="550" name="nested">
        <div
            v-if="
                ($page.component == 'Index' && y > 430) ||
                $page.component != 'Index'
            "
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
                                        <Form />
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

import Form from "@/Components/Form.vue";
const { y } = useWindowScroll();
const open = ref(false);
</script>
