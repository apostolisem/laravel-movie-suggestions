@extends('master')


@section('title', 'Movie Suggestions')

@section('content')

    <h2>{{$name}} ({{$movieYear}})</h2>
    <img src="{{$moviePosterUrl}}" alt="{{$name}} poster" width="200" height="300">
    <p>{{$description}}</p>
    <p>Duration: {{$movieDuration}} min</p>
    <p>Genres:
        @foreach ($movieGenre as $movieGenre)
            {{$movieGenre}}
        @endforeach
    </p>
    <p>Actors:
        @foreach ($movieActors as $movieActor)
            {{$movieActor}}
        @endforeach
    </p>
    <p>IMDB Rating: {{$imdbRate}}</p>
    <p><a href="{{$trailerUrl}}" target="_blank">Watch Trailer</a></p>
    <p><a href="https://www.imdb.com/title/{{$imdbID}}" target="_blank">IMDB</a></p>
    @component('components.movieSuggestForm')
        
    @endcomponent
@endsection