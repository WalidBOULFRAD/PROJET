$(function () {

    var carte = $('#map');
    var courbe = $('#courbe');
    var tableau = $('#tbl');

    $(document).ready(function () {
        courbe.fadeOut(10);
        tableau.fadeOut(10);
        carte.fadeIn(3000);
    });

    $('#carte').click(function () {
        tableau.fadeOut(10);
        courbe.fadeOut(10);
        carte.fadeIn(1000);
    });

    $('#graphe').click(function () {
        tableau.fadeOut(10);
        carte.fadeOut(10);
        courbe.fadeIn(1000);
    });

    $('#tableau').click(function () {
        courbe.fadeOut(10);
        carte.fadeOut(10);
        tableau.fadeIn(1000);
    });
    
});




/*
$(function () {

    var carte = $('#divElem');
    var courbe = $('#courbe');
    var tableau = $('#tbl');

    $(document).ready(function () {
        courbe.fadeOut(10);
        tableau.fadeOut(10);
        carte.fadeIn(3000);
    });

    $('#btnElem').click(function () {
        tableau.fadeOut(10);
        courbe.fadeOut(10);
        carte.fadeIn(1000);
    });

    $('#graphe').click(function () {
        tableau.fadeOut(10);
        carte.fadeOut(10);
        courbe.fadeIn(1000);
    });

    $('#tableau').click(function () {
        courbe.fadeOut(10);
        carte.fadeOut(10);
        tableau.fadeIn(1000);
    });
    
});
*/
