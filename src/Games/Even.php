<?php

namespace BrainGames\Games\Even;

use function BrainGames\Helpers\makeNumber;
use function BrainGames\Engine\play;

function prepare()
{
    $task = "Answer 'yes' if number even, otherwise answer 'no'.";
    
    $generateGameData = function () {
        $question = makeNumber();
        $answer = ($question % 2 === 0) ? 'yes' : 'no';

        return [$question, $answer];
    };

    play($task, $generateGameData);
}
