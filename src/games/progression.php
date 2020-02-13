<?php

namespace BrainGames\Progression;

use function BrainGames\Helpers\makeNumber;
use function BrainGames\Engine\execute;

function play()
{
    $task = "What number is missing in the progression?";

    $generator = function () {
        $start = makeNumber(1, 100);
        $step = makeNumber(2, 20);
        $progression = makeProgression($start, $step);

        $itemHiddenId = array_rand($progression);
        $answer = getAnswer($progression, $itemHiddenId);
        $progression[$itemHiddenId] = '..';
        $question = implode(' ', $progression);

        return [$question, $answer];
    };

    execute($task, $generator);
}

function makeProgression($start = 0, $step = 1, $qty = 10)
{
    $result = [];
    for ($i = 0; $i < $qty; $i++) {
        $item = $start + ($step * $i);
        array_push($result, $item);
    }

    return $result;
}

function getAnswer($progression, $id)
{
    return $progression[$id];
}
