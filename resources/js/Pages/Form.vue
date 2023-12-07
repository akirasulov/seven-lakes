<template>
    <Head>
        <title>{{ __("header_x_footer.description") }}</title>
        <meta property="og:type" content="website" />
        <meta
            property="og:title"
            :content="__('header_x_footer.description')"
        />
        <meta property="og:url" content="https://seven-lakes.tj/form/" />
        <meta property="og:image" content="https://seven-lakes.tj/logo.png" />
        <meta property="og:description" :content="__('form.registration')" />
    </Head>
    <Form />
</template>

<script setup>
import Form from "@/Components/Form.vue";
</script>
