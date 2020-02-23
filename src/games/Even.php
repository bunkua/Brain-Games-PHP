<?php

namespace BrainGames\Games\Even;

use function BrainGames\Helpers\makeNumber;
use function BrainGames\Engine\execute;

function play()
{
    $task = "Answer 'yes' if number even, otherwise answer 'no'.";
    
    $generate = function () {
        $question = makeNumber();
        $answer = ($question % 2 === 0) ? 'yes' : 'no';

        return [$question, $answer];
    };

    execute($task, $generate);
}