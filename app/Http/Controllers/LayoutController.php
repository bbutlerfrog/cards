<?php

namespace App\Http\Controllers;

use App\Clubs;
use App\Diamonds;
use App\Hearts;
use App\Jokers;
use App\Spades;

use App\Http\Controllers\Controller;

class LayoutController extends Controller {

    /**
     * Gets all cards, passes them to the main layout blade template so they can
     * be looped through 
     *
     * @return void
     */
    public function mainLayout ()
    {
        $clubs = Clubs::all();
        $diamonds = Diamonds::all();       
        $hearts = Hearts::all();       
        $spades = Spades::all();
        $jokers = Jokers::all();
        return view('layouts/app', ['clubs' => $clubs,
                            'diamonds' => $diamonds,
                            'hearts' => $hearts,
                            'spades' => $spades,
                            'jokers' => $jokers]);
    }
}