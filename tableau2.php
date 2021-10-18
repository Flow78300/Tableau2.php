<?php

$movies = [
    "Les Aventurieers de l'Arche perdue" =>["Harrison Ford", "Karen Allen", "Paul Freeman"],
    "Indiana Jones et le Temple maudit" => ["Harrison Ford", "Kate Capshaw", "Ke Huy Quan"],
    "Indiana Jones et la Dernière croisade" => ["Harrison Ford", "Sean Connery", "Alison Doody"]
];

foreach ($movies as $key => $movie){
    echo "Dans le film $key, les principaux acteurs sont:" .PHP_EOL;
    foreach ($movie as $actors){
        echo $actors . ' , ' . PHP_EOL;
    }
}
?>
