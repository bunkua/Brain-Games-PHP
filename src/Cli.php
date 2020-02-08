<?php

namespace BrainGames\Cli;

use function BrainGames\Cli\greeting;
use function BrainGames\Logic\playGame;
use function BrainGames\Cli\gameOver;

function run($gameName)
{
    $playerName = greeting($gameName);

    $gameResult = playGame($gameName);

    gameOver($gameResult, $playerName);
}
