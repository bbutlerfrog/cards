var $ = require("jquery");
import 'bootstrap';

$(document).ready(function() {
    $("#heart").click(function() {
        selectCard('heart');
    });
    $("#club").click(function () {
        selectCard('club');
    });
    $("#diamond").click(function () {
        selectCard('diamond');
    });
    $("#spade").click(function () {
        selectCard('spade');
    });
    $("#joker").click(function () {
        selectCard('joker');
    });
});

function selectCard( suit ) {
    $.ajax({
        url : '/' + suit,
        beforeSend: function( ) {
            $('#'+suit+'Button').html('<div class="fa=3x"><i class="fas fa-spinner fa-spin"></i></div>');
        }    
    })
    .done(function( data ) {
        if (data == 'reset') {
            window.location.reload(true);
        }
        else {
            $('#' + suit + data).html('<h4>🂠</h4>'); 
        }    
    })
    .fail(function() {
        showError ();
    })
    .always(function() {
        $('#'+suit+'Button').html('<button type="button" class="btn btn-primary" id="'+suit+'">'+jsUcfirst(suit)+'</button>')
        $('#'+suit).click(function() {
            selectCard(suit);
        });
    });
} 

function jsUcfirst(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function showError() {
    $.ajax({
        url : '/selecting-card-error',
        dataType : 'html'
    })
    .done(function(data) {
        $('#error').html(data);
    })
}


