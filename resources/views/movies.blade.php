@extends('layouts.app')

@section('content')
    <h1>All Movies</h1>

    @if ($movies->count())
        <ul>
            @foreach ($movies as $movie)
                <li><strong>{{ $movie->title }}</strong> ({{ $movie->watched ?? 'N/A' }}) <a target='_blank' href= {{$movie->imdb}}>imdb</a></li>
            @endforeach
        </ul> 

        @foreach ($movies as $movie)
    <a href="{{ url('/movies/' . $movie->id) }}" style="text-decoration: none; color: inherit;">
        <div class="movie-box" style="background-image: url('{{ $movie->image && !empty($movie->image) ? $movie->image : 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg' }}');">
            {{ $movie->title }}
        </div>
    </a>
@endforeach
    @else
        <p>No movies found.</p>
    @endif
@endsection