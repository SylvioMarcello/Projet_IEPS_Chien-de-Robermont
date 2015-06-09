<?php namespace App\Http\Controllers;
use App\Rubriques;
use App\Articles;

class AccueilController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/


	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */

    public function index()
    {
        $rubriques=Rubriques::where('menu','=',1)->get();
        $articles=Articles::all();
        $articles2=Articles::all();

       return view('Accueil')->with('rubriques',$rubriques)->with('articles',$articles)->with('articles2',$articles2);



    }


}
