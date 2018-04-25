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
            <nav class="navbar navbar-dark bg-primary">
                <span class="navbar-text text-white" >Cards Developer Exercise</span>
                   <ul class="navbar nav">
                       <li class="nav-item px-2">
                           <i class="fab fa-github fa-3x" style="color:white"></i>
                        </li>
                        <li class="nav-item nav-icon px-2">
                            <i class="fas fa-question-circle fa-3x" style="color:white"></i>
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
                        <h4>
                            @if ($club->selected)
                                🂠
                            @else
                                {{$club->isocode}}
                            @endif
                        </h4>
                    </div>    
                @endforeach
                <div id="clubButton">
                    <button type="button" class="btn btn-primary" id="club">Club</button>
                </div>    
            </div>
            <div class="col-sm-6 col-md-3">
                @foreach ($diamonds as $diamond)
                    <div id="diamond{{$diamond->id}}">
                        <h4>
                            @if ($diamond->selected)
                                🂠
                            @else
                                {{$diamond->isocode}}
                            @endif
                        </h4>
                    </div>    
                @endforeach
                <div id="diamondButton">
                    <button type="button" class="btn btn-primary" id="diamond">Diamond</button>
                </div>    
            </div>
            <div class="col-sm-6 col-md-3">
                @foreach ($hearts as $heart)
                    <div id="heart{{$heart->id}}">
                        <h4>
                            @if ($heart->selected)
                                🂠
                            @else
                                {{$heart->isocode}}
                            @endif
                        </h4>
                    </div>    
                @endforeach
                <div id="heartButton">
                    <button type="button" class="btn btn-primary" id="heart">Heart</button>
                </div>    
            </div>
            <div class="col-sm-6 col-md-3">
                @foreach ($spades as $spade)
                    <div id="spade{{$spade->id}}">
                        <h4>
                            @if ($spade->selected)
                                🂠
                            @else
                                {{$spade->isocode}}
                            @endif
                        </h4>
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
                        <h4> 
                            @if ($joker->selected)
                                🂠
                            @else 
                                {{$joker->isocode}}
                            @endif
                        </h4>        
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
