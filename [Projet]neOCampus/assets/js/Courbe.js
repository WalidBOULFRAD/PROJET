$(function Courbe () {
    var NomVisualisation = 'température'

    //AXE DES ABS
    var ListeNomValeursAbs = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi' , 'Dimanche']
    var ListeNomOrd = 'Temperature (°C)'

    // Valeur de la première Courbe
    var NomCourbe1 = 'Salle 214'
    var ListeValeurs = [17.0, 15.9, 16.5, 14.5, 17, 13, 15]



    if (ListeNomValeursAbs.length != ListeValeurs.length)
    {
        alert('Le NOMBRE DE VALEURS EN ABSCISSE doit etre égale au NOMBRE DE valeurs de la courbe')
    }
    else {


        $('#courbe').highcharts({
            chart: {
                type: 'line'
            },
            title: {
                text: NomVisualisation
            },
            xAxis: {
                categories: ListeNomValeursAbs
            },
            yAxis: {
                title: {
                    text: ListeNomOrd
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: NomCourbe1,
                data: ListeValeurs
            }/*,
                {
                    name: Nomcourbe2,
                    data: ListeValeurs2
                }*/
            ]
        });
    }
});