<?php

namespace BrainGames\Gcd;

use function BrainGames\Helpers\makeNumber;
use function BrainGames\Engine\execute;

function play()
{
    $task = "Find the greatest common divisor of given numbers.";

    $generator = function () {
        $a = makeNumber();
        $b = makeNumber();
        $question = "$a and $b";
        $answer = getAnswer($a, $b);

        return [$question, $answer];
    };

    execute($task, $generator);
}

function getAnswer($a, $b)
{
    $a = abs($a);
    $b = abs($b);

    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        } else {
            $b -= $a;
        }
    }
    
    return $a;
}
