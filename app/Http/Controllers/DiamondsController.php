<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diamonds;

class DiamondsController extends Controller
{
   /**
    * Selects a random card from the entire suite, resets the suite if there are no unselected cards left
    */
    public function __invoke( )
    {
       $diamonds = Diamonds::where('selected', '0')
                 ->get();
       //if there aren't any left that are not selected, reset
       if ( $diamonds->count() == 0 ) {
             Diamonds::where('selected', 1)
             ->update(['selected' => 0]);
        return 'reset';
        }     
        //shuffle the collection
        $shuffled = $diamonds->shuffle();
        //set the first diamond to selected, return its id
        $id = $shuffled[0]['id'];
        $diamond = Diamonds::find($id);
        $diamond->selected = 1;
        $diamond->save();
        return $id;
    }
      
}
