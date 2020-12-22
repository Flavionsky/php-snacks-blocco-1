<h1>SNACK 1</h1>
<?php
$matches = [
    0 =>[
        'squadraCasa'=> 'Foggia',
        'squadraOspite'=> 'Catania',
        'puntiCasa'=> '22',
        'puntiOspite'=> '50'
    ],
    1 =>[
        'squadraCasa'=> 'Cagliari',
        'squadraOspite'=> 'Frosinone',
        'puntiCasa'=> '40',
        'puntiOspite'=> '60'
    ],
    2 =>[
        'squadraCasa'=> 'Milano Olimpia',
        'squadraOspite'=> 'Lazio',
        'puntiCasa'=> '110',
        'puntiOspite'=> '70'
    ]
    ];
    for ($i = 0; $i < 3; $i++) {
        echo "<p>".$matches[$i]['squadraCasa']." - ".$matches[$i]['squadraOspite']." | ".$matches[$i]['puntiCasa']." - ".$matches[$i]['puntiOspite'];
        }
?>
<h1>SNACK 2</h1>
<?php
    $name = $_GET["name"];
    $len = strlen($name);
    $mail = $_GET["mail"];
    $age = $_GET["age"];
    if(($len >= 3) && (strpos($mail, '@') !== false) && (strpos($mail, '.') !== false) && (is_numeric($age) == 1)){
        echo "ACCESSO CONSENTITO";
    } else{
        echo "ACCESSO NEGATO";
    }
?>