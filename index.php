<?php
    $db=[
    [
        'id'=> 0,//INT AUTOICREMENT NOT NULL UNIQUE KEY
        'immagine'=> "/img/images(1).jpg",// VARCHART(255)NOT NULL
        'marca'=> 'Fiat',// VARCHART(255) NOT NULL
        'modello'=> '500',// VARCHART(255) NOT NULL
        'colori'=> 'rosso', //VARCHAR(255) NOT NULL
        'anno'=> '2019',//YEAR(YYYY)
        'posti'=> 5,//FLOAT(I)
        'marce'=> 6,//FLOAT(I)
        'cilindra'=> '1300cc',// VARCHART(10)
        'alimentazione'=> 'benzina',// VARCHART(50)
    ],
    [
        'id'=> 1,//INT AUTOICREMENT NOT NULL UNIQUE KEY
        'immagine'=> "../img/images.jpg",// VARCHART(255)NOT NULL
        'marca'=> 'Alfa',// VARCHART(255) NOT NULL
        'modello'=> 'Giulia',// VARCHART(255) NOT NULL
        'colori'=> 'blu',//VARCHAR(255) NOT NULL
        'anno'=> '2020',//YEAR(YYYY)
        'posti'=> 5,//FLOAT(I)
        'marce'=> 6,//FLOAT(I)
        'cilindra'=> '3000cc',//VARCHAR(255) NOT NULL
        'alimentazione'=> 'benzina',//VARCHAR(255) NOT NULL

    ],    [
        'id'=> 2,//INT AUTOICREMENT NOT NULL UNIQUE KEY
        'immagine'=> "../img/peugeot_208_tre_cilindri_03.png",// VARCHART(255)NOT NULL
        'marca'=> 'peugeot',// VARCHART(255) NOT NULL
        'modello'=> '208',//VARCHAR(255) NOT NULL
        'colore'=> 'giallo',//VARCHAR(255) NOT NULL
        'anno'=> '2021',//YEAR(YYYY)
        'posti'=> 5,//FLOAT(I)
        'marce'=> 5,//FLOAT(I)
        'cilindra'=> '1399cc',//VARCHAR(255) NOT NULL
        'alimentazione'=> 'diesel',//VARCHAR(255) NOT NULL
    ],
];
?>
