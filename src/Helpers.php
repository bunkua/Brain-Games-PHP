<?php

namespace BrainGames\Helpers;

function checkAnswer($correctAnswer, $givenAnswer)
{
    return ($correctAnswer == $givenAnswer);
}


function makeNumber($min = 0, $max = 20)
{
    return rand($min, $max);
}
