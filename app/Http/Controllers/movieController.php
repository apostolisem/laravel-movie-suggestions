<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

use function GuzzleHttp\json_encode;

class movieController extends Controller
{
    public function movie ($id) {

        $client = new Client();
    	$response = $client->request('GET', 'http://localhost:3000/movies/'.$id);
    	$statusCode = $response->getStatusCode();
        $body = json_decode($response->getBody()->getContents());
        
        return view('movie', [
            'name' => $body->name,
            'description' => $body->movieDescription,
            'moviePosterUrl' => $body->moviePosterUrl,
            'imdbID' => $body->imdbID,
            'imdbRate' => $body->imdbRate,
            'trailerUrl' => $body->trailerUrl,
            'movieGenre' => $body->movieGenre,
            'movieDuration' => $body->movieDuration,
            'movieDescription' => $body->movieDescription,
            'movieActors' => $body->movieActors,
            'movieYear' => $body->movieYear
            ]);

    }

    public function getAllMovies () {

        $client = new Client();
    	$response = $client->request('GET', 'http://localhost:3000/movies');
    	$statusCode = $response->getStatusCode();
        $body = json_decode($response->getBody()->getContents()); 

        return view('movieList')->with('movies', $body);

    }

    public function getSuggestion () {

        $client = new Client();
    	$response = $client->request('GET', 'http://localhost:3000/movies');
    	$statusCode = $response->getStatusCode();
        $body = json_decode($response->getBody()->getContents()); 
        
        //$randMovie = array_rand($body, 1);
        $randMovie = rand(0, count($body)-1);

        return view('movie', [
            'name' => $body[$randMovie]->name,
            'description' => $body[$randMovie]->movieDescription,
            'moviePosterUrl' => $body[$randMovie]->moviePosterUrl,
            'imdbID' => $body[$randMovie]->imdbID,
            'imdbRate' => $body[$randMovie]->imdbRate,
            'trailerUrl' => $body[$randMovie]->trailerUrl,
            'movieGenre' => $body[$randMovie]->movieGenre,
            'movieDuration' => $body[$randMovie]->movieDuration,
            'movieDescription' => $body[$randMovie]->movieDescription,
            'movieActors' => $body[$randMovie]->movieActors,
            'movieYear' => $body[$randMovie]->movieYear
            ]);

    }
}
