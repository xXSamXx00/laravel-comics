@extends('layouts.app')

@section('page-title', 'Home')

@section('content')
<div class="container">
    <h2>Current Series</h2>
    <div class="series row">
        @foreach($comics as $comic)
        <div class="col-2">
            <div class="card_comics">
                <img src="{{ $comic['thumb'] }}" alt="Comics">
                <h3>{{ $comic['series'] }}</h3>
            </div>
        </div>
        @endforeach
    </div>
    <div class="button">
        <button>Load More</button>
    </div>
</div>
@endsection