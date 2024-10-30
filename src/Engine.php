<?php

//namespace BrainGames\Engine;

$count = 0;

function getCount()
{
    global $count;
    return $count;
}

function addCount()
{
    global $count;
    $count++;
}