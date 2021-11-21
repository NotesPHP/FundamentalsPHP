<?php

$fighter1 = [
    'name' => 'Blanka',
    'country' => 'Brazil',
    'descripcion' => 'amarillo y verde'
];

$fighter2 = [
    'name' => 'Chun-Li',
    'country' => 'China',
    'descripcion' => 'blanco y rojo'
];

$fighter3 = [
    'name' => 'Riu',
    'country' => 'EEUU',
    'descripcion' => 'blanco, azul y rojo'
];

$fighters = [$fighter1, $fighter2, $fighter3];

//FOR

for ($i=0; $i<sizeof($fighters); $i++) { 
    //echo $fighters[$i]['name'].PHP_EOL;
}

//FOREACH

foreach ($fighters as $fighter) {
    //echo $fighter['name']. ' ' .$fighter['country'].PHP_EOL;
}

$i = 0;

while ($i < sizeof($fighters)) {
    //echo $fighters[$i]['descripcion'].PHP_EOL;
    $i++;
}

$x = 0;

while ($fighters[$x]['name'] != 'Riu') {
    //echo $fighters[$x]['name'].PHP_EOL;
    $x++;
}



