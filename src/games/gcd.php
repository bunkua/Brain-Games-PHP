<?php

use function BrainGames\Cli\getPlayerAnswer;
use function BrainGames\Logic\makeNumber;
use function BrainGames\Logic\getGcdAnswer;
use function BrainGames\Logic\checkAnswer;

function playRound()
{
    $a = makeNumber();
    $b = makeNumber();

    $question = "$a $b";
    $correctAnswer = getGcdAnswer($a, $b);

    $answer = (int) getPlayerAnswer($question);

    return checkAnswer($correctAnswer, $answer);
}
