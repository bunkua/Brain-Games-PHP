<?php

namespace BrainGames\Logic;

function checkAnswer(bool $isEven, string $answer)
{
    $boolAnswer = ($answer === 'yes');
    return ($isEven === $boolAnswer);
}
