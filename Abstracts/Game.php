<?php

namespace Abstracts;

abstract class Game{
    abstract protected function initialize();
    abstract protected function startPlay();
    abstract protected function endPlay();

    public final function play()
    {
        $this->initialize();

        $this->startPlay();

        $this->endPlay();
    }
}