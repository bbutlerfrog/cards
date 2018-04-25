<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hearts;

class HeartsController extends Controller
{
   /**
    * Selects a random card from the entire suite, resets the suite if there are no unselected cards left
    */
    public function __invoke( )
    {
       $hearts = Hearts::where('selected', '0')
                 ->get();
       //if there aren't any left that are not selected, reset
       if ( $hearts->count() == 0 ) {
             Hearts::where('selected', 1)
             ->update(['selected' => 0]);
        return 'reset';
        }     
        //shuffle the collection
        $shuffled = $hearts->shuffle();
        //set the first heart to selected, return its id
        $id = $shuffled[0]['id'];
        $heart = Hearts::find($id);
        $heart->selected = 1;
        $heart->save();
        return $id;
    }
      
}
