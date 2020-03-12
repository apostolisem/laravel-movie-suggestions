@extends('master')


@section('title', 'Movie Suggestions')

@section('content')

    <div><a href="/movies">Check all the movies</a></div>

    @component('components.movieSuggestForm')
        
    @endcomponent

@endsection