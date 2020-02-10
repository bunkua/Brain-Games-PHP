<?php

use function BrainGames\CliMessage\getPlayerAnswer;
use function BrainGames\Logic\makeNumber;
use function BrainGames\Logic\getEvenAnswer;
use function BrainGames\Logic\checkAnswer;

function playRound()
{
    $number = makeNumber();
    $question = "$number";
    $correctAnswer = getEvenAnswer($number);

    $answer = getPlayerAnswer($question);

    return checkAnswer($correctAnswer, $answer);
}
