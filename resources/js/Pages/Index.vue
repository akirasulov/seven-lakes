<script setup>
import Attachs from "@/Components/Attachs.vue";
import Hero from "@/Components/Hero.vue";
import Slider from "@/Components/Slider.vue";
import NewsLetter from "@/Components/NewsLetter.vue";
import Partners from "@/Components/Partners.vue";
import Stepper from "@/Components/Stepper.vue";
import Settlement from "@/Components/Settlement.vue";
</script>
<template>
    <Head>
        <title>{{ __("hero.main") }}</title>
        <meta property="og:type" content="website" />
        <meta property="og:title" :content="__('newsletter.header')" />
        <meta property="og:url" content="https://seven-lakes.tj/" />
        <meta property="og:image" content="https://seven-lakes.tj/logo.png" />
        <meta property="og:description" :content="__('hero.description')" />
    </Head>
    <Hero class="relative" />
    <Slider class="relative" />
    <NewsLetter id="distance" />
    <Settlement />
    <Stepper />
    <Attachs id="participants" />
    <Partners id="partners" />
</template>
