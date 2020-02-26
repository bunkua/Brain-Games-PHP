<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function play($task, $generateGameData)
{
    line('Welcome to the Brain Game!');
    line($task);
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        [$question, $answer] = $generateGameData();

        line("Question: %s", $question);
        $playerAnswer = prompt('Answer');

        if ($answer == $playerAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $playerAnswer, $answer);
            line("Let's try again, %s!", $playerName);
            return;
        }
    }

    line("Congratulations, %s", $playerName);
}
