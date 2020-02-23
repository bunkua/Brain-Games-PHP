<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const MAX_ROUNDS = 3;

function execute($task, $generate)
{
    line('Welcome to the Brain Game!');
    line($task);
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);

    for ($i = 0; $i < MAX_ROUNDS; $i++) {
        [$question, $answer] = $generate();

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
