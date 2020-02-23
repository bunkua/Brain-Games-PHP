<?php

namespace BrainGames\Games\Gcd;

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
    if ($a == $b) {
        return $a;
    }

    $border = (int) max([$a, $b]);

    for ($i = $border; $i > 1; $i -= 1) {
        if ($a % $i == 0 && $b % $i == 0) {
            return $i;
        }
    }

    return 1;
}
