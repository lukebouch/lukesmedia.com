@props([
'href' => '/',
'style' => 1,
'class' => '',
])

<a class="inline-block px-4 py-2 mr-2 mb-2 text-center font-medium {{ $style == 1 ? 'text-white bg-blue border-blue border-2' : '' }}
{{ $style == 2 ? 'border-blue border-2 text-blue' : '' }} {{ $style == 3 ? 'bg-white text-black' : '' }} {{ $class }}"
    href="{{ $href }}">{{ $slot
    }}</a>