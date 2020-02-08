<?php

namespace BrainGames\Logic;

function checkAnswer($correctAnswer, $givenAnswer)
{
    return [$correctAnswer === $givenAnswer, $givenAnswer, $correctAnswer];
}


function makeNumber($min = 0, $max = 20)
{
    return rand($min, $max);
}

function getEvenAnswer($number)
{
    return ($number % 2 === 0) ? 'yes' : 'no';
}

function getCalcAnswer($a, $b, $operation)
{
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
    }
}

function getGcdAnswer($a, $b)
{
    $a = abs($a);
    $b = abs($b);

    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    
    return $a;
}

function getPrimeAnswer($number)
{
    for ($x = 2; $x <= sqrt($number); $x++) {
        if ($number % $x == 0) {
            return 'no';
        }
    }
    return 'yes';
}
