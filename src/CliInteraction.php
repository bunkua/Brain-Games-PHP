<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function greeting($gameName)
{
    line('Welcome to the Brain Game!');

    switch ($gameName) {
        case 'even':
            line('Answer "yes" if the number is even, otherwise answer "no".');
            break;
        case 'calc':
            line('What is the result of the expression?');
            break;
        case 'gcd':
            line('Find the greatest common divisor of given numbers.');
            break;
    }

    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    return $name;
}

function getPlayerAnswer(string $question)
{
    line("Question: $question");
    return prompt('Your answer');
}

function gameOver($result, $playerName)
{
    if ($result) {
        line("Congratulations, %s!", $playerName);
    } else {
        line("Let's try again, %s!", $playerName);
    }
}
