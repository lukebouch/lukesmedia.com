@extends('_layouts.main')

@section('body')
<main class="container my-24">
    <h1>{{ $page->title }}</h1>

    <p class="-mt-5">
        {{ date('F j, Y', $page->date) }}
        @if($page->updated_date)
        (Updated: {{ date('F j, Y', $page->updated_date) }})
        @endif
    </p>

    @yield('content')
</main>
@endsection