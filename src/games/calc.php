<?php

use function BrainGames\CliMessage\getPlayerAnswer;
use function BrainGames\Logic\makeNumber;
use function BrainGames\Logic\getCalcAnswer;
use function BrainGames\Logic\checkAnswer;

function playRound()
{
    $a = makeNumber();
    $b = makeNumber();

    $operations = ['+', '-', '*'];
    $operation = array_rand($operations);
    $chosenOperation = $operations[$operation];

    $question = "$a $chosenOperation $b";
    $correctAnswer = getCalcAnswer($a, $b, $chosenOperation);

    $answer = (int) getPlayerAnswer($question);

    return checkAnswer($correctAnswer, $answer);
}
