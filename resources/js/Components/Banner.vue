<template>
    <Transition duration="550" name="nested">
        <section
            v-if="!show && y > 100"
            class="fixed z-50 max-w-2xl p-4 mx-auto bg-white border border-gray-200 md:gap-x-4 left-12 bottom-16 md:flex md:items-center rounded-2xl"
        >
            <div class="flex items-center gap-x-4">
                <span
                    class="inline-flex p-2 text-blue-500 rounded-lg shrink-0 bg-blue-100/80"
                >
                    <button
                        @click.prevent="show = true"
                        type="button"
                        class="-m-3 p-3 focus-visible:outline-offset-[-4px]"
                    >
                        <span class="sr-only">Dismiss</span>
                        <XMarkIcon
                            class="h-5 w-5 text-black"
                            aria-hidden="true"
                        />
                    </button>
                </span>

                <p class="text-sm text-gray-600">
                    Горный Полумарафон 7 Озёр, присоединяйтесь к нам.
                </p>
            </div>

            <div class="flex items-center mt-6 gap-x-4 shrink-0 lg:mt-0">
                <a href="#" class="text-blue-500 text-sm hover:underline"
                    >Подробнее</a
                >

                <Link
                    href="/form"
                    class="text-xs w-1/2 md:w-auto font-medium bg-gray-800 rounded-lg hover:bg-gray-700 text-white px-4 py-2.5 duration-300 transition-colors focus:outline-none"
                >
                    Участвовать
                </Link>
            </div>
        </section>
    </Transition>
</template>

<script setup>
import { XMarkIcon } from "@heroicons/vue/20/solid";
import { onMounted, ref } from "vue";
import { useWindowScroll } from "@vueuse/core";

const { y } = useWindowScroll();
let show = ref(true);
onMounted(() => {
    setTimeout(() => {
        show.value = false;
    }, 3000);
});
</script>
