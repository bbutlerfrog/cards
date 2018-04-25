<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spades;

class SpadesController extends Controller
{
   /**
    * Selects a random card from the entire suite, resets the suite if there are no unselected cards left
    */
    public function __invoke( )
    {
       $spades = Spades::where('selected', '0')
                 ->get();
       //if there aren't any left that are not selected, reset
       if ( $spades->count() == 0 ) {
             Spades::where('selected', 1)
             ->update(['selected' => 0]);
        return 'reset';
        }     
        //shuffle the collection
        $shuffled = $spades->shuffle();
        //set the first spade to selected, return its id
        $id = $shuffled[0]['id'];
        $spade = Spades::find($id);
        $spade->selected = 1;
        $spade->save();
        return $id;
    }
      
}
