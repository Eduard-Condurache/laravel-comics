@extends('layouts.app')

@section('main-content')

<div>
    <h1>
        {{ $test }}
    </h1>
</div>

<div>
    <img src="{{ Vite::asset('resources/img/testimg.webp') }}" alt="">
</div>

@endsection
