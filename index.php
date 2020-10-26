<?php

require("./autoload.php");

use Games\Mario;
use Games\Tank;

$game = new Mario();
$game->play();

$game = new Tank();
$game->play();