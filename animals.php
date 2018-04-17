<?php
    $continents = [
    'Africa' => [
          'Ceratotherium simum',
          'Loxodonta cyclotis',
          'Manis gigantea',
          'Acinonyx jubatus',
          'Equus quagga',
          'Proteles cristatus'
    ],
    'Antarctica' => [
          'Aptenodytes forsteri',
          'Lagenorhynchus cruciger',
          'Lobodon carcinophagus',
          'Caperea marginata',
          'Mirounga leonina',
          'Leptonychotes weddellii'
    ],
    'Australia' => [
          'Macropus rufus',
          'Phascolarctos cinereus',
          'Ornithorhynchus anatinus',
          'Sarcophilus harrisii',
          'Ningaui ridei',
          'Dasyurus maculatus'
    ],
    'Eurasia' => [
          'Felis silvestris',
          'Lynx pardinus',
          'Desmana moschata',
          'Ailuropoda melanoleuca',
          'Nycticebus pygmaeus',
          'Vulpes lagopus'
    ],
    'North America' => [
          'Rangifer tarandus',
          'Leopardus pardalis',
          'Oreamnos americanus',
          'Tapirus bairdii',
          'Mephitis macroura',
          'Didelphis virginiana'
    ],
    'South America' => [
          'Panthera onca',
          'Saguinus fuscicollis',
          'Vicugna pacos',
          'Zaedyus pichiy',
          'Dasypus novemcinctus',
          'Myrmecophaga tridactyla'
    ]
];
?>

<!DOCTYPE>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Latin names of animals</title>
            
        <style>
            body {
                margin: 30px 20px 20px 20px;
                text-align: center;
                font-family: sans-serif;
            }
            
            ul {
                display: inline-block;
                margin: 0;
                padding: 0;
                list-style-type: none;
            }
            
            li {
                display: inline-block;
                margin: 10px;
                padding: 20px;
                background-color: #ccffcc;
            }
        </style>
        
    </head>
    <body>

        <h1>Latin names of animals</h1>
        <ul>
            <?php foreach ($continents as $continent => $animal) { ?>

            <li>
                <?php echo "<h2>$continent</h2>";
                        for ($i = 0; $i < count($animal) - 1; $i++) {
                            echo $animal[$i], ",<br>";
                        }
                    echo end($animal), "<br>";
                ?>
            </li>
            
            <?php } ?>
        </ul>
            
    </body>
</html>