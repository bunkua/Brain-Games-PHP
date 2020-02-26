<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Helpers\makeNumber;
use function BrainGames\Engine\play;

function prepare()
{
    $task = "What is the result of the expression?";

    $generateGameData = function () {
        $a = makeNumber(1, 20);
        $b = makeNumber(1, 25);
        $operation = chooseOperation();

        $question = "$a $operation $b";
        $answer = getAnswer($a, $b, $operation);

        return [$question, $answer];
    };

    play($task, $generateGameData);
}

function chooseOperation()
{
    $operations = ["+", "-", "*"];

    $operationId = array_rand($operations);

    return $operations[$operationId];
}

function getAnswer($a, $b, $operation)
{
    switch ($operation) {
        case "+":
            return $a + $b;
        case "-":
            return $a - $b;
        case "*":
            return $a * $b;
    }
}
