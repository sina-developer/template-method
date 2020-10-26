<?php

namespace Games;

use Abstracts\Game;


class Mario extends Game{
    protected function initialize()
    {
        echo "Mario Game Initialized! Start playing.\n";
    }

    protected function startPlay()
    {
        echo "Mario Game Started. Enjoy the game!\n";
    }

    protected function endPlay()
    {
        echo "Mario Game Finished!\n";
    }
}