<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="web development , social media marketing , photoservice , videoservice , website , cambodia , khmer" />
        <meta head-key="description" name="description" content="Welcome to Cambodia Best Media Solution where you can bring stories to life, frame by frame, your story our passion." />
        <?php
            $currentUrl = url()->current();
            $path = ltrim(parse_url($currentUrl, PHP_URL_PATH), '/');
            $ogTitle = ucfirst(str_replace('/', '-', $path));
            if (!$path) {
                $ogTitle  = "One stop media solutions";
            }
        ?>
        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="{{ $currentUrl }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="CB Media | {{ $ogTitle }}">
        <meta property="og:description" content="Welcome to Cambodia Best Media Solution where you can bring stories to life, frame by frame, your story our passion.">
        <meta property="og:image" content="https://opengraph.b-cdn.net/production/documents/5bb8f25f-f459-4290-ae3b-91f556727f30.jpg?token=kttS5-sLNDhg6PnuXmm8VnminL5bw7_J6qZ2z35bZEw&height=630&width=1200&expires=33244316578">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="cbmedia-asia.com">
        <meta property="twitter:url" content="{{ $currentUrl }}">
        <meta name="twitter:title" content="CB Media | {{ $ogTitle }}">
        <meta name="twitter:description" content="Welcome to Cambodia Best Media Solution where you can bring stories to life, frame by frame, your story our passion.">
        <meta name="twitter:image" content="https://opengraph.b-cdn.net/production/documents/5bb8f25f-f459-4290-ae3b-91f556727f30.jpg?token=kttS5-sLNDhg6PnuXmm8VnminL5bw7_J6qZ2z35bZEw&height=630&width=1200&expires=33244316578">

        <meta name="author" content="Tuansim">
        <title inertia>CB Media One stop media solutions</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @routes
        @vite(['resources/js/app.ts', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
