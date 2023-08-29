<script>
export default {
    layout: null,
};
</script>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Pagination from "@/Shared/Pagination.vue";
import { Head, router } from "@inertiajs/vue3";
import debounce from "lodash/debounce";
import { ref } from "vue";
import { watch } from "vue";

let props = defineProps({
    registration: Object,
    filters: Object,
});
let search = ref(props.filters.search);
watch(
    search,
    debounce(function (value) {
        router.get(
            "/dashboard",
            { search: value },
            {
                preserveState: true,
                replace: true,
            }
        );
    }, 500)
);
</script>

<template>
    <Head :title="__('dashboard.panel')" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __("dashboard.panel") }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div v-if="$page.props.auth.admin">
                        <div class="py-4 bg-white rounded-lg">
                            <label for="table-search" class="sr-only"
                                >Поиск</label
                            >
                            <div class="relative mt-1">
                                <div
                                    class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                                >
                                    <svg
                                        class="w-5 h-5 text-gray-500"
                                        aria-hidden="true"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </div>
                                <input
                                    id="table-search"
                                    v-model="search"
                                    type="search"
                                    class="block ml-2 p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-xl border border-gray-300 focus:ring-primary focus:border-primary"
                                    placeholder="Поиск"
                                />
                            </div>
                        </div>

                        <table class="w-full text-sm text-left text-gray-500">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50"
                            >
                                <tr>
                                    <th scope="col" class="px-6 py-3">Имя</th>
                                    <th scope="col" class="px-6 py-3">
                                        Фамилия
                                    </th>
                                    <th scope="col" class="px-6 py-3">Почта</th>
                                    <th scope="col" class="px-6 py-3">Номер</th>
                                    <th scope="col" class="px-6 py-3">Пол</th>
                                    <th scope="col" class="px-6 py-3">
                                        Экстренный контакт
                                    </th>

                                    <th scope="col" class="px-6 py-3">
                                        Номер участника
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Дата регистрации
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    v-for="(item, index) in registration.data"
                                    :key="index"
                                    class="border-b hover:bg-gray-50"
                                >
                                    <th
                                        scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                                    >
                                        {{ item.name }}
                                    </th>
                                    <td
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                                    >
                                        {{ item.surname }}
                                    </td>
                                    <td
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                                    >
                                        {{ item.email }}
                                    </td>
                                    <td
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                                    >
                                        {{ item.msisdn }}
                                    </td>
                                    <td
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                                    >
                                        {{ item.sex == "male" ? "муж" : "жен" }}
                                    </td>
                                    <td
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                                    >
                                        {{ item.emergency_contact }}
                                    </td>
                                    <td
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                                    >
                                        0{{ item.id }}
                                    </td>
                                    <td
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                                    >
                                        {{ item.created_at }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p
                            v-if="registration.data.length < 1"
                            class="text-center py-2"
                        >
                            Ничего не найдено
                        </p>
                        <Pagination class="py-2" :links="registration.links" />
                    </div>

                    <div v-else class="p-6 text-gray-900">
                        {{ __("dashboard.welcome") }}
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
