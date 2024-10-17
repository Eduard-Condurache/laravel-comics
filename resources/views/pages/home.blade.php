@extends('layouts.app')

@section('main')

<main>
    <div class="jumbotron"></div>

    <div class="container">
        <div class="main-content">
            <div class="jumbobutton">
                <button>
                <a href="#">
                    CURRENT SERIES
                </a>
                </button>
            </div>

            <div class="cards-container">
                @foreach($comics as $comic)
                    @include('partials.singlecard')
                @endforeach
            </div>

            <div class="load-button">
                <button>
                <a href="#">
                    LOAD MORE
                </a>
                </button>
            </div>   
        </div>
    </div>
</main>

@endsection