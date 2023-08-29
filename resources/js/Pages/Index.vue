<script setup>
import Attachs from "@/Components/Attachs.vue";
import Hero from "@/Components/Hero.vue";
import NewsLetter from "@/Components/NewsLetter.vue";
import Partners from "@/Components/Partners.vue";
import Stepper from "@/Components/Stepper.vue";
</script>
<template>
    <Head title="Главная" />
    <Hero class="relative" />
    <NewsLetter id="distance" />
    <Stepper />
    <Attachs id="participants" />
    <Partners id="partners" />
</template>
