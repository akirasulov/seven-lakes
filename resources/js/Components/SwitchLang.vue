<template>
    <div class="">
        <Dropdown align="right" width="48">
            <template #trigger>
                <span class="inline-flex rounded-md">
                    <button
                        type="button"
                        class="inline-flex items-center px-3 py-2.5 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                    >
                        {{
                            $page.props.languages.find(
                                (el) => el.value == $page.props.language
                            ).value == "tj"
                                ? "Тоҷикӣ"
                                : "Русский"
                        }}
                        <svg
                            class="ml-2 -mr-0.5 h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                </span>
            </template>
            <template #content>
                <DropdownLink
                    :href="
                        route('language.store', {
                            language: `${$page.props.languages[0].value}`,
                        })
                    "
                    method="post"
                    as="button"
                >
                    {{ $page.props.languages[0].label }}
                </DropdownLink>
                <DropdownLink
                    :href="
                        route('language.store', {
                            language: `${$page.props.languages[1].value}`,
                        })
                    "
                    method="post"
                    as="button"
                >
                    {{ $page.props.languages[1].label }}
                </DropdownLink>
            </template>
        </Dropdown>
    </div>
</template>

<script setup>
import Dropdown from "@/Components/Dropdown.vue";
import { router } from "@inertiajs/vue3";
import DropdownLink from "@/Components/DropdownLink.vue";
</script>
