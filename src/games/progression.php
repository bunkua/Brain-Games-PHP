<?php

use function BrainGames\CliMessage\getPlayerAnswer;
use function BrainGames\Logic\makeNumber;
use function BrainGames\Logic\checkAnswer;
use function BrainGames\Logic\makeProgression;

function playRound()
{
    $start = makeNumber(1, 100);
    $step = makeNumber(2, 20);
    $progression = makeProgression($start, $step);

    $randomElement = array_rand($progression);
    $correctAnswer = $progression[$randomElement];
    $progression[$randomElement] = '..';
    $question = implode(' ', $progression);

    $answer = (int) getPlayerAnswer($question);

    return checkAnswer($correctAnswer, $answer);
}
