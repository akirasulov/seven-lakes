<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Open Graph --}}
    <meta property="og:type" content="website" />
    <meta property="og:title" :content="__('newsletter.header')" />
    <meta property="og:url" content="https://seven-lakes.tj/" />
    <meta property="og:image" content="https://seven-lakes.tj/logo.png" />
    <meta property="og:description" :content="__('hero.description')" />
    {{-- Open Graph --}}
    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>
