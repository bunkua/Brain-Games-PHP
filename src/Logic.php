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
