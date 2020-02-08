<?php

use function BrainGames\Cli\getPlayerAnswer;
use function BrainGames\Logic\makeNumber;
use function BrainGames\Logic\checkAnswer;
use function BrainGames\Logic\getPrimeAnswer;

function playRound()
{
    $number = makeNumber(1, 1000);
    $correctAnswer = getPrimeAnswer($number);

    $answer = getPlayerAnswer($number);

    return checkAnswer($correctAnswer, $answer);
}
