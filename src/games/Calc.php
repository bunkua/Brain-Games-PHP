<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Helpers\makeNumber;
use function BrainGames\Engine\execute;

function play()
{
    $task = "What is the result of the expression?";

    $generator = function () {
        $a = makeNumber(1, 20);
        $b = makeNumber(1, 25);
        $operation = chooseOperation();

        $question = "$a $operation $b";
        $answer = getAnswer($a, $b, $operation);

        return [$question, $answer];
    };

    execute($task, $generator);
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
