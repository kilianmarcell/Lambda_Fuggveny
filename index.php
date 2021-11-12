<?php

$fv = function() : array { //anonim/lambda fuggveny

    echo "Test";
    return [1, 2];

};

//$fv();

$t = [1, 23, 42, -4, 6, -8654, 0];

$ennelNagyobb = 10;

$ki = array_filter($t, function($elem) use($ennelNagyobb) {

    return $elem > $ennelNagyobb;

});

var_dump($ki);

$ki = array_map(function($elem) {

    return abs($elem) * 100;

}, $t);

var_dump($ki);

$ki = usort($t, function($a, $b) {

    //if ($a < $b) {
    //    
    //    return -1;
    //
    //} else if($a > $b) {
    //
    //    return 1;
    //
    //} else {
    //
    //    return 0;
    //    
    //}

    return $a - $b; 

});

var_dump($t);