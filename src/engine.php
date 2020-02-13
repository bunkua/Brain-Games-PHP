<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Helpers\checkAnswer;

function execute($task, $generate)
{
    line('Welcome to the Brain Game!');
    line($task);
    $playerName = prompt('May I have your name?');
    line("Hello, %s!", $playerName);

    // Play game rounds
    $roundsLeft = 3;
    $isWinner = true;

    while ($roundsLeft > 0) {
        [$question, $answer] = $generate();

        line("Question: %s", $question);
        $playerAnswer = prompt('Answer');

        if (checkAnswer($answer, $playerAnswer)) {
            $roundsLeft--;
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $playerAnswer, $answer);
            $isWinner = false;
            break;
        }
    }

    // End game, check winner
    if ($isWinner) {
        line("Congratulations, %s", $playerName);
    } else {
        line("Let's try again, %s!", $playerName);
    }
}
