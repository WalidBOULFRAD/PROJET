$(function() {
    $('#carte').click(function() {
        
        $('#container').fadeOut(20);
        $('#map').fadeIn(3000);
    });

    $('#graphe').click(function() {

        $('#map').fadeOut(20);
        $('#container').fadeIn(3000);


    });

});