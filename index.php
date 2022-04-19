<?php
    $db=[
    [
        'id'=> 0,//INT AUTOICREMENT NOT NULL UNIQUE KEY
        'immagine'=> "/img/images(1).jpg",// VARCHART(255)NOT NULL
        'marca'=> 'Fiat',// VARCHART(255) NOT NULL
        'modello'=> '500',// VARCHART(255) NOT NULL
        'colori'=> 'rosso', //VARCHAR(255) NOT NULL
        'anno'=> '2019',//YEAR(YYYY)
        'posti'=> '5',//FLOAT(I)
        'marce'=> '6',//FLOAT(I)
        'cilindra'=> '1300cc',//
        'alimentazione'=> 'benzina',// VARCHART(50)
    ],
    [
        'id'=> 1,
        'immagine'=> "../img/images.jpg",
        'marca'=> 'Alfa',
        'modello'=> 'Giulia',
        'colori'=> 'blu',
        'anno'=> '2020',
        'posti'=> '5',
        'marce'=> '6',
        'cilindra'=> '3000cc',
        'alimentazione'=> 'benzina',

    ],    [
        'id'=> 2,
        'immagine'=> "../img/peugeot_208_tre_cilindri_03.png",
        'marca'=> 'peugeot',
        'modello'=> '208',
        'colore'=> 'giallo',
        'anno'=> '2021',
        'posti'=> '5',
        'marce'=> '5',
        'cilindra'=> '1399cc',
        'alimentazione'=> 'diesel',
    ],
];
?>
