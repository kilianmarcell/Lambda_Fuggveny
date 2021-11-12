<?php

$fv = function() : array { //anonim/lambda fuggveny

    echo "Test";
    return [1, 2];

};

//$fv();

$t = [1, 23, 42, -4, 6, -8654, 0];

$ki = array_filter($t, function($elem) {

    return $elem % 2 === 0;

});

var_dump($ki);