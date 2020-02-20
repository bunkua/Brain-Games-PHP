<?php

namespace BrainGames\Games\Even;

use function BrainGames\Helpers\makeNumber;
use function BrainGames\Engine\execute;

function play()
{
    $task = "Answer 'yes' if number even, otherwise answer 'no'.";
    
    $generate = function () {
        $number = makeNumber();
        $answer = ($number % 2 === 0) ? 'yes' : 'no';

        return [(string) $number, $answer];
    };

    execute($task, $generate);
}
