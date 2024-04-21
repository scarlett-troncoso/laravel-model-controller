@extends('layouts.app')

@section('content')
    <section id="movies">
        <div class="container">
            <h1>Movies</h1>
            <!--Questo apaprirá nella parte dove abbiamo messo @yiel('content'), nell file "app.blade.php" della cartella layouts, -->

            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-4">
                        <div class="card">
                            <h3>{{ $movie['title'] }}</h3>
                            <div>{{ $movie['nationality'] }}</div>
                            <div>Date: {{ $movie['date'] }}</div>
                            <div>Vote: {{ $movie['vote'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
