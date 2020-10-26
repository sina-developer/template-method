<?php

namespace Games;

use Abstracts\Game;


class Tank extends Game{
    protected function initialize()
    {
        echo "Tank Game Initialized! Start playing.\n";
    }

    protected function startPlay()
    {
        echo "Tank Game Started. Enjoy the game!\n";
    }

    protected function endPlay()
    {
        echo "Tank Game Finished!\n";
    }
}