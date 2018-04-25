    <!doctype html>
    <html lang="en">
       <head>
            <meta charset="utf-8">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link type="text/css" rel="stylesheet" href="css/app.css">
            <script src="js/app.js"></script>
            <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
            <title>Cards Developer Exercise</title>
        </head>
        <body>
                <div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModalTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="helpModalTitle">What is This?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                            <div class="modal-body">            
                                <p>This is a developer exercise for the <a href="https://solve.mit.edu" target="blank">MIT Solve</a> project.  In order to "play", click on any
                                button (such as this one):</p>
                               <button type="button" class="btn btn-primary">Club</button>
                               <p>underneath a card suite and a random card from that suite will be selected (it will be "turned over" and look like this: 🂠).  
                               When all cards from a suite have been 
                               selected, all the cards from that suite will be unselected and the page will reload.  If there is a error selecting a card, 
                               you will see an error message (try to select another card).  If you cannot see any cards (if you see "boxes, "question marks", or other
                               odd characters on this page), you may be running an older browser that does not support 
                               <a href="https://en.wikipedia.org/wiki/Unicode" target="blank">Unicode</a>
                               and unfortunately you cannot use this site.</p>
                            </div>
                           <div class="modal-footer">
                           <button type="button" class="btn btn-primary" data-dismiss="modal">Got It</button>
                       </div>
                    </div>        
                </div>              
            </div>     
            <nav class="navbar navbar-dark bg-primary">
                <span class="navbar-text text-white" >Cards Developer Exercise</span>
                   <ul class="navbar nav">
                    <a href="https://github.com/bbutlerfrog/cards">
                       <li class="nav-item px-2">
                           <i class="fab fa-github fa-3x" style="color:white"></i>
                        </li>
                    </a>    
                        <li class="nav-item nav-icon px-2">
                            <a href="#" data-toggle="modal" data-target="#helpModal">
                                <i class="fas fa-question-circle fa-3x" style="color:white"></i></button>
                            </a>    
                        </li>
                    </ul>    
            </nav>
            <div class="container">        


                    <div class="row"> 
                        <div class="col" id="error">
                            <div id="error"></div>
                            </div>
                        </div>    
                   <div class="row" style="text-align: center">    
                        <div class="col-sm-6 col-md-3">
                            @foreach ($clubs as $club)
                                <div id="club{{$club->id}}">
                                    <h1>
                                        @if ($club->selected)
                                            🂠
                                        @else
                                            {{$club->isocode}}
                                        @endif
                                    </h1>
                               </div>    
                            @endforeach
                            <div id="clubButton">
                                <button type="button" class="btn btn-primary" id="club">Club</button>
                            </div>    
                        </div>
                        <div class="col-sm-6 col-md-3">
                     @foreach ($diamonds as $diamond)
                    <div id="diamond{{$diamond->id}}">
                        <h1>
                            @if ($diamond->selected)
                                🂠
                            @else
                                {{$diamond->isocode}}
                            @endif
                        </h1>
                    </div>    
                @endforeach
                <div id="diamondButton">
                    <button type="button" class="btn btn-primary" id="diamond">Diamond</button>
                </div>    
            </div>
            <div class="col-sm-6 col-md-3">
                @foreach ($hearts as $heart)
                    <div id="heart{{$heart->id}}">
                        <h1>
                            @if ($heart->selected)
                                🂠
                            @else
                                {{$heart->isocode}}
                            @endif
                        </h1>
                    </div>    
                @endforeach
                <div id="heartButton">
                    <button type="button" class="btn btn-primary" id="heart">Heart</button>
                </div>    
            </div>
            <div class="col-sm-6 col-md-3">
                @foreach ($spades as $spade)
                    <div id="spade{{$spade->id}}">
                        <h1>
                            @if ($spade->selected)
                                🂠
                            @else
                                {{$spade->isocode}}
                            @endif
                        </h1>
                    </div>    
                    @endforeach
                <div id="spadeButton">    
                    <button type="button" class="btn btn-primary" id="spade">Spade</button>
                </div>    
            </div>
        </div>    
        <div class="row" style="text-align: center;">
            <div class="col-12">
                @foreach ($jokers as $joker)
                    <div id="joker{{$joker->id}}">
                        <h1> 
                            @if ($joker->selected)
                                🂠
                            @else 
                                {{$joker->isocode}}
                            @endif
                        </h1>        
                    </div>        
                @endforeach
            <div id="jokerButton">
                <button type="button" class="btn btn-primary" id="joker">Joker</button>
            </div>
        </div>
    </div>       
    </body>
    </html>
    @show
