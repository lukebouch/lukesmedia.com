<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @if ($page->production)
        <script src="https://boundless-wonderful.lukesmedia.com/script.js" data-site="MASETWQM" defer></script>

        <script src="https://tinylytics.app/embed/MUnCsj5bqV8x_VWefwkH.js" defer></script>
    @endif
</head>

<body class="text-gray-900 font-sans antialiased">
    <header>
        @include('_partials.nav')
    </header>
    @yield('body')
    <x-footer />
</body>

</html>
