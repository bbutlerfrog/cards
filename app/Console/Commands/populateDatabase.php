<?php

namespace App\Console\Commands;

use App\Spades;
use App\Clubs;
use App\Hearts;
use App\Jokers;
use App\Diamonds;

use Illuminate\Console\Command;

class populateDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:populate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Populate the Database';


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Spades::insert([
            ['name' => 'Ace',
            'isocode' => '🂡',
            'selected' => 0],
            ['name' => 'Two',
                'isocode' => '🂢',
                'selected' => 0 ],
            ['name' => 'Three',
                'isocode' => '🂣',
                'selected' => 0 ],
            ['name' => 'Four',
                'isocode' => '🂤',
                'selected' => 0 ],
            ['name' => 'Five',
                'isocode' => '🂥',
                'selected' => 0 ],
            ['name' => 'Six',
                'isocode' => '🂦',
                'selected' => 0 ],
            ['name' => 'Seven',
                'isocode' => '🂧',
                'selected' => 0 ],
            ['name' => 'Eight',
                'isocode' => '🂨',
                'selected' => 0 ],
            ['name' => 'Nine',
                'isocode' => '🂩',
                'selected' => 0 ],
            ['name' => 'Ten',
                'isocode' => '🂪',
                'selected' => 0 ],
            ['name' => 'Jack',
                'isocode' => '🂫',
                'selected' => 0 ],
            ['name' => 'Knight',
                'isocode' => '🂬',
                'selected' => 0 ],
            ['name' => 'Queen',
                'isocode' => '🂭',
                'selected' => 0 ],
            ['name' => 'King',
                'isocode' => '🂮',
                'selected' => 0 ]
        ]);
        Hearts::insert([
            ['name' => 'Ace',
            'isocode' => '🂱',
            'selected' => 0],
            ['name' => 'Two',
               'isocode' => '🂲',
               'selected' => 0 ],
            ['name' => 'Three',
                'isocode' => '🂳',
                'selected' => 0 ],
            ['name' => 'Four',
                'isocode' => '🂴',
                'selected' => 0 ],
            ['name' => 'Five',
                'isocode' => '🂵',
                'selected' => 0 ],
            ['name' => 'Six',
                'isocode' => '🂶',
                'selected' => 0 ],
            ['name' => 'Seven',
                'isocode' => '🂷',
                'selected' => 0 ],
            ['name' => 'Eight',
                'isocode' => '🂸',
                'selected' => 0 ],
            ['name' => 'Nine',
                'isocode' => '🂹',
                'selected' => 0 ],
            ['name' => 'Ten',
                'isocode' => '🂺',
                'selected' => 0 ],
            ['name' => 'Jack',
                'isocode' => '🂻',
                'selected' => 0 ],
            ['name' => 'Knight',
                'isocode' => '🂼',
                'selected' => 0 ],
            ['name' => 'Queen',
                'isocode' => '🂽',
                'selected' => 0 ],
            ['name' => 'King',
                'isocode' => '🂾',
                'selected' => 0 ],
        ]);
        Diamonds::insert([
            ['name' => 'Ace',
            'isocode' => '🃁',
            'selected' => 0],
            ['name' => 'Two',
                'isocode' => '🃂',
                'selected' => 0 ],
            ['name' => 'Three',
                'isocode' => '🃃',
                'selected' => 0 ],
            ['name' => 'Four',
                'isocode' => '🃄',
                'selected' => 0 ],
            ['name' => 'Five',
                'isocode' => '🃅',
                'selected' => 0 ],
            ['name' => 'Six',
                'isocode' => '🃆',
                'selected' => 0 ],
            ['name' => 'Seven',
                'isocode' => '🃇',
                'selected' => 0 ],
            ['name' => 'Eight',
                'isocode' => '🃈',
                'selected' => 0 ],
            ['name' => 'Nine',
                'isocode' => '🃉',
                'selected' => 0 ],
            ['name' => 'Ten',
                'isocode' => '🃊',
                'selected' => 0 ],
            ['name' => 'Jack',
                'isocode' => '🃋',
                'selected' => 0 ],
            ['name' => 'Knight',
                'isocode' => '🃌',
                'selected' => 0 ],
            ['name' => 'Queen',
                'isocode' => '🃍',
                'selected' => 0 ],
            ['name' => 'King',
                'isocode' => '🃎',
                'selected' => 0 ],
        ]);
        Clubs::insert([
            ['name' => 'Ace',
            'isocode' => '🃑',
            'selected' => 0],
            ['name' => 'Two',
                'isocode' => '🃒',
                'selected' => 0 ],
            ['name' => 'Three',
                'isocode' => '🃓',
                'selected' => 0 ],
            ['name' => 'Four',
                'isocode' => '🃔',
                'selected' => 0 ],
            ['name' => 'Five',
                'isocode' => '🃕',
                'selected' => 0 ],
            ['name' => 'Six',
                'isocode' => '🃖',
                'selected' => 0 ],
            ['name' => 'Seven',
                'isocode' => '🃗',
                'selected' => 0 ],
            ['name' => 'Eight',
                'isocode' => '🃘',
                'selected' => 0 ],
            ['name' => 'Nine',
                'isocode' => '🃙',
                'selected' => 0 ],
            ['name' => 'Ten',
                'isocode' => '🃚',
                'selected' => 0 ],
            ['name' => 'Jack',
                'isocode' => '🃛',
                'selected' => 0 ],
            ['name' => 'Knight',
                'isocode' => '🃜',
                'selected' => 0 ],
            ['name' => 'Queen',
                'isocode' => '🃝',
                'selected' => 0 ],
            ['name' => 'King',
                'isocode' => '🃞',
                'selected' => 0 ],
        ]);  
        Jokers::insert([
            ['name' => 'Black',
            'isocode' => '🃏',
            'selected' => 0],
            ['name' => 'White',
            'isocode' => '🃟',
            'selected' => 0] 
        ]);
    }
}
