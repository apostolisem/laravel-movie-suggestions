@extends('master')

@section('title', 'Movie List')

@section('content')

@foreach ($movies as $movie)

<ul style="clear:both; list-style-type: none;">
    <li style="width: 100%;">
        <div style="width: 100%;">
            <div style="float:left; width: 100px; margin:10px;">
                <a href="/movies/{{$movie->_id}}">
                    <img src="{{$movie->moviePosterUrl}}" 
                    alt="{{$movie->name}} poster" width="100" height="150">
                </a>
            </div>
            <div style="float:left; width: 60%;">
                <h2>{{$movie->name}} ({{$movie->movieYear}})</h2>
                <p>{{$movie->movieDescription}}</p>
                <a href="/movies/{{$movie->_id}}">read more</a>
            </div>
        </div>
    </li>
</ul>

@endforeach

@endsection