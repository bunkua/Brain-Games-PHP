<?php

namespace BrainGames\Even;

use function BrainGames\Helpers\makeNumber;
use function BrainGames\Engine\execute;

function play()
{
    $task = "Answer 'yes' if number even, otherwise answer 'no'.";
    
    $generator = function () {
        $number = makeNumber();
        $question = "$number";
        $answer = getAnswer($number);

        return [$question, $answer];
    };

    execute($task, $generator);
}

function getAnswer($number)
{
    return ($number % 2 === 0) ? 'yes' : 'no';
}
