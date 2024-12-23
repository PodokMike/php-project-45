#!/usr/bin/env php

<?php

require_once "src/Cli.php";

use function BrainGames\Cli\greeting;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

greeting();
