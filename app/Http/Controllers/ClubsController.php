<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clubs;

class ClubsController extends Controller
{
   /**
    * Selects a random card from the entire suite, resets the suite if there are no unselected cards left
    */
    public function __invoke( )
    {
       $clubs = Clubs::where('selected', '0')
                 ->get();
       //if there aren't any left that are not selected, reset
       if ( $clubs->count() == 0 ) {
             Clubs::where('selected', 1)
             ->update(['selected' => 0]);
        return 'reset';
        }     
        //shuffle the collection
        $shuffled = $clubs->shuffle();
        //set the first club to selected, return its id
        $id = $shuffled[0]['id'];
        $club = Clubs::find($id);
        $club->selected = 1;
        $club->save();
        return $id;
    }
      
}
