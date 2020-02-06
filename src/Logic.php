<?php

namespace BrainGames\Logic;

function checkAnswer(bool $isEven, string $answer)
{
    $boolAnswer = ($answer === 'yes');
    return ($isEven === $boolAnswer);
}

function correctAnswer(bool $isEven)
{
    switch ($isEven) {
        case 0:
            return 'no';
        case 1:
            return 'yes';
    }
}

function isEven($number)
{
    return ($number % 2 === 0);
}

function makeNumber()
{
    return rand(0, 100);
}
