<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Helpers\makeNumber;
use function BrainGames\Engine\play;

function prepare()
{
    $task = "What number is missing in the progression?";

    $generateGameData = function () {
        $start = makeNumber(1, 100);
        $step = makeNumber(2, 20);
        $progressionLength = 10;
        $progression = makeProgression($start, $step, $progressionLength);

        $hiddenItemId = array_rand($progression);
        $answer = $progression[$hiddenItemId];
        $progression[$hiddenItemId] = '..';
        $question = implode(' ', $progression);

        return [$question, $answer];
    };

    play($task, $generateGameData);
}

function makeProgression($start, $step, $progressionLength)
{
    $result = [];
    for ($i = 0; $i < $progressionLength; $i++) {
        $item = $start + ($step * $i);
        array_push($result, $item);
    }

    return $result;
}
