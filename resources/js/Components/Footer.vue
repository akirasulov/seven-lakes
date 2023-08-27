<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
</script>

<template>
    <footer class="bg-gray-900 shadow">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <div class="mb-4">
                    <Link href="/">
                        <ApplicationLogo class="h-14 mr-3" />
                    </Link>
                </div>

                <ul
                    class="flex flex-wrap items-center mb-6 text-sm font-medium text-whitesm:mb-0 text-white"
                >
                    <li>
                        <Link href="" class="mr-4 hover:underline md:mr-6">
                            {{ __("header_x_footer.distance") }}</Link
                        >
                    </li>
                    <li>
                        <Link href="" class="mr-4 hover:underline md:mr-6">
                            {{ __("header_x_footer.results") }}</Link
                        >
                    </li>
                    <!-- <li>
                        <Link href="" class="mr-4 hover:underline md:mr-6">
                            {{ __("header_x_footer.race_organizers") }}</Link
                        >
                    </li> -->
                    <li>
                        <Link href="" class="mr-4 hover:underline md:mr-6">
                            {{ __("header_x_footer.participants") }}</Link
                        >
                    </li>
                    <li>
                        <Link href="" class="mr-4 hover:underline md:mr-6">
                            {{ __("header_x_footer.about") }}</Link
                        >
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
            <span class="block text-sm text-white sm:text-center"
                >© 2023 {{ __("header_x_footer.description") }}
            </span>
        </div>
    </footer>
</template>
