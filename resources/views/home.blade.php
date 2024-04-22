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

                {{-- $movies->links() --}} <!--fa funzionare "paginate" (che é stato messo in PageController) serve a creare in pagina una paginazione cioé cambiare alla prossima pagina, va insieme a links, ma per usarlo bene ce bisogno di installare un'altra cosa ma in tanto cosi per sapere
                                        -->
            </div>

            <h1>I tre Film con la votazione piu alta:</h1>
            <div class="row">
                @foreach ($moviesVote as $movie)
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

            <h1>I tre Film piu recenti:</h1>
            <div class="row">
                @foreach ($moviesDate as $movie)
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
