<?php

namespace BrainGames\Logic;

use function cli\line;
use function cli\prompt;
use function BrainGames\Logic\makeNumber;
use function BrainGames\Logic\isEven;
use function BrainGames\Logic\checkAnswer;
use function BrainGames\Logic\correctAnswer;

function playGame()
{
    $attemptsLeft = 3;

    while ($attemptsLeft > 0) {
        $number = makeNumber();
        $isEven = isEven($number);
        
        line("Question: %s", $number);
        $answer = prompt('Your answer: ');

        if (checkAnswer($isEven, $answer)) {
            line('Correct!');
            $attemptsLeft--;
        } else {
            $correctAnswer = correctAnswer($isEven);
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            break;
        }
    }

    return ($attemptsLeft === 0);
}
