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

function makeProgression($start = 0, $step = 1, $qty = 10)
{
    $result = [];
    for ($i = 0; $i < $qty; $i++) {
        $item = $start + ($step * $i);
        array_push($result, $item);
    }

    return $result;
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
