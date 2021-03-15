<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">

        <meta name="description" content="{{ $page->description }}">

        <title>{{ $page->title }}</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tajawal:300,400,500,700&display=swap&subset=arabic">
        
        <link rel="stylesheet" href="{{ mix('css/app.css', 'assets/build') }}">

        <script src="{{ mix('js/app.js', 'assets/build') }}"></script>
    </head>
    <body class="font-roboto">
        @yield('body')
    </body>
</html>
