@props([
'style' => 1,
'class' => '',
])

<button class="inline-block px-4 py-2 mr-2 mb-2 text-center font-medium {{ $style == 1 ? 'text-white bg-blue border-blue border-2' : '' }}
{{ $style == 2 ? 'border-blue border-2 text-blue' : '' }} {{ $style == 3 ? 'bg-white text-black' : '' }} {{ $class }}"
    href="{{ $href }}" {{ $attributes }}>{{ $slot
    }}</button>