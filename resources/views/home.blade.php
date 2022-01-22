@extends('layouts.main-layout')

@section('main-content')
<section class="movies container">
    <ul class="card-list ms-list row gx-5 gy-3">
        @foreach ($movies as $movie)
            <li class="ms-card col-4 px-3">
                <div class="movie px-3 py-2">
                    <h5 class="text-uppercase fw-bold">{{$movie->title}}</h5>
                    <span>Original Title: <strong>{{ $movie->original_title}}</strong></span>
                    <div class="nationality">
                        Nationality: {{ $movie->nationality }};
                    </div>
                    <div class="date">
                        Date: {{ $movie->date }}
                    </div>
                    <div class="vote">
                        Vote:
                            @for ($i = 0; $i < $movie->roundVote(); $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                            @for ($i = 1; $i <= 5 - $movie->roundVote(); $i++)
                                <i class="far fa-star"></i>
                            @endfor
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</section>
@endsection