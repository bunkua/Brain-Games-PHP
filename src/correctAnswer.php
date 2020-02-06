<?php

namespace BrainGames\Logic;

function correctAnswer(bool $isEven)
{
    switch ($isEven) {
        case 0:
            return 'no';
        case 1:
            return 'yes';
    }
}
