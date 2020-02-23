<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Helpers\makeNumber;
use function BrainGames\Engine\execute;

function play()
{
    $task = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";
    
    $generator = function () {
        $number = makeNumber();
        $answer = getAnswer($number) ? 'yes' : 'no';

        return [$number, $answer];
    };

    execute($task, $generator);
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
