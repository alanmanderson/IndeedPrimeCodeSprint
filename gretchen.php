<?php

$m = 5;
$n = 5;
$q = 6;

$assignments = [0, 1, 2, 3, 4];

$actions = [
    '2 2',
    '1 0 2',
    '2 2',
    '2 1',
    '1 3 1',
    '2 2'
];



echo countLessThan($assignments, $m, 2);


function assign($n, $m, &$assignments){
    $assignments[$n] = $m;
}

function countLessThan($assignments, $m, $p){
    $actors = 0;
    $actorsPerScene = array_count_values($assignments);
    $scenesLessThan = 0;
    for($i=0; $i<$m; $i++){
        if (!isset($actorsPerScene[$i]) || $actorsPerScene[$i] < $p){
            $scenesLessThan++;
        }
    }
    return $scenesLessThan;
}
