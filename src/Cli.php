<?php

namespace BrainGames\Cli;

use function BrainGames\CliMessage\greeting;
use function BrainGames\CliMessage\gameOver;
use function BrainGames\Logic\playGame;

function run($gameName)
{
    $playerName = greeting($gameName);

    $gameResult = playGame($gameName);

    gameOver($gameResult, $playerName);
}
