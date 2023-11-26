<script setup>
import { PhoneIcon, EnvelopeIcon } from "@heroicons/vue/20/solid";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { router } from "@inertiajs/vue3";

function scrole(href) {
    router.visit("/", {
        method: "get",
        onFinish: () => {
            setTimeout(() => {
                let element = document.getElementById(href);
                element.scrollIntoView({ behavior: "smooth" });
            }, 100);
        },
    });
}
</script>

<template>
    <footer class="bg-gray-900 shadow py-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div
                class="sm:flex justify-center sm:items-center md:justify-between mb-4"
            >
                <ul
                    class="flex flex-wrap justify-center sm:justify-start items-start mb-6 text-sm font-medium text-white sm:mb-0"
                >
                    <li>
                        <Link
                            href="#"
                            @click="scrole('distance')"
                            class="mr-4 hover:underline md:mr-6 font-bold"
                        >
                            {{ __("header_x_footer.distance") }}</Link
                        >
                    </li>
                    <li>
                        <Link
                            href="#"
                            @click="scrole('partners')"
                            class="mr-4 hover:underline md:mr-6 font-bold"
                        >
                            {{ __("header_x_footer.race_organizers") }}</Link
                        >
                    </li>
                    <li>
                        <Link
                            href="#"
                            @click="scrole('participants')"
                            class="mr-4 hover:underline md:mr-6 font-bold"
                        >
                            {{ __("header_x_footer.participants") }}</Link
                        >
                    </li>
                    <li>
                        <Link
                            href="/about"
                            class="mr-4 hover:underline md:mr-6 font-bold"
                        >
                            {{ __("header_x_footer.about") }}</Link
                        >
                    </li>
                </ul>

                <div class="hidden md:flex justify-end">
                    <div
                        class="flex flex-col bg-white justify-center items-center p-3 rounded-md"
                    >
                        <p class="text-xs mb-2 font-semibold">
                            {{ __("header_x_footer.qr_description") }}
                        </p>
                        <svg
                            shape-rendering="crispEdges"
                            viewBox="0 0 29 29"
                            class="w-24 h-24"
                        >
                            <path fill="#FFF" d="M0,0 h29v29H0z"></path>
                            <path
                                fill="#000"
                                d="M0 0h7v1H0zM8 0h4v1H8zM13 0h3v1H13zM18 0h1v1H18zM20 0h1v1H20zM22,0 h7v1H22zM0 1h1v1H0zM6 1h1v1H6zM8 1h1v1H8zM11 1h1v1H11zM15 1h1v1H15zM17 1h2v1H17zM20 1h1v1H20zM22 1h1v1H22zM28,1 h1v1H28zM0 2h1v1H0zM2 2h3v1H2zM6 2h1v1H6zM9 2h1v1H9zM13 2h1v1H13zM17 2h1v1H17zM20 2h1v1H20zM22 2h1v1H22zM24 2h3v1H24zM28,2 h1v1H28zM0 3h1v1H0zM2 3h3v1H2zM6 3h1v1H6zM11 3h2v1H11zM15 3h3v1H15zM20 3h1v1H20zM22 3h1v1H22zM24 3h3v1H24zM28,3 h1v1H28zM0 4h1v1H0zM2 4h3v1H2zM6 4h1v1H6zM8 4h1v1H8zM11 4h2v1H11zM15 4h2v1H15zM18 4h1v1H18zM22 4h1v1H22zM24 4h3v1H24zM28,4 h1v1H28zM0 5h1v1H0zM6 5h1v1H6zM8 5h3v1H8zM12 5h3v1H12zM16 5h1v1H16zM18 5h1v1H18zM22 5h1v1H22zM28,5 h1v1H28zM0 6h7v1H0zM8 6h1v1H8zM10 6h1v1H10zM12 6h1v1H12zM14 6h1v1H14zM16 6h1v1H16zM18 6h1v1H18zM20 6h1v1H20zM22,6 h7v1H22zM8 7h2v1H8zM13 7h1v1H13zM18 7h1v1H18zM0 8h3v1H0zM5 8h2v1H5zM8 8h2v1H8zM11 8h3v1H11zM15 8h2v1H15zM18 8h2v1H18zM21 8h4v1H21zM27,8 h2v1H27zM5 9h1v1H5zM7 9h1v1H7zM12 9h1v1H12zM16 9h2v1H16zM19 9h2v1H19zM22 9h2v1H22zM27,9 h2v1H27zM4 10h1v1H4zM6 10h5v1H6zM12 10h3v1H12zM16 10h1v1H16zM19 10h1v1H19zM22 10h5v1H22zM28,10 h1v1H28zM0 11h1v1H0zM2 11h1v1H2zM5 11h1v1H5zM10 11h3v1H10zM14 11h3v1H14zM18 11h1v1H18zM21 11h1v1H21zM23 11h1v1H23zM25 11h1v1H25zM3 12h2v1H3zM6 12h1v1H6zM8 12h3v1H8zM13 12h2v1H13zM16 12h2v1H16zM19 12h2v1H19zM22 12h2v1H22zM28,12 h1v1H28zM0 13h2v1H0zM3 13h1v1H3zM5 13h1v1H5zM7 13h1v1H7zM9 13h2v1H9zM13 13h2v1H13zM19 13h5v1H19zM27,13 h2v1H27zM0 14h1v1H0zM2 14h1v1H2zM5 14h2v1H5zM8 14h1v1H8zM10 14h2v1H10zM15 14h2v1H15zM18 14h2v1H18zM21 14h1v1H21zM23 14h1v1H23zM28,14 h1v1H28zM0 15h1v1H0zM2 15h2v1H2zM10 15h1v1H10zM13 15h1v1H13zM15 15h1v1H15zM18 15h1v1H18zM20 15h1v1H20zM23 15h2v1H23zM0 16h4v1H0zM6 16h2v1H6zM11 16h3v1H11zM15 16h3v1H15zM20 16h4v1H20zM28,16 h1v1H28zM3 17h2v1H3zM7 17h1v1H7zM9 17h1v1H9zM12 17h1v1H12zM15 17h2v1H15zM19 17h2v1H19zM22 17h2v1H22zM26,17 h3v1H26zM0 18h2v1H0zM4 18h3v1H4zM8 18h2v1H8zM12 18h4v1H12zM17 18h1v1H17zM19 18h1v1H19zM24 18h2v1H24zM28,18 h1v1H28zM2 19h2v1H2zM5 19h1v1H5zM7 19h1v1H7zM9 19h1v1H9zM11 19h2v1H11zM14 19h1v1H14zM16 19h1v1H16zM19 19h2v1H19zM22 19h1v1H22zM0 20h3v1H0zM6 20h1v1H6zM9 20h2v1H9zM13 20h2v1H13zM16 20h2v1H16zM20 20h6v1H20zM27 20h1v1H27zM8 21h3v1H8zM13 21h2v1H13zM16 21h1v1H16zM18 21h1v1H18zM20 21h1v1H20zM24 21h3v1H24zM28,21 h1v1H28zM0 22h7v1H0zM9 22h1v1H9zM11 22h1v1H11zM15 22h4v1H15zM20 22h1v1H20zM22 22h1v1H22zM24 22h1v1H24zM28,22 h1v1H28zM0 23h1v1H0zM6 23h1v1H6zM8 23h1v1H8zM13 23h1v1H13zM15 23h2v1H15zM18 23h1v1H18zM20 23h1v1H20zM24 23h1v1H24zM27 23h1v1H27zM0 24h1v1H0zM2 24h3v1H2zM6 24h1v1H6zM11 24h3v1H11zM15 24h1v1H15zM19 24h7v1H19zM27,24 h2v1H27zM0 25h1v1H0zM2 25h3v1H2zM6 25h1v1H6zM9 25h2v1H9zM12 25h1v1H12zM16 25h2v1H16zM19 25h1v1H19zM21 25h1v1H21zM24 25h3v1H24zM28,25 h1v1H28zM0 26h1v1H0zM2 26h3v1H2zM6 26h1v1H6zM8 26h2v1H8zM12 26h4v1H12zM20 26h1v1H20zM24 26h1v1H24zM27,26 h2v1H27zM0 27h1v1H0zM6 27h1v1H6zM8 27h5v1H8zM14 27h1v1H14zM16 27h1v1H16zM19 27h2v1H19zM23 27h1v1H23zM25 27h1v1H25zM0 28h7v1H0zM8 28h1v1H8zM13 28h3v1H13zM20 28h2v1H20zM23 28h1v1H23zM28,28 h1v1H28z"
                            ></path>
                        </svg>
                    </div>
                </div>
            </div>

            <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
            <section
                class="flex flex-wrap-reverse gap-x-8 justify-center sm:justify-between items-center"
            >
                <div class="flex items-center">
                    <Link class="hidden sm:block" href="/">
                        <ApplicationLogo class="h-14 mr-3" />
                    </Link>
                    <span
                        class="block text-sm font-bold text-white sm:text-center"
                        >© 2023 {{ __("header_x_footer.description") }}
                    </span>
                </div>
                <div class="flex space-x-2 mb-2 sm:mb-0">
                    <a
                        class="inline-flex transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60"
                        href="https://t.me/+992915477878"
                    >
                        <img
                            loading="lazy"
                            src="../../img/tg.svg"
                            alt="Telegram"
                            class="h-6 w-6 object-contain"
                            rel="nofollow"
                        />
                        <span class="sr-only">Telegram</span>
                    </a>

                    <a
                        href="tel:+992915477878"
                        class="inline-flex transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60"
                    >
                        <PhoneIcon class="h-6 w-6 text-gray-900" />
                    </a>

                    <a
                        class="inline-flex transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60"
                        href="https://wa.me/+992915477878"
                    >
                        <img
                            loading="lazy"
                            src="../../img/whatsapp.svg"
                            alt="WhatsApp"
                            class="h-6 w-6 object-contain"
                            rel="nofollow"
                        />
                        <span class="sr-only">WhatsApp</span>
                    </a>
                    <a
                        href="mailto:lakes.marathon.tj@gmail.com"
                        class="inline-flex transition duration-300 leading-none focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-600/80 h-12 w-12 items-center justify-center !rounded-lg border border-gray-100 bg-white !shadow-sm hover:opacity-60"
                    >
                        <EnvelopeIcon class="h-6 w-6 text-blue-500" />
                    </a>
                </div>
            </section>
        </div>
    </footer>
</template>
