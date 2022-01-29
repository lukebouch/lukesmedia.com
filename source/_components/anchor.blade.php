@props([
'href' => '/',
])

<a class="inline-block px-4 py-2 bg-white text-black font-medium" href="{{ $href }}">{{ $slot }}</a>