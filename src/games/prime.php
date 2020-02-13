<?php

namespace BrainGames\Prime;

use function BrainGames\Helpers\makeNumber;
use function BrainGames\Engine\execute;

function play()
{
    $task = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";
    
    $generator = function () {
        $number = makeNumber();
        $answer = getAnswer($number);

        return [$number, $answer];
    };

    execute($task, $generator);
}

function getAnswer($number)
{
    for ($x = 2; $x <= sqrt($number); $x++) {
        if ($number % $x == 0) {
            return 'no';
        }
    }

    return 'yes';
}
