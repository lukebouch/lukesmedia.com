@extends('_layouts.main')

@section('body')

<section class="container my-10 flex flex-col-reverse md:flex-row flex-wrap gap-3 md:justify-center ">
    <img class="flex-auto w-full max-w-sm" src="/assets/images/LukeBouch02.png" alt="Luke Bouch">
    <div class="flex-1 mt-10">
        <h1 class="text-xl md:text-3xl">Meeting scheduled successfully.</h1>
        <p>I look forward to discussing with you how I can help you grow your business!</p>
        <x-anchor class="mt-2">Back Home</x-anchor>
    </div>
</section>

@endsection