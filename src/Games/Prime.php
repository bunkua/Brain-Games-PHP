<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Helpers\makeNumber;
use function BrainGames\Engine\execute;

function play()
{
    $task = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";
    
    $generate = function () {
        $question = makeNumber();
        $answer = getAnswer($question) ? 'yes' : 'no';

        return [$question, $answer];
    };

    execute($task, $generate);
}

function getAnswer($number)
{
    if ($number <= 1) {
        return false;
    }

    for ($x = 2; $x <= sqrt($number); $x++) {
        if ($number % $x == 0) {
            return false;
        }
    }

    return false;
}
