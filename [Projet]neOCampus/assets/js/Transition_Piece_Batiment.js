$(function () {

    var element = $('#elem');
    var courbe = $('#courbe');
    var tableau = $('#tbl');

    $(document).ready(function () {
        courbe.fadeOut(10);
        tableau.fadeOut(10);
        element.fadeIn(3000);
    });

    $('#vide').click(function () {
        tableau.fadeOut(10);
        courbe.fadeOut(10);
        element.fadeIn(1000);
    });

    $('#graphe').click(function () {
        tableau.fadeOut(10);
        element.fadeOut(10);
        courbe.fadeIn(1000);
    });

    $('#tableau').click(function () {
        courbe.fadeOut(10);
        element.fadeOut(10);
        tableau.fadeIn(1000);
    });
    
});
