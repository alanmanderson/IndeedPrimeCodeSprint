<?php
$n = 3;
$t = 1;
$a = '1 8 7';
$b = '3 9 2';

if (related($a, $b)){
    echo "YES\n";
} else {
    echo "NO\n";
}

function related($a, $b){
    $a = explode(" ", $a);
    $b = explode(" ", $b);
    $prev = -1;
    for($i=0; $i< count($a); $i++){
        $ci = minGreater($prev, $a[$i], $b[$i]);
        if ($ci === false){
            return false;
        }
        $prev = $ci;
        echo $ci;
    }
    return true;
}

function minGreater($val, $a, $b){
    if ($val > $a && $val > $b){
        return false;
    } else if ($val > $a){
        return $b;
    } else if ($val > $b){
        return $a;
    } else {
        return min($a, $b);
    }
}
