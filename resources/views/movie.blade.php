@extends('layouts.app')

@section('content')
    <h1>Movie</h1>

    @if ($movie)

        {{$movie->title}}

        <p>Average rating: {{ $movie->average_rating ?? 'No ratings yet' }}</p>
        <br/>
        @if (!empty ($movie->reviews)) 
            @foreach ($movie->reviews as $review)
     
                <div class="review-box">
        <p><strong>{{ $review->user->name ?? 'Unknown User' }}</strong></p>
        <p>{{ $review->rating }}</p>
        <p>{{ $review->text }}</p>
    </div>
            @endforeach
        @endif
       
    @else
        <p>No movies found.</p>
    @endif
@endsection