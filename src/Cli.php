<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;
use function BrainGames\Logic\playGame;

function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $result = playGame();
    
    if (!$result) {
        line("Let's try again, %s!", $name);
    } else {
        line("Congratulations, %s!", $name);
    }
}
