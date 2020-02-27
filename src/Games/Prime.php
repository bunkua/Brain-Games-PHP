<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Helpers\makeNumber;
use function BrainGames\Engine\play;

function prepare()
{
    $task = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";
    
    $generateGameData = function () {
        $question = makeNumber();
        $answer = isPrime($question) ? 'yes' : 'no';

        return [$question, $answer];
    };

    play($task, $generateGameData);
}

function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }

    for ($x = 2; $x <= sqrt($number); $x++) {
        if ($number % $x == 0) {
            return false;
        }
    }

    return true;
}
