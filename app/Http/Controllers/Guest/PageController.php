<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
       

       // $movies = Movie::where('title', 'Gravity')->get(); // ritorna solo le righe che hanno il 'title' uguale a 'Gravity', non ce il segno di uguaglianza perche si sopraentende

       //n$movies = Movie::where('vote', '>', 8)->get(); // ritorna solo le righe che hanno il 'voto' maggiore '>' di 8

       // $movies = Movie::where('vote', '>', 8)->orderBy('date', 'desc')->get(4);

       /* Paginate is used to paginate results. Tosee the pagination links you need this in your template {{$movies->links()}} */
       // $movies = Movie::where('vote', '>', 8)->orderBy('date', 'desc')->paginate(4); // questo "paginate" serve a creare in pagina una paginazione cioé cambiare alla prossima pagina, va insieme a links nell template in questo caso nella pagina 'home.blade' ma per usarlo ce bisogno di installare un'altra cosa ma in tanto cosi per sapere


       // $movie = Movie::where('vote', '>', 8)->first(); //ritona solo il primo risultato, anche per quello abbiamo cambiato il nome della variales al singolare movie

       // $movie = Movie::find(7); //ritona solo il risultato 7, ovvero quello che ha id uguale a 7 ----> cosi sarebbe il dd se vogliamo vedere solo una cosa di quella riga "dd($movies->title);
       
       $movies = Movie::all(); // restituisce tutti gli elementi della tabella 
       
       $moviesVote = Movie::where('vote', '>', 9)->orderBy('vote', 'desc')->get();

       $moviesDate = Movie::orderBy('date', 'desc')->limit(3)->get();
       
       // dd($movies);
        return view('home', compact('movies', 'moviesVote', 'moviesDate'));
    }

    public function about() {
        // return 'about '; //cosi in pagina si vede l'estringa, il testo about, e non quello che cé nella page
        return view('about'); //view vuol dire dalla cartella view, quindi la page about
    }

    public function contacts() {
        // return 'contacts ';
         return view('contacts');
    }
}
