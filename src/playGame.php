<?php

namespace BrainGames\Logic;

use function cli\line;

function playGame($gameName)
{
    require_once("games/$gameName.php");

    $attemptsLeft = 3;

    while ($attemptsLeft > 0) {
        [$isCorrect, $givenAnswer, $correctAnswer] = playRound();

        if ($isCorrect) {
            line('Correct!');
            $attemptsLeft--;
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $givenAnswer, $correctAnswer);
            break;
        }
    }

    return ($attemptsLeft === 0);
}
