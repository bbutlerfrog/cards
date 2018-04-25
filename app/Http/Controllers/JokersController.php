<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jokers;

class JokersController extends Controller
{
   /**
    * Selects a random card from the entire suite, resets the suite if there are no unselected cards left
    */
    public function __invoke( )
    {
       $jokers = Jokers::where('selected', '0')
                 ->get();
       //if there aren't any left that are not selected, reset
       if ( $jokers->count() == 0 ) {
             Jokers::where('selected', 1)
             ->update(['selected' => 0]);
        return 'reset';
        }     
        //shuffle the collection
        $shuffled = $jokers->shuffle();
        //set the first joker to selected, return its id
        $id = $shuffled[0]['id'];
        $joker = Jokers::find($id);
        $joker->selected = 1;
        $joker->save();
        return $id;
    }
      
}
